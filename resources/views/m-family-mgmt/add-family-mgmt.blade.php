@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<!-- Style For Cropping -->
<link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet" type="text/css" />
<style rel="stylesheet" type="text/css">
.page-foto-keluarga , .page-foto-diri {margin: 1em auto;max-width: 768px;display: flex;align-items: flex-start;flex-wrap: wrap;height: 100%;background: #7d7d7d;}.hide {display: none;}img {max-width: 100%;}
</style>
<!-- Style For Cropping -->

<div class="content-body-white">
    <form method="post" action="{{url('family-management/insert')}}" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="page-head">
            <div class="page-title">
                <h1>Tambahkan Keluarga</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            @if(session()->has('err_message'))
                <div class="alert alert-danger alert-dismissible" role="alert" auto-close="10000">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session()->get('err_message') }}
                </div>
            @endif
            @if(session()->has('suc_message'))
                <div class="alert alert-success alert-dismissible" role="alert" auto-close="10000">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    {{ session()->get('suc_message') }}
                </div>
            @endif
                <div class="box-pencarian-family-tree">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">No KK :*</label>
                                <input type="tel" name="family_no" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kota / Kabupaten :*</label>
                                <select name="city_id_master" id="city-selected-master" class="custom-select form-control" disabled required>
                                    <option value="">Pilih Kota / Kabupaten</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kode POS :*</label>
                                <input type="tel" name="post_code" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">No Telp :</label>
                                <input type="tel" name="tlp_no" class="form-control" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">No KK Induk :</label>
                                <input type="tel" name="inherit_no" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kecamatan :*</label>
                                <select name="district_id_master" id="district-selected-master" class="custom-select form-control" disabled required>
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Alamat :*</label>
                                <textarea type="text" name="address_master" class="form-control" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">Provinsi :*</label>
                                <select name="province_id_master" id="province-selected-master" class="custom-select form-control" required>
                                    <option value="">Pilih Provinsi</option>
                                    @foreach($data['province'] as $province)
                                        <option value="{{ $province->id }}">{{ $province->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kelurahan / Desa :*</label>
                                <select name="village_id_master" id="village-selected-master" class="custom-select form-control" disabled required>
                                    <option value="">Pilih Kelurahan / Desa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Foto Keluarga :</label>
                                <div class="img-result-foto-keluarga">
                                    <img id="blah"  class="cropped-foto-keluarga" style="margin-bottom:5px;border:solid 1px #c2cad8;" width="140" height="90" src="{{ asset('assets/global/img/no-profile.jpg') }}" />
                                </div>                                    
                                <input id="upload-img" name="photo_master_text" type="file" value="" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                <!-- Data Diagonal Dan Posisi -->
                                <input id="data-satu" name="data_diagonal" type="hidden" value='' />
                                <input id="data-dua" name="data_posisi" type="hidden" value='' />
                                <!-- Data Diagonal Dan Posisi -->
                                <main class="page-foto-keluarga">
                                    <div class="box-2-foto-keluarga">
                                        <div class="result-foto-keluarga"></div>
                                    </div>
                                    <div class="options-foto-keluarga hide" style="display:none;">
                                        <input type="number" class="img-w-foto-keluarga" value="300" min="100" max="1200" />
                                    </div>
                                    <button class="btn btn-success save-foto-keluarga hide" style=" width: 100%; ">Save Crop</button>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-head">
            <div class="page-title">
                <h1>Tambahkan Kepala Keluarga</h1>
            </div>
        </div>
        <div class="wrapper">
            <div class="row">
                <div class="col-md-12 element">
                    <div class="box-pencarian-family-tree" style=" background: #fff; ">
                        <div class="row">
                            <div class="col-xl-4 col-md-4 m-b-10px">
                                <div class="form-group">
                                    <label class="form-control-label">NIK :*</label>
                                    <input type="tel" name="nik" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tanggal Lahir :*</label>
                                    <input type="date" name="birthday" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Kecamatan :*</label>
                                    <select name="district_id" id="district-selected" class="custom-select form-control" disabled required>
                                        <option value="">Pilih Kecamatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Jenis Pekerjaan :</label>
                                    <select name="job_id" class="custom-select form-control">
                                        <option value="">Pilih Jenis Pekerjaan</option>
                                        @foreach($data['job'] as $job)
                                            <option value="{{ $job->id }}">{{ $job->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Pendidikan Terakhir :</label>
                                    <select name="education_id" class="custom-select form-control">
                                        <option value="">Pilih Pendidikan Terakhir</option>
                                        @foreach($data['education'] as $education)
                                            <option value="{{ $education->id }}">{{ $education->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Suku :</label>
                                    <select name="ethnic_id" class="custom-select form-control">
                                        <option value="">Pilih Suku</option>
                                        @foreach($data['ethnic'] as $ethnic)
                                            <option value="{{ $ethnic->id }}">{{ $ethnic->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Alamat :</label>
                                    <textarea type="text" name="address" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 m-b-10px">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Lengkap :*</label>
                                    <input type="text" name="full_name" class="form-control" required/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Provinsi :*</label>
                                    <select name="province_id" id="province-selected" class="custom-select form-control" required>
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($data['province'] as $province)
                                            <option value="{{ $province->id }}">{{ $province->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Kelurahan / Desa :*</label>
                                    <select name="village_id" id="village-selected" class="custom-select form-control" disabled required>
                                        <option value="">Pilih Kelurahan / Desa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Instansi/Usaha :</label>
                                    <input type="text" name="instance_name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Nama Sekolah Terakhir :</label>
                                    <input type="text" name="school_name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Gelar Adat :</label>
                                    <select name="title_adat_id" class="custom-select form-control">
                                        <option value="">Pilih Gelar Adat</option>
                                        @foreach($data['title_adat'] as $title_adat)
                                            <option value="{{ $title_adat->id }}">{{ $title_adat->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Foto Diri :</label><br>
                                    <div class="img-result-foto-diri">
                                        <img id="blah2"  class="cropped-foto-diri" style="margin-bottom:5px;border:solid 1px #c2cad8;" width="140" height="90" src="{{ asset('assets/global/img/no-profile.jpg') }}" />
                                    </div>                                    
                                    <input id="upload-img-2" name="photo_text" type="file" value="" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                                    <!-- Data Diagonal Dan Posisi -->
                                    <input id="data-tiga" name="data_diagonal_diri" type="hidden" value='' />
                                    <input id="data-empat" name="data_posisi_diri" type="hidden" value='' />
                                    <!-- Data Diagonal Dan Posisi -->
                                    <main class="page-foto-diri">
                                        <div class="box-2-foto-diri">
                                            <div class="result-foto-diri"></div>
                                        </div>
                                        <div class="options-foto-diri hide" style="display:none;">
                                            <input type="number" class="img-w-foto-diri" value="300" min="100" max="1200" />
                                        </div>
                                        <button class="btn btn-success save-foto-diri hide" style=" width: 100%; ">Save Crop</button>
                                    </main>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-4 m-b-10px">
                                <div class="form-group">
                                    <label class="form-control-label">Nama Panggilan :</label>
                                    <input type="text" name="sur_name" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Kota / Kabupaten :*</label>
                                    <select name="city_id" id="city-selected" class="custom-select form-control" disabled required>
                                        <option value="">Pilih Kota / Kabupaten</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Status Hidup :*</label>
                                    <select name="is_life" class="custom-select form-control" required>
                                        <option value="">Pilih Status Hidup</option>
                                        <option value="1">Hidup</option>
                                        <option value="0">Meninggal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Jenis Kelamin :*</label>
                                    <select name="gender_status" class="custom-select form-control" required>
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Status Pernikahan :*</label>
                                    <select name="marital_id" class="custom-select form-control" required>
                                        <option value="">Pilih Status Pernikahan</option>
                                        @foreach($data['marital'] as $marital)
                                            <option value="{{ $marital->id }}">{{ $marital->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Tahun Kelulusan :</label>
                                    <input type="tel" name="graduation_year" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">No Telepon :</label>
                                    <input type="tel" name="phone_number" class="form-control"/>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Status Anggota Keluarga :*</label>
                                    <select name="member_status_id" class="custom-select form-control" required>
                                        <option value="">Pilih Status Anggota Keluarga</option>
                                        @foreach($data['member_status'] as $member_status)
                                            <option value="{{ $member_status->id }}">{{ $member_status->name }}</option>
                                        @endforeach
                                    </select>
                                </div>               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Clone In This Div -->
                <div class="results"></div>
                <!-- Clone In This Div -->
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12 m-b-10px text-right">
                    <input id="upload-img-master-text" name="" type="hidden">
                    <input id="upload-img-text" name="" type="hidden">
                    <a href="{{ url('family-management') }}" class="btn btn-primary pull-left">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection

@section('myscript')

    <script src="{{ asset('assets/global/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/add-family.js') }}"></script>
    <script src="{{ asset('js/cropper.min.js') }}"></script>
    <script>
        $('[type=tel]').on('change', function(e) {
            $(e.target).val($(e.target).val().replace(/[^\d\.]/g, ''))
        });
        $('[type=tel]').on('keypress', function(e) {
            keys = ['0','1','2','3','4','5','6','7','8','9','.']
            return keys.indexOf(event.key) > -1
        });

        // FOTO KELUARGA
        // =============
        let resultA = document.querySelector('.result-foto-keluarga'),
        img_resultA = document.querySelector('.img-result-foto-keluarga'),
        croppedA = document.querySelector('.cropped-foto-keluarga'),
        cropperA = '';
        document.querySelector('#upload-img').addEventListener('change', (e) => {
        if (e.target.files.length) {
            const readerA = new FileReader();
            readerA.onload = (e)=> {
            if(e.target.result){
                let imgA = document.createElement('img');
                imgA.id = 'image';
                imgA.src = e.target.result;
                resultA.innerHTML = '';
                resultA.appendChild(imgA);
                document.querySelector('.save-foto-keluarga').classList.remove('hide');
                document.querySelector('.options-foto-keluarga').classList.remove('hide');
                cropperA = new Cropper(imgA);
            }
            };
            readerA.readAsDataURL(e.target.files[0]);
        }
        });
        // save crop on click
        document.querySelector('.save-foto-keluarga').addEventListener('click',(e)=>{
            e.preventDefault();
            let imgSrcA = cropperA.getCroppedCanvas({
            }).toDataURL();
            croppedA.src = imgSrcA;
            // Ganti Value Input=File Foto Keluarga
            // $('#upload-img').attr("value", imgSrcA);
            $('#upload-img-master-text').val(imgSrcA);
            document.querySelector('#data-satu').value = JSON.stringify( cropperA.getData() );
            document.querySelector('#data-dua').value = JSON.stringify( cropperA.getCanvasData() );
        });
        // =============
        // FOTO KELUARGA


        // FOTO DIRI
        // =============
        let resultB = document.querySelector('.result-foto-diri'),
        img_resultB = document.querySelector('.img-result-foto-diri'),
        croppedB = document.querySelector('.cropped-foto-diri'),
        cropperB = '';
        document.querySelector('#upload-img-2').addEventListener('change', (e) => {
        if (e.target.files.length) {
            const readerB = new FileReader();
            readerB.onload = (e)=> {
            if(e.target.result){
                let imgB = document.createElement('img');
                imgB.id = 'image';
                imgB.src = e.target.result;
                resultB.innerHTML = '';
                resultB.appendChild(imgB);
                document.querySelector('.save-foto-diri').classList.remove('hide');
                document.querySelector('.options-foto-diri').classList.remove('hide');
                cropperB = new Cropper(imgB);
            }
            };
            readerB.readAsDataURL(e.target.files[0]);
        }
        });
        // save crop on click
        document.querySelector('.save-foto-diri').addEventListener('click',(e)=>{
            e.preventDefault();
            let imgSrcB = cropperB.getCroppedCanvas({
            }).toDataURL();
            croppedB.src = imgSrcB;
            // Ganti Value Input=File Foto Diri
            // $('#upload-img-2').attr("value", imgSrcB);
            $('#upload-img-text').val(imgSrcB);
            document.querySelector('#data-tiga').value = JSON.stringify( cropperB.getData() );
            document.querySelector('#data-empat').value = JSON.stringify( cropperB.getCanvasData() );
        });
        // =============
        // FOTO DIRI
    </script>
@endsection