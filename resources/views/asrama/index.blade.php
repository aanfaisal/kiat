@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Asrama')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Asrama</a></li>
        <li class="active">Here</li>
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

                <h1>Asrama <a href="{{ url('asrama/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Asrama</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama</th><th>Petugas</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($asrama as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('asrama', $item->asrama_id) }}">{{ $item->nama }}</a></td><td>{{ $item->petugas }}</td>
                                <td>
                                    <a href="{{ url('asrama/' . $item->asrama_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['asrama', $item->asrama_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $asrama->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection