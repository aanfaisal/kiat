@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Kurikulum Diklat TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Kurikulum Diklat TA</a></li>
        <li class="active">Lihat Kurikulum TA</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Kurikulum Diklat TA</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Kurikulumtum</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Nama Kurikulum</th><th>Nama Diklat TA</th><th>Isi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kurikulumtum->kurikulumta_id }}</td> <td> {{ $kurikulumtum->nama }} </td><td> {{ $kurikulumtum->diklatta_id }} </td><td> {{ $kurikulumtum->isi }} </td>
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
