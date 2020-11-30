
@extends ("layouts.app")

    @section('content')

        <h2>Tags</h2>

        <table class="table table-striped">
        <thead>   
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Total paid</th>
                <th scope="col">Padi on</th>
                <th scope="col">User id</th>
        </thead>
        <tbody>
        @foreach ($payouts as $payout)
            <tr>
                <td> {{ $payout->id }} </td>
                <td> {{ $payout->start_at }} </td>
                <td> {{ $payout->end_at }} </td>
                <td> {{ $payout->total }} </td>
                <td> {{ $payout->pad_at }} </td>
                <td> {{ $payout->user_id }} </td>
            </tr>
        @endforeach
        </tbody>
        </table>

    @endsection

    