@extends('layouts.app')

@section('dashboard')
    Dashboard
    <small>Admin</small>
@endsection

@section('breadcrumb')
    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
@endsection

@section('content')
    <!-- Welcome -->
    <div class="row">
        <div class="col-md-12">
            <div class="callout callout-success">
              <h4>Selamat Datang di Inventory 13</h4>

              <p>Sistem Informasi Inventory RPL dan TKJ SMKN 13 Bandung</p>
              <p>Silahkan anda sebagai <b><i>ADMIN</i></b> bisa mengatur semua sistem Inventory 13.</p>
            </div>
        </div>
    </div>

    <!-- Info boxes -->
    <div class="row">
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="  fa fa-briefcase"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Tipe Barang</span>
                    <span class="info-box-number">{{ $book->count() }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Member</span>
                    <span class="info-box-number">{{ $member->count() }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-stats-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Peminjaman</span>
                    <span class="info-box-number">{{ $borrow->count() }}</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="   fa fa-bars"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Kategori</span>
                    <span class="info-box-number">{{ $author->count() }}<small> </small></span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection
