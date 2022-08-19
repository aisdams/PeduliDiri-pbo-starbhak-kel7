<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {

        $login = User::latest()->paginate(5);

        return new UserResource(true, 'Data User', $login);
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
}
