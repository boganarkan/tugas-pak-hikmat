@extends('layouts.app')

@section('content')

<div class="auth-page">

    <h1>Forgot Password</h1>

    <form>

        <div class="input-group">
            <label>Email</label>
            <input type="email">
        </div>

        <a href="/login" class="btn-pink">
            SEND RESET LINK
        </a>

    </form>

</div>

@endsection