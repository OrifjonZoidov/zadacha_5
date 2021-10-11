@extends('layouts.header')
@section('checkout')

<br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1 align="center">Оформление заказа</h1>
                <form action="{{route('create_orders')}}"method="get">
                    @csrf
                    <div class="form-group">
                        <input type="text"class="form-control" name="fio" placeholder="ФИО">
                        @if($errors->has('fio'))<p style="color: red;">{{$errors->first('fio')}}</p>@endif
                    </div>

                    <div class="form-group">
                        <input type="text"class="form-control" name="email" placeholder="Email адрес">
                        @if($errors->has('email'))<p style="color: red;">{{$errors->first('email')}}</p>@endif
                    </div>
              <div class="form-group">
                    <input type="text"class="form-control" name="tel" placeholder="+992">
                  @if($errors->has('tel'))<p style="color: red;">{{$errors->first('tel')}}</p>@endif
                </div>

                <div class="form-group">
                    <textarea placeholder="Адрес доставки" style="width:100%" name="address"></textarea>
                    @if($errors->has('address'))<p style="color: red;">{{$errors->first('address')}}</p>@endif
               </div>
                <div class="form-group">
                    <textarea placeholder="Комментарии к заказу" style="width:100%" name="comment"></textarea>
                    @if($errors->has('comment'))<p style="color: red;">{{$errors->first('comment')}}</p>@endif
                    </div>

                    <div class="form-group">

        <a  title="Удалить" href="{{route('home')}}" class="btn btn-outline-primary btn-md">Назад</a>
                        <button type="submit" name="save" class="btn btn-primary btn-md">Добавить</button>
{{--        <a  title="Удалить" href="{{route('home')}}" class="btn btn-primary btn-md">Далее</a>--}}


                    </div>



@endsection
