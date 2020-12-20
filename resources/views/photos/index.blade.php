
@extends ("layouts.app")

    @section('content')

        <h2>Photos</h2>

        <a href="{{ route('photos.create') }}" class="btn btn-primary mt-5">Add</a>

        <table class="table table-striped mt-3">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Path</th>
                <th scope="col">Vertical resolution</th>
                <th scope="col">Horizontal resolution</th>
                <th scope="col">Owner</th>
                <th scope="col">Tags</th>
                <th scope="col">Actions</th> 
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
                <td> {{ $photo->user->first_name }} {{ $photo->user->last_name }}</td>
                <td> 
                @foreach ($photo->tags as $tag) 
                    {{ $tag->name }} <br/>
                @endforeach
                </td>
                <td> 
                    <a class="btn btn-outline-primary" href="{{ route('photos.show',['photo' => $photo->id] ) }}"> Details </a>
                    <a class="btn btn-outline-primary" href="{{ route('photos.edit',['photo' => $photo->id] ) }}"> Edit </a>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

