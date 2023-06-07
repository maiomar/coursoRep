<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Institute;
use App\Http\Requests\Api\RejesterStudentRequest;
use App\Models\Student;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //معلومات المعهد
        $Institute=Institute::select('institute_image','institute_name','About the institute','email','phone','account facbok','location_institute')
        ->get();
        return $Institute;
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

    // المعاهد
    public function Institutes()
    {
        $Institute=Institute::select('institute_name','institute_image','About the institute')
        ->take(6)->get();
        return $Institute;
    }

    // كل المعاهد
    public function Institutes_all()
    {
        $Institute=Institute::select('institute_name','institute_image','About the institute')
        ->get();
        return $Institute;
    }

    



}
