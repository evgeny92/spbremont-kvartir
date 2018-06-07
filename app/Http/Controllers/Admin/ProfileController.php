<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller {

   /**
    * Show profile form
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */
   public function showUserProfile(){
      return view('admin.profile.userProfile');
   }

   /**
    * Update name and email
    *
    * @param Request $request
    * @return \Illuminate\Http\RedirectResponse
    */

   public function updateUserProfile(Request $request){
      $this->validate($request, [
         'name' => 'min:2|max:15',
         'email' => 'max:50|email|unique:users,email,' . Auth::user()->id
      ]);
      $user = Auth::user();
      $user->name = $request->get('name');
      $user->email = $request->get('email');
      $user->save();
      Session::flash('success', 'Данные пользователя успешно обновлены.');
      return back();
   }

   /**
    * Show update password form
    *
    * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    */

   public function showUserPassword(){
      return view('admin.profile.updatePassword');
   }

   /**
    * Update password
    *
    * @param Request $request
    * @return \Illuminate\Http\RedirectResponse
    */

   public function updateUserPassword(Request $request){

      $this->validate($request, [
         'old_password' => 'required',
         'new_password' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{6,}$/',
         'confirm_password' => 'required|same:new_password',
      ]);

      if(!(Hash::check($request->get('old_password'), Auth::user()->password))){
         // The passwords matches
         return back()->with('error', 'Ваш текущий пароль не совпадает с указанным вами паролем.');
      }
      if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
         //Current password and new password are same
         Return back()->with('error', 'Новый пароль не может быть таким же, как ваш текущий пароль.');
      }
      //Change Password
      $user = Auth::user();
      $user->password = bcrypt($request->get('new_password'));
      $user->save();
      Session::flash('success', 'Пароль успешно изменён.');
      return back();
   }


}
