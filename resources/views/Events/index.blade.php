@extends("Dashboard.dashboard")

@section("content")
<div class="col-md-12">
    <div class="add-category d-flex justify-content-end my-3">
        <a class="btn btn-custom" href="{{ route('events.create') }}">Add Event <i class="fa fa-plus"></i></a>
    </div>
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr class="bg-custom">
                    <th scope="col">#</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Image</th>
                    <th scope="col">Donation Received</th>
                    <th scope="col">Total Donation</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($events as $key=>$event)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $event->event_name }}</td>
                    <td>{{ $event->category }}</td>
                    <td><img width="100" src="{{ asset("storage/event/".$event->event_image) }}" alt="{{ $event->event_image }}"></td>
                    <td>{{ $event->donation_received }}</td>
                    <td>{{ $event->total_donation }}</td>
                    <td>{!! substr(strip_tags($event->event_desc),0,100) !!}</td>
                    <td class="d-flex align-items-center">
                        <a href="{{ route("events.edit",[$event->id]) }}" class="d-block mx-5">
                            <i class="fas fa-edit text-warning"></i>
                        </a>
                        <form action="{{ route("events.destroy", $event->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn delete-btn text-danger p-0">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection