<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\Lavacharts;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Month;
use App\Rast;

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

        $enero = DB::table('rast')->select(DB::raw('month.name,avg(ST_Value(rast, ST_SetSRID(ST_Point(-71.233333,-34.983333), 4326)))'))->join('register', 'register.id', '=', 'rast.id_register')->join('month', 'month.id', '=', 'register.id_month')->groupBy('month.name')->get();

        //dd(count($enero));

        $variable = $lava->DataTable();
        $variable->addDateColumn('Months of Year')
                        ->addNumberColumn('T° mínima');
                        for($i=0; $i<count($enero); $i++)
                        {

                            $variable->addRow([$enero[$i]->name, $enero[$i]->avg]);
                        }
        $lava->ColumnChart('variable', $variable, [
            'title' => 'Temperatura Mínima',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 30
            ]
        ]);
         

        return view('indexGrafico')-> with('lava',$lava);
      

    }

    public function datosSegunVariable(int $variable)
    {
        if($variable == 1)//temperatura minima
        {

        }
        else if ($variable == 2)// temperatura maxima
        {

        }
        else if ($variable == 3)//variable
        {

        }
        else// radiacion uv
        {

        }
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
