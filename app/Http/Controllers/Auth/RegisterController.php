<?php

namespace App\Http\Controllers\Auth;

use File;
use Input;
Use Redirect;
use App\Models\{User};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Http\Requests\UserRegistrationRequest;
use Illuminate\Support\Facades\{Hash, Validator};

class RegisterController extends Controller{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thank-you';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data){
        /* ========== User Table ========== */
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->status = 1;
        $user->save();
        $user->assignRole('user');
        return $user;
    }

    public function register(UserRegistrationRequest $request){
        // event(new Registered($user = $this->create($request->all())));
        $user = $this->create($request->all());
        if ($response = $this->registered($request, $user)) {
            return $response;
        }
        return $request->wantsJson()
                    ? new JsonResponse([], 201)
                    : redirect($this->redirectPath());
    }

}
