<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $name = "Donal Trump";
        $age = "75";
        $id = $request->id;

        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        $cookie = cookie('access_token', '123-XYZ', 1, '/', $_SERVER['SERVER_NAME'], false, true);

        return response()->json($data, 200)->cookie($cookie);
    }
}
