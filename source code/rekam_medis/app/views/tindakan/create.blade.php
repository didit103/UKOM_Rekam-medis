@extends("layout.home2")

@section("content")
<div class="margin20">
        <div class="celarfix">
            <div class="palce-left">
                <h2>Tambah Tindakan</h2>
            </div>
        </div>
        <hr />
        <a href= <li><a href="{{ URL::to("tindakan/index") }}">List Tindakan</a></li>

        <a href= <li><a href="{{ URL::to("tindakan/edit") }}">Edit Tindakan</a></li>

        <form action="{{ URL::to('tindakan/post') }}" method="post">
            <div class="grid">
            <div class="row">
                <div class="align-right">
               <div class="span2">
                     <label>Kode Tindakan</label>
                      
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Kode TIndakan" name="kd_tindakan"/>
                      </div>
                        </div>
                     <div class="span5">       
                     <label>Nama Tindakan</label>
                        <div class="input-control text" data-role="input-control">
                            <input type="text" placeholder="Nama Tindakan" name="nm_tindakan"/>
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
                    <a href="{{ URL::to("tindakan/store")}}"><button class="button large info" style="">Tambah</button></a>
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
