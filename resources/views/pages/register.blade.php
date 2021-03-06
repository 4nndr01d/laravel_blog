@extends('layout')
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="leave-comment mr0">
                        <h3 class="text-uppercase">Register</h3>
                            @include('admin.errors')
                        <br>
                        <form class="form-horizontal contact-form" role="form" method="post" action="/register">
                            {{csrf_field()}}
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name"
                                           placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="email" class="form-control" value="{{old('email')}}" id="email" name="email"
                                           placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="password" class="form-control" id="password" name="password"
                                           placeholder="password">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn send-btn">Register</button>

                        </form>
                    </div><!--end leave comment-->
                </div>
                @include('pages._sidebar')
            </div>
        </div>
    </div>

@endsection