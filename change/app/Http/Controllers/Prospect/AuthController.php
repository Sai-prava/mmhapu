<?php

namespace App\Http\Controllers\Prospect;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\ProspectRegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        // dd($request->all());
        try{
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'role_id' => 'required',
                'entrance_fee_id' => 'required',
            ]);
            if($request->password != $request->confirm_password)
            {
                toastr()->error('Password do not match');
                return redirect()->back();
            }
            $validator = Validator::make($request->all(),[
                'email' => 'required|unique:users'
            ]);
            if($validator->fails()){
                toastr()->error('Email already exists');
                return redirect()->back();
            }
            // User::create($request->all());
            $save = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' =>$request->password,
                'role_id' => $request->role_id,
                'entrance_fee_id' => $request->entrance_fee_id,
                'remember_token' => Str::random(40),
            ]);

            Mail::to($save->email)->send(new ProspectRegisterMail($save));

            toastr()->success('Your Account Has Been successfully Created, Please Verify first then Login and See Next Step Guides.'); 
            return redirect(url('/login'));
        }catch (Exception $e)
        {
            toastr()->error($e->getMessage());
            return back();
        }

    }
    public function verify($token){
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user)){

            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);
            $user->save();

            toastr()->success('Your Account successfully Verified.');
            return redirect(url('/login'));
        }else{
            abort(404);
        }
    }
}
