<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Repository\UserRepositoryInterface;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepositoryInterface)
    {
        $this->middleware('auth:api', ['except' => ['index','show']]);
        $this->userRepository = $userRepositoryInterface;
    }

    public function index()
    {
        $users = $this->userRepository->all();
        return response()->json(['data' => $users], Response::HTTP_OK);
    }

    public function show($username)
    {
        $users = $this->userRepository->firstWhere(['username' => $username]);
        return response()->json(['data' => $users], Response::HTTP_OK);
    }

    public function update(UserRequest $request, $username)
    {
        $input = $request->getAttributes();
        $users = $this->userRepository->updateWhere(['username' => $username], $input);
        return response()->json(['data' => $users], Response::HTTP_OK);
    }

    public function upload(Request $request, $username)
    {
        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('images',$filename,'public');
            Auth()->user()->update(['image'=>$filename]);
        }
    }
}
