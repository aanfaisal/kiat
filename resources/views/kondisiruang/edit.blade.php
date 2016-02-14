@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Kondisi Ruang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kondisi Ruang</a></li>
        <li class="active">Edit Kondisi Ruang</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kondisi Ruang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Kondisi Ruang</h1>
                <hr/>

                {!! Form::model($kondisiruang, [
                    'method' => 'PATCH',
                    'url' => ['kondisiruang', $kondisiruang->kondisiruang_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('ruang_id') ? 'has-error' : ''}}">
                {!! Form::label('ruang_id', 'ID Ruang: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('ruang_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('ruang_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('dinding') ? 'has-error' : ''}}">
                {!! Form::label('dinding', 'Dinding: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('dinding', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('dinding', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('plafon') ? 'has-error' : ''}}">
                {!! Form::label('plafon', 'Plafon: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('plafon', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('plafon', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('pintu') ? 'has-error' : ''}}">
                {!! Form::label('pintu', 'Pintu: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('pintu', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('pintu', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lemari') ? 'has-error' : ''}}">
                {!! Form::label('lemari', 'Lemari: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lemari', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('lemari', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mjangajar') ? 'has-error' : ''}}">
                {!! Form::label('mjangajar', 'Meja Pengajar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mjangajar', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mjangajar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('krsingajar') ? 'has-error' : ''}}">
                {!! Form::label('krsingajar', 'Kursi Pengajar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('krsingajar', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('krsingajar', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mjapserta') ? 'has-error' : ''}}">
                {!! Form::label('mjapserta', 'Meja Peserta: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mjapserta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mjapserta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('krsipserta') ? 'has-error' : ''}}">
                {!! Form::label('krsipserta', 'Kursi Peserta: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('krsipserta', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('krsipserta', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mjaasisten') ? 'has-error' : ''}}">
                {!! Form::label('mjaasisten', 'Meja Asisten: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mjaasisten', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mjaasisten', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('soundmesin') ? 'has-error' : ''}}">
                {!! Form::label('soundmesin', 'Sound Mesin: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('soundmesin', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('soundmesin', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('salon') ? 'has-error' : ''}}">
                {!! Form::label('salon', 'Sound Salon: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('salon', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('salon', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('mic') ? 'has-error' : ''}}">
                {!! Form::label('mic', 'Sound Mic: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('mic', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('mic', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('whiteboard') ? 'has-error' : ''}}">
                {!! Form::label('whiteboard', 'Whiteboard: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('whiteboard', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('whiteboard', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('penyangga') ? 'has-error' : ''}}">
                {!! Form::label('penyangga', 'Penyangga: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('penyangga', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('penyangga', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lcd') ? 'has-error' : ''}}">
                {!! Form::label('lcd', 'LCD : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lcd', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('lcd', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('layar') ? 'has-error' : ''}}">
                {!! Form::label('layar', 'Layar: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('layar', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('layar', '<p class="help-block">:message</p>') !!}
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
