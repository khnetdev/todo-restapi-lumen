<?php

namespace App\Http\Controllers;

use App\Models\Todos;
use Illuminate\Http\Request;


class toDoController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $data = Todos::all();
        return response($data);
    }

    public function display($id)
    {
        $data = Todos::where('id', $id)->get();
        return response($data);
    }

    public function save(Request $request)
    {
        $data = new Todos();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Data saved');
    }

    public function update(Request $request, $id)
    {
        $data = Todos::where('id', $id)->first();
        $data->activity = $request->input('activity');
        $data->description = $request->input('description');
        $data->save();

        return response('Data updated');
    }

    public function deleted($id)
    {
        $data = Todos::where('id', $id)->first();
        $data->delete();

        return response('Data deleted');
    }
}