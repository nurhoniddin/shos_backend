@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Yangiliklar</h1>
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
                                <a class="btn btn-primary" href="{{ route('posts.index') }}">Bekor qilish</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
<select class="custom-select" name="category_id" id="category_id" required>
<option value="">kategoriya...</option>
@foreach($category as $categories)
<option value="{{ $categories->id }}">{{ $categories->name_uz }}</option>
@endforeach
</select>
<hr>
<input type="file" name="image" value="" class="form-control">
<hr>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#uz" role="tab" aria-controls="home" aria-selected="true">uz</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#kiril" role="tab" aria-controls="profile" aria-selected="false">kiril</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#ru" role="tab" aria-controls="contact" aria-selected="false">ru</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#en" role="tab" aria-controls="contact" aria-selected="false">en</a>
  </li>
</ul>
<hr>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="uz" role="tabpanel" aria-labelledby="home-tab">
    <input type="text" name="title_uz" value="{{ $post->title_uz }}" class="form-control">
    <hr>
    <input type="text" name="description_uz" value="{{ $post->description_uz }}" class="form-control" placeholder="qisqacha ma'lumot">
    <hr>
    <textarea class="form-control" id="summary-ckeditor" name="body_uz">{{ $post->body_uz }}</textarea>
  </div>
  <div class="tab-pane fade" id="kiril" role="tabpanel" aria-labelledby="profile-tab">
    <input type="text" name="title_cyril" value="{{ $post->title_cyril }}" class="form-control" placeholder="nomi">
    <hr>
    <input type="text" name="description_cyril" value="{{ $post->description_cyril }}" class="form-control" placeholder="qisqacha ma'lumot">
    <hr>
    <textarea class="form-control" id="summary-ckeditor1" name="body_cyril">{{ $post->body_cyril }}</textarea>
  </div>
  <div class="tab-pane fade" id="ru" role="tabpanel" aria-labelledby="contact-tab">
    <input type="text" name="title_ru" value="{{ $post->title_ru }}" class="form-control" placeholder="nomi">
    <hr>
    <input type="text" name="description_ru" value="{{ $post->description_ru }}" class="form-control" placeholder="qisqacha ma'lumot">
    <hr>
    <textarea class="form-control" id="summary-ckeditor2" name="body_ru">{{ $post->body_ru }}</textarea>
  </div>
  <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="contact-tab">
    <input type="text" name="title_en" value="{{ $post->title_en }}" class="form-control" placeholder="nomi">
    <hr>
    <input type="text" name="description_en" value="{{ $post->description_en }}" class="form-control" placeholder="qisqacha ma'lumot">
    <hr>
    <textarea class="form-control" id="summary-ckeditor3" name="body_en">{{ $post->body_en }}</textarea>
  </div>
  </div>
  <button type="submit" class="btn btn-primary mt-3" >Saqlash</button>
</div>
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
