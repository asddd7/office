@extends('layouts.app')

@section('title', 'Login - SFA App')

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <h1 class="auth-title">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
                @error('password')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="btn-section">
                <div class="auth-links">
                    <p class="auth-link-item">
                        Forgot your password?
                        <a href="{{ route('password.request') }}" class="forgot-password-link">Reset</a>
                    </p>
                    <p class="auth-link-item">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="register-link">Register</a>
                    </p>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
    </div>
</div>