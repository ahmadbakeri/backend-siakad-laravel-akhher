<?php

namespace App\Http\Controllers\Api;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lessons = DB::table('lessons')
                    ->leftJoin(
                        'subjects',
                        'subjects.id',
                        '=',
                        'lessons.subject_id'
                    )
                    ->select(
                        'lessons.id',
                        'lessons.title',
                        'lessons.subject_id',
                        'subjects.title as subject_name',
                    )
                    ->orderBy('lessons.id', 'asc')
                    ->take(100)
                    ->get()
                    ;
        return response()->json($lessons);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
