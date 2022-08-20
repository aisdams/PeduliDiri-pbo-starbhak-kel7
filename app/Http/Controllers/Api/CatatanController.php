<?php

namespace App\Http\Controllers\Api;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CatatanResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CatatanController extends Controller
{
    public function index()
    {
        $login = User::latest()->paginate(5);
        $note = Note::latest()->with('user')->paginate(5);

        return new CatatanResource(true, 'List Data NoteCatatanPerjalanan', $login, $note);
    }
    public function store(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'user_id'  => 'required',
              'location' => 'required',
              'bodytemp' => 'required',
              'image'    => 'required',
              'date'     => 'required',
              'time'     => 'required',
          ]);

          if ($validator->fails()) {
              return response()->json($validator->errors(), 422);
          }

          $note = Note::create($request->all());
  
          return new CatatanResource(true, 'CatatanPerjalanan Baru Telah Ditambahkan!', $note);
      }

      public function show(Note $note)
      {
        return new CatatanResource(true, 'Data CatatanPerjalanan Ditemukan!', $note);
    }

    public function update(Request $request, Note $note)
    {

        $validator = Validator::make($request->all(), [
            'user_id'  => 'required',
            'location' => 'required',
            'bodytemp' => 'required',
            'image'    => 'required',
            'date'     => 'required',
            'time'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // $note = Note::FindOrFail($note);
        // $note = Note::create($request->all());
        $note->update($request->all());

        return new CatatanResource(true, 'Data CatatanPerjalanan Berhasil Diubah!', $note);
    }
    public function destroy(User $login)
    {
        $login->delete();

        return new CatatanResource(true, 'Data CatatanPerjalanan Berhasil Dihapus!', null);
    }
}
