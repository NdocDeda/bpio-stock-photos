
@extends ("layouts.app")

@section('content')

    <h3 class="mt-5">User detail</h3>

    <ul class="list-unstyled">
        <li>ID: {{ $user->id }} </li>
        <li>First name: {{ $user->first_name }} </li>
        <li>Last name: {{ $user->last_name }} </li>
        <li>E-mail: {{ $user->email }} </li>
    </ul>

    <a href="{{ url()->previous() }}" class="btn btn-outline-primary"> Back </a>

    

@endsection

