@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if (session('success'))
                <p class="alert alert-success">{{ session('success') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="login-wrap py-5">
                                    <h3 class="text-center mb-0"> Selamat datang </h3>
                                    <p class="text-center">Silahkan login demi akses penuh</p>
                                    <form class="login-form">
                                        <div class="mb-3">
                                            <label>Username <span class="text-danger">*</span></label>
                                            <input class="form-control" type="username" name="username"
                                                value="{{ old('username') }}" />
                                        </div>
                                        <div class="mb-3">
                                            <label>Password <span class="text-danger">*</span></label>
                                            <input class="form-control" type="password" name="password" />
                                        </div>
                                        <div class="w-100 text-md-right">
                                            <a href={{ route('password') }}> Lupa password? </a>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary">Login</button>
                                            <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
                                        </div>
                                        <div class="w-100 text-center mt-4 text">
                                            <p class="mb-0">Belum punya akun?</p>
                                            <a href={{ route('register') }}>Silahkan daftar</a>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection
