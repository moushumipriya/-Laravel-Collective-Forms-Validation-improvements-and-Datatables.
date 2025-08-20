@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error) <li>{{ $error }}</li> @endforeach
        </ul>
    </div>
@endif

<div class="form-group mb-3">
    {!! Form::label('title', 'Task Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mb-3">
    {!! Form::label('status', 'Status') !!}
    {!! Form::select('status', ['Pending' => 'Pending', 'Completed' => 'Completed'], null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit($buttonText, ['class' => 'btn btn-success']) !!}
