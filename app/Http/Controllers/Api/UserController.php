<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\Note;

class UserController extends Controller
{
    public function index()
    {
        //get posts
        $user = User::latest()->paginate(5);
        $data = Note::latest()->with('user')->paginate(5);

        //return collection of posts as a resource
        return new UserResource(true, 'List Data Posts', $user, $data);
    }
}
