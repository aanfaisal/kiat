@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Diklat TT</a></li>
        <li class="active">Lihat Diklat TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Diklattt</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Diklat</th><th>Jenis Diklat</th><th>Tglmulai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $diklattt->diklattt_id }}</td> <td> {{ $diklattt->nama }} </td><td> {{ $diklattt->jenistt_id }} </td><td> {{ $diklattt->tglmulai }} </td>
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
