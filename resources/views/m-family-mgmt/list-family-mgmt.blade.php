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
                    @foreach($data['family'] as $family)
                        <tr>
                            <td>{{ $family->no }}</td>
                            <td>{{ $family->family_no }}</td>
                            <td>{{ $family->kepala_keluarga }}</td>
                            <td>{{ $family->city->name }}</td>
                            <td>{{ $family->tlp_no }}</td>
                            <td>100%</td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-eye fa-lg custom--1"></i></a>
                                <a href="{{ url('family-management/edit/'.$family->id) }}"><i class="fa fa-edit fa-lg custom--1"></i></a>
                                <a href="#" data-toggle="modal" data-target="#modal-delete-family-{{ $family->id }}"><i class="fa fa-close fa-lg custom--1"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@foreach($data['family'] as $family)
    <!-- Modal Delete -->
    <div id="modal-delete-family-{{ $family->id }}" class="modal fade">
        <form method="post" action="{{url('family-management/delete')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <h2>Hapus Keluarga</h2>
                        <p>Apakah anda yakin ingin menghapus data?</p>
                    </div>
                    <input type="hidden" name="id" value="{{ $family->id }}"/>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endforeach

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
    
        $("div.toolbar").html('<a class="float-right btn btn-success" href="/iws/public/family-management/add">Tambah</a>');
    });
    </script>
@endsection