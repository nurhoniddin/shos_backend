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
                                <a class="btn btn-info" href="{{ route('staff.create') }}"><i
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
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>FIO</th>
                                        <th>Lavozimi</th>
                                        <th>Tel</th>
                                        <th>image</th>
                                        <th style="width: 150px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($staffs as $staff)
                                        <tr>
                                            <td>{{ $staff->id }}</td>
                                            <td>{{ $staff->fname_uz }}</td>
                                            <td>{{ $staff->position_uz }}</td>
                                            <td>{!! $staff->phone_uz !!}</td>
                                            <td><img style="width: 150px; height:100px" src="{{ Storage::url($staff->image) }}" alt=""></td>
                                            <td style="font-size: 20px">
                                                <form action="{{ route('staff.destroy',$staff->id) }}" method="post">
                                                    <a href="{{ route('staff.edit',$staff->id) }}"><i
                                                            class="fa fa-pen-square"></i></a>
                                                    <a href="{{ route('staff.show',$staff->id) }}"><i
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
                                {{ $staffs->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

