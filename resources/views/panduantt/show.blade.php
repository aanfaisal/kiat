@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Panduan Diklat TT')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Panduan Diklat TT</a></li>
        <li class="active">Lihat Panduan TT</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Panduan TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Panduantt</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Diklat TT</th><th>Nama Panduan</th><th>Isi Panduan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $panduantt->panduantt_id }}</td> <td> {{ $panduantt->diklattt_id }} </td><td> {{ $panduantt->nama }} </td><td> {{ $panduantt->panduan }} </td>
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
