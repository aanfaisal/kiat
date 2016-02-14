@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Jadwal TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Jadwal TA</a></li>
        <li class="active">Lihat Jadwal TA</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Jadwal TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Jadwaltum</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Diklat</th><th>Jenis Diklat</th><th>Tanggal Mulai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $jadwaltum->jadwalta_id }}</td> <td> {{ $jadwaltum->nama }} </td><td> {{ $jadwaltum->jenis_id }} </td><td> {{ $jadwaltum->tglmulai }} </td>
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
