@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Data Dokter</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("dokter/index") }}">List Dokter</a></li>

        <form action="{{ URL::to('dokter/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
                <div class="span3">
                     <label>Kode Dokter</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Dokter" name="kd_dokter"/>
                        </div>
                     <label>Kode Poliklinik</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Poliklinik" name="kd_poli"/>
                        </div>
                        <label>Tanggal Kunjungan</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Tanggal Kunjungan" name="tgl_kunjungan"/>
                        </div>
                        <label>Kode User</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Kode User" name="kd_user"/>
                        </div>
                        <label>Nama Dokter</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nama Dokter" name="nm_dokter"/>
                        </div>
                        <label>Sip</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Sip" name="sip"/>
                        </div>
                        <label>Tempat Lahir</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Tempat Lahir" name="tempat_lahir"/>
                        </div>
                        <label>No Telpon</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Telpon" name="no_telp"/>
                        </div>
                        <label>Alamat</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Alamat" name="alamat"/>
                        </div>
                    <a href="{{ URL::to("dokter/store")}}"><button class="button large info" style="">Tambah</button></a>
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
