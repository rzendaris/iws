@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="content-body-white">
    <div class="page-head">
        <div class="page-title">
            <h1>Family Management</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive custom--2">
                <table id="sorting-table" class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No KK</th>
                            <th>Kepala Keluarga</th>
                            <th>Kota</th>
                            <th>No. TLP</th>
                            <th>Complete</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>9018138138131831</td>
                            <td>M Furqon</td>
                            <td>Jakarta Pusat</td>
                            <td>02193193131</td>
                            <td>100%</td>
                            <td class="text-center">
                                <a href="/add-family-mgmt-fe"><i class="fa fa-eye fa-lg custom--1"></i></a>
                                <a href="/add-family-mgmt-fe"><i class="fa fa-edit fa-lg custom--1"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modal-delete-user-m"><i class="fa fa-close fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>9018138138131831</td>
                            <td>Andi</td>
                            <td>Jakarta Pusat</td>
                            <td>02193193131</td>
                            <td>90%</td>
                            <td class="text-center">
                                <a href="/add-family-mgmt-fe"><i class="fa fa-eye fa-lg custom--1"></i></a>
                                <a href="/add-family-mgmt-fe"><i class="fa fa-edit fa-lg custom--1"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modal-delete-user-m"><i class="fa fa-close fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Modal Delete -->
<div id="modal-delete-user-m" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <h2>Hapus Keluarga</h2>
                <p>Apakah anda yakin ingin menghapus data?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger">Hapus</button>
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
    
        $("div.toolbar").html('<a class="float-right btn btn-success" href="/add-family-mgmt-fe">Tambah</a>');
    });
    </script>
@endsection