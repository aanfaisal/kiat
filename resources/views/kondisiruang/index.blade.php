@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Kondisi Ruang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kondisi Ruang</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kondisi Ruangan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kondisi Ruang <a href="{{ url('kondisiruang/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Kondisi Ruang</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>ID Ruang</th><th>Dinding</th><th>Plafon</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($kondisiruang as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('kondisiruang', $item->kondisiruang_id) }}">{{ $item->ruang_id }}</a></td><td>{{ $item->dinding }}</td><td>{{ $item->plafon }}</td>
                                <td>
                                    <a href="{{ url('kondisiruang/' . $item->kondisiruang_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['kondisiruang', $item->kondisiruang_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $kondisiruang->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
