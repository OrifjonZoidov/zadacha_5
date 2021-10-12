@extends('layouts.header')
@section('index')

    <table class="table" >
        <thead>
        <tr class="text-center">
            <th>№</th>
            <th>Имя</td>
            <th>Автор</td>
            <th>ISBN</td>
            <th>Год выпуска</td>
            <th></th>
        </tr>
        </thead>

        @php $i=0 @endphp
        @foreach($test  as $item)
            @php $i++ @endphp
            <tr class="text-center">
                <td>{{$i}}</th>
                <td>{{$item['title']}}</th>
                <td>{{$item['author']}}</th>
                <td>{{$item['isbn']}}</th>
                <td>{{$item['year_of_publication']}}</th>
                <td>
                    <form action="{{route('store-cart')}}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="book_id" value="{{$item['id']}}">
                            <button class="btn btn-success">Добавить в корзину</button>
                        </form>

                </td>
            </tr>
            @endforeach

    </table>
{{--<section class="jumbotron text-center">--}}
    {{--<div class="container">--}}
        {{--<h1>Добро пожаловать</h1>--}}
        {{--<p class="lead text-muted">Здесь можно найти нужную книгу быстро</p>--}}
    {{--</div>--}}
{{--</section>--}}
{{--<div class="album py-5 bg-light">--}}
    {{--@if(session('success'))--}}
        {{--<div class="alert alert-success">--}}
            {{--{{session('success')}}--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
{{--<div class="col">--}}

            {{--@foreach($test as $item)--}}
                {{--<div class="col-md-4">--}}
                    {{--<div class="card mb-4 shadow-sm">--}}


                        {{--<div class="card-body">--}}
                            {{--<div class="card-text">--}}
                                {{--<h5> {{$item->title}}</h5>--}}
                                {{--<p><em> {{$item->author}}</em></p>--}}
                                {{--<dl class="row">--}}
                                    {{--<dt class="col-sm-3">ISBN</dt>--}}
                                    {{--<dd class="col-sm-9 text-right">{{$item->isbn}}</dd>--}}

                                    {{--<dt class="col-sm-9">Год публикации</dt>--}}
                                    {{--<dd class="col-sm-3 text-right">{{$item->year_of_publication}}</dd>--}}

                                    {{--<dt class="col-sm-4">Издатель</dt>--}}
                                    {{--<dd class="col-sm-8 text-right">{{$item->publisher}}</dd>--}}
                                {{--</dl>--}}
                            {{--</div>--}}
                            {{--<div class="d-flex justify-content-between align-items-center">--}}
                                {{--<div class="btn-group">--}}
                                    {{--<a class="btn btn-sm btn-outline-secondary" href="{{route('show',$item->id)}}">Купить</a>--}}

                                {{--</div>--}}
                                {{--<small class="text-muted">{{$item->price }} USD</small>--}}
{{--<div>--}}
       {{--@foreach($cart  as $item)--}}
           {{--@if($item->user->contains('user_id',Auth::id()))--}}
               {{--<a href="{{route('drop_cart',['id'=>$item['id']])}}" class="btn btn-danger">Удалить из корзину</a>--}}
           {{--@else--}}
               {{--<form action="{{route('create_cart')}}" method="get">--}}
                   {{--@csrf--}}
                   {{--<input type="hidden"name="test" value="{{$item['id']}}">--}}
                   {{--<button class="btn btn-success">Добавить в корзину</button>--}}
               {{--</form>--}}
           {{--@endif--}}
       {{--@endforeach--}}

{{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--@endforeach--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-9">--}}
                        {{--{{$test->links()}}--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
@endsection
@extends('layouts.footer')
