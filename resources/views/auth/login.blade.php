{{-- @extends('user.layouts.main')
@section('content')
    <!DOCTYPE html>
    <html>
    <script src="https://cdn.tailwindcss.com"></script>

    <head>
        <title>Đăng nhập</title>
    </head>

    <body class="bg-gray-100">

        <div class="flex items-center justify-center ">
            <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Đăng nhập tài khoản</h2>

                @if ($errors->any())
                    <div class="mb-4">
                        @foreach ($errors->all() as $error)
                            <p class="text-red-500 text-sm">{{ $error }}</p>
@endforeach
</div>
@endif

<form action="{{ route('login') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <input type="email" name="email" placeholder="Email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div>
        <input type="password" name="password" placeholder="Mật khẩu" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    </div>
    <div>
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">Đăng
            nhập</button>
    </div>
</form>

<p class="text-center text-gray-600 mt-4">Chưa có tài khoản?
    <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Đăng ký ngay</a>
</p>
</div>
</div>

</body>

</html>
@endsection --}}


@extends('user.layouts.master')
@section('title', 'Login')

@section('content')
<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Login
                    </li>
                </ol>
            </div>
        </nav>

        <h1>Đăng Nhập</h1>
    </div>
</div>


<div class="container login-container">

    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div class="d-flex justify-content-center align-items-center">
                <div style="width: 30%">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <div class="mb-1">
                            <label for="login-email">
                                Email
                                <span class="required">*</span>
                            </label>
                            <input type="email" class="form-input form-wide" id="login-email" name="email" value="{{ old('email') }}" required />

                            @error('email')
                            <div class="text-danger fst-italic">
                                <span class="required">*</span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div>
                            <label for="login-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide @error('password') is-invalid @enderror" id="login-password" name="password" value="{{ old('password') }}" required />

                            @error('password')
                            <div class="text-danger fst-italic">
                                <span class="required">*</span>
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-footer">
                            <div class="custom-control custom-checkbox mb-0">
                                <input type="checkbox" class="custom-control-input" id="lost-password" />
                                <label class="custom-control-label mb-0" for="lost-password">Remember
                                    me</label>
                            </div>

                            <a href="forgot-password.html" class="forget-password text-dark form-footer-right">Forgot
                                Password?</a>
                        </div>


                        <div class="mb-3">
                            {{-- <a href="{{ route('register') }}" class="text-black-50 fs-3">Register</a> --}}

                            <p class="text-center text-gray-600 mt-4">Chưa có tài khoản?
                                <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Đăng ký ngay</a>
                            </p>
                        </div>

                        <button type="submit" class="btn btn-dark btn-md w-100">
                            LOGIN
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
