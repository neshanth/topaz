<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('home', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        return view("Events.index", ['events' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Events.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'category' => 'required',
            'total_donation' => 'required|numeric|gt:donation_received',
            'donation_received' => 'required|numeric',
            'event_desc' => 'required',
            'event_image' => 'max:10000|mimes:png,jpeg,jpg,svg',
        ]);
        $fileName = null;
        if ($request->file('event_image')) {
            $fileName = $request->file('event_image')->getClientOriginalName();
            $request->file('event_image')->storeAs('public/event', $fileName);
        }
        $data = [
            'event_name' => $request->event_name,
            'category' => $request->category,
            'total_donation' => $request->total_donation,
            'donation_received' => $request->donation_received,
            'event_desc' => $request->event_desc,
            'event_image' => $fileName,

        ];
        Event::create($data);
        return redirect()->back()->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);
        return view("Events.show", ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::where("id", $id)->get();
        return view("Events.edit", ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => "required|unique:events,event_name,$id",
            'category' => 'required',
            'total_donation' => 'required|numeric|gt:donation_received',
            'donation_received' => 'required|numeric',
            'event_desc' => 'required',
            'event_image' => 'max:10000|mimes:png,jpeg,jpg,svg',
        ]);
        $fileName = null;
        if ($request->hasFile('event_image') && !$this->checkIfImageExists($id, $request)) {
            $fileName = $request->file('event_image')->getClientOriginalName();
            $existingImage = $this->getImage($id);
            $this->deleteImage($existingImage);
            $request->file("event_image")->storeAs('public/event', $fileName);
        } else {
            $fileName = $request->file('event_image')->getClientOriginalName();
        }
        $data = [
            'event_name' => $request->event_name,
            'category' => $request->category,
            'total_donation' => $request->total_donation,
            'donation_received' => $request->donation_received,
            'event_desc' => $request->event_desc,
            'event_image' => $fileName,

        ];
        Event::find($id)->update($data);
        return redirect()->back()->with("success", "Event Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $imageName =  $this->getImage($id);
        $this->deleteImage($imageName);
        Event::destroy($id);
        return redirect()->action([EventsController::class, 'index']);
    }
    public function home()
    {
        $events = Event::all();
        return view("Events.home", ['events' => $events]);
    }
    private function checkIfImageExists($id, Request $request): bool
    {
        $event = Event::find($id);
        return $event->event_image == $request->file('event_image')->getClientOriginalName();
    }
    private function deleteImage($imageName)
    {
        Storage::delete("/public/event/" . $imageName);
    }
    private function getImage($id)
    {
        $event = Event::find($id);
        return $event->event_image;
    }
}
