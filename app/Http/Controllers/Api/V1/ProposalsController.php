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
        return bti_proposals::orderBy('id', 'desk')->get();
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

    public function findForPDF(Request $request, $id)
    {
        $query = $request->all();
        $lastSum = (empty($query['sum'])) ? '' : $query['sum'];
        $proposals =  bti_proposals::findOrFail($id);


        $data = [
            'code' => $proposals['code'],
            'sum' => $proposals['sum'],
            'copyes' => $proposals['copyes'],
            'type' => $proposals['type'],
            'person' => $proposals['person'],
            'personal_data' => $proposals['personal_data'],
            'address' => $proposals['address'],
            'city' => $proposals['city'],
            'house_number' => $proposals['house_number'],
            'house_building' => $proposals['house_building'],
            'apartment' => $proposals['apartment'],
            'office' => $proposals['office'],
            'status' => $proposals['status'],
            'additionally' => $proposals['additionally'],
            'coefiction' => $proposals['coefiction'],
            'lastSum' => $lastSum,
            'created_at' => substr($proposals['created_at'], 0, -9),
            'updated_at' => substr($proposals['updated_at'], 0, -9),
        ];


        $pdf = PDF::loadView('work_'.$proposals['type'], $data);

        return $pdf->download('work_'.$proposals['type']. '.pdf');

    }


}
