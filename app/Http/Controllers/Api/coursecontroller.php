<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\Institute;
use App\Models\Rejistration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\carbon;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Database\Eloquent\Builder;

class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //شغل ايات
        // معلومات الدورة
        $cours=course::join('institutes','institutes.id','=','courses.institute_id')
        // ->join('courses','courses.id','=','course_syllabi.cours_id')
        // ->join('courses','courses.id','=','course_teachers.cours_id')
        // ->join('teachers','teachers.id','=','course_teachers.teacher_id')

         ->select('courses.image_path','institutes.institute_name','courses.course_name'
         ,'courses.cost1','courses.cost2','courses.rejistration_startdate'
         ,'courses.rejistration_enddate','courses.course_startdate','courses.number_hourse','institutes.location_institute')
        // ,'course_syllabi.course_subject','teachers.teacher_name')
         ->get();
         return $cours;


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
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(string $course_classification)
    {


            $regRes=course::join('Institutes','institutes.id','=','courses.institute_id')
            ->where('course_classification', '=', $course_classification)
            ->select('courses.course_name','courses.image_path','institutes.institute_name')
            ->get();
            return $regRes;






    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }


    public function search(Request $request) {

$searchRes ;
        $courses=course::join('Institutes','institutes.id','=','courses.institute_id')
        ->where('institute_name','LIKE', '%'.$request->searchTerm.'%')
        ->orWhere('course_name', 'LIKE', '%'.$request->searchTerm.'%')
        ->select('courses.course_name','institutes.institute_name')->get();
       /* foreach ($courses as $cours) {

            // here id is key and $option->id is value
           if($cours->contains('institute_name', $request->institute_name)) {
            $searchRes.Add(cours);
           }
        }*/

        return response()->json($courses);

        return  $course->get();

        return response()->json($courses);

    }
// شغل ايات .............................................................................................................
    // الدورات الحديثة
    public function last_courses()
    {
        $cours=course::join('institutes','institutes.id','=','courses.institute_id')->orderBy('courses.created_at', 'desc')
        ->take(6)
        ->select('courses.course_name','courses.image_path','courses.course_type','institutes.institute_name')
        ->get();
        foreach ($cours as $k => $v){
            if( $v['course_type'] != 'مجاني')
            $v['course_type']= '';
        }
        return $cours;
    }

    //كل الدورات الحديثة
    public function last_courses_all()
    {
        $cours=course::join('institutes','institutes.id','=','courses.institute_id')->orderBy('courses.created_at', 'desc')
    ->select('courses.course_name','courses.image_path','courses.course_type','institutes.institute_name')
    ->get();
    foreach ($cours as $k => $v){
        if( $v['course_type'] != 'مجاني')
        $v['course_type']= '';
    }
    return $cours;
    }

    // الدورات التي عليها حسم
    public function discounted_courses()
    {
        $cours=course::join('institutes','institutes.id','=','courses.institute_id')
        ->where('course_type', 'حسم')
        ->take(6)
        ->select('courses.course_name','courses.image_path','institutes.institute_name')
        ->get();
        return $cours;
    }

    // كل الدورات التي عليها حسم
    public function discounted_courses_all()
    {
        $cours=course::join('institutes','institutes.id','=','courses.institute_id')
        ->where('course_type', 'حسم')
        ->select('courses.course_name','courses.image_path','institutes.institute_name')
        ->get();
        return $cours;
    }

    // الدورات الحالية
    public function nowcourse()
    {
        $now=carbon::now();
        $cours=course::where('course_startdate','<=',$now)->where('course_enddate','>=',$now)
        ->take(6)
        ->select('course_name','image_path')
        ->get();
        return response()->json($cours);
    }

    //كل الدورات الحالية
    public function nowcourse_all()
    {
        $now=carbon::now();
        $cours=course::where('course_startdate','<=',$now)->where('course_enddate','>=',$now)
        ->select('course_name','image_path')
        ->get();
        return response()->json($cours);
    }

    //  الدورات القادمة
    public function aftercourse()
    {
        $now=carbon::now();
        $cours=course::where('course_startdate','>=',$now)
        ->take(6)
        ->select('course_name','image_path')
        ->get();
        return response()->json($cours);

    }

    //كل الدورات القادمة
    public function aftercourse_all()
    {
        $now=carbon::now();
        $cours=course::where('course_startdate','>=',$now)
        ->select('course_name','image_path')
        ->get();
        return response()->json($cours);

    }
    //اسم وصورة المستخدم
    public function user_home( $id)
    {
        $rs = Auth::user();
        return $rs['name'];
    }

    //اقتراح دورة
    public function Suggestions(Request $request)
    {

        $rs = Auth::user();
        $user=Suggestions::create([

            'suggested_course'=>$request->suggested_course,

        ]);
    }





}
