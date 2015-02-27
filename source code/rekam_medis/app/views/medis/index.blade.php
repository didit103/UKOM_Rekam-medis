@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Data Rekam Medis</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('medis/create') }}" class="btn btn-primary" role="button">Tambah Pasien</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <tr class="info" style="color: white;">
                    
                                       
                                       <th class="text-center">Kode Pasien</th>
                                       <th class="text-center">Kode Obat</th>
                                       <th class="text-center">Kode User</th>
                                       <th class="text-center">No Pasien</th>
                                       <th class="text-center">diagnosa</th>
                                       <th class="text-center">keluhan</th>
                                       <th class="text-center">Tanggal Pemeriksaan</th>
                                       <th class="text-center">Keterangan</th>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datamedis as $value)
                                    <tr>
                                    <div style="align-center">
                                        <th>{{{ $value->kd_pasien }}}</th>
                                        <th>{{{ $value->kd_obat }}}</th>
                                        <th>{{{ $value->kd_user }}}</th>
                                        <th>{{{ $value->no_pasien }}}</th>
                                        <th>{{{ $value->diagnosa }}}</th>
                                        <th>{{{ $value->keluhan }}}</th>
                                        <th>{{{ $value->tgl_pemeriksaan }}}</th>
                                        <th>{{{ $value->ket }}}</th>
                                        <td>
                                    </div>
                                            <div class="btn-group">
                        <a href="{{ URL::to('medis/destroy/'.$value->no_pasien) }}" class="btn btn-primary">Hapus</a>
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