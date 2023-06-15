@extends('app')
@section('content')
    <div class="row">
        <div class="col-md-6">
            @if ($errors->any())
                @foreach ($errors->all() as $err)
                    <p class="alert alert-danger">{{ $err }}</p>
                @endforeach
            @endif
            <form action="{{ route('register.action') }}" method="POST">
                @csrf
                <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="login-wrap py-5">
                                    <h3 class="text-center mb-0"> Daftar </h3>
                                    <div class="mb-3">
                                        <label>Nama <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" name="name"
                                            value="{{ old('name') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="username" name="username"
                                            value="{{ old('username') }}" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="password" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Konfirmasi Password<span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="password_confirm" />
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Register</button>
                                        <a class="btn btn-danger" href="{{ route('login') }}">Kembali</a>
                                    </div>
                                    <div class="w-100 text-center mt-4 text">
                                        <p class="mb-0">Sudah punya akun?</p>
                                        <a href={{ route('login') }}>Silahkan login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
    </div>
@endsection
