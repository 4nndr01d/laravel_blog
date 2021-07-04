@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Листинг сущности</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
{{--                <div class="form-group">--}}
{{--                    <a href="create.html" class="btn btn-success">Добавить</a>--}}
{{--                </div>--}}
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subs as $sub)
                    <tr>
                        <td>{{$sub->id}}</td>
                        <td>{{$sub->email}}
                        </td>
                        <td>
                            {{Form::open(['route'=>['subscribers.destroy', $tag->id], 'method' => 'delete'])}}
                            <button type="submit" class="delete" >
                                <a class="fa fa-remove"></a>
                            </button>
                        {{Form::close()}}
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
</div>
@endsection