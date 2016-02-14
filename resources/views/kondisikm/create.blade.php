@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Kondisi Kamar')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kondisi Kamar</a></li>
        <li class="active">Tambah Kondisi Kamar</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kondisi Kamar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Kondisi Kamar</h1>
                    <hr/>

                    {!! Form::open(['url' => 'kondisikm', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('kamar_id') ? 'has-error' : ''}}">
                {!! Form::label('kamar_id', 'Kamar No. : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('kamar_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('kamar_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <h1>Kondisi - Kondisi</h1>
            <div class="form-group {{ $errors->has('kmmandi') ? 'has-error' : ''}}">
                {!! Form::label('kmmandi', 'Kamar Mandi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('kmmandi', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('kmmandi', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bed') ? 'has-error' : ''}}">
                {!! Form::label('bed', 'Bed: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bed', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('bed', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('slimut') ? 'has-error' : ''}}">
                {!! Form::label('slimut', 'Selimut : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('slimut', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('slimut', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('bak') ? 'has-error' : ''}}">
                {!! Form::label('bak', 'Bak : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('bak', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('bak', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('gantungan') ? 'has-error' : ''}}">
                {!! Form::label('gantungan', 'Gantungan Pakaian : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('gantungan', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('gantungan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('meja') ? 'has-error' : ''}}">
                {!! Form::label('meja', 'Meja : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('meja', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('meja', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pnerangan') ? 'has-error' : ''}}">
                {!! Form::label('pnerangan', 'Penerangan: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pnerangan', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pnerangan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('ac') ? 'has-error' : ''}}">
                {!! Form::label('ac', 'AC : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('ac', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ac', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Tambah Data', ['class' => 'btn btn-primary form-control']) !!}
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
