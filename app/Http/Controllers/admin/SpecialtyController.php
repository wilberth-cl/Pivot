<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use App\Models\Size;
use App\Models\Specialty;
use Illuminate\Http\Request;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialties = Specialty::with('size')->orderBy('nombre','ASC')->get();
        return view('admin.specialties.index',compact('specialties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sizes = Size::orderBy('nombre','ASC')->get(['id','nombre']);
        $ingredients = Ingredient::orderBy('nombre','ASC')->get(['id','nombre']);
        return view('admin.specialties.create', compact('sizes','ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data = $request->validated();

        $request->validate([
            'size'=>'required|max:100',
            'nombre'=>'required|max:50',
            'precio'=>'required|max:500|numeric',
            'ingredients.*'=>'required|max:100',
            'cantidades.*'=>'required|max:100',
            'things.*'=>'required|max:50',
        ]);

        $specialty = new Specialty();
        $specialty->size_id = $request->input('size');
        $specialty->nombre = $request->input('nombre');
        $specialty->precio = $request->input('precio');
        $specialty->save();

        $things = $request->input('things');
        $cantidades = $request->input('cantidades');
        $ingredients = $request->input('ingredients');

        $i=0;
        foreach ($ingredients as $key => $value) {
            $a = [$value => ['cantidad' => $cantidades[$i], 'thing' => $things[$i]]];
            $specialty->ingredients()->attach($a);
            $i++;
        }
        
        return redirect()->route('admin_specialties_c.index');

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
