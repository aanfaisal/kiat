@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Peserta Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Peserta Diklat TA</a></li>
        <li class="active">Lihat Peserta TA</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Peserta Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Daftar Peserta Diklat TA</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Lengkap</th><th>Nama Diklat TA</th><th>Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pesertum->peserta_id }}</td> <td> {{ $pesertum->nama }} </td><td> {{ $pesertum->diklatta_id }} </td><td> {{ $pesertum->pend }} </td>
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
