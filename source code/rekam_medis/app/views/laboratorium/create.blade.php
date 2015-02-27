@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Penggunaan Laboratorium</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("laboratorium/index") }}">List Laboratorium</a></li>

        <a href= <li><a href="{{ URL::to("laboratorium/edit") }}">Edit Laboratorium</a></li>

        <form action="{{ URL::to('laboratorium/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
               <div class="span2">
                     <label>Kode Lab</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode lab" name="kd_lab"/>
                      </div>
                         <label>Nama Ruangan</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Nama Ruangan" name="nm_rm"/>
                        </div>
                        <label>Hasil Lab</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Hasil Lab" name="hasil_lab"/>
                        </div>
                        <label>Keterangan</label>
                        <textarea name="ket"></textarea></td></tr>

                 </div>   
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="{{ URL::to("laboratorium/store")}}"><button class="button large info" style="">Tambah</button></a>
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
