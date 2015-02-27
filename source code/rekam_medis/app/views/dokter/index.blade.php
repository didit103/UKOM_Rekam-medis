@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Data Dokter</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('dokter/create') }}" class="btn btn-primary" role="button">Tambah Dokter</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <tr class="info" style="color: white;">
                    
                                       
                                       <th class="text-left">Kode Dokter</th>
                                       <th class="text-center">Kode Poliklinik</th>
                                       <th class="text-center">Tanggal Kunjungan</th>
                                       <th class="text-left">Kode User</th>
                                       <th class="text-center">Nama Dokter</th>
                                       <th class="text-center">Sip</th>
                                       <th class="text-left">Tempat Lahir</th>
                                       <th class="text-center">No Telpon</th>
                                       <th class="text-center">Alamat</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datadokter as $value)
                                    <tr>
                                    <div style="align-center">
                                        <th>{{{ $value->kd_dokter }}}</th>
                                        <th>{{{ $value->kd_poli }}}</th>
                                        <th>{{{ $value->tgl_kunjungan }}}</th>
                                        <th>{{{ $value->kd_user }}}</th>
                                        <th>{{{ $value->nm_dokter }}}</th>
                                        <th>{{{ $value->sip }}}</th>
                                        <th>{{{ $value->tempat_lahir }}}</th>
                                        <th>{{{ $value->no_telp }}}</th>
                                        <th>{{{ $value->alamat }}}</th>
                                        <td>
                                    </div>
                                            <div class="btn-group">
                        <a href="{{ URL::to('dokter/destroy/'.$value->kd_dokter) }}" class="btn btn-primary">Hapus</a>
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