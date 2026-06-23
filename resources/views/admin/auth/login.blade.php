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
        background: #f8fafc !important;
    }

    body .portal-container {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        display: flex !important;
        flex-direction: column !important;
        background: #f8fafc !important;
        margin: 0 !important;
        padding: 0 !important;
        z-index: 999999 !important;
        font-family: 'Poppins', sans-serif !important;
        overflow: hidden !important;
    }

    /* Disable original theme's black background overlay and legacy shapes */
    body .portal-container::before,
    body .portal-container::after,
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

    /* Global Header */
    body .portal-header {
        height: 80px !important;
        background: #ffffff !important;
        border-bottom: 1px solid #e2e8f0 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: space-between !important;
        padding: 0 40px !important;
        z-index: 100 !important;
        flex-shrink: 0 !important;
    }

    body .header-left {
        display: flex !important;
        align-items: center !important;
    }

    body .portal-logo {
        height: 50px !important;
        width: auto !important;
        object-fit: contain !important;
    }

    body .header-divider {
        width: 1px !important;
        height: 28px !important;
        background: #cbd5e1 !important;
        margin: 0 20px !important;
    }

    body .portal-title {
        font-size: 15px !important;
        font-weight: 600 !important;
        color: #0f172a !important;
        letter-spacing: -0.2px !important;
    }

    body .header-right {
        display: flex !important;
        align-items: center !important;
    }

    body .compliance-badge {
        background: rgba(13, 148, 136, 0.08) !important;
        border: 1px solid rgba(13, 148, 136, 0.2) !important;
        color: #0d9488 !important;
        padding: 6px 14px !important;
        border-radius: 20px !important;
        font-size: 11px !important;
        font-weight: 700 !important;
        text-transform: uppercase !important;
        letter-spacing: 0.5px !important;
    }

    /* Main Body Area */
    body .portal-body {
        flex: 1 !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        position: relative !important;
        background: #f8fafc !important;
        padding: 40px 20px !important;
        overflow: hidden !important;
    }

    /* Grid Backdrop */
    body .grid-backdrop {
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

    body .form-container {
        width: 100% !important;
        max-width: 420px !important;
        z-index: 2 !important;
        animation: fadeInUp 0.6s cubic-bezier(0.16, 1, 0.3, 1) !important;
    }

    /* Login Card */
    body .portal-login-card {
        background: #ffffff !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 16px !important;
        box-shadow: 0 20px 25px -5px rgba(15, 23, 42, 0.05), 0 10px 10px -5px rgba(15, 23, 42, 0.02) !important;
        padding: 40px !important;
        width: 100% !important;
    }

    /* Header styling */
    body .card-header-desc {
        text-align: left !important;
        margin-bottom: 28px !important;
    }
    
    body .card-header-desc .title {
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        letter-spacing: -0.5px !important;
        margin: 0 0 6px 0 !important;
    }
    
    body .card-header-desc .subtitle-desc {
        font-size: 13.5px !important;
        color: #64748b !important;
        margin: 0 !important;
        line-height: 1.5 !important;
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

    /* Solid Blue Action Button */
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
        background: #0f172a !important;
        box-shadow: 0 6px 14px rgba(15, 23, 42, 0.15) !important;
        color: #ffffff !important;
    }
    
    body .cmn-btn:active {
        transform: translateY(0.5px) !important;
    }

    /* Legal Footer styling */
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
        body .portal-header {
            padding: 0 20px !important;
            height: 70px !important;
        }
        body .header-divider {
            margin: 0 12px !important;
        }
        body .portal-title {
            display: none !important;
        }
        body .compliance-badge {
            font-size: 9px !important;
            padding: 4px 10px !important;
        }
        body .portal-body {
            padding: 20px 16px !important;
        }
        body .portal-login-card {
            padding: 30px 20px !important;
        }
    }
</style>

<div class="portal-container">
    <!-- Global Header -->
    <header class="portal-header">
        <div class="header-left">
            <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo" class="portal-logo">
            <div class="header-divider"></div>
            <span class="portal-title">Warehouse Management System</span>
        </div>
        <div class="header-right">
            <span class="compliance-badge">GxP Compliance Enforced</span>
        </div>
    </header>

    <!-- Main Body Area -->
    <main class="portal-body">
        <div class="grid-backdrop"></div>
        
        <div class="form-container">
            <div class="portal-login-card">
                <div class="card-header-desc">
                    <h3 class="title">Sign In</h3>
                    <p class="subtitle-desc">Enter your credentials to authorize WMS access.</p>
                </div>
                
                <div class="card-body-form">
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
    </main>
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
