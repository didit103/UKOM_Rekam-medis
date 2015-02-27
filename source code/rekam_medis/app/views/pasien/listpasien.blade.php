@extends('layout.home2')

@section('content')
<script>
            $(function(){

                        $("#createFlatWindow").on('click', function(){
                            $.Dialog({
                                overlay: true,
                                shadow: true,
                                flat: true,
                                draggable: true,
                                icon: '<img src="images/1.png">',
                                title: 'Flat window',
                                content: '',
                                padding: 10,
                                onShow: function(_dialog){
                                    var content = '<form class="user-input" action="{{ URL::to('tahunajaran/post')}}" method="post">' +
                                            '<label>Pilihan Tahun Ajaran</label>' +
                                            '<div class="input-control select"><select name="tahunajaran"><option>2013/2014</option><option>2014/2015</option></select></div>' +
                                            '<label>Pilih Kelas</label>' +
                                            '<div class="input-control text size3" data-role="input-control"><select name="kelas"><option>XII RPL</option><option>XI RPL</option></select></div>'+ 
                                            '<label>Pilihan Semester</label>' +
                                            '<div class="input-control text size2" data-role="input-control"><select name="semester"><option>5</option><option>6</option></select></div>'+                       
                                            '<label>Pilih File CSV</label>' +
                                            '<div class="input-control text"><input type="file"></input></div>'+ 
                                            '</br>' +
                                            '</br>' +
                                            '<label style ="font-size:10pt;color:red;">Ukuran File CSV Maksimal 500kb</label>' +
                                            '<label style ="font-size:10pt;color:red;">Format CSV nya silahkan download , <a href="#">disini</a></label>' +
                                            '</br>' +
                                            '<div class="place-right">' +
                                            '<button class="button" type="button" onclick="$.Dialog.close()">Batal</button> ' +
                                            '<input type="submit" class="button primary " value="Import">&nbsp;'+                                            
                                            '</div>' +
                                            '</br>' +
                                            '</div>'+
                                            '</form>';

                                    $.Dialog.title("Import Data Siswa");
                                    $.Dialog.content(content);
                                }
                            });
                        });
                    })
        </script>
    <div class="margin20">
            <div class="clearfix">
                <div class="place-left">
                    <h2>Data Pasien</h2>
                </div>
                <div class="place-right">
                    <a href="{{ URL::to("pasien/create")}}"><button class="button large info" style="">Tambah</button></a>
                </div>
            </div>
            <hr />
            <table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
                    <th>No Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Usia</th>
                    <th>No Telpon</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Hubungan Keluarga</th>
                    <th class="text-center">Option</th>
                    
                </tr>
                </thead>

                <tbody>
                    @foreach($datapasien as $value)
                     <tr>
                        <td class="text-center">{{ $value->no_pasien  }}</td>
                        <td class="text-center">{{ $value->nm_pasien }}</td>
                        <td class="text-center">{{ $value->j_kel }}</td>
                        <td class="text-center">{{ $value->agama}}</td>
                        <td class="text-center">{{ $value->alamat }}</td>
                        <td class="text-center">{{ $value->tgl_lhr }}</td>
                        <td class="text-center">{{ $value->usia  }}</td>
                        <td class="text-center">{{ $value->no_telp }}</td>
                        <td class="text-center">{{ $value->nm_kk}}</td>
                        <td class="text-center">{{ $value->hub_kel }}</td>
                        <td class="text-center">
                            <a href="{{ URL::to('pasien/destroy/'.$value->no_pasien) }}"><button class="button mini danger">Hapus</button></a>
                            <a href="{{ URL::to('pasien/edit/'.$value->no_pasien) }}"><button class="button mini info">Edit</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

               
            </table>
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