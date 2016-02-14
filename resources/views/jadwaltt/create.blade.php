@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data Jadwal TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jadwal TT</a></li>
        <li class="active">Tambah Jadwal TT</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jadwal TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Jadwal TT</h1>
                    <hr/>

                    {!! Form::open(['url' => 'jadwaltt', 'class' => 'form-horizontal']) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenistt_id') ? 'has-error' : ''}}">
                {!! Form::label('jenistt_id', 'Jenistt Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jenistt_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('jenistt_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tglmulai') ? 'has-error' : ''}}">
                {!! Form::label('tglmulai', 'Tglmulai: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tglmulai', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tglmulai', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tglslese') ? 'has-error' : ''}}">
                {!! Form::label('tglslese', 'Tglslese: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('tglslese', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('tglslese', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
