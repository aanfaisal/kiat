@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Peserta Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Peserta Diklat TT</a></li>
        <li class="active">Lihat Peserta TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Peserta Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Daftar Peserta Diklat TT</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Lengkap </th><th>Nama Diklat TT</th><th>Pendidikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $pesertatt->pesertatt_id }}</td> <td> {{ $pesertatt->nama }} </td><td> {{ $pesertatt->diklattt_id }} </td><td> {{ $pesertatt->pend }} </td>
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
