@extends('admin.layouts.master')
@section('content')
<style>
    /* Reset and force full screen layout */
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

    /* Disable original theme's black background overlay and legacy shapes */
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

    /* Left Panel - Illustration and branding */
    body .brand-section {
        flex: 1.25 !important;
        height: 100vh !important;
        background: #ffffff !important;
        border-right: 1px solid #e2e8f0 !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important; /* Centered content vertically */
        padding: 20px 80px !important; /* Proper breathing room */
        position: relative !important;
        overflow: hidden !important;
        margin: 0 !important;
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
        opacity: 0.65 !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    /* Illustration container */
    body .illustration-container {
        width: 100% !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        z-index: 2 !important;
        padding: 0 !important;
        margin-bottom: 20px !important; 
        animation: fadeIn 1s ease-out !important;
    }

    body .wms-illustration {
        max-width: 100% !important;
        max-height: 46vh !important; /* Made illustration slightly larger */
        width: auto !important;
        height: auto !important;
        object-fit: contain !important;
    }

    /* Brand Text Container */
    body .brand-text-container {
        z-index: 2 !important;
        text-align: left !important;
        width: 100% !important;
        animation: fadeIn 1.2s ease-out !important;
    }

    body .brand-title {
        font-size: 42px !important;
        font-weight: 800 !important;
        line-height: 1.1 !important;
        color: #0f172a !important;
        margin: 0 0 8px 0 !important;
        letter-spacing: -1px !important;
    }

    body .brand-subtitle {
        font-size: 18px !important;
        font-weight: 600 !important;
        color: #2563eb !important;
        margin: 0 0 12px 0 !important;
    }

    body .brand-desc {
        font-size: 14px !important;
        color: #334155 !important;
        line-height: 1.6 !important;
        margin: 0 !important;
        max-width: 520px !important;
    }

    /* Right Login Panel - Very Light Blue-Gray Background */
    body .form-section {
        flex: 1 !important;
        height: 100vh !important;
        display: flex !important;
        align-items: center !important; /* Centered vertically to automatically fit screen */
        justify-content: center !important;
        padding: 20px 60px !important; /* Comfortable padding */
        position: relative !important;
        background: #f8fafc !important;
        margin: 0 !important;
    }

    body .form-container {
        width: 100% !important;
        max-width: 440px !important;
        z-index: 2 !important;
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    /* Login Card */
    body .login-card {
        background: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 16px !important;
        box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.05), 0 10px 10px -5px rgba(15, 23, 42, 0.02) !important;
        padding: 20px 30px !important; /* Shorter top/bottom padding to fit everything */
        width: 100% !important;
    }

    /* Header styling - Forced transparent background and readability fixes */
    body .login-wrapper,
    body .login-wrapper__top {
        background: transparent !important;
        border: none !important;
        box-shadow: none !important;
        padding: 0 !important;
        margin: 0 0 10px 0 !important; /* Reduced vertical space */
        text-align: center !important;
    }
    
    body .right-brand-logo-container {
        text-align: center !important;
        margin-top: 0 !important;
        margin-bottom: 6px !important; /* Compact spacing */
        width: 100% !important;
    }

    body .right-brand-logo {
        width: 140px !important; /* Elegant compact size to save height */
        height: auto !important;
        max-width: 100% !important;
        object-fit: contain !important;
        display: block !important;
        margin: 0 auto !important;
    }
    
    body .login-wrapper__top .title {
        font-size: 20px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        letter-spacing: -0.5px !important;
        margin: 0 0 2px 0 !important; /* Reduced margin */
        text-align: center !important;
    }
    
    body .login-wrapper__top .subtitle-desc {
        font-size: 12.5px !important;
        color: #475569 !important;
        margin: 0 !important;
        line-height: 1.5 !important;
        text-align: center !important;
    }

    body .login-wrapper__body {
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }

    /* Form Fields styling */
    body .form-group {
        margin-bottom: 12px !important; /* Compact spacing */
        position: relative !important;
    }
    
    body .form-group label {
        display: block !important;
        font-size: 12px !important; 
        font-weight: 600 !important;
        color: #334155 !important;
        margin-bottom: 6px !important;
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
        font-size: 16px !important;
        pointer-events: none !important;
        transition: color 0.2s ease !important;
        z-index: 5 !important;
    }

    body .form-control {
        background: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 8px !important;
        color: #0f172a !important;
        padding: 10px 14px 10px 38px !important;
        font-size: 13px !important; 
        transition: all 0.2s ease !important;
        width: 100% !important;
        height: 42px !important; 
    }

    body .form-control:focus {
        background: #ffffff !important;
        border-color: #2563eb !important;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.08) !important;
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
        margin-bottom: 12px !important; /* Compact spacing */
        flex-wrap: wrap !important;
        gap: 12px !important;
    }
    
    body .forget-text {
        font-size: 12px !important; 
        color: #2563eb !important;
        text-decoration: none !important;
        font-weight: 600 !important;
        transition: color 0.2s ease !important;
    }
    
    body .forget-text:hover {
        color: #1d4ed8 !important;
        text-decoration: underline !important;
    }

    /* Solid Blue Action Button */
    body .cmn-btn {
        background: #2563eb !important;
        border: none !important;
        border-radius: 8px !important;
        color: #ffffff !important;
        padding: 10px 18px !important;
        font-size: 13.5px !important; 
        font-weight: 600 !important;
        letter-spacing: 0.2px !important;
        transition: all 0.2s ease !important;
        box-shadow: 0 4px 6px rgba(37, 99, 235, 0.12) !important;
        width: 100% !important;
        cursor: pointer !important;
        height: 42px !important; 
        margin: 0 !important;
    }
    
    body .cmn-btn:hover {
        background: #0f172a !important;
        box-shadow: 0 6px 14px rgba(15, 23, 42, 0.15) !important;
        color: #ffffff !important;
    }
    
    body .cmn-btn:active {
        transform: translateY(0.5px) !important;
    }

    /* Warning/Compliance note at bottom of card */
    body .legal-footer {
        margin-top: 15px !important; /* Compact spacing */
        border-top: 1px solid #f1f5f9 !important;
        padding-top: 10px !important; /* Compact spacing */
        font-size: 11px !important;
        color: #94a3b8 !important;
        line-height: 1.5 !important;
        text-align: center !important;

    /* Keyframe Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(24px);
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
    <!-- Left Panel: Illustration & Brand -->
    <div class="brand-section">
        <div class="illustration-container">
            <img src="{{ asset('assets/admin/images/warehouse_illustration.png') }}" alt="WMS Illustration" class="wms-illustration">
        </div>
        <div class="brand-text-container">
            <h1 class="brand-title">WMS</h1>
            <h2 class="brand-subtitle">Warehouse Management System</h2>
            <p class="brand-desc">Enterprise inventory control, cold chain validation, and automated labeling dashboard.</p>
        </div>
    </div>

    <!-- Right Panel: Secure Login Form -->
    <div class="form-section">
        <div class="form-container">
            <div class="login-card">
                <div class="login-wrapper__top">
                    <!-- Logo positioned on top of welcome message -->
                    <div class="right-brand-logo-container">
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="right-brand-logo">
                    </div>
                    <h3 class="title">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                    <p class="subtitle-desc">Enter your credentials to authorize WMS access.</p>
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
                            <div class="custom-control custom-checkbox form-check-primary">
                                <input class="custom-control-input" name="remember" type="checkbox" id="remember">
                                <label class="custom-control-label" for="remember">@lang('Remember Me')</label>
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
