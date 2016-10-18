<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Khill\Lavacharts\Lavacharts;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Month;
use App\Rast;
use App\Period;
use App\Scenario;
use App\Variable;

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

        $grafico = $lava->DataTable();
        $grafico->addDateColumn('Months of Year')
                        ->addNumberColumn('T° mínima');
                        for($i=0; $i<count($enero); $i++)
                        {
                            $grafico->addRow([$enero[$i]->name, $enero[$i]->avg]);
                        }
        $lava->ColumnChart('variable', $grafico, [
            'title' => 'Temperatura Mínima',
            'titleTextStyle' => [
                'color'    => '#eb6b2c',
                'fontSize' => 30
            ]
        ]);
         
         $periodo = Period::all();
         $scenario = Scenario::all();
         $variable = Variable::all();

        return view('indexGrafico')-> with('lava',$lava)->with('periodo',$periodo)->with('scenario',$scenario)->with('variable',$variable);
      

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


}
