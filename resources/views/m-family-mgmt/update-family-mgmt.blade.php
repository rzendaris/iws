@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="content-body-white">
    <div class="page-head">
        <div class="page-title">
            <h1>Edit Family</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box-pencarian-family-tree">
                <div class="row">
                    <div class="col-xl-4 col-md-4 m-b-10px">
                        <div class="form-group">
                            <label class="form-control-label">No KK :</label>
                            <input type="text" name="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Kota / Kabupaten :</label>
                            <select name="" class="custom-select form-control">
                                <option value="">Pilih Status Pernikahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Kode POS :</label>
                            <input type="text" name="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">No Telp :</label>
                            <input type="text" name="" class="form-control" />
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 m-b-10px">
                        <div class="form-group">
                            <label class="form-control-label">No KK Induk :</label>
                            <input type="text" name="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Kecamatan :</label>
                            <input type="text" name="" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Alamat :</label>
                            <textarea type="text" name="" class="form-control" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 m-b-10px">
                        <div class="form-group">
                            <label class="form-control-label">Provinsi :</label>
                            <select name="" class="custom-select form-control">
                                <option value="">Pilih Status Pernikahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Kelurahan / Desa :</label>
                            <select name="" class="custom-select form-control">
                                <option value="">Pilih Status Pernikahan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Foto Keluarga :</label><br>
                            <img id="blah" alt="your image" width="90" height="90" /><br>
                            <input id="upload-img" type="file" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="row">
            <div class="col-md-12 element">
                <div class="box-pencarian-family-tree" style=" background: #fff; ">
                    <div class="row">
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">NIK :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Tanggal Lahir :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kecamatan :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Kecamatan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Jenis Pekerjaan :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Jenis Pekerjaan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Pendidikan Terakhir :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Pendidikan Terakhir</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Suku :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Suku</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Alamat :</label>
                                <textarea type="text" name="" class="form-control" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">Nama Lengkap :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Privinsi :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Privinsi</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kelurahan / Desa :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Kelurahan / Desa</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Nama Instansi/Usaha :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Nama Sekolah Terakhir :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Gelar Adat :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Gelar Adat</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Foto Diri :</label><br>
                                <img id="blah2" alt="your image" width="90" height="90" /><br>
                                <input id="upload-img-2" type="file" onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-4 m-b-10px">
                            <div class="form-group">
                                <label class="form-control-label">Nama Panggilan :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Kota / Kabupaten :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Kota / Kabupaten</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Status Hidup :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Status Hidup</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Jenis Kelamin :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Status Pernikahan :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Status Pernikahan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Tahun Kelulusan :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">No Telepon :</label>
                                <input type="text" name="" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Status Anggota Keluarga :</label>
                                <select name="" class="custom-select form-control">
                                    <option value="">Pilih Status Anggota Keluarga</option>
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

        <div class="form-group text-right">
            <button class="btn btn-danger remove"><i class="icon-close"></i></button>
            <button class="btn btn-primary clone"><i class="icon-plus"></i></button>
        </div><hr>

        <div class="row">
            <div class="col-xl-12 col-md-12 m-b-10px text-right">
                <a href="/family-management-fe" class="btn btn-primary pull-left">Batal</a>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('myscript')

    <script src="{{ asset('assets/global/plugins/select2/js/select2.min.js') }}"></script>
    <script>   
    $(function () {
        // $("select").select2();
        $('#sorting-table').DataTable( {
            "dom": '<"toolbar">frtip',
            "ordering": false,
            "info":     false,
            language: { search: "", searchPlaceholder: "Nama Member"  },
        } );
        $("div.toolbar").html('<a class="float-right btn btn-success" href="#">Sembunyikan Detail</a>');
    });

    $('.wrapper').on('click', '.remove', function() {
        $('.remove').closest('.wrapper').find('.element').not(':first').last().remove();
    });
    $('.wrapper').on('click', '.clone', function() {
        $('.clone').closest('.wrapper').find('.element').first().clone().appendTo('.results');
    });
    </script>
@endsection