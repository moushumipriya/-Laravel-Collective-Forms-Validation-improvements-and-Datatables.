@extends('layouts.app')

@section('content')
<div class="card shadow p-4 mx-auto" style="max-width:600px;">
    <h2 class="mb-3">Add New Task</h2>
    {!! Form::open(['route' => 'tasks.store']) !!}
        @include('tasks._form', ['buttonText' => 'Add Task'])
    {!! Form::close() !!}
</div>
@endsection
