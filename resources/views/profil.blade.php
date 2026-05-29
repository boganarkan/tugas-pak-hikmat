@extends('layouts.app')

@section('content')

<div class="profile-page">

    <div class="profile-top">

        <div class="big-profile">
            <i class="fa-solid fa-user"></i>
        </div>

        <h2>Shopee User</h2>

        <p>user@gmail.com</p>

    </div>

    <div class="profile-menu">

        <div class="menu-item">
            My Account
        </div>

        <div class="menu-item">
            Notifications
        </div>

        <div class="menu-item">
            Logout
        </div>

    </div>

    @include('components.bottomnav')

</div>

@endsection