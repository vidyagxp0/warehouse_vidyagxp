@extends('admin.layouts.master')
@section('content')
<style>
    /* Reset and Main Layout */
    .login-main {
        position: relative;
        min-height: 100vh;
        width: 100%;
        display: flex;
        background: rgb(15, 23, 42) !important;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    /* Left Brand Section */
    .brand-section {
        flex: 1.1;
        background: linear-gradient(135deg, #0b0f19 0%, #111827 100%);
        border-right: 1px solid rgba(255, 255, 255, 0.05);
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 60px 80px;
        position: relative;
        overflow: hidden;
    }
    
    /* Background grid pattern for left section */
    .brand-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: radial-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px);
        background-size: 24px 24px;
        pointer-events: none;
    }

    .brand-section .glow-orb {
        position: absolute;
        width: 450px;
        height: 450px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
        top: -100px;
        left: -100px;
        pointer-events: none;
    }

    .brand-content {
        position: relative;
        z-index: 2;
        max-width: 480px;
    }

    .brand-tag {
        display: inline-block;
        background: rgba(59, 130, 246, 0.08);
        border: 1px solid rgba(59, 130, 246, 0.15);
        color: #60a5fa;
        padding: 6px 14px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 24px;
    }

    .brand-title {
        font-size: 38px;
        font-weight: 800;
        line-height: 1.25;
        color: #f8fafc;
        margin-bottom: 16px;
    }
    
    .brand-title span {
        background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .brand-subtitle {
        font-size: 15px;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 40px;
    }

    /* Bullet features list */
    .feature-list {
        display: flex;
        flex-direction: column;
        gap: 24px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .feature-item {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .feature-icon {
        width: 44px;
        height: 44px;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #3b82f6;
        font-size: 20px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .feature-text {
        text-align: left;
    }

    .feature-text h5 {
        font-size: 14.5px;
        font-weight: 700;
        color: #f1f5f9;
        margin: 0 0 4px 0;
    }

    .feature-text p {
        font-size: 12.5px;
        color: #64748b;
        margin: 0;
    }

    /* Right Form Section */
    .form-section {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px 60px;
        position: relative;
        background: radial-gradient(circle at 80% 20%, rgb(20, 29, 47) 0%, rgb(15, 23, 42) 100%) !important;
    }

    .form-section::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(16, 185, 129, 0.06) 0%, transparent 70%);
        bottom: -50px;
        right: -50px;
        pointer-events: none;
    }

    .form-container {
        width: 100%;
        max-width: 420px;
        z-index: 2;
    }

    /* Login Area Card */
    .login-area {
        background: rgba(30, 41, 59, 0.45) !important;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.07) !important;
        border-radius: 16px !important;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.35) !important;
        padding: 40px 32px !important;
        width: 100%;
    }

    .login-wrapper {
        background: transparent !important;
        border: none !important;
        padding: 0 !important;
        box-shadow: none !important;
    }

    /* Logo & Header Section */
    .login-wrapper__top {
        text-align: center;
        margin-bottom: 35px;
    }
    .login-wrapper__top img {
        height: 55px !important;
        width: auto !important;
        margin-bottom: 24px;
        filter: drop-shadow(0 2px 8px rgba(255, 255, 255, 0.15));
    }
    .login-wrapper__top .title {
        font-size: 20px !important;
        font-weight: 700 !important;
        color: #f8fafc !important;
        letter-spacing: 0.5px;
        margin: 0;
    }
    .login-wrapper__top .title strong {
        color: #3b82f6 !important;
    }

    /* Form Fields */
    .form-group {
        margin-bottom: 22px;
    }
    .form-group label {
        display: block;
        font-size: 13px;
        font-weight: 600;
        color: #94a3b8 !important;
        margin-bottom: 8px;
        text-align: left;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.04) !important;
        border: 1px solid rgba(255, 255, 255, 0.12) !important;
        border-radius: 8px !important;
        color: #f8fafc !important;
        padding: 12px 16px !important;
        font-size: 14px !important;
        transition: all 0.25s ease !important;
        width: 100%;
    }
    .form-control:focus {
        background: rgba(255, 255, 255, 0.08) !important;
        border-color: #3b82f6 !important;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2) !important;
        outline: none !important;
    }

    /* Remember me & Forget Password */
    .remember-forget-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 26px;
        flex-wrap: wrap;
        gap: 12px;
    }
    .form-check {
        display: flex;
        align-items: center;
        gap: 8px;
        margin: 0;
        padding: 0;
    }
    .form-check-input {
        background-color: rgba(255, 255, 255, 0.05) !important;
        border: 1px solid rgba(255, 255, 255, 0.15) !important;
        border-radius: 4px !important;
        cursor: pointer;
        width: 16px;
        height: 16px;
        margin: 0;
    }
    .form-check-input:checked {
        background-color: #3b82f6 !important;
        border-color: #3b82f6 !important;
    }
    .form-check-label {
        font-size: 13px;
        color: #94a3b8 !important;
        cursor: pointer;
        user-select: none;
    }
    .forget-text {
        font-size: 13px;
        color: #3b82f6 !important;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
    }
    .forget-text:hover {
        color: #60a5fa !important;
        text-decoration: underline !important;
    }

    /* Login Button */
    .cmn-btn {
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%) !important;
        border: none !important;
        border-radius: 8px !important;
        color: #ffffff !important;
        padding: 12px 20px !important;
        font-size: 15px !important;
        font-weight: 700 !important;
        letter-spacing: 0.5px;
        transition: all 0.25s ease !important;
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2) !important;
        width: 100%;
        cursor: pointer;
    }
    .cmn-btn:hover {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%) !important;
        transform: translateY(-1px);
        box-shadow: 0 6px 15px rgba(37, 99, 235, 0.3) !important;
    }
    .cmn-btn:active {
        transform: translateY(0);
    }

    /* Mobile Responsiveness */
    @media (max-width: 991px) {
        .brand-section {
            display: none !important;
        }
        .form-section {
            flex: 1 !important;
            padding: 40px 20px !important;
        }
    }
</style>

<div class="login-main">
    <!-- Slide 1: Brand Info Column -->
    <div class="brand-section">
        <div class="glow-orb"></div>
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
                        <h5>Full Purchasing & Sales Audits</h5>
                        <p>Detailed tracking of inventory movements and status logs.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Slide 2: Form Column -->
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
