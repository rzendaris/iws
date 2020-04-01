@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="content-body-white">
    <div class="page-head">
        <div class="page-title">
            <h1>IWS Family Tree</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box-pencarian-family-tree">
                <div class="row">
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Provinsi :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Provinsi</option>
                        </select>
                    </div>
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Status Anggota Keluarga :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Anggota Keluarga</option>
                        </select>
                    </div>
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Status Pernikahan :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Status Pernikahan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Kota :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Kota</option>
                        </select>
                    </div>
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Suku :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Suku</option>
                        </select>
                    </div>
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Status Keberadaan :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Keberadaan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Gelar Adat :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Adat</option>
                        </select>
                    </div>
                    <div class="col-xl-12 col-md-4 m-b-10px">
                        <label class="form-control-label">Jenis Pekerjaan :</label>
                        <select name="" class="custom-select form-control">
                            <option value="">Pilih Pekerjaan</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive custom--2">
                <table id="sorting-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Status Anggota</th>
                            <th>Domisili</th>
                            <th>Suku</th>
                            <th>Gelar</th>
                            <th>Pekerjaan</th>
                            <th>Pernikahan</th>
                            <th>Keberadaan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>M Furqan</td>
                            <td>Kepala Keluarga</td>
                            <td>Jakarta Timur</td>
                            <td>Sunda</td>
                            <td>Raja Muda 1</td>
                            <td>PNS</td>
                            <td>Menikah</td>
                            <td>Hidup</td>
                            <td class="text-center">
                                <a href="/detail-family-tree-fe"><i class="fa fa-eye fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Rina</td>
                            <td>Istri</td>
                            <td>Jakarta Timur</td>
                            <td>Sunda</td>
                            <td>Raja Muda 1</td>
                            <td>PNS</td>
                            <td>Menikah</td>
                            <td>Hidup</td>
                            <td class="text-center">
                                <a href="/detail-family-tree-fe"><i class="fa fa-eye fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
    </script>
@endsection