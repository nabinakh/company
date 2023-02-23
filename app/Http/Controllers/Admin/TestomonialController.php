<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestomonialRequest;
use App\Models\Testomonial;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestomonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if ($request->expectsJson()) {
            $data =  Testomonial::latest()->get();
            return Datatables::of($data)
                ->addColumn('name', function ($row) {
                    return "<p>{$row['name']}</p>";
                })->addColumn('company', function ($row) {
                    return "<p>{$row['company']}</p>";
                })->addColumn('designation', function ($row) {
                    return "<p>{$row['designation']}</p>";
                })
                
                ->addColumn('description', function ($row) {
                    return "<p>{$row['description']}</p>";
                })
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex">';
                    $btn .= view('layouts.deleteBtn', ['route' => route('testomonial.destroy', $row['id'])])->render();
                    $btn .= '</div>';
                    return $btn;
                })
                ->rawColumns(['name', 'company', 'description', 'designation', 'action'])
                ->make(true);
        } else {
            return view('admin.testomonial.index');
        }
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()  
    {
        return view('admin.testomonial.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestomonialRequest $request) 
    {
        $validated = $request->validated();
        if($request->image){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $validated['image'] = $name;
        }
        $status = Testomonial::create($validated);
        if(!$status){
            return back()->with('error', 'Something went wrong, please try again');
        }
        return back()->with('success', 'Testomonial created successfully');
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
