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
        $sql = "SELECT t.id, t.task_list_id, ts.complete, pc.description as priority, t.description, t.created_at, t.updated_at FROM tasks t, task_status ts, task_priorities tp, priority_codes pc, task_lists tl\n"

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
     * Update the specified resource in storage or create new record.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  array $tasks
     * @return \Illuminate\Http\Response
     */
    public function attemptToEditCreate(Request $request) {
        // $tasks = Tasks::where('task_list_id', $request->all()[0][0]->task_list_id);
        // foreach ($tasks as $task) {
        //     if ($task) {
        //             $tasks->update([
        //                 'status_id' => $task->status_id,
        //                 'description' => $task->description,
        //             ]);
        //         }
        //     else {
        //         Tasks::create([
        //             'task_list_id' => $task->task_list_id,
        //             'status_id' => $task->status_id,
        //             'description' => $task->description
        //         ]);
        //     };
        // };
        // return response()->json('task list updated');
        // $tasks = Tasks::where('task_list_id', )
    }

    public function update(Request $request)
    {
        $tasks = array();
        foreach ($request as $task) {
            $task = Tasks::firstOrCreate(
                ['id', $task->id],
                ['task_list_id' => $task->task_list_id, 'description' => $task->description]
            );
        };
        foreach ($tasks as $task) {
            $task->save();
        };
        return response()->json();
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
