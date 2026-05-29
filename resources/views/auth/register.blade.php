@extends('layouts.app')

@section('content')

<div class="auth-page">

    <h1>Register</h1>

    <form>

        <div class="input-group">
            <label>Name</label>
            <input type="text">
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email">
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password">
        </div>

        <a href="/dashboard" class="btn-pink">
            REGISTER
        </a>

    </form>

</div>

@endsection