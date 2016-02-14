@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data TOR Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>TOR Diklat TT</a></li>
        <li class="active">Lihat TOR Diklat TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">TOR Diklat TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>TOR Diklat TT</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama</th><th>Status</th><th>Tgl</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $tortt->tortt_id }}</td> <td> {{ $tortt->nama }} </td><td> {{ $tortt->status }} </td><td> {{ $tortt->tgl }} </td>
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
