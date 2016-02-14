@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Kurikulum TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kurikulum TA</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kurikulum Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kurikulum TA <a href="{{ url('kurikulumta/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Kurikulum TA</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th>Nama Kurikulum</th><th>Nama Diklat TA</th><th>Isi</th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {{-- */$x=0;/* --}}
                        @foreach($kurikulumta as $item)
                            {{-- */$x++;/* --}}
                            <tr>
                                <td>{{ $x }}</td>
                                <td><a href="{{ url('kurikulumta', $item->kurikulumta_id) }}">{{ $item->nama }}</a></td><td>{{ $item->diklatta_id }}</td><td>{{ $item->isi }}</td>
                                <td>
                                    <a href="{{ url('kurikulumta/' . $item->kurikulumta_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['kurikulumta', $item->kurikulumta_id],
                                        'style' => 'display:inline'
                                    ]) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $kurikulumta->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
