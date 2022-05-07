@extends("Layout.layout")


@section("content")

<div class="container">
    <div class="row py-3 px-2">
        <h2 class="text-center my-3 single-event-title">{{ $event->event_name }}</h2>
        <p class="text-center text-custom-primary" style="font-size: 1.4rem;">Donation Raised</p>
        <div class="progress single-event-progress">
            <div class="progress-bar single-event-bar" style="width:<?= ceil(($event->donation_received / $event->total_donation) * 100) ?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="d-flex justify-content-between p-0">
            <p class="received"> &#8377 {{ $event->donation_received }}</p>
            <p class="seperator text-primary">OF</p>
            <p class="total-amount"> &#8377 {{$event->total_donation }}</p>
        </div>
        <div class="col-md-12  mx-auto my-5">
            {!! $event->event_desc !!}
        </div>
    </div>
</div>

@endsection