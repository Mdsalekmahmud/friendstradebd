<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
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
    protected $redirectTo = '/';

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
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'            => ['required', 'string', 'max:255'],
            'last_name'       => ['nullable', 'string', 'max:255'],
            'country'         => ['nullable', 'string'],
            'c_companyname'   => ['nullable', 'string'],
            'c_address'       => ['nullable', 'string'],
            'c_postal_zip'    => ['nullable', 'string'],
            'c_state_country' => ['nullable', 'string'],
            'c_phone'         => ['nullable', 'string'],
            'email'           => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'        => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            
            'name'            => $data['name'],
            'last_name'       => $data['last_name'] ?? null,
            'country'         => $data['country'] ?? null,
            'c_companyname'   => $data['c_companyname'] ?? null,
            'c_address'       => $data['c_address'] ?? null,
            'c_state_country' => $data['c_state_country'] ?? null,
            'c_postal_zip'    => $data['c_postal_zip'] ?? null,
            'c_phone'         => $data['c_phone'] ?? null,
            'email'           => $data['email'],
            'password'        => Hash::make($data['password']),
        ]);
    }
}
