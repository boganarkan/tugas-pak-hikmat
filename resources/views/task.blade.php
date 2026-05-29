@extends('layouts.app')

@section('content')

<div class="task-page">

    <div class="task-header">

        <h1>Redesign UI for App v2.1</h1>

        <div class="task-info">

            <div>
                <small>Project</small>
                <p>Mobile App</p>
            </div>

            <div>
                <small>Due Date</small>
                <p>Oct 15</p>
            </div>

        </div>

        <div class="status">
            Active
        </div>

    </div>

    <div class="task-body">

        <h3>Description</h3>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
        </p>

        <h3>Assignees</h3>

        <div class="assignees">

            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>

        </div>

    </div>

    @include('components.bottomnav')

</div>

@endsection