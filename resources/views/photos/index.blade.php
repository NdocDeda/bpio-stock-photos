
@extends ("layouts.app")

    @section('content')

        <h2>Photos</h2>

        <table class="table table-striped">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Path</th>
                <th scope="col">Vertical resolution</th>
                <th scope="col">Horizontal resolution</th>
                <th scope="col">Owners Id</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($photos as $photo)
            <tr>
                <td> {{ $photo->id }} </td>
                <td> {{ $photo->name }} </td>
                <td> {{ $photo->server_path }} </td>
                <td> {{ $photo->v_resolution }} </td>
                <td> {{ $photo->h_resolution }} </td>
                <td> {{ $photo->iser_id }} </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

