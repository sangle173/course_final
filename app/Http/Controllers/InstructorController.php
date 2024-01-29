<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class InstructorController extends Controller
{
    public function InstructorDashboard(){
        return view('instructor.index');
    } // End Mehtod

    public function InstructorLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Logout Successfully',
            'alert-type' => 'info'
        );

        return redirect('/instructor/login')->with($notification);
    } // End Method


    public function InstructorLogin(){
        return view('instructor.instructor_login');
    } // End Method

    public function InstructorProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('instructor.instructor_profile_view',compact('profileData'));
    }// End Method


    public function InstructorProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/instructor_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/instructor_images'),$filename);
           $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Instructor Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }// End Method


    public function InstructorChangePassword(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('instructor.instructor_change_password',compact('profileData'));

    }// End Method


    public function InstructorPasswordUpdate(Request $request){

        /// Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match!',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        /// Update The new Password
        User::whereId(auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);

    }// End Method

    public function InstructorAddUser(){
        $roles = Role::all();
        return view('instructor.pages.add_user',compact('roles'));
    }// End Method

    public function InstructorStoreUser(Request $request){
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->create_by = Auth::user()->id;
        $user->role = 'user';
        $user->status = '1';
        $user->save();

        $notification = array(
            'message' => 'Tạo mới Người dùng thành công',
            'alert-type' => 'success'
        );
        return redirect()->route('instructor.all.user')->with($notification);

    }// End Method

    public function InstructorAllUser(){
        $users = User::where('role','user')->latest()->get();
        return view('instructor.pages.user_all',compact('users'));

    }// End Method

    public function InstructorEditUser($id){

        $user = User::find($id);
        $roles = Role::all();
        return view('instructor.pages.edit_user',compact('user','roles'));

    }// End Method

    public function InstructorUpdateUser(Request $request,$id){

        $user = User::find($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->role = 'user';
        $user->status = '1';
        $user->save();

        $notification = array(
            'message' => 'Cập nhật người dùng thành công',
            'alert-type' => 'success'
        );
        return redirect()->route('instructor.all.user')->with($notification);

    }// End Method

    public function InstructorDeleteUser($id){

        $user = User::find($id);
        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message' => 'Xóa người dùng thành công',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }// End Method
}
