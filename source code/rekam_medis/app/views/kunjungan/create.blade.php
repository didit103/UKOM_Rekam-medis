@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Data Kunjungan</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("kunjungan/index") }}">List Kunjungan</a></li>

        <a href= <li><a href="{{ URL::to("kunjungan/edit") }}">Edit Kunjungan</a></li>

        <form action="{{ URL::to('kunjungan/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
                <div class="span3">
                     <label>Tanggal Kunjugan</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="" name="tgl_kunjungan"/>
                        </div>
                     <label>Kode pasien</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="" name="kd_pasien"/>
                        </div>
                        <label>Kode Poliklinik</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="" name="kd_poli"/>
                        </div>
                        <label>Jam Kunjungan</label>
                    <div class="span1">
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="" name="jam_kunjungan"/>
                        </div>
                </div>
                    <br>
                    <br>
                    <br>
                    <a href="{{ URL::to("kunjungan/store")}}"><button class="button large info" style="">Tambah</button></a>
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
