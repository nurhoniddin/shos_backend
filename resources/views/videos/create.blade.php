@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Videolar</h1>
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
                                <a class="btn btn-primary" href="{{ route('gallerycategory.index') }}">Bekor qilish</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('gallerycategory.store') }}" method="post">
                                    @csrf
                                    <input type="text" name="title_uz" class="form-control" placeholder="video nomi uz">
                                    <hr>
                                    <input type="text" name="title_cyril" class="form-control" placeholder="video nomi kiril">
                                    <hr>
                                    <input type="text" name="title_ru" class="form-control" placeholder="video nomi ru">
                                    <hr>
                                    <input type="text" name="title_en" class="form-control" placeholder="video nomi en">
                                    <hr>
                                    <input type="text" name="video_link" class="form-control" placeholder="video_link">
                                    <button type="submit" class="btn btn-primary mt-3" >Saqlash</button>
                                </form>
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
