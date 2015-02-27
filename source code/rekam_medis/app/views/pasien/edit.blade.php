@extends('layout.home2')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Ubah Data Pasien</small>
        </h1>
        
        {{ Form::model($pasiensbyno_pasien, array('route' => array('pasien.update', $pasiensbyno_pasien->no_pasien))) }}
            <div class="form-group">
                {{ Form::label('no_pasien', 'No Pasien') }}
                {{ Form::text('no_pasien', null, array('class' => 'form-control','placeholder'=>'Masukkan No Pasien')) }}
                {{ '<div>'.$errors->first('no_pasien').'</div>' }}
            </div>
 
             <div class="form-group">
                {{ Form::label('nm_pasien', 'Nama Pasien') }}
                {{ Form::text('nm_pasien', null, array('class' => 'form-control','placeholder'=>'Masukkan Nama Pasien')) }}
                {{ '<div>'.$errors->first('nm_pasien').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('j_kel', 'Jenis Kelamin') }}
                {{ Form::text('j_kel', null, array('class' => 'form-control','placeholder'=>'Masukkan Jenis Kelamin')) }}
                {{ '<div>'.$errors->first('j_kel').'</div>' }}
            </div>

             <div class="form-group">
                {{ Form::label('agama', 'Agama') }}
                {{ Form::text('agama', null, array('class' => 'form-control','placeholder'=>'Masukkan Agama')) }}
                {{ '<div>'.$errors->first('agama').'</div>' }}
            </div>

             <div class="form-group">
                {{ Form::label('alamat', 'Alamat') }}
                {{ Form::text('alamat', null, array('class' => 'form-control','placeholder'=>'Masukkan Alamat')) }}
                {{ '<div>'.$errors->first('alamat').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('tgl_lhr', 'Tanggal Lahir') }}
                {{ Form::text('tgl_lhr', null, array('class' => 'form-control','placeholder'=>'Masukkan Tanggl Lahir')) }}
                {{ '<div>'.$errors->first('tgl_lhr').'</div>' }}
            </div>

             <div class="form-group">
                {{ Form::label('usia', 'Usia') }}
                {{ Form::text('usia', null, array('class' => 'form-control','placeholder'=>'Masukkan Usia')) }}
                {{ '<div>'.$errors->first('usia').'</div>' }}
            </div>

             <div class="form-group">
                {{ Form::label('no_telp', 'No Telpon') }}
                {{ Form::text('no_telp', null, array('class' => 'form-control','placeholder'=>'Masukkan No Telpon')) }}
                {{ '<div>'.$errors->first('no_telp').'</div>' }}
            </div>

            <div class="form-group">
                {{ Form::label('nm_kk', 'Nama Kepala Keluarga') }}
                {{ Form::text('nm_kk', null, array('class' => 'form-control','placeholder'=>'Masukkan Nama Kepala Keluarga')) }}
                {{ '<div>'.$errors->first('nm_kk').'</div>' }}
            </div>
            

            <div class="form-group">
                {{ Form::label('hub_kel', 'Hubungan Keluarga') }}
                {{ Form::text('hub_kel', null, array('class' => 'form-control','placeholder'=>'Masukkan Hubungan Keluarga')) }}
                {{ '<div>'.$errors->first('hub_kel').'</div>' }}
            </div>

        </div>
            <button class="large bg-Blue fg-white">{{ Form::submit('SIMPAN DATA', array('class' => 'pasien/update')) }}</button>
 
        {{ Form::close() }}
 
    </div>
</div>
@stop