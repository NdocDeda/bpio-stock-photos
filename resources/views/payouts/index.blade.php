
@extends ("layouts.app")

    @section('content')

        <h2>Tags</h2>

        <a href="{{ route('payouts.create') }}" class="btn btn-primary mt-5">Add</a>

        <table class="table table-striped mt-3">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Total paid</th>
                <th scope="col">Padi on</th>
                <th scope="col">User id</th>
                <th scope="col">Actions</th> 
        </thead>
        <tbody>
        @foreach ($payouts as $payout)
            <tr>
                <td> {{ $payout->id }} </td>
                <td> {{ $payout->start_at }} </td>
                <td> {{ $payout->end_at }} </td>
                <td> {{ $payout->total }} </td>
                <td> {{ $payout->pad_at }} </td>
                <td> {{ $payout->user->first_name }} {{ $payout->user->last_name }} </td>
                
                <td> 
                    <a class="btn btn-outline-primary" href="{{ route('payouts.show',['payout' => $payout->id] ) }}"> Details </a>
                    <a class="btn btn-outline-primary" href="{{ route('payouts.edit',['payout' => $payout->id] ) }}"> Edit </a>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

    