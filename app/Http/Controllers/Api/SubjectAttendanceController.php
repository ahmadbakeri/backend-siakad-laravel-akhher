<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\SubjectAttendance;
use App\Http\Controllers\Controller;

class SubjectAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $attendances  = SubjectAttendance::where('student_id', '=', $user->id)->paginate(10);
        return $attendances;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'schedule_id'=>'required|exists:schedules,id',
            'attendance_code'=>'required',
            'academic_year'=>'required',
            'semester'=>'required',
            'meeting'=>'required',
            'latitude'=>'required',
            'longitude'=>'required',
        ]);
        $attendances = SubjectAttendance::create($request->all());
        return $attendances;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
