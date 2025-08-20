@extends('layouts.app')

@section('content')
<div class="card shadow p-4 mx-auto" style="max-width:600px;">
    <h2 class="mb-3">Edit Task</h2>
    {!! Form::model($task, ['route' => ['tasks.update', $task], 'method' => 'put']) !!}
        @include('tasks._form', ['buttonText' => 'Update Task'])
    {!! Form::close() !!}
</div>
@endsection
