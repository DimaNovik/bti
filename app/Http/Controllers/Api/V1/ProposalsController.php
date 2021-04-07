<?php

namespace App\Http\Controllers\Api\V1;

use App\bti_proposals;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;

class ProposalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return bti_proposals::all();
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
        $proposals = bti_proposals::create($request->all());
        return $proposals;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return bti_proposals::findOrFail($id);
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
        $proposals = bti_proposals::findOrFail($id);
        $proposals->update($request->all());
 
        return $proposals;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proposals = bti_proposals::findOrFail($id);
        $proposals->delete();
        return '';
    }

    public function findLast()
    {
        $proposals = bti_proposals::orderBy('id', 'desk')->first();
        return $proposals;
    }

    public function findForPDF($id)
    {
        $proposals =  bti_proposals::findOrFail($id);

        $data = [
            'id' => $proposals[0]['id'],
        ];

        $pdf = PDF::loadView('work_1', $data);

        return $pdf->download("work_1.pdf");
    
    }


}
