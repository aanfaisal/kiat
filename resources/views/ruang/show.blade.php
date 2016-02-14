@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Ruangan Kelas')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Ruang Kelas</a></li>
        <li class="active">Lihat Ruang</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Ruangan Kelas</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Ruangan Kelas</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Ruangan</th><th>Nama Petugas</th><th>Nama Atasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $ruang->ruang_id }}</td> <td> {{ $ruang->nama }} </td><td> {{ $ruang->petugas }} </td><td> {{ $ruang->atasan }} </td>
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
