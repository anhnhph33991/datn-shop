{{-- @extends('user.layouts.main')
@section('content')

    <!DOCTYPE html>
    <script src="https://cdn.tailwindcss.com"></script>

    <html>

    <head>
        <title>Đăng ký</title>
    </head>

    <body class="bg-gray-100">

        <!-- Container căn giữa toàn màn hình -->
        <div class="flex items-center justify-center min-h-screen">
            <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-700">Đăng ký tài khoản khách hàng</h2>
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
@csrf
<div>
    <input type="text" name="name" placeholder="Họ tên" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
</div>
<div>
    <input type="email" name="email" placeholder="Email" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('email')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<div>
    <input type="password" name="password" placeholder="Mật khẩu" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('password')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<div>
    <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('password_confirmation')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<div>
    <select name="gender" required class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option value="" disabled selected>Chọn giới tính</option>
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
        <option value="Khác">Khác</option>
    </select>
</div>
<div>
    <input type="text" name="phone" placeholder="Số điện thoại (tùy chọn)" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
</div>
<div>
    <input type="file" name="image" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
</div>
<div>
    <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">Đăng
        ký</button>
</div>
</form>

<p class="text-center text-gray-600 mt-4">Đã có tài khoản?
    <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Đăng nhập ngay</a>
</p>
</div>
</div>

</body>

</html>
@endsection --}}


@extends('user.layouts.master')
@section('title', 'Register')

@section('content')
<div class="page-header">
    <div class="container d-flex flex-column align-items-center">
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Register
                    </li>
                </ol>
            </div>
        </nav>

        <h1>Đăng ký tài khoản</h1>
    </div>
</div>


<div class="container login-container">
    <div class="col-lg-12 mx-auto">
        <div class="d-flex justify-content-center align-items-center">
            <div style="width: 30%">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div>
                        <label>
                            Họ tên
                            <span class="required">*</span>
                        </label>
                        <input type="text" class="form-input form-wide" name="name" value="{{ old('name') }}" placeholder="Nhập họ tên" required>
                        @error('name')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror

                    </div>


                    <div>
                        <label for="register-email">
                            Email
                            <span class="required">*</span>
                        </label>
                        <input type="email" name="email" class="form-input form-wide" id="register-email" value="{{ old('email') }}" placeholder="Nhập email" required />
                        @error('email')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password">
                            Mật khẩu
                            <span class="required">*</span>
                        </label>
                        <input type="password" name="password" class="form-input form-wide" id="register-password" value="{{ old('password') }}" placeholder="Nhập mật khẩu" required />
                        @error('password')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password">
                            Xác nhận mật khẩu
                            <span class="required">*</span>
                        </label>
                        <input type="password" name="password_confirmation" class="form-input form-wide" id="register-password" value="{{ old('password_confirmation') }}" placeholder="Xác nhận mật khẩu" required />
                        @error('password_confirmation')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password">
                            Giới tính
                            <span class="required">*</span>
                        </label>
                        <select name="gender" required class="form-control">
                            <option value="" disabled selected>Chọn giới tính</option>
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                        @error('gender')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password">
                            Số điện thoại
                            <span class="required">*</span>
                        </label>
                        <input type="text" name="phone" class="form-input form-wide" value="{{ old('phone') }}" placeholder="Số điện thoại" required />
                        @error('phone')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div>
                        <label for="register-password">
                            Hình ảnh
                            <span class="required">*</span>
                        </label>
                        <input type="file" name="image" class="form-input form-wide" id="register-password" value="{{ old('image') }}" required />
                        @error('image')
                        <div class="text-danger fst-italic">
                            <span class="required">*</span>
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <p class="text-center text-gray-600 mt-4">Đã có tài khoản?
                            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Đăng nhập ngay</a>
                        </p>
                    </div>

                    <div class="form-footer mb-2">
                        <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
