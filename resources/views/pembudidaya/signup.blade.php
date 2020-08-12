@extends('main')
@section('content')
@section('title', 'Signup Pembudidaya')
<div class="container">
    <a href="{{route('home')}}">
        <h1 class="text-center pt-5"><span class="logo">Dino</span><span class="logo2">kikako</span></h1>
    </a>
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card px-5">
                <h5 class="text-center pt-4">Signup Pembudidaya</h5>
                <div class="row">
                    <div class="col-md-12 my-auto">
                        <form action="{{route('pembudidayapostsignup')}}" method="POST" class="mt-4">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="label-form">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="nama pembudidaya">
                            </div>
                            <div class="form-group">
                                <label class="label-form" class="label-form">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Alamat</label>
                                <input name="alamat" type="text" class="form-control" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label class="label-form">Password</label>
                                <input name="password" type="password" class="form-control" placeholder="password">
                            </div>
                            <div class="text-center mt-5">
                                <button type="submit" class="btn btn-form-signup mb-4">Signup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="margin-top: 30px;"></div>
@endsection
