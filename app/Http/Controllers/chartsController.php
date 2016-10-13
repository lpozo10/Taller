<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Month;

class chartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lava = new Lavacharts; // See note below for Laravel

        $precipitaciones = $lava->DataTable();

        $precipitaciones->addDateColumn('Months of Year')
                 ->addNumberColumn('Precipitaciones')
                 ->addRow(['January', 142])
                 ->addRow(['February', 138])
                 ->addRow(['March', 136])
                 ->addRow(['April', 133])
                 ->addRow(['May', 129])
                 ->addRow(['June', 134])
                 ->addRow(['July', 139])
                 ->addRow(['August', 142])
                 ->addRow(['September', 139])
                 ->addRow(['October', 138])
                 ->addRow(['November', 137])
                 ->addRow(['December', 135]);

        $lava->ColumnChart('Precipitaciones', $precipitaciones, [
            'title' => 'Precipitaciones',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 14
            ]
        ]);

        $months = Month::find(1);

        return view('indexGrafico')-> with('lava',$lava)-> with('months',$months);

        

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
