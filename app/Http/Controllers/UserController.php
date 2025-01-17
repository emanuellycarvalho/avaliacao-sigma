<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\PaginationRequest;
use App\Repositories\UserRepository;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PaginationRequest $request)
    {
        $page = $request->query('page');
        $limit = $request->query('limit');

        if (is_null($page) || is_null($limit)) {
            return UserRepository::all();
        }

        return UserRepository::paginate($page, $limit);
    }

    /**
     * Display a listing of the resource paginating.
     */
    public function pagination($page, $limit)
    {
        return UserRepository::paginate($page, $limit);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        UserRepository::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return UserRepository::find($user->id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        UserRepository::update($user->id, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        UserRepository::delete($user->id);
    }
}
