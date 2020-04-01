@extends('panel.master')

@section('css')

<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<style>
.table {
    width:100%;
}
.img-custom-1 {
    width:100%;
}
.img-custom-2 {
    width:60%;
    margin:auto;
    display: block;
}
.img-custom-3 {
    width:100%;
}
.box-detail-tre {
    padding: 1em;
    border: solid 1px #f2f6f9;
}
.custom-button-lihat {
    width: 100%;
    margin: 10px 0;
}
.custom-button-pdf {
    position: absolute;
}
</style>
@endsection

@section('content')

<div class="content-body-white">
    
    <!-- Button Download PDF -->
    <a href="#" class="btn btn-success custom-button-pdf">Download PDF</a>

    <div class="row">
        <div class="col-md-offset-4 col-md-4">  
            <h1 class="text-center">IWS Family Tree</h1>
            <div class="box-detail-tre">
                <img class="img-custom-1" src="../assets/pages/img/avatars/team1.jpg" /> 
            </div>
        </div>
    </div>
    <br>
    <div class="row">

        <div class="col-md-6">  
            <div class="box-detail-tre">
                <img class="img-custom-2" src="../assets/pages/img/avatars/team2.jpg" /> 
                <hr>
                <table class="table table-striped"> 
                    <tbody>
                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td>Budi Santoso</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Panggilan</th>
                            <td>Budi</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lahir</th>
                            <td>10/10/1988</td>
                        </tr>
                        <tr>
                            <th scope="row">Agama</th>
                            <td>Islam</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>Laki - Laki</td>
                        </tr>
                        <tr>
                            <th scope="row">Pernikahan</th>
                            <td>Menikah</td>
                        </tr>
                        <tr>
                            <th scope="row">Kewarganegaraan</th>
                            <td>WNI</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>Kepala Keluarga</td>
                        </tr>
                        <tr>
                            <th scope="row">Gelar</th>
                            <td>Rajo Mudo 1</td>
                        </tr>
                        <tr>
                            <th scope="row">Suku</th>
                            <td>Jawa</td>
                        </tr>
                        <tr>
                            <th scope="row">Pendidikan</th>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Sekolah</th>
                            <td>Universitas Indonesia</td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Lulus</th>
                            <td>2017</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Pekerjaan</th>
                            <td>PNS</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Institusi / Usaha</th>
                            <td>PEMDA DKI</td>
                        </tr>
                        <tr>
                            <th scope="row">Keberadaan</th>
                            <td>Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">Domisili</th>
                            <td>Jakarta Timur</td>
                        </tr>
                        <tr>
                            <th scope="row">Kecamatan</th>
                            <td>Makassar</td>
                        </tr>
                        <tr>
                            <th scope="row">Kelurahan</th>
                            <td>Makassar</td>
                        </tr>
                        <tr>
                            <th scope="row">No Telp</th>
                            <td>089713713713</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>Alamat Rumah</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">  
            <div class="box-detail-tre">
                <img class="img-custom-2" src="../assets/pages/img/avatars/team3.jpg" /> 
                <hr>
                <table class="table table-striped"> 
                    <tbody>
                        <tr>
                            <th scope="row">Nama Lengkap</th>
                            <td>Budi Santoso</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Panggilan</th>
                            <td>Budi</td>
                        </tr>
                        <tr>
                            <th scope="row">Tanggal Lahir</th>
                            <td>10/10/1988</td>
                        </tr>
                        <tr>
                            <th scope="row">Agama</th>
                            <td>Islam</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Kelamin</th>
                            <td>Laki - Laki</td>
                        </tr>
                        <tr>
                            <th scope="row">Pernikahan</th>
                            <td>Menikah</td>
                        </tr>
                        <tr>
                            <th scope="row">Kewarganegaraan</th>
                            <td>WNI</td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>Kepala Keluarga</td>
                        </tr>
                        <tr>
                            <th scope="row">Gelar</th>
                            <td>Rajo Mudo 1</td>
                        </tr>
                        <tr>
                            <th scope="row">Suku</th>
                            <td>Jawa</td>
                        </tr>
                        <tr>
                            <th scope="row">Pendidikan</th>
                            <td>S1</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Sekolah</th>
                            <td>Universitas Indonesia</td>
                        </tr>
                        <tr>
                            <th scope="row">Tahun Lulus</th>
                            <td>2017</td>
                        </tr>
                        <tr>
                            <th scope="row">Jenis Pekerjaan</th>
                            <td>PNS</td>
                        </tr>
                        <tr>
                            <th scope="row">Nama Institusi / Usaha</th>
                            <td>PEMDA DKI</td>
                        </tr>
                        <tr>
                            <th scope="row">Keberadaan</th>
                            <td>Hidup</td>
                        </tr>
                        <tr>
                            <th scope="row">Domisili</th>
                            <td>Jakarta Timur</td>
                        </tr>
                        <tr>
                            <th scope="row">Kecamatan</th>
                            <td>Makassar</td>
                        </tr>
                        <tr>
                            <th scope="row">Kelurahan</th>
                            <td>Makassar</td>
                        </tr>
                        <tr>
                            <th scope="row">No Telp</th>
                            <td>089713713713</td>
                        </tr>
                        <tr>
                            <th scope="row">Alamat</th>
                            <td>Alamat Rumah</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
    <br>
    <div class="row">        
        <div class="col-md-12">  
            <div class="box-detail-tre">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-custom-3" src="../assets/pages/img/avatars/team4.jpg" />
                                <a href="#" class="btn btn-primary custom-button-lihat">Lihat</a>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped"> 
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama Lengkap</th>
                                            <td>Susilo Adi</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>Orang Tua</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Suku</th>
                                            <td>Jawa</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>Laki - Laki</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Gelar</th>
                                            <td>Rajo Mudo 1</td>
                                        </tr>                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-custom-3" src="../assets/pages/img/avatars/team5.jpg" />
                                <a href="#" class="btn btn-primary custom-button-lihat">Lihat</a>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-striped"> 
                                    <tbody>
                                        <tr>
                                            <th scope="row">Nama Lengkap</th>
                                            <td>Erviyansa</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Status</th>
                                            <td>Anak</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Suku</th>
                                            <td>Jawa</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Jenis Kelamin</th>
                                            <td>Laki - Laki</td>
                                        </tr> 
                                        <tr>
                                            <th scope="row">Gelar</th>
                                            <td>Rajo Mudo 2</td>
                                        </tr>                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
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