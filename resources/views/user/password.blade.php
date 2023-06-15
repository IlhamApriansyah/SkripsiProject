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
            <form action="{{ route('password.action') }}" method="POST">
                @csrf
                <section class="ftco-section">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-4">
                                <div class="login-wrap py-5">
                                    <div class="mb-3">
                                        <label>Password <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="old_password" />
                                    </div>
                                    <div class="mb-3">
                                        <label> Masukan Password Baru<span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="new_password" />
                                    </div>
                                    <div class="mb-3">
                                        <label>Konfirmasi Password Baru<span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" name="new_password_confirmation" />
                                    </div>
                                    <div class="mb-3">
                                        <button class="btn btn-primary">Ubah Password</button>
                                        <a class="btn btn-danger" href="{{ route('home') }}">Kembali</a>
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
