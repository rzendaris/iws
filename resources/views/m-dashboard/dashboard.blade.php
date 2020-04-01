@extends('panel.master')

@section('css')

    <link href="{{ asset('assets/global/plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

<div class="content-body-white">
    <div class="page-head">
        <div class="page-title">
            <h1>Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Populasi Per Provinsi</h5>
            <div id="chartprovinsi" style="height: 250px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Populasi Per Provinsi</h5>
            <div id="chartkota" style="height: 250px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Populasi Per Provinsi</h5>
            <div id="chartkecamatan" style="height: 250px;"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h5>Populasi Per Provinsi</h5>
            <div id="chartkelurahan" style="height: 250px;"></div>
        </div>
    </div>
</div>

@endsection

@section('myscript')

    <script src="{{ asset('assets/global/plugins/morris/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/morris/morris.min.js') }}"></script>
    <script>   
    Morris.Bar({
        element: 'chartprovinsi',
        data: [
            { y: '2006', a: 20, b: 90 },
            { y: '2007', a: 35,  b: 65 },
            { y: '2008', a: 40,  b: 40 }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Populasi Per Provinsi']
    });
    Morris.Bar({
        element: 'chartkota',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Populasi Per Kota']
    });
    Morris.Bar({
        element: 'chartkecamatan',
        data: [
            { y: '2006', a: 40, b: 90 },
            { y: '2007', a: 15,  b: 65 },
            { y: '2008', a: 30,  b: 40 }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Populasi Per Kecamatan']
    });
    Morris.Bar({
        element: 'chartkelurahan',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 }
        ],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Populasi Per Kelurahan']
    });
    </script>
@endsection