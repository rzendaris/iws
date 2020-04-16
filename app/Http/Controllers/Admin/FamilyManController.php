<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Storage;

use App\User;
use App\Model\Tables\Family;
use App\Model\Tables\FamilyMember;
use App\Model\Tables\Member;
use App\Model\Tables\Province;
use App\Model\Tables\City;
use App\Model\Tables\District;
use App\Model\Tables\Village;
use App\Model\Tables\Marital;
use App\Model\Tables\Religion;
use App\Model\Tables\Education;
use App\Model\Tables\Job;
use App\Model\Tables\Ethnic;
use App\Model\Tables\TitleAdat;
use App\Model\Tables\MemberStatus;

class FamilyManController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function FamilyManInit()
    {
        $family = Family::where('status', 1)->orderBy('family_no', 'asc')->get();
        $no = 1;
        foreach($family as $data){
            $member = FamilyMember::with(['member_belongs' => function ($query) {
                $query->where('member_status_id', 1);
            }])->where('family_id', $data->id)->first();
            $data->no = $no;
            if(isset($member)){
                $data->kepala_keluarga = $member->member_belongs->full_name;
            } else {
                $data->kepala_keluarga = "Kepala Keluarga tidak terdaftar!";
            }
            $no++;
        }
        $data = array(
            'family' => $family
        );
        return view('m-family-mgmt/list-family-mgmt')->with('data', $data);
    }

    public function FamilyManAdd()
    {
        $province = Province::where('status', 1)->orderBy('name', 'asc')->get();
        $city = City::where('status', 1)->orderBy('name', 'asc')->get();
        $district = District::where('status', 1)->orderBy('name', 'asc')->get();
        $village = Village::where('status', 1)->orderBy('name', 'asc')->get();
        $marital = Marital::orderBy('id', 'asc')->get();
        $religion = Religion::orderBy('id', 'asc')->get();
        $education = Education::orderBy('id', 'asc')->get();
        $ethnic = Ethnic::where('status', 1)->orderBy('name', 'asc')->get();
        $title_adat = TitleAdat::where('status', 1)->orderBy('name', 'asc')->get();
        $member_status = MemberStatus::orderBy('id', 'asc')->get();
        $job = Job::where('status', 1)->orderBy('name', 'asc')->get();
        $data = array(
            'province' => $province,
            'city' => $city,
            'district' => $district,
            'village' => $village,
            'marital' => $marital,
            'religion' => $religion,
            'education' => $education,
            'ethnic' => $ethnic,
            'title_adat' => $title_adat,
            'member_status' => $member_status,
            'job' => $job
        );
        return view('m-family-mgmt/add-family-mgmt')->with('data', $data);
    }

    public function FamilyManInsert(Request $request)
    {
        $family = Family::where('family_no', $request->family_no)->first();
        if(empty($family)){
            $photo_master = $request->file('photo_master');
            $photo = $request->file('photo');
            $family = Family::create([
                'family_no' => $request->family_no,
                'inherit_no' => $request->inherit_no,
                'address' => $request->address_master,
                'province_id' => $request->province_id_master,
                'city_id' => $request->city_id_master,
                'district_id' => $request->district_id_master,
                'village_id' => $request->village_id_master,
                'post_code' => $request->post_code,
                'photo' => $request->family_no.".".$photo_master->getClientOriginalExtension(),
                'tlp_no' => $request->tlp_no,
                'created_by' => Auth::user()->email,
                'status' => 1,
            ]);

            $member = Member::create([
                'full_name' => $request->full_name,
                'sur_name' => $request->sur_name,
                'nik' => $request->nik,
                'birthday' => $request->birthday,
                'religion_id' => $request->religion_id,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'district_id' => $request->district_id,
                'village_id' => $request->village_id,
                'education_id' => $request->education_id,
                'job_id' => $request->job_id,
                'marital_id' => $request->marital_id,
                'ethnic_id' => $request->ethnic_id,
                'title_adat_id' => $request->title_adat_id,
                'school_name' => $request->school_name,
                'graduation_year' => $request->graduation_year,
                'member_status_id' => $request->member_status_id,
                'instance_name' => $request->instance_name,
                'is_life' => $request->is_life,
                'gender_status' => $request->gender_status,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'photo' => $request->nik.".".$photo->getClientOriginalExtension(),
                'created_by' => Auth::user()->email,
                'status' => 1,
            ]);

            FamilyMember::create([
                "family_id" => $family->id,
                "member_id" => $member->id,
            ]);

            $request->file('photo')->move(public_path("/photo/member"), $member->nik.".".$photo->getClientOriginalExtension());
            $request->file('photo_master')->move(public_path("/photo/kk"), $request->family_no.".".$photo_master->getClientOriginalExtension());
            return redirect('family-management')->with('suc_message', 'Data baru berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('err_message', 'No KK telah terdaftar!');
        }
    }
    
    public function FamilyManEdit($family_id)
    {
        $family = Family::where('id', $family_id)
            ->where('status', 1)
            ->with([
                'family_member', 
                'family_member.member_belongs' => function ($query) {
                    $query->where('status', 1);
                },
                'family_member.member_belongs.member_status', 
                'family_member.member_belongs.ethnic'
                ])
            ->first();
        $no = 1;
        $status_head_family = 0;
        foreach($family->family_member as $data){
            if (isset($data->member_belongs)){
                if ($data->member_belongs->member_status_id == 1){
                    $status_head_family = 1;
                }
                $data->no = $no;
                $no++;
            }
        }
        
        $province = Province::where('status', 1)->orderBy('name', 'asc')->get();
        $city = City::where('status', 1)->orderBy('name', 'asc')->get();
        $district = District::where('status', 1)->orderBy('name', 'asc')->get();
        $village = Village::where('status', 1)->orderBy('name', 'asc')->get();
        $marital = Marital::orderBy('id', 'asc')->get();
        $religion = Religion::orderBy('id', 'asc')->get();
        $education = Education::orderBy('id', 'asc')->get();
        $ethnic = Ethnic::where('status', 1)->orderBy('name', 'asc')->get();
        $title_adat = TitleAdat::where('status', 1)->orderBy('name', 'asc')->get();
        $member_status = MemberStatus::where('id', '!=', $status_head_family)->orderBy('id', 'asc')->get();
        $job = Job::where('status', 1)->orderBy('name', 'asc')->get();

        $data = array(
            'family' => $family,
            'province' => $province,
            'city' => $city,
            'district' => $district,
            'village' => $village,
            'marital' => $marital,
            'religion' => $religion,
            'education' => $education,
            'ethnic' => $ethnic,
            'title_adat' => $title_adat,
            'member_status' => $member_status,
            'job' => $job
        );
        return view('m-family-mgmt/update-family-mgmt')->with('data', $data);
    }

    public function ProvinceUpdate(Request $request)
    {
        $province = Province::where('id', $request->id)->first();
        if(!empty($province)){
            Province::where('id', $request->id)
              ->update([
                  'name' => $request->name,
                  'updated_by' => Auth::user()->email,
                  ]
                );
            return redirect('province-fe')->with('suc_message', 'Data telah diperbarui!');
        } else {
            return redirect()->back()->with('err_message', 'Data tidak ditemukan!');
        }
    }

    public function FamilyManDelete(Request $request)
    {
        $family = Family::where('id', $request->id)->first();
        if(!empty($family)){
            Family::where('id', $request->id)->update(['status' => 0]);
            return redirect('family-management')->with('suc_message', 'Data telah dihapus!');
        } else {
            return redirect()->back()->with('err_message', 'Data tidak ditemukan!');
        }
    }

    public function FamilyMemberInsert(Request $request)
    {
        $family = Family::where('id', $request->family_id)->first();
        if(!empty($family)){
            $photo = $request->file('photo');
            $member = Member::create([
                'full_name' => $request->full_name,
                'sur_name' => $request->sur_name,
                'nik' => $request->nik,
                'birthday' => $request->birthday,
                'religion_id' => $request->religion_id,
                'province_id' => $request->province_id,
                'city_id' => $request->city_id,
                'district_id' => $request->district_id,
                'village_id' => $request->village_id,
                'education_id' => $request->education_id,
                'job_id' => $request->job_id,
                'marital_id' => $request->marital_id,
                'ethnic_id' => $request->ethnic_id,
                'title_adat_id' => $request->title_adat_id,
                'school_name' => $request->school_name,
                'graduation_year' => $request->graduation_year,
                'member_status_id' => $request->member_status_id,
                'instance_name' => $request->instance_name,
                'is_life' => $request->is_life,
                'gender_status' => $request->gender_status,
                'address' => $request->address,
                'phone_number' => $request->phone_number,
                'photo' => $request->nik.".".$photo->getClientOriginalExtension(),
                'created_by' => Auth::user()->email,
                'status' => 1,
            ]);

            FamilyMember::create([
                "family_id" => $family->id,
                "member_id" => $member->id,
            ]);
            $request->file('photo')->move(public_path("/photo/member"), $member->nik.".".$photo->getClientOriginalExtension());
            return redirect('family-management/edit/'.$family->id)->with('suc_message', 'Data baru berhasil ditambahkan!');
        } else {
            return redirect()->back()->with('err_message', 'Data Keluarga Tidak Ditemukan!');
        }
    }

    public function FamilyMemberDelete(Request $request)
    {
        $member = Member::where('id', $request->id)->first();
        if(!empty($member)){
            Member::where('id', $request->id)->update(['status' => 0]);
            return redirect('family-management/edit/'.$request->family_id)->with('suc_message', 'Data telah dihapus!');
        } else {
            return redirect()->back()->with('err_message', 'Data tidak ditemukan!');
        }
    }

    public function FamilyMemberEditView($family_id, $member_id)
    {
        $family = Family::where('id', $family_id)
            ->where('status', 1)
            ->with([
                'family_member', 
                'family_member.member_belongs' => function ($query) {
                    $query->where('status', 1);
                },
                'family_member.member_belongs.member_status', 
                'family_member.member_belongs.ethnic'
                ])
            ->first();
        if(!empty($family)){
            $member = Member::where('id', $member_id)->first();
            if(!empty($member)){
                $status_head_family = 0;
                foreach($family->family_member as $data){
                    if (isset($data->member_belongs) && $member->member_status_id != 1){
                        if ($data->member_belongs->member_status_id == 1){
                            $status_head_family = 1;
                        }
                    }
                }
                $province = Province::where('status', 1)->orderBy('name', 'asc')->get();
                $city = City::where('status', 1)->orderBy('name', 'asc')->get();
                $district = District::where('status', 1)->orderBy('name', 'asc')->get();
                $village = Village::where('status', 1)->orderBy('name', 'asc')->get();
                $marital = Marital::orderBy('id', 'asc')->get();
                $religion = Religion::orderBy('id', 'asc')->get();
                $education = Education::orderBy('id', 'asc')->get();
                $ethnic = Ethnic::where('status', 1)->orderBy('name', 'asc')->get();
                $title_adat = TitleAdat::where('status', 1)->orderBy('name', 'asc')->get();
                $member_status = MemberStatus::where('id', '!=', $status_head_family)->orderBy('id', 'asc')->get();
                $job = Job::where('status', 1)->orderBy('name', 'asc')->get();

                $data = array(
                    'family_id' => $family->id,
                    'member' => $member,
                    'province' => $province,
                    'city' => $city,
                    'district' => $district,
                    'village' => $village,
                    'marital' => $marital,
                    'religion' => $religion,
                    'education' => $education,
                    'ethnic' => $ethnic,
                    'title_adat' => $title_adat,
                    'member_status' => $member_status,
                    'job' => $job
                );
                return view('m-family-mgmt/update-family-member-mgmt')->with('data', $data);
            } else {
                return redirect('family-management/edit/'.$family->id)->with('err_message', 'Data Daftar Anggota tidak ditemukan!');
            }
        } else {
            return redirect('family-management')->with('err_message', 'Data Keluarga tidak ditemukan!');
        }
    }

    public function FamilyMemberUpdate(Request $request)
    {
        $member = Member::where('id', $request->id)->first();
        if(!empty($member)){
            Member::where('id', $member->id)
              ->update([
                    'full_name' => $request->full_name,
                    'sur_name' => $request->sur_name,
                    'nik' => $request->nik,
                    'birthday' => $request->birthday,
                    'religion_id' => $request->religion_id,
                    'province_id' => $request->province_id,
                    'city_id' => $request->city_id,
                    'district_id' => $request->district_id,
                    'village_id' => $request->village_id,
                    'education_id' => $request->education_id,
                    'job_id' => $request->job_id,
                    'marital_id' => $request->marital_id,
                    'ethnic_id' => $request->ethnic_id,
                    'title_adat_id' => $request->title_adat_id,
                    'school_name' => $request->school_name,
                    'graduation_year' => $request->graduation_year,
                    'member_status_id' => $request->member_status_id,
                    'instance_name' => $request->instance_name,
                    'is_life' => $request->is_life,
                    'gender_status' => $request->gender_status,
                    'address' => $request->address,
                    'phone_number' => $request->phone_number,
                    'updated_by' => Auth::user()->email,
                ]);

                $photo = $request->file('photo');
                if (isset($photo)){
                    Member::where('id', $member->id)
                    ->update([
                            'photo' => $request->nik.".".$photo->getClientOriginalExtension()
                        ]);
                    $request->file('photo')->move(public_path("/photo/member"), $member->nik.".".$photo->getClientOriginalExtension());
                }
            return redirect('family-management/edit/'.$request->family_id)->with('suc_message', 'Data telah Diperbarui!');
        } else {
            return redirect()->back()->with('err_message', 'Data tidak ditemukan!');
        }
    }
}