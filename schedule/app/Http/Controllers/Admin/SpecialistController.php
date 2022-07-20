<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Specialist\CreateSpecialistRequest;
use App\Http\Requests\Specialist\EditSpecialistRequest;
use App\Models\Specialist;

class SpecialistController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    //   if($request->has('search')){
    //     $data = Specialist::search($request->get('search'))->get();
    // }else{
       $data  = Specialist::query()->get();
   // }
   return view('admin.specialist.index', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.specialist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSpecialistRequest $request)
    {
     try {
        $specialist = new Specialist();
        $specialist = $specialist->fill($request->validated());
        $specialist->save();
        return redirect()->route('admin.specialist.index');

    } catch (Exception $e) {

        return redirect()->back()->with('msg', 'Error' . $e->getMessage());

    }
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
        $data  = Specialist::query()->where('id', $id)->first();
        return view('admin.specialist.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditSpecialistRequest $request)
    {
       try {
        $specialist = Specialist::findOrFail($request->input('id'));
        $specialist = $specialist->fill($request->validated());
        $specialist->save();
        return redirect()->route('admin.specialist.index');

    } catch (Exception $e) {

        return redirect()->back()->with('msg', 'Error' . $e->getMessage());

    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Specialist::destroy($id);
        return redirect()->route('admin.specialist.index');
    }



}
