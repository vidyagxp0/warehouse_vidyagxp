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

    /* Hide legacy shapes, background overlays and triangles */
    body .login-main::before,
    body .login-main::after,
    body .login-area::before,
    body .login-area::after,
    body .login-wrapper::before,
    body .login-wrapper::after,
    body .login-wrapper__top::before,
    body .login-wrapper__top::after {
        display: none !important;
        content: none !important;
    }

    /* Left panel: Minimal White Brand Background */
    body .brand-section {
        flex: 1.1 !important;
        height: 100vh !important;
        background: #ffffff !important;
        border-right: 1px solid #e2e8f0 !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 60px 100px !important;
        position: relative !important;
        overflow: hidden !important;
        margin: 0 !important;
    }

    /* Left brand logo above WMS in flow */
    body .brand-logo-container-flow {
        margin-bottom: 24px !important;
        text-align: left !important;
    }
    
    body .left-brand-logo-flow {
        height: 180px !important; /* Made big and clean, in flow */
        width: auto !important;
        object-fit: contain !important;
        max-width: 100% !important;
    }

    /* Dot grid pattern */
    body .brand-section::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background-image: radial-gradient(#cbd5e1 1.5px, transparent 1.5px) !important;
        background-size: 24px 24px !important;
        opacity: 0.7 !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    body .brand-content {
        position: relative !important;
        z-index: 2 !important;
        max-width: 480px !important;
        animation: fadeIn 1s ease-out !important;
    }

    /* WMS Title - Black */
    body .brand-title {
        font-size: 80px !important;
        font-weight: 900 !important;
        line-height: 1 !important;
        color: #0f172a !important;
        margin: 0 0 10px 0 !important;
        letter-spacing: -2px !important;
    }

    /* Subtitle - Blue */
    body .brand-subtitle {
        font-size: 20px !important;
        font-weight: 600 !important;
        color: #2563eb !important;
        margin: 0 0 24px 0 !important;
        text-align: left !important;
    }

    /* Divider - Blue */
    body .divider-line {
        width: 60px !important;
        height: 4px !important;
        background: #2563eb !important;
        border-radius: 2px !important;
        margin-bottom: 24px !important;
    }

    /* Description - Minimalist Gray */
    body .brand-desc {
        font-size: 14.5px !important;
        color: #475569 !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        text-align: left !important;
    }

    /* Right Login Panel - Very Light Blue-Gray Background */
    body .form-section {
        flex: 1 !important;
        height: 100vh !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        padding: 40px 60px !important;
        position: relative !important;
        background: #f8fafc !important;
        margin: 0 !important;
    }

    body .form-container {
        width: 100% !important;
        max-width: 420px !important;
        z-index: 2 !important;
    }

    /* Login Card - Clean white card, solid border, soft shadow */
    body .login-card {
        background: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 16px !important;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04) !important;
        padding: 40px !important;
        width: 100% !important;
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    /* Header styling */
    body .login-wrapper__top {
        text-align: center !important;
        margin-bottom: 30px !important;
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }
    
    /* Right card logo (mobile only) */
    body .mobile-brand-logo {
        display: none !important; /* Hidden on desktop to keep form compact */
    }
    
    body .login-wrapper__top .title {
        font-size: 22px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        letter-spacing: -0.5px !important;
        margin: 0 0 6px 0 !important;
    }
    
    body .login-wrapper__top .subtitle-desc {
        font-size: 13.5px !important;
        color: #64748b !important;
        margin: 0 !important;
    }

    body .login-wrapper__body {
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }

    /* Form Fields styling */
    body .form-group {
        margin-bottom: 20px !important;
        position: relative !important;
    }
    
    body .form-group label {
        display: block !important;
        font-size: 13px !important;
        font-weight: 600 !important;
        color: #334155 !important;
        margin-bottom: 8px !important;
        text-align: left !important;
    }
    
    body .input-wrapper {
        position: relative !important;
    }

    body .input-icon {
        position: absolute !important;
        left: 14px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        color: #94a3b8 !important;
        font-size: 18px !important;
        pointer-events: none !important;
        transition: color 0.2s ease !important;
        z-index: 5 !important;
    }

    body .form-control {
        background: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 10px !important;
        color: #0f172a !important;
        padding: 12px 16px 12px 42px !important;
        font-size: 14px !important;
        transition: all 0.2s ease !important;
        width: 100% !important;
        height: 48px !important;
    }

    body .form-control:focus {
        background: #ffffff !important;
        border-color: #2563eb !important;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.08) !important;
        outline: none !important;
    }

    body .form-control:focus + .input-icon {
        color: #2563eb !important;
    }

    /* Remember me & Forget Password */
    body .remember-forget-row {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        margin-bottom: 24px !important;
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
        font-size: 13px !important;
        color: #475569 !important;
        cursor: pointer !important;
        user-select: none !important;
        position: static !important;
    }
    
    body .forget-text {
        font-size: 13px !important;
        color: #2563eb !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: color 0.2s ease !important;
    }
    
    body .forget-text:hover {
        color: #1d4ed8 !important;
        text-decoration: underline !important;
    }

    /* Solid Blue Button */
    body .cmn-btn {
        background: #2563eb !important;
        border: none !important;
        border-radius: 10px !important;
        color: #ffffff !important;
        padding: 13px 20px !important;
        font-size: 14.5px !important;
        font-weight: 600 !important;
        letter-spacing: 0.2px !important;
        transition: all 0.2s ease !important;
        box-shadow: 0 4px 6px rgba(37, 99, 235, 0.12) !important;
        width: 100% !important;
        cursor: pointer !important;
        height: 48px !important;
        margin: 0 !important;
    }
    
    body .cmn-btn:hover {
        background: #0f172a !important; /* Turns black on hover */
        box-shadow: 0 6px 14px rgba(15, 23, 42, 0.15) !important;
        color: #ffffff !important;
    }
    
    body .cmn-btn:active {
        transform: translateY(0.5px) !important;
    }

    /* Warning/Compliance note at bottom of card */
    body .legal-footer {
        margin-top: 30px !important;
        border-top: 1px solid #f1f5f9 !important;
        padding-top: 18px !important;
        font-size: 11px !important;
        color: #94a3b8 !important;
        line-height: 1.5 !important;
        text-align: center !important;
    }

    /* Keyframe Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(-15px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Mobile view rules */
    @media (max-width: 991px) {
        body .brand-section {
            display: none !important;
        }
        body .brand-logo-container {
            display: none !important;
        }
        body .mobile-brand-logo {
            display: inline-block !important; /* Visible on mobile */
            height: 55px !important;
            width: auto !important;
            margin-bottom: 20px !important;
            object-fit: contain !important;
        }
        body .form-section {
            flex: 1 !important;
            padding: 30px 20px !important;
        }
        body .login-card {
            padding: 30px 20px !important;
        }
    }
</style>

<div class="login-main">
    <!-- Left Panel: Minimal Brand Info -->
    <div class="brand-section">
        <div class="brand-content">
            <div class="brand-logo-container-flow">
                <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="left-brand-logo-flow">
            </div>
            <h1 class="brand-title">WMS</h1>
            <h2 class="brand-subtitle">Warehouse Management System</h2>
            <div class="divider-line"></div>
            <p class="brand-desc">Enterprise inventory control, cold chain validation, and automated labeling dashboard.</p>
        </div>
    </div>

    <!-- Right Panel: Secure Login Form -->
    <div class="form-section">
        <div class="form-container">
            <div class="login-card">
                <div class="login-wrapper__top">
                    <!-- Mobile only logo -->
                    <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="mobile-brand-logo">
                    <h3 class="title">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                    <p class="subtitle-desc">Enter your credentials to authorize your session.</p>
                </div>
                
                <div class="login-wrapper__body">
                    <form action="{{ route('admin.login.post') }}" method="POST" class="verify-gcaptcha login-form">
                        @csrf
                        <div class="form-group">
                            <label for="username">@lang('Username')</label>
                            <div class="input-wrapper">
                                <input id="username" type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Enter username" required autofocus>
                                <i class="las la-user input-icon"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">@lang('Password')</label>
                            <div class="input-wrapper">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Enter password" required>
                                <i class="las la-lock input-icon"></i>
                            </div>
                        </div>

                        <div class="remember-forget-row">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember">
                                <label class="form-check-label" for="remember">@lang('Remember Me')</label>
                            </div>
                            <a href="{{ route('admin.password.reset') }}" class="forget-text">@lang('Forgot Password?')</a>
                        </div>
                        
                        <button type="submit" class="btn cmn-btn">@lang('SECURE LOGIN')</button>
                    </form>
                </div>
                
                <div class="legal-footer">
                    <strong>Warning:</strong> Authorized access only. All sessions, actions, and status updates are recorded under audit logs.
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
