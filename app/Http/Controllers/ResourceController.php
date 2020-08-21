<?php

namespace App\Http\Controllers;

use App\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        return view('resource.index',['resources'=>$resources]);
    }
    public function create()
    {
        return view('resource.create');
    }
    public function store(Request $request)
    {
        Resource::create($request->all());
        return redirect('resource');
    }
    public function edit(Resource $resource)
    {
        return view('resource.edit',['resource'=>$resource]);
    }
    public function update(Request $request, Resource $resource)
    {
        $resource->update($request->all());
        return redirect('resource');
    }
    public function destroy(Resource $resource)
    {
        $resource->delete();
        return redirect('resource');
    }
}
