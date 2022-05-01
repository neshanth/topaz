@extends("Layout.layout")

@section("content")
<div class="container">
    <div class="row px-3 my-3">
        <h2 class="text-center py-3">Our Events</h2>
        @foreach ($events as $event)
        <div class="col-md-3 my-3">
            <div class="event">
                <img src="{{ asset("storage/event/".$event->event_image) }}" class="d-block w-100" />
                <div class="event-info">
                    <p class="event-cat">{{ $event->category }}</p>
                    <h4 class="event-title">{{ $event->event_name }}</h4>
                    <p class="event-donation">${{ $event->donation_received}} Donated of ${{ $event->total_donation }}</p>
                    <div class="progress">
                        <div class="progress-bar" style="width:<?= ceil(($event->donation_received / $event->total_donation) * 100) ?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="event-details">
                    {!! $event->event_desc !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

@endsection