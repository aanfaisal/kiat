@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kondisi Kamar')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kondisi Kamar</a></li>
        <li class="active">Lihat Kondisi Kamar</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kondisi Kamar</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kondisi Kamar</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Kamar</th><th>Kamar Mandi</th><th>Bed</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kondisikm->kondisikm_id }}</td> <td> {{ $kondisikm->kamar_id }} </td><td> {{ $kondisikm->kmmandi }} </td><td> {{ $kondisikm->bed }} </td>
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
