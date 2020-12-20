
@extends ("layouts.app")

    @section('content')
        <h2>Tags</h2>

        <a href="{{ route('tags.create') }}" class="btn btn-primary mt-5">Add</a>

        <table class="table table-striped mt-3">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tag name</th>
                <th scope="col">Actions</th> 
            </tr>
        </thead>
        <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td> {{ $tag->id }} </td>
                <td> {{ $tag->name }} </td>
                <td> 
                    <a class="btn btn-outline-primary" href="{{ route('tags.show',['tag' => $tag->id] ) }}"> Details </a>
                    <a class="btn btn-outline-primary" href="{{ route('tags.edit',['tag' => $tag->id] ) }}"> Edit </a>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

