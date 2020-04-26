<?php

namespace App\Repositories\Auth;

use App\Models\User;
use App\Events\User\UserCreated;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;

class AuthRepository extends BaseRepository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function create(array $data): User
    {
        return DB::transaction(function () use ($data) {
            $user = $this->model::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);

            if ($user) {
                event(new UserCreated($user));
                return $user;
            }
        });

        throw new GeneralException(__('exceptions.users.create_error'));
    }
}
