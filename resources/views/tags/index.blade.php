
@extends ("layouts.app")

    @section('content')

        <h2>Tags</h2>

        <table class="table table-striped">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tag name</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($tags as $tag)
            <tr>
                <td> {{ $tag->id }} </td>
                <td> {{ $tag->name }} </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

