@extends('layouts.app')

@section('content')

<div class="settings-page">

    <h1>Settings</h1>

    <div class="setting-card">
        Dark Mode
    </div>

    <div class="setting-card">
        Language
    </div>

    <div class="setting-card">
        Privacy
    </div>

    <div class="setting-card">
        About App
    </div>

    @include('components.bottomnav')

</div>

@endsection