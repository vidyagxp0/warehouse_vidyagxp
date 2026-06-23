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

    /* Disable original theme's black background overlay */
    body .login-main::before {
        display: none !important;
    }

    /* Left panel: Pharma brand background */
    body .brand-section {
        flex: 1.2 !important;
        height: 100vh !important;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 50%, #e2e8f0 100%) !important;
        border-right: 1px solid #e2e8f0 !important;
        display: flex !important;
        flex-direction: column !important;
        justify-content: center !important;
        padding: 60px 80px !important;
        position: relative !important;
        overflow: hidden !important;
        margin: 0 !important;
    }

    /* Clinical mesh dot pattern */
    body .brand-section::before {
        content: '' !important;
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background-image: radial-gradient(#cbd5e1 1.5px, transparent 1.5px) !important;
        background-size: 32px 32px !important;
        opacity: 0.5 !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    /* Elegant tech network lines */
    body .tech-lines {
        position: absolute !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        background: 
            linear-gradient(90deg, rgba(37,99,235,0.015) 1px, transparent 1px) 0 0 / 120px 100%,
            linear-gradient(0deg, rgba(37,99,235,0.015) 1px, transparent 1px) 0 0 / 100% 120px !important;
        z-index: 1 !important;
    }

    /* Soft medical blue/teal glow spheres */
    body .glow-sphere-1 {
        position: absolute !important;
        width: 600px !important;
        height: 600px !important;
        border-radius: 50% !important;
        background: radial-gradient(circle, rgba(13, 148, 136, 0.05) 0%, rgba(13, 148, 136, 0) 70%) !important;
        top: -200px !important;
        left: -150px !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    body .glow-sphere-2 {
        position: absolute !important;
        width: 500px !important;
        height: 500px !important;
        border-radius: 50% !important;
        background: radial-gradient(circle, rgba(37, 99, 235, 0.04) 0%, rgba(37, 99, 235, 0) 70%) !important;
        bottom: -150px !important;
        right: -100px !important;
        pointer-events: none !important;
        z-index: 1 !important;
    }

    body .brand-content {
        position: relative !important;
        z-index: 2 !important;
        max-width: 520px !important;
    }

    /* Pharma Compliance Badges */
    body .badge-container {
        display: flex !important;
        gap: 10px !important;
        margin-bottom: 28px !important;
        flex-wrap: wrap !important;
    }

    body .brand-tag {
        display: inline-block !important;
        background: rgba(37, 99, 235, 0.07) !important;
        border: 1px solid rgba(37, 99, 235, 0.15) !important;
        color: #2563eb !important;
        padding: 5px 12px !important;
        border-radius: 20px !important;
        font-size: 10.5px !important;
        font-weight: 700 !important;
        letter-spacing: 0.5px !important;
        text-transform: uppercase !important;
    }

    body .brand-tag.compliance {
        background: rgba(13, 148, 136, 0.07) !important;
        border: 1px solid rgba(13, 148, 136, 0.15) !important;
        color: #0d9488 !important;
    }

    /* Title & Brand */
    body .brand-title {
        font-size: 36px !important;
        font-weight: 800 !important;
        line-height: 1.2 !important;
        color: #0f172a !important;
        margin-bottom: 18px !important;
        text-align: left !important;
        letter-spacing: -0.5px !important;
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

    /* Clean corporate / medical feature items */
    body .feature-list {
        display: flex !important;
        flex-direction: column !important;
        gap: 26px !important;
        padding: 0 !important;
        margin: 0 !important;
        list-style: none !important;
    }

    body .feature-item {
        display: flex !important;
        align-items: flex-start !important;
        gap: 18px !important;
    }

    body .feature-icon {
        width: 44px !important;
        height: 44px !important;
        background: #ffffff !important;
        border: 1px solid #e2e8f0 !important;
        border-radius: 12px !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        color: #0d9488 !important;
        font-size: 20px !important;
        box-shadow: 0 4px 6px rgba(0,0,0,0.02) !important;
        flex-shrink: 0 !important;
    }

    body .feature-icon.blue {
        color: #2563eb !important;
    }

    body .feature-text {
        text-align: left !important;
    }

    body .feature-text h5 {
        font-size: 14.5px !important;
        font-weight: 700 !important;
        color: #1e293b !important;
        margin: 0 0 5px 0 !important;
    }

    body .feature-text p {
        font-size: 12.5px !important;
        color: #64748b !important;
        margin: 0 !important;
        line-height: 1.5 !important;
    }

    /* Right Login Panel */
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
        max-width: 380px !important;
        z-index: 2 !important;
    }

    /* Clear existing dark card backgrounds */
    body .login-area {
        background: transparent !important;
        border: none !important;
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

    /* Header styling */
    body .login-wrapper__top {
        text-align: left !important;
        margin-bottom: 30px !important;
        background: transparent !important;
        padding: 0 !important;
        border: none !important;
    }
    
    body .login-wrapper__top::after,
    body .login-wrapper__top::before {
        display: none !important;
    }
    
    body .login-wrapper__top img {
        height: 42px !important;
        width: auto !important;
        margin-bottom: 22px !important;
    }
    
    body .login-wrapper__top .title {
        font-size: 24px !important;
        font-weight: 700 !important;
        color: #0f172a !important;
        letter-spacing: -0.5px !important;
        margin: 0 0 8px 0 !important;
    }
    
    body .login-wrapper__top .title strong {
        color: #2563eb !important;
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
        color: #475569 !important;
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
        background: #f8fafc !important;
        border: 1px solid #cbd5e1 !important;
        border-radius: 10px !important;
        color: #0f172a !important;
        padding: 12px 16px 12px 42px !important; /* Left padding for icons */
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
    
    /* Reset old layout checkbox helper elements */
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

    /* Corporate/Clinical Blue Action Button */
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
        background: #1d4ed8 !important;
        box-shadow: 0 6px 14px rgba(37, 99, 235, 0.2) !important;
        color: #ffffff !important;
    }
    
    body .cmn-btn:active {
        transform: translateY(0.5px) !important;
    }

    /* Warning/Compliance note at bottom of form */
    body .legal-footer {
        margin-top: 32px !important;
        border-top: 1px solid #f1f5f9 !important;
        padding-top: 20px !important;
        font-size: 11px !important;
        color: #94a3b8 !important;
        line-height: 1.5 !important;
        text-align: left !important;
    }

    /* Mobile view rules */
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
        body .legal-footer {
            text-align: center !important;
        }
    }
</style>

<div class="login-main">
    <!-- Left Panel: Pharma Brand & Info -->
    <div class="brand-section">
        <div class="tech-lines"></div>
        <div class="glow-sphere-1"></div>
        <div class="glow-sphere-2"></div>
        
        <div class="brand-content">
            <div class="badge-container">
                <span class="brand-tag">Enterprise WMS</span>
                <span class="brand-tag compliance">GxP Compliance Enforced</span>
            </div>
            
            <h1 class="brand-title">Smart WMS for <span>Pharmaceutical Logistics</span></h1>
            <p class="brand-subtitle">Streamlining inventory management, cold chain validation, and automated barcode verification in a secure, audited environment.</p>
            
            <ul class="feature-list">
                <li class="feature-item">
                    <div class="feature-icon">
                        <i class="las la-qrcode"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Automated GxP Barcode Labeling</h5>
                        <p>Instantly generate and print Code-39 / GS1-128 container tags with trace history.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-icon blue">
                        <i class="las la-thermometer-half"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Zone Controls & Cold Chain Tracking</h5>
                        <p>Enforce zone validation for temperature-controlled active drugs and raw ingredients.</p>
                    </div>
                </li>
                <li class="feature-item">
                    <div class="feature-icon">
                        <i class="las la-fingerprint"></i>
                    </div>
                    <div class="feature-text">
                        <h5>Electronic Signatures & Audit Trails</h5>
                        <p>Continuous logs compliant with FDA 21 CFR Part 11 to audit all inventory shifts.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Right Panel: Secure Login Form -->
    <div class="form-section">
        <div class="form-container">
            <div class="login-area">
                <div class="login-wrapper">
                    <div class="login-wrapper__top">
                        <!-- Official logo -->
                        <img src="https://vidyagxp.com/vidhyaGxp.png" alt="Logo">
                        <h3 class="title">@lang('Welcome to') <strong>{{ __($general->site_name) }}</strong></h3>
                        <p class="subtitle-desc">Enter your credentials to authorize your session.</p>
                    </div>
                    
                    <div class="login-wrapper__body">
                        <form action="{{ route('admin.login.post') }}" method="POST" class="verify-gcaptcha login-form">
                            @csrf
                            <div class="form-group">
                                <label for="username">@lang('Username')</label>
                                <div class="input-wrapper">
                                    <input id="username" type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Enter your username" required autofocus>
                                    <i class="las la-user input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password">@lang('Password')</label>
                                <div class="input-wrapper">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Enter your password" required>
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
                        <strong>Warning:</strong> Authorized pharmaceutical access only. All system activities, operations, and status changes are recorded under FDA audit rules.
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
