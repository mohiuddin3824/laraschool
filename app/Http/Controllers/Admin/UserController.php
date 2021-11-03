<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    // Auth
    public function __construct()
    {
        $this->middleware('auth');
    }

    //User Profile
    public function userView(){
        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    //Add New User
    public function addUser(){
        return view('admin.user.add-new-user');
    }

    //Store User Data
    public function storeUser(Request $request){
        $request->validate([
            'name' => 'required | unique:users',
            'email' => 'required | unique:users',
        ]);
        User::create([
            'usertype' =>$request->usertype,
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'User Created  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('view.user')->with($notification);
    }

    //Edit User
    public function editUser($user_id){
        $editUser = User::findOrFail($user_id);
        return view('admin.user.user-edit', compact('editUser'));
    }

    //Update User
    public function updateUser(Request $request){
        $user_id = $request->id;

        $image = $request->file('profile_photo');
                
        $oldimage = $request->oldimage;

        $data = User::findOrFail($user_id);
    	$data->usertype = $request->usertype;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->mobile = $request->mobile;
    	$data->address = $request->address;
    	$data->description = $request->description;
    	$data->gender = $request->gender;
    	$data->facebook = $request->facebook;
    	$data->twitter = $request->twitter;
    	$data->instagram = $request->instagram;
    	$data->youtube = $request->youtube;

    	if ($image) {
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('backend/assets/images/avatar/'.$name_gen);
            $save_url = 'backend/assets/images/avatar/' .$name_gen;
            
            if($oldimage){
             unlink($oldimage);
            }
            $data->profile_photo = $save_url;
    	}else{
            $data->profile_photo = $oldimage;
        }
    	$data->save();

    	$notification = array(
    		'message' => 'User Profile Updated Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('view.user')->with($notification);
    }

    //Delete User
    public function deleteUser($id){
        $user = User::where('id',$id)->first();
        if($user->profile_photo){
        unlink($user->profile_photo);
        }

        $user->delete();
        $notification = array(
            'message' => 'User Deleted Permanently!',
            'alert-type' => 'success'
        );
        return redirect()->route('view.user')->with($notification);
    }

    //Auth Profile
    public function userProfile(){
        $userProfile = Auth::user();
        
        return view('admin.user.profile', compact('userProfile'));
    }

    //User Profile
    public function adminViewUserProfile($id){
        $userProfile = User::findOrFail($id);
        
        return view('admin.user.profile', compact('userProfile'));
    } 

    //User Active or Inactive by super Admin
    public function adminBlockUser($id){
        User::findOrFail($id)->update(['status' => 0]);
        $notification=array(
            'message'=>'User Blocked!',
            'alert-type'=>'warning'
        );
        return Redirect()->back()->with($notification);
    }
    
    public function adminUnBlockUser($id){
        User::findOrFail($id)->update(['status' => 1]);
        $notification=array(
            'message'=>'User Activated!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    
    }

    //user Password Reset
    public function resetPass(){
        return view('admin.user.reset-pass');
    }

    //Update Password
    public function updatePassword(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8',
            'password_confirmation' => 'required|min:8',
        ]);

        $db_pass = Auth::user()->password;
        $current_password = $request->old_password;
        $newpass = $request->new_password;
        $confirmpass = $request->password_confirmation;

       if (Hash::check($current_password,$db_pass)) {
          if ($newpass === $confirmpass) {
              User::findOrFail(Auth::id())->update([
                'password' => Hash::make($newpass)
              ]);

              Auth::logout();
              $notification=array(
                'message'=>'Your Password Change Success. Now Login With New Password',
                'alert-type'=>'success'
            );
            return Redirect()->route('login')->with($notification);

          }else {

            $notification=array(
                'message'=>'New Password And Confirm Password Not Same',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
          }
       }else {
        $notification=array(
            'message'=>'Old Password Not Match',
            'alert-type'=>'error'
        );
        return Redirect()->back()->with($notification);
       }
    }

}
