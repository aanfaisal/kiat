@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kondisi Ruang')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kondisi Ruang</a></li>
        <li class="active">Lihat Kondisi Ruang</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kondisi Ruang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kondisi Ruang</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>ID Ruang </th><th>Dinding</th><th>Plafon</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kondisiruang->kondisiruang_id }}</td> <td> {{ $kondisiruang->ruang_id }} </td><td> {{ $kondisiruang->dinding }} </td><td> {{ $kondisiruang->plafon }} </td>
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
