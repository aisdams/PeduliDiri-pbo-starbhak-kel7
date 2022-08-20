<?php

namespace App\Http\Controllers\Api;

use App\Models\Note;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        $login = User::latest()->paginate(5);
        $note = Note::latest()->with('user')->paginate(5);

        return new UserResource(true, 'List Data User', $login, $note);
    }

    public function store(Request $request)
      {
          $validator = Validator::make($request->all(), [
              'nik'          => 'required',
              'namalengkap'  => 'required',
              'level'        => 'required',
              'username'     => 'required',
              'password'     => 'required',
          ]);

          if ($validator->fails()) {
              return response()->json($validator->errors(), 422);
          }
  
          $login = User::create([
              'nik'          => $request->nik,
              'namalengkap'  => $request->namalengkap,
              'level'        => $request->level,
              'username'     => $request->username,
              'password'     => $request->password,
          ]);
  
          return new UserResource(true, 'user Baru Telah Ditambahkan!', $login);
      }

      public function show(User $login)
      {
        return new UserResource(true, 'Data User Ditemukan!', $login);
    }

    public function update(Request $request, User $login)
    {

        $validator = Validator::make($request->all(), [
              'nik'          => 'required',
              'namalengkap'  => 'required',
              'level'        => 'required',
              'username'     => 'required',
              'password'     => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

            $login->update([
                'nik'          => $request->nik,
                'namalengkap'  => $request->namalengkap,
                'level'        => $request->level,
                'username'     => $request->username,
                'password'     => $request->password,
            ]);


        return new UserResource(true, 'Data User Berhasil Diubah!', $login);
    }
    public function destroy(User $login)
    {
        $login->delete();

        return new UserResource(true, 'Data User Berhasil Dihapus!', null);
    }
}