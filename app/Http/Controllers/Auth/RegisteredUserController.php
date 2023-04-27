<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        
        $request->validate([
            'name' => ['required', 'string','min:2','max:40','regex:/^[A-Za-z]{2,10}\s[A-Za-z]{2,10}$/'],
            'tel' =>['required', 'string', 'max:10','regex:/^(05|06|07)([0-9]{2}){4}$/'],
            'whatsapp' =>['required', 'string', 'max:10','regex:/^(05|06|07)([0-9]{2}){4}$/'],
            'profession'  =>['required', 'string', 'max:50','regex:/^[a-z]{2,50}$/'],
            'ville'  =>['required', 'string', 'max:50','regex:/^[a-z]{2,50}$/'],
            'adresse'  =>['required', 'string', 'max:100'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class,'regex:/^[a-zA-Z0-9.-_]{3,80}@gmail.com$/'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $list=[];
    if(user::all()->count() === 0){
        $list = [
            
            'name' => $request->name,
            'tel' => $request->tel,
            'whatsapp' => $request->whatsapp,
            'profession'  => $request->profession,
            'ville'  => $request->ville,
            'adresse'  => $request->adresse,
            'admin'  => 1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
    }else{
        $list = [
            'name' => $request->name,
            'tel' => $request->tel,
            'whatsapp' => $request->whatsapp,
            'profession'  => $request->profession,
            'ville'  => $request->ville,
            'adresse'  => $request->adresse,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
    }
    $user = User::create($list);
        event(new Registered($user));
        Auth::login($user);
        if( $user->admin === 1){
            return redirect()->route('pageAdmin');
        }else{
            return redirect(RouteServiceProvider::HOME);
        };
       
    //  
        
    }
}
