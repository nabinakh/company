<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Http\Requests\TestomonialRequest;
use App\Models\Team;
use App\Models\Testomonial;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->expectsJson()) {
            $data =  Team::latest()->get();
            return Datatables::of($data)
                ->addColumn('name', function ($row) {
                    return "<p>{$row['name']}</p>";
                })->addColumn('image', function ($row) {
                    $image = asset('images/'.$row['image']);
                    return $image;
                })->addColumn('designation', function ($row) {
                    return "<p>{$row['designation']}</p>";
                })
                
                ->addColumn('description', function ($row) {
                    return "<p>{$row['description']}</p>";
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex">';
                    $btn .= view('layouts.editBtn', ['route' => route('team.edit', $row['id'])])->render();
                    $btn .= view('layouts.deleteBtn', ['route' => route('team.destroy', $row['id'])])->render();
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['name', 'image', 'description', 'designation', 'action'])
                ->make(true);
        } else {
            return view('admin.team.index');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function create()  
     {
         return view('admin.team.create');   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamRequest $request) 
    {
        $validated = $request->validated();
        if($request->image){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        }
        $status = Team::create($validated);
        if(!$status){
            return back()->with('error', 'Something went wrong, please try again');
        }
        return back()->with('success', 'Team created successfully');
        //
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
        $data = Team::find($id);
        return view('admin.team.create', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamRequest $request, $id)
    {
        $validated = $request->validated();
        if($request->image){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        }
        $status = Team::where('id', $id)->update($validated);
        if(!$status){
            return back()->with('error', 'Something went wrong, please try again');
        }
        return back()->with('success', 'Team updated successfully');
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
