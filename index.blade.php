@extends('layouts.app')

@section('content')
<div class="card shadow p-4">
    <h2 class="mb-3">My Tasks</h2>
    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">+ Add Task</a>

    <table id="tasksTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Edit</a>
                    {!! Form::open(['route' => ['tasks.destroy', $task], 'method' => 'delete', 'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class'=>'btn btn-sm btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
$(document).ready(function () {
    $('#tasksTable').DataTable();
});
</script>
@endsection
