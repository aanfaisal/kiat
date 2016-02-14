@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Bahan Ajar')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bahan Ajar</a></li>
        <li class="active">Edit Bahan Ajar</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bahan Ajar TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Bahan Ajar</h1>
                <hr/>

                {!! Form::model($bahan, [
                    'method' => 'PATCH',
                    'url' => ['bahan', $bahantt->bahantt_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Judul Bahan: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nama', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('diklattt_id') ? 'has-error' : ''}}">
                {!! Form::label('diklattt_id', 'Diklatta Id: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('diklattt_id', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    {!! $errors->first('diklattt_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('upload') ? 'has-error' : ''}}">
                {!! Form::label('upload', 'Upload: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('upload', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('upload', '<p class="help-block">:message</p>') !!}
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
