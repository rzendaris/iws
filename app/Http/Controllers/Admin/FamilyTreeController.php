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

class FamilyTreeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function FamilyTreeInit(Request $request)
    {
        if (isset($request->submit)){
            $member = $this->searchEngine($request);
        } else {
            $member = Member::where('status', 1)->get();
        }
        $no = 1;
        foreach($member as $data){
            $data->no = $no;
            $no++;
        }
        $province = Province::where('status', 1)->orderBy('name', 'asc')->get();
        $city = City::where('status', 1)->orderBy('name', 'asc')->get();
        $title_adat = TitleAdat::where('status', 1)->orderBy('name', 'asc')->get();
        $member_status = MemberStatus::orderBy('id', 'asc')->get();
        $ethnic = Ethnic::where('status', 1)->orderBy('name', 'asc')->get();
        $job = Job::where('status', 1)->orderBy('name', 'asc')->get();
        $marital = Marital::orderBy('id', 'asc')->get();
        $data = array(
            'member' => $member,
            'province' => $province,
            'city' => $city,
            'marital' => $marital,
            'ethnic' => $ethnic,
            'title_adat' => $title_adat,
            'member_status' => $member_status,
            'job' => $job
        );

        return view('m-family-tree/list-family-tree')->with('data', $data);
    }

    public function FamilyTreeDetail($member_id)
    {
        $family_member = FamilyMember::where('member_id', $member_id)->orderBy('member_id', 'asc')->first();

        $member = FamilyMember::with(['member_belongs' => function ($query) {
            $query->where('status', 1);
        }])->where('family_id', $family_member->family_id)->get();

        $family = Family::where('id', $family_member->family_id)->first();

        $data = array(
            'family' => $family,
            'family_member' => $member
        );

        return view('m-family-tree/detail-family-tree')->with('data', $data);
    }

    protected function searchEngine($request){
        $member = Member::where('status', 1);
        if (isset($request->province_id)){
            $member = $member->where('province_id', $request->province_id);
        }
        if (isset($request->city_id)){
            $member = $member->where('city_id', $request->city_id);
        }
        if (isset($request->member_status_id)){
            $member = $member->where('member_status_id', $request->member_status_id);
        }
        if (isset($request->marital_id)){
            $member = $member->where('marital_id', $request->marital_id);
        }
        if (isset($request->ethnic_id)){
            $member = $member->where('ethnic_id', $request->ethnic_id);
        }
        if (isset($request->is_life)){
            $member = $member->where('is_life', $request->is_life);
        }
        if (isset($request->title_adat_id)){
            $member = $member->where('title_adat_id', $request->title_adat_id);
        }
        if (isset($request->job_id)){
            $member = $member->where('job_id', $request->job_id);
        }

        $return = $member->get();
        return $return;
    }
}