<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use app\Models\User;
// use app\Models\Verifytoken;
// use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function Useractivation(Request $request){

    //     $verifycoursetoken = $request->token;
    //     $verifycoursetoken = Verifytoken::where('token', $verifycoursetoken)->first();
    //     if($verifycoursetoken){
    //         $verifycoursetoken->is_activated = 1;
    //         $verifycoursetoken->save();
    //         $user = User::where('token', $verifycoursetoken->email)->first();
    //         $user->is_activated = 1;
    //         $user->save();

    //     $getting_token = Verifytoken::where('token', $verifycoursetoken->token)->first();
    //     $getting_token->delete();

    //     return redirect('/home')->with('activated', 'Your Account is Activated!');

    //     }else{
    //     return redirect('/veri-account');
    //     }
        
    // }

    // public function verifyaccount(Request $request){
    //     return view('auth/otp_verification');
    // }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        // $get_user = User::where('email', auth()->user()->email)->first();
        // if($get_user->is_activated == 1) {
        //     return view('home');
        // }
        // else{
        //     return redirect('/verifyaccount');
        // }
        
        return view('/index');
        
    }
/**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    { 
        $title = "Dashboard Admin";
        $slug = "dashboard_admin";
        // $dataAdmin = \DB::table('users')
        //             ->where('id','=','3')
                    // ->get();
        return view('admin.dashboard',compact('title','slug'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tenantHome()
    {
        $title = "Dashboard";
        $slug = "dashboard_tenant";
        return view('tenant.dashboard',compact('title','slug'));
    }
}
