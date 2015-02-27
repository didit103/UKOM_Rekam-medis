@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Data Obat</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('obat/create') }}" class="btn btn-primary" role="button">Tambah Data Obat</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <tr class="info" style="color: white;">
                    
                                       
                                       <td class="text-center">Kode Obat</td>
                                       <td class="text-center">Nama Obat</td>
                                       <td class="text-center">Jumlah Obat</td>
                                       <td class="text-center">Ukuran</td>
                                       <td class="text-center">Harga</td>
                                        <td width="146">Aksi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($dataobat as $value)
                                    <tr>
                                    <div style="align-center">
                                        <th>{{{ $value->kd_obat }}}</th>
                                        <th>{{{ $value->nm_obat }}}</th>
                                        <th>{{{ $value->jml_obat }}}</th>
                                        <th>{{{ $value->ukuran }}}</th>
                                        <th>{{{ $value->harga }}}</th>
                                        <td>
                                    </div>
                                            <div class="btn-group">
                        <a href="{{ URL::to('obat/destroy/'.$value->kd_obat) }}" class="btn btn-primary">Hapus</a>
                        </div>
                                        </td>
                                    </tr>
                                @endforeach   
                                </tbody>
                            </table>
            </div>
            
 
    </div>
</div>
@stop