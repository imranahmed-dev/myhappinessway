<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Socialite;


class LoginController extends Controller
{

    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->email;
        $password = $request->password;
        $validData = User::where('email', $email)->first();
        
        $password_check = password_verify($password, @$validData->password);

        if($password_check == false){
            return redirect()->back()->with('message', 'Email or Password does not match!');
        }
        
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect()->route('login');
        }
    }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function socialLogin($social)
       {
           return Socialite::driver($social)->redirect();
       }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function handleProviderCallback($social)
    {
       $userSocial = Socialite::driver($social)->user();
       
       $user = User::where(['email' => $userSocial->getEmail()])->first();
       if($user){
           Auth::login($user);
           return redirect(Route('dashboard.view'));
       }else{
          
           $user = User::firstOrCreate([
            'usertype' => 'User',
            'name'     =>  $userSocial->getName(),
            'email'    =>  $userSocial->getEmail(),
            'image'    =>  $userSocial->getAvatar(),
            'provider_id'=>1,
            'login_by' => 2,
            'status'   => 1
        ]);

        Auth::login($user,true);
        return redirect('myaccount/dashboard');
       }
   }










}
