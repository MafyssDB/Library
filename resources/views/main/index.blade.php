@extends('layouts.main')
@section('content')

    <div class="container py-5">
        <div class="row">

            <div class="col-lg-3">
                <h1 class="h2 pb-4">Категории</h1>
                <form action="{{ route('main.index') }}" method="GET">
                    <select name="category_id" class="form-control">
                        <option value="" disabled selected>Выберите категорию</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif>{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Применить</button>
                    </div>
                </form>

            </div>

            <div class="col-lg-9">
                <div class="row">
                    <form action="{{ route('main.index') }}" class="mb-4" method="GET">
                        <div class="input-group input-group-sm">
                            <input placeholder="Поиск по автору или названию книги"  @if(isset($_GET['search'])) value="{{$_GET['search']}}" @endif name="search" type="text" class="form-control">
                            <span class="input-group-append">
                                <button type="submit" class="btn btn-info btn-flat">Поиск</button>
                            </span>
                        </div>
                    </form>
                    @foreach($books as $book)
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0">
                            <div class="card rounded-0">
                            {{-- Проверка для того, чтобы выводилась картинка, которая создается из фабрики(создается с URL, а так не работает при "{{ asset('storage/'. $book->image) }}")--}}
                                @if(stristr($book->image, 'https://'))
                                    <img class="card-img rounded-0 img-fluid" src="{{ asset($book->image) }}">
                                @else
                                    <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'. $book->image) }}">
                                @endif
{{--                                <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'. $book->image) }}">--}}
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="{{ route('main.show', $book->id) }}"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="{{ route('main.show', $book->id) }}" class="h3 text-decoration-none"><strong>{{ $book->title }}</strong></a>
                                <span class="w-100 d-flex justify-content-between mt-2 mb-2">{{ $book->author }}</span>
                                <p class="fst-italic mb-0">{{ $book->category->title }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="mx-auto">
                        {{ $books->withQueryString()->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Content -->



@endsection
