<?php

namespace App\Http\Controllers;


use App\Categorias;
use App\Referencias;
use App\Valuaciones;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ValuacionesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //lanza plantilla para nueva valuacion express

        $categorias = Categorias::orderBy('categoria','asc')
            ->get();

        //$this->mediana($valores);    

        return view('express.paso1', compact('categorias'));
    }

    public function step2(Request $request)
    {
        //valido los fields

        $validator = Validator::make($request->all(),[
            'categoria',
            'subcategoria',
            'marca',
            'modelo',
            'version',
            'ano',
            'estado',
            'nuevo',
            'etapa',
            'valuador'
        ]);

        if ($validator->fails()) {
            return redirect('valuacion-express')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $registro = Valuaciones::create($request->all());
        }

        $proveedores = Referencias::where('cat_id',$request->categoria)
                        ->inRandomOrder()
                        ->get();

        $id = $registro->id;

        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->select('va.id','va.modelo','va.categoria','va.version','ma.marca')
        ->where('va.id', (int)$id)
        ->paginate(15);
        $refs = $proveedores;



        return view('express.paso2', compact('val','refs'));
    }

    public function step3(Request $request,$id)
    {

        //primero calculo la mediana
        $med = $this->mediana(Input::all());

        $valores  = array(
            'valor' => $med,
            'etapa' => 2,
             );

        $act = \DB::table('valuaciones as va')
            ->where('va.id', (int)$id)
            ->update($valores);

if ($act) {
    
}else{
    
}


        var_dump($tupla);

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



        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->select('va.id','va.modelo','va.categoria','va.version','ma.marca')
        ->where('va.id', (int)$id)
        ->paginate(15);

       //echo $val[0]->categoria;

        $proveedores = Referencias::where('cat_id',$val[0]->categoria)
                    ->inRandomOrder() 
                    ->get();

        $refs = $proveedores;



        return view('express.paso2', compact('val','refs'));
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


    /**
     * Busca y muestra la data de las valuaciones hechas en el pasado
     *
     * 
     */
    public function historia()
    {
       
        $valuaciones = \DB::table('valuaciones as va')
        ->join('categorias as ca', 'va.categoria', '=', 'ca.id')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->join('users as us', 'va.valuador', '=', 'us.id')
        ->select('va.id','va.modelo','va.etapa','va.created_at','ca.categoria','ma.marca','us.name')
        ->latest()
        ->paginate(15);
        return view('express.historia', compact('valuaciones'));   
    }


    /**
    Calcula la mediana estadistica
    **/

    function mediana($campos) {

        $filtrada = array();

        foreach ($campos as $key) {
            if (is_numeric($key) && $key >= 200) {
                array_push($filtrada, $key);
            }
        }
        
        sort($filtrada);

        //var_dump($filtrada);

        $cuantos = count($filtrada);

        $central = floor(($cuantos-1)/2);

        if($cuantos % 2) {

            $mediana = $filtrada[$central];

            }else{

            
            $arriba = $filtrada[$central+1];



            $mediana = (($arriba+$filtrada[$central])/2);
        }

        return $mediana;
    } 
}
