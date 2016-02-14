@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Asrama')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Asrama</a></li>
        <li class="active">Edit Asrama</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Asrama</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Asrama</h1>
                <hr/>

                {!! Form::model($asrama, [
                    'method' => 'PATCH',
                    'url' => ['asrama', $asrama->asrama_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('petugas') ? 'has-error' : ''}}">
                {!! Form::label('petugas', 'Nama Petugas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('petugas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('petugas', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('atasan') ? 'has-error' : ''}}">
                {!! Form::label('atasan', 'Nama Atasan: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('atasan', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('atasan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('uraian') ? 'has-error' : ''}}">
                {!! Form::label('uraian', 'Uraian Tugas: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('uraian', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('uraian', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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
