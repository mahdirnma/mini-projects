<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreUserRequest;
use App\Http\Requests\Api\UpdateUserRequest;
use App\Http\Resources\UserApiResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $users = User::paginate('2');
        $users = User::all();
        return $this->response(UserApiResource::collection($users), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $user=User::create($request->all());
//        return $this->response($user, 'user added successfully',201);
        return $this->response(new UserApiResource($user), 'user added successfully',201);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return $this->response(new UserApiResource($user), 'show user successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        return $this->response(new UserApiResource($user), 'user updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return $this->response(null, 'user deleted successfully');
    }
}
