@extends('layouts.app')

@section('content')
<div class="mt-5 col-sm-6 mx-auto">
    <form action="{{ route('photos.store') }}" method="POST">


    @csrf

         <div class="form-group">
            <label for="name">Name</label>
            <input value="" name="name" type="text" class="form-control" id="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        

        <div class="form-group">
            <label for="name">Vertical resolution</label>
            <input value="" name="v_resolution" type="text" class="form-control" id="v_resolution">
            @if ($errors->has('v_resolution'))
                <span class="text-danger">{{ $errors->first('v_resolution') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="name">Vertical resolution</label>
            <input value="" name="h_resolution" type="text" class="form-control" id="h_resolution">
            @if ($errors->has('h_resolution'))
                <span class="text-danger">{{ $errors->first('h_resolution') }}</span>
            @endif
        </div>

        <div class="form-group">
            <label for="country">Users</label>
            {{ Form::select('user_id', $users,  ['class' => 'form-control', 'id' => 'users']) }}
        </div>


    <button type="submit" class="btn btn-primary float-right">Save</button>
    <a href="{{ route('photos.index') }}" class="btn btn-link">Cancel</a>
    </form>
</div>

@endsection