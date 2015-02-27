@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Data Obat</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("obat/index") }}">List Obat</a></li>

        <a href= <li><a href="{{ URL::to("obat/edit") }}">Edit Obat</a></li>

        <form action="{{ URL::to('obat/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
                <div class="span3">
                     <label>Kode Obat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode Obat" name="kd_obat"/>
                        </div>
                     <label>Nama Obat</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Nama Obat" name="nm_obat"/>
                        </div>
                        <label>Jumlah Obat</label>
                        <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Jumlah Obat" name="jml_obat"/>
                        </div>
                        <label>Ukuran</label>
                            <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Ukuran" name="ukuran"/>
                        </div>
                         <label>Harga</label>
                            <div class="input-control text" date-role="input-control">
                            <input type="text" placeholder="Harga" name="harga"/>
                        </div>
                
                    <br>
                    <br>
                    <br>
                    <a href="{{ URL::to("obat/store")}}"><button class="button large info" style="">Tambah</button></a>
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
