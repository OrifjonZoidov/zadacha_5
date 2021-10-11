@extends('layouts.header')

@section('cart')
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">


                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>Продукт</th>
                            <th>Цена</th>
                            <th>Количество</th>
                            <th>Общее</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($test as $row)
                            <tr>
                                <td>{{$row->$test}}</td>
                                <td>{{$row->$row}}</td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:" class="input-text qty">

                                    </div>
                                </td>
                                <td></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                {{--            {{$test->links()}}--}}
            </div>
        </div>
    </div>
@endsection


@extends('layouts.footer')
