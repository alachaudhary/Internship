<?php

namespace App\Http\Controllers\Auth;
use App\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth; // Add this line for Auth
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
     protected function registered(Request $request, $user)
     {
         // Check if the user has verified their email
         if ($user->hasVerifiedEmail()) {
             // Log out the user after registration if they have already verified their email (this might not be necessary in most cases)
             Auth::logout();
         } else {
             // Notify the user to verify their email
             return redirect('/login')->with('status', 'Registration successful. Please check your email to verify your account before logging in.');
         }
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'gender'=> $data['gender'], // Assuming you are capturing gender
            'country'=> $data['country'], // Assuming you are capturing country
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    
        // Send the email verification notification
        $user->sendEmailVerificationNotification();
    
        return $user;
    }
    
}

