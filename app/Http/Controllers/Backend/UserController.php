<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $pages = 'Backend.pages.';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get();
        return view($this->pages. 'user',array('user' => Auth::user()));
    }

    public function update_avatar(Request $request){
        //Handle the user avatar upload
        if ($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/dist/img/' . $filename));

            $user = Auth::user();
            $user -> avatar = $filename;
            $user -> save();
        }
        return view($this->pages. 'user',array('user' => Auth::user()));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function changePassword(Request $request){
        $user = Auth::user();
        $currentPassword = $request->currentPassword;
        $newpassword = $request->newPassword;
        $confirmpassword = $request->confirmPassword;

        if (Hash::check($currentPassword, $user->password)){
            $objuser = User::find(Auth::user()->id);
            $objuser->password = Hash::make($newpassword);
            $objuser->save();
            return redirect()->route('profile')->with('message','Password Changed Successfully.');
        } else {
            return redirect()->route('profile')->with('error','Password Changed Failed.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
