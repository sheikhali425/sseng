<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProjectController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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

        // $this->validate($request, [
        //     'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        // return "ABC";
        $image = $request->file('myFile');
        $name = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/projects');
        $image->move($destinationPath, $name);

             $area = $request->areaname;
             $equipment = $request->input('equipment');
             $service   = $request->input('service');
             $path      = $name;

            $project = new Project([
                'area'=>$area,
                'equipment'=>$equipment,
                'service'=>$service,
                'path' =>$name
            ]);
            $project->save();
            return  back();
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
}
