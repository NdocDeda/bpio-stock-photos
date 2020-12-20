
@extends ("layouts.app")

@section('content')

    <h3 class="mt-5">Tag detail</h3>

    <ul class="list-unstyled">
        <li>ID: {{ $tag->id }} </li>
        <li>Name: {{ $tag->name }} </li>
        <li>Date of creation: {{ $tag->created_at }} </li>
        <li>Last update: {{ $tag->updated_at }} </li>
    </ul>

    <a href="{{ url()->previous() }}" class="btn btn-outline-primary"> Back </a>

    

@endsection

