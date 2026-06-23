@extends('admin.layouts.master')
@section('content')
<style>
    /* Clean reset or override */
    .login-main {
        position: relative;
        min-height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: radial-gradient(circle at 10% 20%, rgb(15, 23, 42) 0%, rgb(30, 41, 59) 90%) !important;
        overflow: hidden;
        padding: 40px 15px;
    }
    
    /* Background Glow Effects */
    .login-main::before, .login-main::after {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        filter: blur(85px);
        opacity: 0.12;
        z-index: 1;
        pointer-events: none;
    }
    .login-main::before {
        background: #3b82f6;
        top: 20%;
        left: 15%;
    }
    .login-main::after {
        background: #10b981;
        bottom: 20%;
        right: 15%;
    }

    /* Container adjustments */
    .custom-container {
        z-index: 2;
        width: 100%;
        max-width: 440px;
        margin: 0 auto;
    }

    /* Glassmorphism Login Card */
    .login-area {
        background: rgba(30, 41, 59, 0.7) !important;
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.08) !important;
        border-radius: 16px !important;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3) !important;
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
        filter: drop-shadow(0 2px 8px rgba(255, 255, 255, 0.1));
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
        background: rgba(255, 255, 255, 0.05) !important;
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
</style>

<div class="login-main">
    <div class="container custom-container">
        <div class="login-area">
            <div class="login-wrapper">
                <div class="login-wrapper__top">
                    <!-- Crisp & modern official logo -->
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
