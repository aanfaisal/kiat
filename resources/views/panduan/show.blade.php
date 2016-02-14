@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Panduan Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Panduan Diklat TA</a></li>
        <li class="active">Lihat Panduan</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Panduan Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Panduan</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Diklat TA</th><th>Nama Panduan</th><th>Isi Panduan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $panduan->panduan_id }}</td> <td> {{ $panduan->diklatta_id }} </td><td> {{ $panduan->nama }} </td><td> {{ $panduan->panduan }} </td>
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
