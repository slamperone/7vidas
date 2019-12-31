<?php

namespace App\Http\Controllers;


use App\Categorias;
use App\Referencias;
use App\Valuaciones;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
                        ->get();

        $id_val = $registro->id;
        $refs = $proveedores;



        return view('express.paso2', compact('id_val','refs'));
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

        $val = Valuaciones::where('id', (int)$id)->get();

       //echo $val[0]->categoria;

        $proveedores = Referencias::where('cat_id',$val[0]->categoria)  
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
       
        $valuaciones = Valuaciones::latest()->paginate(10);
        return view('express.historia', compact('valuaciones'));   
    }


    /**
    Calcula la mediana estadistica
    **/

    function mediana($arr) {
        
        sort($arr);

        $cuantos = count($arr);

        $central = floor(($cuantos-1)/2);

        if($cuantos % 2) {

            $mediana = $arr[$central];

            }else{

            
            $arriba = $arr[$central+1];

            $mediana = (($arriba+$central)/2);
        }

        return $median;
    } 
}
