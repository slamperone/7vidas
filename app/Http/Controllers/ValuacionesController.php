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


        // en que id estoy
        $id = $registro->id;

        if ($validator->fails()) {
            return redirect('valuacion-express')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $registro = Valuaciones::create($request->all());

            $act = \DB::table('valuaciones as va')
            ->where('va.id', (int)$id)
            ->update(['etapa' => 2]);
        }

        $proveedores = Referencias::where('cat_id',$request->categoria)
                        ->inRandomOrder()
                        ->get();

        

        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->select('va.id','va.modelo','va.categoria','va.version','ma.marca')
        ->where('va.id', (int)$id)
        ->paginate(15);
        $refs = $proveedores;



        return view('express.paso2', compact('val','refs'));
    }

    public function step3(Request $request)
    {
        $id = $request->input('id');
        $avaluo = $request->input('cuanto');

        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->join('categorias as cat', 'va.categoria', '=', 'cat.id')
        ->join('subcategorias as sub', 'va.subcategoria', '=', 'sub.id')
        ->join('estado as edo', 'va.estado', '=', 'edo.id')
        ->select(
            'va.id',
            'va.modelo',
            'va.subcategoria',
            'ma.marca',
            'cat.categoria',
            'sub.nombre',
            'va.version',
            'va.valor',
            'edo.estado',
            'va.nuevo'
        )
        ->where('va.id', (int)$id)
        ->get(); 




#dd($request);
        return view('express.paso3', compact('val','avaluo'));

    }


    public function step31(Request $request,$id)
    {
        //primero calculo la mediana
        $med = $this->mediana(Input::all());

        $valores  = array(
            'valor' => $med,
            'etapa' => 3,
             );


        $act = \DB::table('valuaciones as va')
        ->where('va.id', (int)$id)
        ->update($valores);

        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->join('categorias as cat', 'va.categoria', '=', 'cat.id')
        ->join('subcategorias as sub', 'va.subcategoria', '=', 'sub.id')
        ->join('estado as edo', 'va.estado', '=', 'edo.id')
        ->select(
            'va.id',
            'va.modelo',
            'va.subcategoria',
            'ma.marca',
            'cat.categoria',
            'sub.nombre',
            'va.version',
            'va.valor',
            'edo.estado',
            'va.nuevo'
        )
        ->where('va.id', (int)$id)
        ->get();    
        

        $estdoTxt = strtolower($val[0]->estado);

        $fac = \DB::table('factores as fac')
        ->where('fac.subcat_id', (int)$val[0]->subcategoria)
        ->select('fac.'.$estdoTxt)
        ->get();


        $avaluo = $this->valuadora($val[0]->valor,$fac[0]->$estdoTxt,$val[0]->nuevo);


        return view('express.paso31', compact('val','avaluo'));


    }

    public function step4($id)
    {

        $error = FALSE;

        //obtengo la valuacion
        $val = \DB::table('valuaciones as va')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->join('categorias as cat', 'va.categoria', '=', 'cat.id')
        ->join('subcategorias as sub', 'va.subcategoria', '=', 'sub.id')
        ->join('estado as edo', 'va.estado', '=', 'edo.id')
        ->select(
            'va.modelo',
            'va.subcategoria',
            'ma.marca',
            'cat.categoria',
            'sub.nombre',
            'va.version',
            'va.valor',
            'edo.estado',
            'va.nuevo',
            'va.categoria as cat_id'
        )
        ->where([
            ['va.id', '=', (int)$id],
            ['va.created_at', '>=', date('Y-m-d H:m:s', strtotime("-36 hours"))]
        ])
        ->get();

//dd($val);
        //si existe y sigue en tiempo, obtengo su cuestionario
        if (!empty($val)){

            $quest = \DB::table('cuestionarios')
            ->where('cuestionarios.id_cat','=', $val[0]->cat_id)
            ->get();

                if (!empty($quest)) {
                    $error = "No hay cuestionario para esa categoria";
                }

            }else{
                $error = "Esta valuación expiró";
            }

        return view('express.paso4', compact('val','quest','error'));

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
        return view('valuaciones.historia', compact('valuaciones'));   
    }

    /**
     * Busca y muestra la data de las valuaciones hechas en el pasado y que 
     * aún se pueden terminar
     *
     * 
     */
    public function pendientes()
    {       
        $valuaciones = \DB::table('valuaciones as va')
        ->join('categorias as ca', 'va.categoria', '=', 'ca.id')
        ->join('marcas as ma', 'va.marca', '=', 'ma.id')
        ->join('users as us', 'va.valuador', '=', 'us.id')
        ->select('va.id','va.modelo','va.etapa','va.created_at','ca.categoria','ma.marca','us.name')
        ->where('va.created_at', '>=', date('Y-m-d H:m:s', strtotime("-36 hours")))
        ->latest()
        ->paginate(15);



        return view('valuaciones.pendientes', compact('valuaciones'));   
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

    /**
        avalua el prodcuto
    **/

    function valuadora($val,$factor,$nuevo) {

        $factor = $factor/100;

        if ($nuevo == 1) {
            $valor = $val * .7 * $factor;
        }else{
            $valor = $val  * $factor;
        }

        return $valor;

    }
}
