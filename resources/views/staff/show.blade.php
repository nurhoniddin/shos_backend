@extends('layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Xodimlar</h1>
                    </div>
                    {{--                    <div class="col-sm-6">--}}
                    {{--                        <ol class="breadcrumb float-sm-right">--}}
                    {{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
                    {{--                            <li class="breadcrumb-item active">Simple Tables</li>--}}
                    {{--                        </ol>--}}
                    {{--                    </div>--}}
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a class="btn btn-info" href="{{ route('staff.index') }}"><i
                                        class="fa fa-arrow-left "></i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img style="width: 300px; height:300px" src="{{ Storage::url($staff->image) }}" alt="">
                                    </div>
                                    <div class="col-md-6">
                                        <strong>FIO</strong>
                                        <hr>
                                        {{ $staff->fname_uz }}
                                        <hr>
                                        <strong>lavozimi</strong>
                                        <hr>
                                        {{ $staff->position_uz }}
                                        <hr>
                                        <strong>phone_uz</strong>
                                        <hr>
                                        {!! $staff->phone_uz !!}
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

