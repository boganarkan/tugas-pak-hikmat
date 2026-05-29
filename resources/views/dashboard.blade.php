@extends('layouts.app')

@section('content')

<div class="dashboard-page">

    <div class="dashboard-header">

        <div>
            <h2>Hi, Girls</h2>
            <p>Welcome Back</p>
        </div>

        <i class="fa-solid fa-bell"></i>

    </div>

    <div class="stats-grid">

        <div class="stats-card">
            <h3>Projects</h3>
            <p>20</p>
        </div>

        <div class="stats-card">
            <h3>Tasks</h3>
            <p>136</p>
        </div>

        <div class="stats-card">
            <h3>Active</h3>
            <p>40</p>
        </div>

        <div class="stats-card">
            <h3>Complete</h3>
            <p>200</p>
        </div>

    </div>

    <div class="activity">

        <h3>Recent Activity</h3>

        <div class="activity-item">
            <h4>UI Design</h4>
            <p>2 Hours Ago</p>
        </div>

        <div class="activity-item">
            <h4>Frontend Fix</h4>
            <p>5 Hours Ago</p>
        </div>

    </div>

    @include('components.bottomnav')

</div>

@endsection