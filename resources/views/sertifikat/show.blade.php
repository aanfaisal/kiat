@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Sertifikat Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sertifikat Diklat TA</a></li>
        <li class="active">Lihat Sertifikat</li>
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

                <h1>Sertifikat</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th><th>Nama Peserta</th><th>Diklat TA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $sertifikat->sertifikat_id }}</td>
                                <td> {{ $sertifikat->peserta_id }} </td>
                                <td> {{ $sertifikat->diklatta_id }} </td>
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
