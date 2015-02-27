@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Penggunaan Laboratorium</small>
        </h1>
        @if (Session::has('message'))
            {{ Session::get('message') }}
        @endif
        <p><a href="{{ URL::to('laboratorium/create') }}" class="btn btn-primary" role="button">Penggunaan Laboratorium</a></p>
        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        
                                        <tr class="info" style="color: white;">
                    
                                       
                                       <td class="text-center">Kode Lab</td>
                                       <td class="text-center">Nama Ruangan</td>
                                       <td class="text-center">Hasil Lab</td>
                                       <td class="text-center">Keterangan</td>
                                        <th width="146">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($datalab as $value)
                                    <tr>
                                    <div style="align-center">
                                        <td>{{{ $value->kd_lab }}}</td>
                                        <td>{{{ $value->nm_rm }}}</td>
                                        <td>{{{ $value->hasil_lab }}}</td>
                                        <td>{{{ $value->ket }}}</td>
                                        <td>
                                    </div>
                                            <div class="btn-group">
                        <a href="{{ URL::to('laboratorium/destroy/'.$value->kd_lab) }}" class="btn btn-primary">Hapus</a>
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