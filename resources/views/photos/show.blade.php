
@extends ("layouts.app")

@section('content')

    <h3 class="mt-5">Photos detail</h3>

    <ul class="list-unstyled">
        <li>ID: {{ $photo->id }} </li>
        <li>Name: {{ $photo->name }} </li>
        <li>Server Path: {{ $photo->server_path }} </li>
        <li>Vertical resolution: {{ $photo->v_resolution }} </li>
        <li>Horizontal resolution: {{ $photo->h_resolution }} </li>
        <li>Owner: {{ $user->first_name}} {{ $user->last_name}}</li>
        <li>Tags:
        @foreach ($photo->tags as $tag) 
                    {{ $tag->name }} 
        @endforeach
        </li>
        
    </ul>

    <a href="{{ url()->previous() }}" class="btn btn-outline-primary"> Back </a>

    

@endsection

