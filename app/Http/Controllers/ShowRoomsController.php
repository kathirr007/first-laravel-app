<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType = null)
    {
        //
        // return response('A listing of rooms...', 200);
        // $rooms = DB::table('rooms')->get();
        /* $rooms = Room::get();
        if($request->query('id') !== null) {
            $rooms = $rooms->where('room_type_id', $request->query('id'));
        } */
        /* if (isset($roomType)) {
            $rooms = Room::where('room_type_id', $roomType)->get();
        } else {
            $rooms = Room::get();
        } */
        // $rooms = Room::byType ($roomType)->withTrashed()->where()->get();
        $rooms = Room::byType($roomType)->get();
        // return response()->json($rooms);
        return view('rooms.index', ['rooms' => $rooms]);
    }
}
