
@extends ("layouts.app")

@section('content')

    <h3 class="mt-5">Payout detail</h3>

    <ul class="list-unstyled">
        <li>ID: {{ $payout->id }} </li>
        <li>Billing cycle start date: {{ $payout->start_at }} </li>
        <li>Billing cyke end date: {{ $payout->end_at }} </li>
        <li>Total payout sum: {{ $payout->total }} </li>
        <li>Date of paymant: {{ $payout->paid_at }} </li>
        <li>Payment to: {{ $payout->user_id }} </li>

    </ul>

    <a href="{{ url()->previous() }}" class="btn btn-outline-primary"> Back </a>

    

    

@endsection

