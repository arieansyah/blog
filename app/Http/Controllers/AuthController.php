<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Repositories\Auth\AuthRepository;

class AuthController extends Controller
{
    public function __construct(AuthRepository $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(AuthRequest $auth, User $user)
    {
        $this->authRepository->create($auth->only(
            'name',
            'email',
            'password',
        ));

        return redirect()->back()->withSuccess(__('alerts.users.created'));
    }
}
