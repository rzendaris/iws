@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="content-body-white">
    <div class="page-head">
        <div class="page-title">
            <h1>Province Management</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive custom--2">
                <table id="sorting-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Provinsi</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>DKI Jakarta</td>
                            <td class="text-center">
                                <a href="#" data-toggle="modal" data-target="#modal-detail-province-m"><i class="fa fa-eye fa-lg custom--1"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modal-edit-province-m"><i class="fa fa-edit fa-lg custom--1"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modal-delete-province-m"><i class="fa fa-close fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modal Delete -->
<div id="modal-delete-province-m" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Hapus Provinsi</h2>
                <p>Apakah anda yakin ingin menghapus data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div id="modal-tambah-province-m" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Tambah Provinsi</h2>
                <div class="row">
                    <div class="col-xl-12 col-md-12 m-b-10px">
                        <label class="form-control-label">Nama Provinsi *</label>
                        <input name="" type="text" value="" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<div id="modal-edit-province-m" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-body">
                <h2 class="text-center">Ubah Provinsi</h2>
                <div class="row">
                    <div class="col-xl-12 col-md-12 m-b-10px">
                        <label class="form-control-label">Nama Provinsi *</label>
                        <input name="" type="text" value="DKI Jakarta" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div id="modal-detail-province-m" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="text-center">Detail Provinsi</h2>
                <div class="row">
                    <div class="col-xl-12 col-md-12 m-b-10px">
                        <label class="form-control-label">Name Provinsi</label>
                        <input name="" disabled type="text" value="DKI Jakarta" class="form-control">
                    </div>
                    <div class="col-xl-6 col-md-6 m-b-10px">
                        <label class="form-control-label">Dibuat Pada:</label>
                        <input name="" disabled type="text" value="01/01/20202 19:00:00" class="form-control">
                    </div>
                    <div class="col-xl-6 col-md-6 m-b-10px">
                        <label class="form-control-label">Dibuat Oleh:</label>
                        <input name="" disabled type="text" value="admin@gmail.com" class="form-control">
                    </div>
                    <div class="col-xl-6 col-md-6 m-b-10px">
                        <label class="form-control-label">Terakhir Diubah Pada:</label>
                        <input name="" disabled type="text" value="01/01/20202 20:00:00" class="form-control">
                    </div>
                    <div class="col-xl-6 col-md-6 m-b-10px">
                        <label class="form-control-label">Terakhir Diubah Oleh:</label>
                        <input name="" disabled type="text" value="admin@gmail.com" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger float-right w-100" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('myscript')

    <script src="{{ asset('assets/global/plugins/datatables/datatables.min.js') }}"></script>
    <script>   
    $(function () {
        $('#sorting-table').DataTable( {
            "dom": '<"toolbar">frtip',
            "ordering": false,
            "info":     false,
            language: { search: "", searchPlaceholder: "Pencarian"  },
        } );
    
        $("div.toolbar").html('<a class="float-right btn btn-success" href="#" data-toggle="modal" data-target="#modal-tambah-province-m">Tambah</a>');
    });
    </script>
@endsection