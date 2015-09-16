<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Database\Eloquent\Model;


use App\models\Settings;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }
    public function Login() {
        return \View::make('login');
    }

    public function index() {
        return \View::make('index');
    }

    public function welcome() {
        return  \View::make('welcome');
    }
    public function logincheck() {
        $email=\Input::get('username');
        $password=\Input::get('password');

        if (\Auth::attempt(['email' => $email, 'password' => $password, 'status' => 'active']))
        {
            if(\Auth::user()->roll_id == 1) {
                return \View::make('adminhome');
            }
            else {
               return \View::make('userhome'); 
            }

         }
            
        else
        {
            return \View::make('index');
        }

    }
    public function signup() {
        return  \View::make('signup');
    }
    public function signupNewuser() {

        $rules = array(
            'fname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:4|confirmed',
            'password_confirmation'=>'required|min:4'
         );
        $input = \Input::all();
        $valid = Validator::make($input,$rules);

        if ($valid->fails()) {
            //return $valid->getMessageBag()->toArray();
            return Redirect::back()->with('error', $valid);
        }
        else {
            $status = 'active';
            $admin_status = \App\models\Settings::where('setting_name', 'todo_validation') ->first();
            if($admin_status ->setting_value == 0) {
                $status = 'block';
            }
            $password = \Hash::make($input['password']);

            $user = new User();
            $user->fname = $input['fname'];
            $user->lname = $input['lname'];
            $user->email = $input['email'];
            $user->password = $password;
            $user->address = $input['address'];
            $user->status = $status;
            $user->roll_id = 2;

            $user->save();
            
            

        }

    }

    public function logout() {

        \Session::flush();
        return redirect('/');
    }
}
