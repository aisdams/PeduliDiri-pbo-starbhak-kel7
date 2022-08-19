<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;


class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $note = Note::latest()->paginate(5);

        return new UserResource(true, 'List Catatan Perjalanan', $note);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request){

        if($request->ajax()){
    
            $data= Note::where('created_at','like','%'.$request->search.'%')
            ->orwhere('location','like','%'.$request->search.'%')
            ->orwhere('temp','like','%'.$request->search.'%')->get();
        }
    
      }

      public function store(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'user_id'    => 'required',
              'location'   => 'required',
              'bodytemp'   => 'required',
              'image'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              'date'       => 'required',
              'time'       => 'required',
          ]);

          if ($validator->fails()) {
              return response()->json($validator->errors(), 422);
          }
  
          $image = $request->file('image');
          $image->storeAs('public/travels', $image->hashName());
  
          $note = Note::create([
              'user_id'    => $request->user_id,
              'location'   => $request->location,
              'bodytemp'   => $request->bodytemp,
              'image'      => $image->hashName(),
              'date'       => $request->date,
              'time'       => $request->time,
          ]);
  
          return new UserResource(true, 'Catatan Perjalanan Berhasil Ditambahkan!', $note);
      }

      public function show(Note $note)
    {
        return new UserResource(true, 'Data Catatan Perjalanan Ditemukan!', $note);
    }
}
