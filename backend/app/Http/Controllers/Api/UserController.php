<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Cookies;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $email, $password)
    {
        $user = User::where('email', $email)
            ->where('password', $password)
            ->first();

        if ($user) {
            if (session()->exists('logeado') && session('logeado') === false) {
                //session()->forget('logeado');
                session()->put('logeado', true);
            } else {
                session()->put('logeado', true);
                error_log('Logeado desde el controlador :D: ' . session()->get('logeado'));
            }
            $cookie=Cookie::make('logeo',true);
            return response()->json($user, 200);
        } else {
            session()->put('logeado', false); // establecer a false
            return response()->json(['error' => 'Error de logeo'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = User::destroy($id);
    }
}
