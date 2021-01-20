<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('eathub.index');
    }

    public function generateRandomString($length = 10) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'number' => ['required', 'digits_between:8,8'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        $password = bcrypt($request->input('password'));
        $id = $this->generateRandomString();

        $response = Http::post('http://207.244.233.27:8002/user/create', [
            'Id' => $id,
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'number' => '+225'.$request->input('number'),
            'address' => $request->input('address'),
            'password' => $password,
        ]);

        if($response->successful() == true)
        {
            toastr()->success('Vous avez été enregistré avec succès !', 'Hoora !');
            return back();
        }else
        {
            toastr()->warning("Vous n'avez pas été enregistré car une erreur s'est produite, veuillez réessayer !", 'Zut !');
            return back();
        }
    }
}
