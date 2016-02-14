@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Peserta Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Peserta Diklat TA</a></li>
        <li class="active">Edit Peserta</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Peserta Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Peserta Diklat TA</h1>
                <hr/>

                {!! Form::model($pesertum, [
                    'method' => 'PATCH',
                    'url' => ['peserta', $pesertum->peserta_id],
                    'class' => 'form-horizontal'
                ]) !!}

        <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama Lengkap : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('diklatta_id') ? 'has-error' : ''}}">
                {!! Form::label('diklatta_id', 'Nama Diklat TA: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('diklatta_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('diklatta_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pend') ? 'has-error' : ''}}">
                {!! Form::label('pend', 'Pendidikan : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pend', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pend', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tmplahir') ? 'has-error' : ''}}">
                {!! Form::label('tmplahir', 'Tempat Lahir: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('tmplahir', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tmplahir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tgllahir') ? 'has-error' : ''}}">
                {!! Form::label('tgllahir', 'Tanggal Lahir: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tgllahir', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tgllahir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenkel') ? 'has-error' : ''}}">
                {!! Form::label('jenkel', 'Jenis Kelamin : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('jenkel', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jenkel', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
                {!! Form::label('status', 'Status : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('foto') ? 'has-error' : ''}}">
                {!! Form::label('foto', 'Foto: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('agama') ? 'has-error' : ''}}">
                {!! Form::label('agama', 'Agama : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('agama', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('agama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pangkat') ? 'has-error' : ''}}">
                {!! Form::label('pangkat', 'Pangkat : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pangkat', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pangkat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jabatan') ? 'has-error' : ''}}">
                {!! Form::label('jabatan', 'Jabatan : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('jabatan', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('instansi') ? 'has-error' : ''}}">
                {!! Form::label('instansi', 'Instansi : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('instansi', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('instansi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
                {!! Form::label('alamat', 'Alamat : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
                {!! Form::label('telp', 'Telepon : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nohp') ? 'has-error' : ''}}">
                {!! Form::label('nohp', 'Nomor HP : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('nohp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nohp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ruang_id') ? 'has-error' : ''}}">
                {!! Form::label('ruang_id', 'ID Kamar : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ruang_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ruang_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Update Data', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
