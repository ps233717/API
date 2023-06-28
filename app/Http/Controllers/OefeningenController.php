<?php

namespace App\Http\Controllers;

use App\Models\Oefeningen;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class OefeningenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): JsonResponse
    {
        $data = Oefeningen::All();

        $content = [
            "succes" => true,
            "data" => $data,
        ];

        return response()->json($content, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description_nl' => 'required',
            'description_en' => 'required',
        ]); 
        return Oefeningen::create($request->all());
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function show(Oefeningen $oefeningen)
    {
        $data = Oefeningen::all();

        $content = [
            "succes" => true,
            "data" => $data,
        ];

        return response()->json($content, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $oefeningen = Oefeningen::find($id);
    $oefeningen->update($request->all());
    return $oefeningen;
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Oefeningen  $oefeningen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oefeningen $id,$oefeningen)
    {
        return Oefeningen::destroy($oefeningen);

    }
}
