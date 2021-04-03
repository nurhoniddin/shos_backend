@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gallery</h1>
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
                                <a class="btn btn-primary" href="{{ route('gallery.index') }}">Bekor qilish</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <select class="custom-select" id="inputGroupSelect03" name="category_id" required>
                                    <option value="">kategoriya...</option>
                                    @foreach($gallery as $gallerys)
                                    <option value="{{ $gallerys->id }}">{{ $gallerys->name }}</option>
                                    @endforeach
                                    </select>
                                    <hr>
                                    <input type="file" name="image[]" class="form-control" multiple>
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
