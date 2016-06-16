@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                <?= link_to('books/create', $title = 'Add', ['class' => 'btn btn-primary'], $secure = null); ?>

                <hr>
                <div class="panel panel-default">
                    <div class="panel-heading">ສະແດງຂໍ້ມູນໜັງສືຈຳນວນທັງໝົດ {{   $books->total()   }} ຫົວ</div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <tr>
                                <th>ລະຫັດ</th>
                                <th>ຊື່ໜັງສື</th>
                                <th>ລາຄາ</th>
                                <th>ໝວດໜັງສື</th>
                                <th>ຮູບພາບ</th>
                            </tr>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{   $book->id   }}</td>
                                    <td>{{   $book->title }}</td>
                                    <td>{{   number_format($book->price,2)   }}</td>
                                    <td>{{   $book->typebooks->name   }}</td>
                                    <td><a href="{{ asset('images/'.$book->image) }}">
                                            <img src="{{ asset('images/'.$book->image) }}" width="100px" height="70px"></a></td>
                                </tr>
                            @endforeach
                        </table>
                        <br>
                        {!!  $books->render()   !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection