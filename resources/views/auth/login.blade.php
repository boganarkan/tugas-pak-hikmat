@extends('layouts.app')

@section('content')

<div class="auth-page">

    <h1>Login</h1>

    <div class="profile-icon">
        <i class="fa-solid fa-user"></i>
    </div>

    <form>

        <div class="input-group">
            <label>Email</label>
            <input type="email" placeholder="Enter email">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" placeholder="Enter password">
        </div>

        <div class="forgot">
            <a href="/forgot">Forgot password?</a>
        </div>

        <a href="/dashboard" class="btn-pink">
            LOGIN
        </a>

    </form>

</div>

@endsection