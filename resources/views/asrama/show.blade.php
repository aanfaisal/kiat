@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Asrama')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Asrama</a></li>
        <li class="active">Lihat Asrama</li>
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

                <h1>Asrama</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama</th><th>Petugas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $asrama->asrama_id }}</td>
                                <td> {{ $asrama->nama }} </td>
                                <td> {{ $asrama->petugas }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
