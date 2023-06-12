<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Rejistration;
use App\Models\course;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\UpdateuserRequest;
use App\Http\Requests\Api\RejesterStudentRequest;
use Illuminate\Support\Facades\Validator;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;



class Usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return User::get();
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User  $user)
    {
       // return $user;




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {


    }


    public function update_profile(Request $request)
    {
        $user = Auth::user();



        $validator = $request->validate([

            'name'=>'required|min:2|max:100',
            'last_name'=>'required|min:2|max:100',
            'momile_phone'=>'required',
            'email'=>'required',
            'password'=>'required',
            'photo_profile'=>'nullable|image|mimes:jpg,bmp,png',
        ]);

  $image_name = null;
        if($request->hasFile('photo_profile')){
            $image_name = $request->file('photo_profile')->store('public');
        }

        $user->update([
            'name'=>$validator['name'],
            'last_name'=>$validator['last_name'],
            'momile_phone'=>$validator['momile_phone'],
            'email'=>$validator['email'],
            'password'=>Hash::make($validator['password']),
            'photo_profile'=>$validator['photo_profile'],
        ]);


       return response([
        'message'=>'profile successfully updated'
    ],200);
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


    //تسجيل الطالب في الدورة
    public function enrollInCourse(RejesterStudentRequest $request, int $course_id)
    {

        $user = Auth::user();


       $user=Rejistration::create([
        'user_id'=>$user['id'],
        'course_id'=>$course_id,
       ]);
       return response([
        'message'=>'Enrolled successfully'
    ],200);



    }


}
