@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">ເພີ່ມຂໍ້ມູນຂອງໜັງສື</div>
                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-warning">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>        @endif

                        {!! Form::open(array('url' => 'books','files' => true)) !!}

                        <div class="col-xs-8">
                            <div class="form-group">
                                <?= Form::label('title', 'ຊື່ໜັງສື'); ?>
                                <?= Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ຊື່ໜັງສື']); ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('price', 'ລາຄາ')  !!}
                                {!! Form::text('price',null,['class' => 'form-control','placeholder' => 'ເຊັ່ນ 100, 100.25']) !!}
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('typebooks_id', 'ໜັງສືປະເພດ')  !!}
                                <?= Form::select('typebooks_id', App\TypeBooks::lists('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'ເລືອກປະເພດຂອງໜັງສື...']); ?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                {!! Form::label('image', 'ຮູບພາບ')  !!}
                                <?= Form::file('image', null, ['class' => 'form-control']) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10">
                                <?= Form::submit('ບັນທືກ', ['class' => 'btn btn-primary']); ?>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection