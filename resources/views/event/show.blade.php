@extends('layouts.app')
@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tadbirlar</h1>
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
                                <a class="btn btn-info" href="{{ route('event.index') }}"><i
                                        class="fa fa-arrow-left "></i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <strong>title_uz</strong>
                                <hr>
                                {{ $event->title_uz }}
                                <hr>
                                <strong>description_uz</strong>
                                <hr>
                                {{ $event->description_uz }}
                                <hr>
                                <strong>body_uz</strong>
                                <hr>
                                {!! $event->body_uz !!}
                                <hr>
                                <strong>address_uz</strong>
                                <hr>
                                {!! $event->address_uz !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

