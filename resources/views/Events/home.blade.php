@extends("Layout.layout")

@section("content")
<div class="container" style="min-height: 50vh;">
    <div class="row px-3 my-3">
        <h2 class="text-center py-3">Our Events</h2>
        @foreach ($events as $event)
        <a href="{{ route("events.show",[$event->id]) }}">
            <div class="col-md-3 my-3">
                <div class="event card">
                    <img src="{{ asset("storage/event/".$event->event_image) }}" class="d-block w-100 card-img-top" />
                    <div class="event-info card-body">
                        <p class="event-cat">{{ $event->category }}</p>
                        <h4 class="event-title">{{ $event->event_name }}</h4>
                        <p class="event-donation">${{ $event->donation_received}} Donated of ${{ $event->total_donation }}</p>
                        <div class="progress">
                            <div class="progress-bar" style="width:<?= ceil(($event->donation_received / $event->total_donation) * 100) ?>%" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="event-details card-footer">
                        {!! substr(strip_tags($event->event_desc),0, 100) !!}...
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>

@endsection