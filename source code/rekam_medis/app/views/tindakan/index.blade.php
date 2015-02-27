@extends('layout.home2')

@section('content')

<div class="margin10">
    <div class="grid fluid fg-darkCobalt">
        <div class="row">
            <div class="span12">
                <nav class="breadcrumbs">
                    <a href= <li><a href="{{ URL::to("tindakan/create") }}">Tambah Tindakan</a></li>
                        <ul>
                            <li class="active"><a href="{{URL::to('tindakan')}}">Pencarian Tindakan</a></li>
                        </ul>
            </nav>
                <br>
                <table class="table bordered striped hovered dataTable" id="dataTables-1">
                <thead>
                    <tr>
                        <th>Kode Tindakan</th>
                        <th>Nama Tindakan</th>
                        <th>Ket</th>
                        <th class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($datatindakan as $tampil)
                    <tr>
                        <td class="size3">{{ $tampil->kd_tindakan  }}</td>
                        <td class="size2 text-center">{{ $tampil->nm_tindakan }}</td>
                        <td  class="size2">{{ $tampil->ket }}</td>
                        <td class="text-center">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            
    </div>
</div>

 <script src="js/jquery/jquery.dataTables.js"></script>
 <script>
    $(function(){
        $('#dataTables-1').dataTable( {
            "bProcessing": true
        } );
    });
 </script>      
@stop