@extends('admin.layout')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @include('admin.errors')
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
        {!! Form::open([
                         'route'=> ['users.update', $user->id],
                         'method' => 'put',
                         'files' => true
                         ]) !!}

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем пользователя</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Имя</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder=""
                                   value="Рахим">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder=""
                                   value="rahim@marlindev.ru">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Пароль</label>
                            <input type="password" class="form-control" name="password" id="exampleInputEmail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <img src="{{$user->getAvatar()}}" alt="" width="200" class="img-responsive">
                            <label for="exampleInputFile">Аватар</label>
                            <input type="file" name="avatar"  id="exampleInputFile">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-warning pull-right">Изменить</button>
                </div>
                <!-- /.box-footer-->
            </div>

        {!! Form::close() !!}

        <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>

@endsection