@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Data Kunjun
                gan</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('kunjungan/create') }}" class="btn btn-primary" role="button">Tambah Data Kunjugan</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <tr class="info" style="color: white;">
                    
                                       
                                       <th class="text-center">Tanggal Kunjungan</th>
                                       <th class="text-center">Kode Pasien</th>
                                       <th class="text-center">Kode Poliklinik</th>
                                       <th class="text-center">Jam Kunjungan</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datakunjungan as $value)
                                    <tr>
                                    <div style="align-center">
                                        <th>{{{ $value->tgl_kunjungan }}}</th>
                                        <th>{{{ $value->kd_pasien }}}</th>
                                        <th>{{{ $value->kd_poli }}}</th>
                                        <th>{{{ $value->jam_kunjungan }}}</th>
                                        <td>
                                    </div>
                                            <div class="btn-group">
                        <a href="{{ URL::to('kunjungan/destroy/'.$value->kd_pasien) }}" class="btn btn-primary">Hapus</a>
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