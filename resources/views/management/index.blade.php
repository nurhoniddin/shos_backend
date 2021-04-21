@extends('layouts.app')

@section('content')
    <div class="content-wrapper" style="min-height: 1360.97px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Boshqaruv</h1>
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
                                <a class="btn btn-info" href="{{ route('management.create') }}"><i
                                        class="fa fa-plus-square "></i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                @if(Session::has('success'))
                                    <p class="alert alert-success">{{ Session::get('success') }}</p>
                                @endif
                                @if(Session::has('error'))
                                    <p class="alert alert-danger">{{ Session::get('error') }}</p>
                                @endif
                                <table class="table table-bordered">
                                    <thead>
                                    <tr class="text-uppercase">
                                        <th style="width: 10px">#</th>
                                        <th>FIO</th>
                                        <th>Tug'ilgan Sana</th>
                                        <th>talim</th>
                                        <th>Ish tajribasi</th>
                                        <th>rasm</th>
                                        <th style="width: 150px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($manages as $m)
                                        <tr>
                                            <td>{{ $m->id }}</td>
                                            <td>{{ $m->fname_uz }}</td>
                                            <td>{{ $m->birthday_uz }}</td>
                                            <td>{!! $m->education_uz !!}</td>
                                            <td>{!! $m->work_ex_uz !!}</td>
                                            <td><img style="width: 150px; height:100px" src="{{ Storage::url($m->image) }}" alt=""></td>
                                            <td style="font-size: 20px">
                                                <form action="{{ route('management.destroy',$m->id) }}" method="post">
                                                    <a href="{{ route('management.edit',$m->id) }}"><i
                                                            class="fa fa-pen-square"></i></a>
                                                    <a href="{{ route('management.show',$m->id) }}"><i
                                                            class="fa fa-eye"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="submit"><i class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                <nav aria-label="Page navigation example">
                                    {{$manages->links("pagination::bootstrap-4")}}
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

