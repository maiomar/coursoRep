<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rejistration;
use App\Models\course;
use App\Models\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Rejistrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Rejistration  $rejistration
     * @return \Illuminate\Http\Response
     */
    public function show(Rejistration $rejesteration)
    {

           /* $regRes=course::join('Institutes','institutes.id','=','courses.institute_id')
            ->where('Institutes.id','=', $rejesteration['course_id'])
            ->select('courses.course_name','institutes.institute_name')
            ->get();
            return $regRes;*/

            $data = DB::table('rejistrations')
            ->join('courses', 'courses.id', '=', 'rejistrations.course_id')
            ->join('institutes', 'institutes.id', '=', 'courses.institute_id')
            ->where('rejistrations.student_id','=', $rejesteration['course_id'])
            ->select('courses.course_name','courses.image_path','institutes.institute_name')
            ->get();
            return $data;






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rejistration  $rejistration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rejistration $rejistration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rejistration  $rejistration
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rejistration $rejistration)
    {
        //
    }

}
