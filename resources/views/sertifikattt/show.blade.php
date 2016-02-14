@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Sertifikat Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Sertifikat Diklat TT</a></li>
        <li class="active">Lihat Sertifikat TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Sertifikat Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Sertifikat Diklat TT</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Peserta TT</th><th>Nama Diklat TT</th><th>Nama Jenis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $sertifikattt->sertifikattt_id }}</td> <td> {{ $sertifikattt->pesertatt_id }} </td><td> {{ $sertifikattt->diklattt_id }} </td><td> {{ $sertifikattt->jenistt_id }} </td>
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
