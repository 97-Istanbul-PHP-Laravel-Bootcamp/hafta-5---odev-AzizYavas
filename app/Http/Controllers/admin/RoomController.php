<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {

        $data_ = [
            'title' => 'Odalar',
            'hotelCursor' => Room::where('status', '<>', 't')->paginate(10),
        ];

        $roomlist = Room::where('status', '=', 'a')->get();

        return view('admin.room.index', $data_, compact('roomlist'));
    }


    public function edit(Request $request)
    {
        $data_ = [
            'title' => 'Oda Ekle/Düzenle',
            'hotel_' => Hotel::get_()
        ];

        $data_['room'] = new Room();

        if ($request->input('id')) {
            $data_['room'] = Room::findOrFail($request->input('id'));
        }

        return view('admin.room.edit', $data_);
    }


    public function editprice(Request $request){

        $data_ = [
            'title' => 'Oda Fiyat',
            //'hotel_' => Hotel::get_()
        ];

        $data_['room'] = new Room();

        if ($request->input('id')) {
            $data_['room'] = Room::findOrFail($request->input('id'));
        }

        return view('admin.room.editprice', $data_);
    }

    public function save(Request $request)
    {
        $room = Room::updateOrCreate(
            ['id' => $request->id],
            [
                'hotel_id' => $request->hotel_id,
                'stock' => $request->stock,
                'name' => $request->name,
                'adt_cnt' => $request->adt_cnt,
                'kid_cnt' => $request->kid_cnt,
                'info_s' => $request->info_s,
                'spec_x' => $request->spec_x

            ]
        );

        return redirect()->route('admin.room',['id' => $request->get('id')]);
    }
}
