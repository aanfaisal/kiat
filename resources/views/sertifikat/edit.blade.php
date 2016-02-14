@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data Sertifikat Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sertifikat Diklat TA</a></li>
        <li class="active">Edit Sertifikat TA</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Sertifikat Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Sertifikat</h1>
                <hr/>

                {!! Form::model($sertifikat, [
                    'method' => 'PATCH',
                    'url' => ['sertifikat', $sertifikat->sertifikat_id],
                    'class' => 'form-horizontal'
                ]) !!}

            <div class="form-group {{ $errors->has('peserta_id') ? 'has-error' : ''}}">
                {!! Form::label('peserta_id', 'Nama Peserta : ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('peserta_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('peserta_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('diklatta_id') ? 'has-error' : ''}}">
                {!! Form::label('diklatta_id', 'Diklat TA: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('diklatta_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('diklatta_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jenista_id') ? 'has-error' : ''}}">
                {!! Form::label('jenista_id', 'Jenis Diklat: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('jenista_id', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jenista_id', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('isi') ? 'has-error' : ''}}">
                {!! Form::label('isi', 'Isi: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('isi', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('isi', '<p class="help-block">:message</p>') !!}
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
