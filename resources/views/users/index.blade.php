
@extends ("layouts.app")

    @section('content')

        <h2>Users</h2>

        <a href="{{ route('users.create') }}" class="btn btn-primary mt-5">Add</a>

        <table class="table table-striped mt-3">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">E-mail</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Actions</th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->first_name }} </td>
                <td> {{ $user->last_name }} </td>
                <td> 
                    <a class="btn btn-outline-primary" href="{{ route('users.show',['user' => $user->id] ) }}"> Details </a>
                    <a class="btn btn-outline-primary" href="{{ route('users.edit',['user' => $user->id] ) }}"> Edit </a>
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

