@extends('admin.layouts.main')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Книги</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <a href="{{ route('admin.books.index') }}" type="button" class="col-1 mb-3 btn btn-block btn-secondary">Назад</a>
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{ $book->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Картинка</td>
                                        <td ><img class="w-25" src="{{ asset('storage/' . $book->image ) }}" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td>Название</td>
                                        <td>{{ $book->title }}</td>
                                    </tr>
                                    <tr>
                                        <td>Автор</td>
                                        <td>{{ $book->author}}</td>
                                    </tr>
                                    <tr>
                                        <td>Категория</td>
                                        <td>{{ $book->category->title}}</td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
