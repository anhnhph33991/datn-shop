{{-- @extends('user.layouts.main')
@section('title')
    Trang thanh toán
@endsection
@section('content')


@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
</div>
@endif
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <h2>Thanh Toán</h2>
            <ul>
                <li><a href="{{ route('home') }}">Trang Chủ</a></li>
                <li class="active">Thanh Toán</li>
            </ul>
        </div>
    </div>
</div>

<div class="checkout-area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-details">
                    <h3>Thông tin thanh toán</h3>
                    <form action="{{ route('payment.process') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label>Họ Và Tên:</label>
                                <input type="text" name="fullname" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Email:</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Số điện thoại:</label>
                                <input type="text" name="phone" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label>Địa chỉ:</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                        </div>

                        <div class="order-summary mt-4">
                            <h3>Đơn Hàng Của Bạn</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Tổng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cartItems as $item)
                                    <tr>
                                        <td>{{ $item->productVariant->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ number_format($item->price_at_time * $item->quantity, 0, ',', '.') }} VND</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="2">Mã giảm giá:</th>
                                        <td>
                                            <input type="text" id="voucher-code" placeholder="Nhập mã giảm giá" class="form-control">
                                            <button id="apply-voucher" class="btn btn-secondary mt-2">Áp dụng</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="2">Tổng tiền:</th>
                                        <th id="total-price" data-original="{{ $cartTotal }}">
                                            {{ number_format(session('discount_amount') ? $cartTotal - session('discount_amount') : $cartTotal, 0, ',', '.') }} VND
                                        </th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="payment-method mt-4">
                            <h3>Phương Thức Thanh Toán</h3>
                            <input type="hidden" name="amount" id="final-amount" value="{{ $cartTotal }}">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="momo" id="momo" required>
                                <label class="form-check-label" for="momo">Thanh toán qua Momo</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="momoQr" id="momoQr" required>
                                <label class="form-check-label" for="momoQr">Thanh toán qua MomoQr</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="vnpay" id="vnpay">
                                <label class="form-check-label" for="vnpay">Thanh toán qua VNPay</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="cod" id="cod">
                                <label class="form-check-label" for="cod">Thanh toán khi nhận hàng (COD)</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-block mt-4">Tiến Hành Thanh Toán</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('apply-voucher').addEventListener('click', function(event) {
        event.preventDefault();
        let voucherCode = document.getElementById('voucher-code').value.trim();
        let totalElement = document.getElementById('total-price');
        let originalTotal = parseFloat(totalElement.getAttribute('data-original'));

        if (!voucherCode) {
            alert("Vui lòng nhập mã giảm giá!");
            return;
        }

        fetch("{{ route('checkout.applyVoucher') }}", {
                method: "POST"
                , body: JSON.stringify({
                    voucher_code: voucherCode
                    , cart_total: originalTotal
                })
                , headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    , 'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Áp dụng mã giảm giá thành công! Giảm: " + data.discount_amount.toLocaleString('vi-VN') + " VND");
                    totalElement.textContent = data.new_total.toLocaleString('vi-VN') + ' VND';
                    document.getElementById('final-amount').value = data.new_total;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Lỗi:', error));
    });

</script>

<style>
    .checkout-area {
        background: #f8f9fa;
        padding: 40px 0;
    }

    .order-summary,
    .payment-method {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

</style>
@endsection --}}


@extends('user.layouts.master')
@section('title', 'Check Out')

@section('style')

<style>
    .checkout-area {
        background: #f8f9fa;
        padding: 40px 0;
    }

    .order-summary,
    .payment-method {
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

</style>

@endsection

@section('content')

<div class="container checkout-container">
    <ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
        <li>
            <a href="{{ route('cart') }}">Giỏ hàng</a>
        </li>
        <li class="active">
            <a href="{{ route('checkout') }}">Thanh toán</a>
        </li>
        <li class="disabled">
            <a>Thanh Toán Thành Công</a>
        </li>
    </ul>

    <div class="login-form-container">
        <form action="{{ route('payment.process') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <ul class="checkout-steps">
                        <li>
                            <h2 class="step-title">Thông tin thanh toán</h2>

                            <div id="checkout-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Họ và tên
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" />

                                            @error('fullname')
                                            <span class="fst-italic text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="email" name="email" class="form-control" value="{{ old('email') }}" />
                                            @error('email')
                                            <span class="fst-italic text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>
                                                Số điện thoại
                                                <abbr class="required" title="required">*</abbr>
                                            </label>
                                            <input type="tel" name="phone" class="form-control" value="{{ old('phone') }}" />
                                            @error('phone')
                                            <span class="fst-italic text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Địa chỉ
                                                <abbr class="required" title="required">*</abbr></label>
                                            <input type="text" name="address" class="form-control" value="{{ old('address') }}" />
                                            @error('address')
                                            <span class="fst-italic text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>


                    <div class="order-summary">
                        <h3>Đơn hàng của bạn</h3>

                        <table class="table table-mini-cart">
                            <thead>
                                <tr>
                                    <th>Sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Màu</th>
                                    <th>Dung lượng</th>
                                    <th>Giá</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cartItems as $item)
                                <tr>
                                    <td>
                                        <h3 class="product-title">
                                            {{ $item->productVariant->product->name }}
                                        </h3>
                                    </td>

                                    <td>
                                        {{ $item->quantity }}
                                    </td>

                                    <td>
                                        {{ $item->productVariant->color->name }}
                                    </td>

                                    <td>
                                        {{ $item->productVariant->capacity->name }}
                                    </td>

                                    <td style="text-align: left;">
                                        {{ number_format($item->price_at_time * $item->quantity, 0, ',', '.') }} VND
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <td>
                                        <h4>Mã giảm giá:</h4>
                                    </td>
                                    <td id="total-price" colspan="4">
                                        <div class="d-flex">
                                            <input type="text" id="voucher-code" placeholder="Nhập mã giảm giá" class="form-control">
                                        </div>
                                    </td>

                                    <td>
                                        <button id="apply-voucher" class="btn " style="color: black; margin-top: 0px !important">Áp dụng</button>
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <td>
                                        <h4>Total:</h4>
                                    </td>
                                    <td id="total-price" colspan="4">
                                        <b class="total-price" data-original="{{ $cartTotal }}">
                                            <span>
                                                {{ number_format(session('discount_amount') ? $cartTotal - session('discount_amount') : $cartTotal, 0, ',', '.') }} VND
                                            </span>
                                        </b>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>

                        <div class=" payment-methods">
                            <h4 class="font-weight-bold">Phương thức thanh toán</h4>

                            <input type="hidden" name="amount" id="final-amount" value="{{ $cartTotal }}">

                            <div class="form-check">
                                <div>
                                    <input class="form-check-input" type="radio" name="payment_method" value="momo" id="momo" required>
                                    <label class="form-check-label" for="momo">Thanh toán qua Momo</label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="radio" name="payment_method" value="momoQr" id="momoQr" required>
                                    <label class="form-check-label" for="momoQr">Thanh toán qua MomoQr</label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="radio" name="payment_method" value="vnpay" id="vnpay">
                                    <label class="form-check-label" for="vnpay">Thanh toán qua VNPay</label>
                                </div>

                                <div>
                                    <input class="form-check-input" type="radio" name="payment_method" value="cod" id="cod">
                                    <label class="form-check-label" for="cod">Thanh toán khi nhận hàng (COD)</label>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-place-order">
                            Thanh Toán
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- End .row -->
</div>

@endsection

@section('script')
<script>
    document.getElementById('apply-voucher').addEventListener('click', function(event) {
        event.preventDefault();
        let voucherCode = document.getElementById('voucher-code').value.trim();
        let totalElement = document.getElementById('total-price');
        let originalTotal = parseFloat(totalElement.getAttribute('data-original'));

        if (!voucherCode) {
            alert("Vui lòng nhập mã giảm giá!");
            return;
        }

        fetch("{{ route('checkout.applyVoucher') }}", {
                method: "POST"
                , body: JSON.stringify({
                    voucher_code: voucherCode
                    , cart_total: originalTotal
                })
                , headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                    , 'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Áp dụng mã giảm giá thành công! Giảm: " + data.discount_amount.toLocaleString('vi-VN') + " VND");
                    totalElement.textContent = data.new_total.toLocaleString('vi-VN') + ' VND';
                    document.getElementById('final-amount').value = data.new_total;
                } else {
                    alert(data.message);
                }
            })
            .catch(error => console.error('Lỗi:', error));
    });

</script>
@endsection
