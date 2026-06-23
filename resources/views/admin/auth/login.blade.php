@extends('admin.layouts.master')
@section('content')
<style>
    /* Reset and force full screen edge-to-edge layout */
    html, body {
        margin: 0 !important;
        padding: 0 !important;
        width: 100% !important;
        height: 100% !important;
        overflow: hidden !important;
        background: #ffffff !important;
    }

    body .login-main {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        display: flex !important;
        flex-direction: row !important;
        background: #ffffff !important;
        margin: 0 !important;
        padding: 0 !important;
        z-index: 999999 !important;
        font-family: 'Poppins', sans-serif !important;
        overflow: hidden !important;
    }

    body .login-main::before {
        display: none !important;
    }

    /* Left Brand Section - Minimalist Light Theme */
    body .brand-section {
        flex: 1.2 !important;
        height: 100vh !important;
        background: #f8fafc !important;
        border-right: 1px solid #e2e8f0 !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 60px 80px !important;
        position: relative !important;
        overflow: hidden !important;
        margin: 0 !important;
    }
    
    /* Background dot grid pattern */
    body .brand-section::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background-image: radial-gradient(#cbd5e1 1.5px, transparent 1.5px) !important;
        background-size: 24px 24px !important;
        opacity: 0.45 !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    body .glow-sphere {
        position: absolute !important;
        width: 500px !important;
        height: 500px !important;
        border-radius: 50% !important;
        background: radial-gradient(circle, rgba(37, 99, 235, 0.08) 0%, rgba(37, 99, 235, 0) 70%) !important;
        top: -150px !important;
        left: -150px !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    body .brand-content {
        position: relative !important;
        z-index: 2 !important;
        max-width: 480px !important;
    }

    body .brand-tag {
        display: inline-block !important;
        background: rgba(37, 99, 235, 0.07) !important;
        border: 1px solid rgba(37, 99, 235, 0.15) !important;
        color: #2563eb !important;
        padding: 6px 14px !important;
        border-radius: 30px !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        letter-spacing: 1px !important;
        text-transform: uppercase !important;
        margin-bottom: 24px !important;
    }

    body .brand-title {
        font-size: 38px !important;
        font-weight: 800 !important;
        line-height: 1.25 !important;
        color: #0f172a !important;
        margin-bottom: 16px !important;
        text-align: left !important;
    }
    
    body .brand-title span {
        color: #2563eb !important;
    }

    body .brand-subtitle {
        font-size: 15px !important;
        color: #475569 !important;
        line-height: 1.6 !important;
        margin-bottom: 40px !important;
        text-align: left !important;
    }

    /* Bullet features list */
    body .feature-list {
        display: flex !important;
        flex-direction: column !important;
        gap: 24px !important;
        padding: 0 !important;
        margin: 0 !important;
        list-style: none !important;
    }

    body .feature-item {
        display: flex !important;
        align-items: center !important;
        gap: 16px !important;
    }

    body .feature-icon {
        width: 46px !important;
        height: 46px !important;
        background: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        color: #2563eb !important;
        font-size: 20px !important;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02) !important;
    }

    body .feature-text {
        text-align: left !important;
    }

    body .feature-text h5 {
        font-size: 14.5px !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin: 0 0 4px 0 !important;
    }

    body .feature-text p {
        font-size: 12.5px !important;
        color: #64748b !important;
        margin: 0 !important;
    }

    /* Right Form Section - Light Theme */
    body .form-section {
        flex: 1 !important;
        height: 100vh !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 40px 60px !important;
        position: relative !important;
        background: #ffffff !important;
        margin: 0 !important;
    }

    body .form-container {
        width: 100% !important;
        max-width: 400px !important;
        z-index: 2 !important;
    }

    /* Minimalist Login Area Card */
    body .login-area {
        background: transparent !important;
        border: none !important;
        border-radius: 0 !important;
        box-shadow: none !important;
        padding: 0 !important;
        width: 100% !important;
    }

    body .login-area::after,
    body .login-area::before {
        display: none !important;
    }

    body .login-wrapper {
        background: transparent !important;
        border: none !important;
        padding: 0 !important;
        box-shadow: none !important;
    }

    /* Logo & Header Section */
    body .login-wrapper__top {
        text-align: left !important;
        margin-bottom: 35px !important;
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }
    
    body .login-wrapper__top::after,
    body .login-wrapper__top::before {
        display: none !important;
    }
    
    body .login-wrapper__top img {
        height: 48px !important;
        width: auto !important;
        margin-bottom: 24px !important;
    }
    body .login-wrapper__top .title {
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        letter-spacing: -0.5px !important;
        margin: 0 !important;
    }
    body .login-wrapper__top .title strong {
        color: #2563eb !important;
    }

    body .login-wrapper__body {
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }

    /* Form Fields */
    body .form-group {
        margin-bottom: 22px !important;
    }
    body .form-group label {
        display: block !important;
        font-size: 13.5px !important;
        font-weight: 600 !important;
        color: #475569 !important;
        margin-bottom: 8px !important;
        text-align: left !important;
    }
    body .form-control {
        background: #f8fafc !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 8px !important;
        color: #0f172a !important;
        padding: 12px 16px !important;
        font-size: 14px !important;
        transition: all 0.2s ease !important;
        width: 100% !important;
        height: auto !important;
    }
    body .form-control:focus {
        background: #ffffff !important;
        border-color: #2563eb !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15) !important;
        outline: none !important;
    }

    /* Remember me & Forget Password */
    body .remember-forget-row {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        margin-bottom: 26px !important;
        flex-wrap: wrap !important;
        gap: 12px !important;
    }
    body .form-check {
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    /* Reset line-awesome before check check-label styles */
    body .login-form .form-check .form-check-label::before,
    body .login-form .form-check .form-check-label::after {
        display: none !important;
    }
    body .login-form .form-check .form-check-label {
        padding-left: 0 !important;
        position: static !important;
    }

    body .form-check-input {
        background-color: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 4px !important;
        cursor: pointer !important;
        width: 16px !important;
        height: 16px !important;
        margin: 0 !important;
        position: static !important;
        opacity: 1 !important;
    }
    body .form-check-input:checked {
        background-color: #2563eb !important;
        border-color: #2563eb !important;
    }
    body .form-check-label {
        font-size: 13.5px !important;
        color: #475569 !important;
        cursor: pointer !important;
        user-select: none !important;
        position: static !important;
    }
    body .forget-text {
        font-size: 13.5px !important;
        color: #2563eb !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: color 0.2s ease !important;
    }
    body .forget-text:hover {
        color: #1d4ed8 !important;
        text-decoration: underline !important;
    }

    /* Login Button */
    body .cmn-btn {
        background: #2563eb !important;
        border: none !important;
        border-radius: 8px !important;
        color: #ffffff !important;
        padding: 12px 20px !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        transition: all 0.2s ease !important;
        box-shadow: 0 4px 6px rgba(37, 99, 235, 0.1) !important;
        width: 100% !important;
        cursor: pointer !important;
        height: auto !important;
        margin: 0 !important;
    }
    body .cmn-btn:hover {
        background: #1d4ed8 !important;
        box-shadow: 0 6px 12px rgba(37, 99, 235, 0.2) !important;
        color: #ffffff !important;
    }
    body .cmn-btn:active {
        transform: translateY(1px) !important;
    }

    /* Mobile Responsiveness */
    @media (max-width: 991px) {
        body .brand-section {
            display: none !important;
        }
        body .form-section {
            flex: 1 !important;
            padding: 40px 24px !important;
        }
        body .login-wrapper__top {
            text-align: center !important;
        }
    }
</style>

<div class="login-main">
    <!-- Left: Brand Info Column -->
    <div class="brand-section">
        <div class="glow-sphere"></div>
        <div class="brand-content">
            <span class="brand-tag">Enterprise Portal</span>
            <h1 class="brand-title">WMS - <span>Warehouse Management System</span></h1>
            <p class="brand-subtitle">Streamlining inventory management, location tracking, and automated barcode labeling in one secure, unified platform.</p>
            
            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-icon">
                        <i class="las la-barcode"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Automated Label Generation</h5>
                        <p>Generate, print, and track code-39 barcodes instantly.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-icon">
                        <i class="las la-warehouse"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Smart Location & Storage</h5>
                        <p>Optimize warehouse rack spaces and container states.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-icon">
                        <i class="las la-history"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Full Purchasing & Sales Auditing</h5>
                        <p>Detailed tracking of inventory movements and status logs.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Right: Form Column -->
    <div class="form-section">
        <div class="form-container">
            <div class="login-area">
                <div class="login-wrapper">
                    <div class="login-wrapper__top">
                        <!-- Official logo -->
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo">
                        <h3 class="title">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                    </div>
                    <div class="login-wrapper__body">
                        <form action="{{ route('admin.login.post') }}" method="POST" class="verify-gcaptcha login-form">
                            @csrf
                            <div class="form-group">
                                <label for="username">@lang('Username')</label>
                                <input id="username" type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Enter your username" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="password">@lang('Password')</label>
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>
                            </div>

                            <div class="remember-forget-row">
                                <div class="form-check">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                    <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                                </div>
                                <a href="{{ route('admin.password.reset') }}" class="forget-text">@lang('Forgot Password?')</a>
                            </div>
                            <button type="submit" class="btn cmn-btn">@lang('LOGIN')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        (function($){
        'use strict';
            $('[name=type]').on('change', function(){
                let type = $(this).val();
                let url = `{{ route('admin.login') }}`;
                if(type == 'staff'){
                    url = `{{ route('admin.login') }}`;
                }
                console.log(url);
                $('form')[0].action= url;
            })
        })(jQuery);
    </script>
@endpush
