<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class UserRepository extends AbstractRepository
{
    protected static $model = User::class;

    public static function create(array $data = []):Model|null{
        $data['password'] = Hash::make($data['password']);
        return self::resolveModel()::query()->create($data);
    }

    public static function update(int $id, array $data = []):int{
        Validator::make($data, [
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
        ]);
        
        $data['password'] = Hash::make($data['password']);
        return self::resolveModel()::query()->where(['id' => $id])->update($data);
    }

    public static function findByEmail(string $email):Model|null{
        return self::resolveModel()::query()->where(['email' => $email])->first();

    }

    public static function findByLastedCreated(){
        return self::resolveModel()::query()->orderByDesc('id')->first();
    }
}