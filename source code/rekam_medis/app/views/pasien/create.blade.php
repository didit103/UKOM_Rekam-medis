@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Data Pasein</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("pasien/listpasien") }}">List Pasien</a></li>

        <form method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right"> 
                            <div class="span6">
                     <label>No pasien</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="No pasien" name="no_pasien"/>
                            {{$errors->first('no_pasien')}}
                        </div>
                        <label>Nama Pasien</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Nama Pasien" name="nm_pasien"/>
                            {{$errors->first('nm_pasien')}}
                        </div>
                        <label>Jenis Kelamin</label>
                        <div class="input-control text" data-role="input-control"> 
                             <select name="j_kel">
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                            {{$errors->first('j_kel')}}
                        </div>
                        <label>Agama</label>
                        <div class="input-control text" data-role="input-control">
                             <select name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Protestan</option>
                                <option>Hindu</option>
                                <option>Buddha</option>
                            </select>
                            {{$errors->first('agama')}}
                        </div>
                        <label>Alamat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Alamat" name="alamat"/>
                            {{$errors->first('alamat')}}
                        </div>
                        <label>Tanggal Lahir</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Tanggal Lahir" name="tgl_lhr"/>
                            {{$errors->first('tgl_lhr')}}
                        </div>
                        <label>Usia</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Usia" name="usia"/>
                              {{$errors->first('usia')}}
                        </div>
                        <label>No Telpon</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="No Telpon" name="no_telp"/>
                              {{$errors->first('no_telp')}}
                        </div>
                        <label>Nama Kepala Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Nama Kartu Keluarga" name="nm_kk"/>
                              {{$errors->first('nm_kk')}}
                        </div>
                        <label>Hubungan Keluarga</label>
                        <div class="input-control text" data-role="input-control">
                              <input type="text" placeholder="Hubungan Keluarga" name="hub_kel"/>
                              {{$errors->first('hub_kel')}}
                        </div> 
                    <a href="{{ URL::to("pasien/store")}}"><button class="button large info" style="">Tambah</button></a>
                    <button class="button large">Batal</button>
                
        </div>
                </div>
            </div>
                    </div>
</form>


                     
    <div class="margin20">
            <div class="clearfix">
                
                   
                
            <hr />
           
        </div>
            </div>
        </div>
        </div>
@stop
