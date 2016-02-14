@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data Bahan Ajar TA')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Bahan Ajar TT</a></li>
        <li class="active">Lihat Bahan</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Bahan Ajar TT</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Bahan</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th>Judul Bahan</th><th>Nama Diklat TA</th><th>Upload</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $bahantt->bahan_id }}</td> <td> {{ $bahantt->nama }} </td><td> {{ $bahantt->diklatta_id }} </td><td> {{ $bahantt->upload }} </td>
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
