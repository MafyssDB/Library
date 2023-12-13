@extends('layouts.main')
@section('content')

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        {{-- Проверка для того, чтобы выводилась картинка, которая создается из фабрики(создается с URL, а так не работает при "{{ asset('storage/'. $book->image) }}")--}}
                        @if(stristr($book->image, 'https://'))
                            <img class="card-img rounded-0 img-fluid" src="{{ asset($book->image) }}">
                        @else
                            <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'. $book->image) }}">
                        @endif
                        {{--                                <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'. $book->image) }}">--}}
                    </div>

                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $book->title }}</h1>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Автор:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>{{ $book->author }}</strong></p>
                                </li>
                            </ul>
                            <h6>Description:</h6>
                            <p>{{ $book->description }}</p>
                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>{{ $book->category->title }}</li>
                            </ul>
                            @auth()
                                <form action="{{ route('main.file', $book->id)}}" method="POST">
                                    @csrf
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Читать</button>
                                    </div>
                                </form>
                            @endauth
                            @guest()
                                <div class="h2 text-danger border-bottom pb-3 border-light logo">Для чтения необходимо авторизоваться</div>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->



@endsection
