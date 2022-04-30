@extends("Layout.layout")

@section("content")
<div class="container">
    <div class="row px-3 my-3">
        <h2 class="text-center py-3">Our Events</h2>
        @for ($i=0; $i<=6; $i++) <div class="col-md-3 my-3">
            <div class="event">
                <img src="{{ asset("images/1.jpg") }}" class="d-block w-100" />
                <div class="event-info">
                    <p class="event-cat">EDUCATION</p>
                    <h4 class="event-title">Clean Water for all</h4>
                    <p class="event-donation">$119,700 Donated of $210,000</p>
                    <div class="progress">
                        <div class="progress-bar  w-25" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="event-details">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi accusantium, et sapiente ipsam reiciendis iste! Officiis, eligendi. Esse, cumque inventore!</p>
                </div>
            </div>

    </div>

    @endfor
</div>

</div>

@endsection