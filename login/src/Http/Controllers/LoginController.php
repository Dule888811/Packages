<?php /** @noinspection ALL */

namespace Dule\Login\Http\Controllers;
use App\Http\Controllers\Controller;
use Dule\Login\Models\User;
use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Http\Request;


class LoginController extends Controller 
{


    public function index()
    {
        return view('login::login');
    }

    public function login(Request $request)
    {
        $email =  $request->email;
        $passwrod = $request->psw;
        $user = DB::table('users')->where('email', '=', $email)
            ->where('password', '=', $passwrod)->first();

        if($user != null)
        {
            return view('login::home', ['id' => $user->id]);

        }else{
            return "no users like that!!";
        }
    }

    public function register()
    {
        return view('login::register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'password' => 'required',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'passwordA' => 'required_with:password|same:password'
        ]);
        $user = new User();
        $user->password = $request->password;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->save();
        return view('login::login');
    }

    public function logout()
    {
        unset($_SESSION);
        return view('login::login');
    }


}