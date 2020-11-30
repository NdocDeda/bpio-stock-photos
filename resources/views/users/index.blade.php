
@extends ("layouts.app")

    @section('content')

        <h2>Users</h2>

        <table class="table table-striped">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">E-mail</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td> {{ $user->id }} </td>
                <td> {{ $user->email }} </td>
                <td> {{ $user->first_name }} </td>
                <td> {{ $user->last_name }} </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

