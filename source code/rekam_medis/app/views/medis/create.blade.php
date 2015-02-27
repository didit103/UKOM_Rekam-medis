@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Data Rekam Medis</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("medis/listpasien") }}">List Rekam Medis</a></li>
        <a href= <li><a href="{{ URL::to("medis/edit") }}">Edit Rekam Medis</a></li>

        <form action="{{ URL::to('medis/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
                <div class="span3">
                    <label>Kode Pasien</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Pasien" name="kd_pasien"/>
                        </div>
                     <label>Kode Tindakan</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Tindakan" name="kd_tindakan"/>
                        </div>
                     <label>Kode Obat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Obat" name="kd_obat"/>
                        </div>
                        <label>Kode User</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Kode User" name="kd_user"/>
                        </div>
                        <label>No Pasien</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="No Pasien" name="no_pasien"/>
                        </div>
                        <label>Diagnosa</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Diagnosa" name="diagnosa"/>
                        </div>
                        <label>Keluhan</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Keluhan" name="keluhan"/>
                        </div>
                        <label>Tanggal Pemeriksaan</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Tanggal Pemriksaan" name="tgl_pemeriksaan"/>
                        </div>
                        <label>Keterangan</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Keterangan" name="ket"/>
                    <a href="{{ URL::to("medis/store")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
                
                    </div>



                     
    <div class="margin20">
            <div class="clearfix">
                
                   
                </div>
                </div>
            </div>
            <hr />
           
        </div>
            </div>
        </div>
        </form>
        </div>
@stop
