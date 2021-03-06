@extends('admin.layouts.master')

@section('page-title')
Contractor Detail
@endsection
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Contractor Detail</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Contractor Detail</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Contractor Information</h3>
    </div>
    <div class="card-body">
        <div class="row">
        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            <div class="row">
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Estimated budget</span>
                    <span class="info-box-number text-center text-muted mb-0">2300</span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Total amount spent</span>
                    <span class="info-box-number text-center text-muted mb-0">2000</span>
                </div>
                </div>
            </div>
            <div class="col-12 col-sm-4">
                <div class="info-box bg-light">
                <div class="info-box-content">
                    <span class="info-box-text text-center text-muted">Estimated project duration</span>
                    <span class="info-box-number text-center text-muted mb-0">20</span>
                </div>
                </div>
            </div>
            </div>
            <div class="row">
            <div class="col-12">
                <h4>Recent Activity</h4>
                <div class="post">
                    <div class="user-block">
                    <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                    </span>
                    <span class="description">Shared publicly - 7:45 PM today</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore.
                    </p>

                    <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v2</a>
                    </p>
                </div>

                <div class="post clearfix">
                    <div class="user-block">
                    <span class="username">
                        <a href="#">Sarah Ross</a>
                    </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore.
                    </p>
                    <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 2</a>
                    </p>
                </div>

                <div class="post">
                    <div class="user-block">
                    <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                    </span>
                    <span class="description">Shared publicly - 5 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore.
                    </p>

                    <p>
                    <a href="#" class="link-black text-sm"><i class="fas fa-link mr-1"></i> Demo File 1 v1</a>
                    </p>
                </div>
            </div>
            </div>
        </div>
        </div>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
@endsection
