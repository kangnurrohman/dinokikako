@extends('main')
@section('content')
@section('title', 'Signin Pembudidaya')
<div class="container">
    <a href="{{route('home')}}">
        <h1 class="text-center pt-5"><span class="logo">Dino</span><span class="logo2">kikako</span></h1>
    </a>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card px-5">
                <h5 class="text-center pt-4">Signin Pembudidaya</h5>
                <div class="row">
                    <div class="col-md-12 my-auto">
                        <form action="{{route('pembudidayapostsignin')}}" method="POST" class="mt-4">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="label-form">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="password">
                            </div>
                            <p class="mt-5">Belum punya akun ?</p>
                            <span style="display: inline;">
                                <a href="{{route('pembudidayasignup')}}">
                                    <button type="button" class="btn btn-signup mb-4 float-sm-left">Signup</button>
                                </a>
                                <button type="submit" class="btn btn-signin mb-4 float-sm-right">Signin</button>
                            </span>
                            <a href="#">
                                <p class="text-center forget-password">Lupa Password ?</p>
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 30px;"></div>
@endsection
