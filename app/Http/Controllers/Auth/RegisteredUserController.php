<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'Nome' => ['required', 'string', 'max:255'],
            'Endereço' => ['required', 'string', 'max:255'],
            'Bairro' => ['required', 'string', 'max:255'],
            'CEP' => ['required', 'integer'],
            'Cidade' => ['required', 'string', 'max:255'],
            'Estado' => ['required', 'string', 'max:255'],
        ]);

        $user = Cliente::create([
            'Nome' => $request->name,
            'Endereço' => $request->email,
            'Bairro' =>$request->password,
            'CEP' =>$request->cep,
            'Cidade' =>$request->cidade,
            'Estado' =>$request->estado,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
