<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\divition;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        if(Auth::User()->id == 1){
            $tasks = DB::table('tasks')
          ->join('divition', 'tasks.divition', '=', 'divition.id')
          ->select('tasks.*', 'divition.divitionName')
         ->get();
        } else{
            $tasks = DB::table('tasks')
        ->join('divition', 'tasks.divition', '=', 'divition.id')
        ->select('tasks.*', 'divition.divitionName')
        ->where('userId',  Auth::User()->id)
        ->get();
        }
        
        //$tasks = Task::where('userId', Auth::user()->id)->get();
 
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $divition = divition::get();
        return view('tasks.create')->with(compact('divition'));
    }

    public function store(StoreTaskRequest $request)
    {
        
        $request->validated();
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $img = time().'.'.$request->img->extension();  
   
        $request->img->move(public_path('images'), $img);
        
        
        $data = new Task();
        $data->userId = $request->id;
        $data->name=  $request->name;
        $data->programme=$request->programme;
        $data->divition=$request->divition;
        $data->title=$request->title;
        $data->description=$request->description;
        $data->img=$img;

        //dd( $data);
        $data->save();
        

        return redirect()->route('tasks.index');
    }

    public function show(Task $task)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $task = DB::table('tasks')
        ->join('divition', 'task.divition', '=', 'divition.id')
        ->select('tasks.*', 'divition.divitionName')
        ->get();
        return view('tasks.show', compact('tasks'));
    }

    public function edit(Task $task)
    {
       // abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tasks.edit', compact('task'));
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data = $request->validated();

         if($request->img=='' || $request->img==null){

         }else{
            $img = time().'.'.$request->img->extension();  
            $request->img->move(public_path('images'), $img);
            $data['img'] = $img;
         }
   

       // dd($request->validated());
   
        $task->update($data);

        return redirect()->route('tasks.index');
    }

    public function destroy(Task $task)
    {
        abort_if(Gate::denies('task_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $task->delete();

        return redirect()->route('tasks.index');
    }
}
