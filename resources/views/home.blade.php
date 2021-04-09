@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Post::all()->count();
                                    @endphp
                                </h3>

                                <p  class="text-uppercase">Yangiliklar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-newspaper"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Category::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Kategoriyalar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-list"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Video::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Videolar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-video"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Gallery::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Galeriya</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-photo-video"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Event::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Tadbirlar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-primary">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Notification::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">E'lonlar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-credit-card"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Staff::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Xodimlar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-cyan">
                            <div class="inner">
                                <h3>
                                    @php
                                        echo \App\Models\Word::all()->count();
                                    @endphp
                                </h3>

                                <p class="text-uppercase">Hikmatli so'zlar</p>
                            </div>
                            <div class="icon">
                                <i class="fa fa-file-word"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
