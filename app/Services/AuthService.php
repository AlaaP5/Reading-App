<?php

namespace App\Services;

use App\Events\CreateUserEvent;
use App\Http\Resources\AuthResource;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event as FacadesEvent;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register($request)
    {
        $input = $request->all();
        if ($request->image) {
            $image = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('users', $image, 'files');
            $input['image'] = $path;
        }
        $input['password'] = Hash::make($input['password']);
        $input['role_id'] = 2;
        $input['evaluation'] = 0;
        $user = User::create($input);
        $token = $user->createToken('Having')->accessToken;
        $user['token'] = $token;
        FacadesEvent::dispatch(new CreateUserEvent($user));
        $users = new AuthResource($user);
        return response()->json(['data' => $users, 'message' => 'code sent to your gmail'], 201);
    }


    public function verification($request)
    {
        $id = Auth::id();
        $user = User::where('id', $id)->first();
        if ($request->code == $user->code) {
            $user->StatusCode = true;
            $user->save();
            Wallet::create([
                'content' => 0,
                'user_id' => $id
            ]);
            return response()->json(['message' => 'Success'], 200);
        } else
            return response()->json(['message' => 'your code is not correct'], 422);
    }


    public function login($request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'StatusCode' => true])) {
            $user = User::query()->find(auth()->user()['id']);
            $token = $user->createToken('Having')->accessToken;

            $users = new AuthResource($user);
            $data['token'] = $token;
            $data['info'] = $users;
            return response()->json(['data' => $data], 200);
        }
        return response()->json(['message' => 'Invalid login'], 422);
    }


    public function storeFcmToken($request)
    {
        $id = Auth::id();
        $user = User::find($id);
        $user->fcm_token = $request->fcm_token;
        $user->save();
        return response()->json(['message' => 'ok'], 200);
    }


    public function getUser($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return response()->json(['message' => 'not found'], 404);
        }
        if ($user->role_id === 2 || auth()->user()->role_id === 1) {
            $data = new AuthResource($user);
            return response()->json(['data' => $data], 200);
        } else {
            return response()->json(['message' => 'you can not view this a profile'], 403);
        }
    }


    public function update($id, $request)
    {
        $user = User::find($id);
        if (empty($user)) {
            return response()->json(['message' => 'The user is not found'], 404);
        }
        $auth_id = Auth::id();
        if ($user->id === $auth_id) {
            if ($request->image) {
                $image = $request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('users', $image, 'files');
            }
            $user->update([
                'name' => ($request->name) ? $request->name : $user->name,
                'image' => ($request->image) ? $path : $user->image,
                'birthDay' => ($request->birthDay) ? $request->birthDay : $user->birthDay,
            ]);
            return response()->json(['message' => 'User updated successfully'], 200);
        } else {
            return response()->json(['message' => 'you can not update this a profile'], 403);
        }
    }


    public function deleteImage($id)
    {
        $user = User::find($id);
        if (empty($user)) {
            return response()->json(['message' => 'The photo is not found'], 404);
        }
        $auth_id = Auth::id();
        if ($user->id === $auth_id) {
            $user->image = null;
            $user->save();
            return response()->json(['message' => 'The image is deleted'], 200);
        } else {
            return response()->json(['message' => 'you can not delete this a photo'], 403);
        }
    }


    public function logout()
    {
        /**@var \App\Models\MyUserModel */
        $user = auth()->user();
        $user->tokens()->delete();
        return response()->json(['message' => 'logged out Successfully'], 200);
    }
}
