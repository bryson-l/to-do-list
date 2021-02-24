<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;
use DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Tasks::all());
    }

    public function getTasksByTaskListId($taskListId) {
        $sql = "SELECT t.id, ts.complete, pc.description as priority, t.description, t.created_at, t.updated_at FROM tasks t, task_status ts, task_priorities tp, priority_codes pc, task_lists tl\n"

    . "WHERE tl.id = t.task_list_id and t.status_id = ts.id and t.id = tp.task_id and tp.priority_code = pc.id and t.deleted = 0 and tl.id = " . $taskListId;
        return response()->json(DB::select(DB::raw($sql)));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Tasks::create($request->all());
        return response()->json($task);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Tasks::find($id);
        return response()->json($task);
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
        $task = Tasks::findOrFail($id);
        $task->update($request->all());
        return response()->json($task);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $task = Tasks::findOrFail($id);
        $task->delete();
        return response()->json('deleted record');
    }
}
