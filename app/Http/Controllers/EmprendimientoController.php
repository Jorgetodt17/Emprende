<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Emprendimiento;
use App\Models\TipoEmpresa;
use Illuminate\Http\Request;
use App\Models\Localidad;
use League\CommonMark\Inline\Element\Image;
use Illuminate\Support\Facades\Storage;

class EmprendimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authUser = auth()->user();
        $empredimientos = $authUser->emprendimientos;
        return view('emprendimiento.index')->with('emprendimientos',$empredimientos);
        //return 'Vista index()';
       // $emprendimientos = Emprendimiento::all();
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $localidads = Localidad::all();
        $tipoempresas = TipoEmpresa::all();
        return view('emprendimiento.create', compact('tipoempresas'), compact('localidads'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* $this->validate($request, ['nombre'=>'required', 'descripcion'=>'required', 
        'localidad_id'=>'required', 'direccion'=>'required', 'nro_telefono'=>'required']); */

        $Mensaje=['required'=>'El campo :attribute es requerido'];

        $emprendimientos = new Emprendimiento();
        $emprendimientos->nombre = $request->get('nombre');
        $emprendimientos->descripcion = $request->get('descripcion');
        $emprendimientos->localidad_id = $request->get('localidad_id');
        $emprendimientos->direccion = $request->get('direccion');
        $emprendimientos->sitio_web = $request->get('sitio_web');
        $emprendimientos->instagram = $request->get('instagram');
        $emprendimientos->facebook = $request->get('facebook');
        $emprendimientos->nro_telefono = $request->get('nro_telefono');
        //$emprendimientos->logo= $request->get('logo');
        if($request->hasFile('logo')){
            $emprendimientos['logo']=$request->file('logo')->store('uploads','public');
        }

        $emprendimientos->user_id = Auth::id();
        $emprendimientos->tipoempresa_id = $request->get('tipoempresa_id');
        $emprendimientos->latitud = $request->get('latitud');
        $emprendimientos->longitud = $request->get('longitud');
        $emprendimientos->save();
        
        return redirect('/emprendimiento')->with('Mensaje','Emprendimiento agregado con éxito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $emprendimiento = Emprendimiento::find($id);
        return view('emprendimiento.show',compact('emprendimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Mensaje=['required'=>'El campo :attribute es requerido'];

        $localidads = Localidad::all();
        $tipoempresas = TipoEmpresa::all();
        $emprendimiento = Emprendimiento::find($id);
         return view('emprendimiento.edit', compact('tipoempresas'), compact('localidads'))->with('emprendimiento',$emprendimiento);
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
        $Mensaje=['required'=>'El campo :attribute es requerido'];

        $emprendimiento= Emprendimiento::find($id);
        $emprendimiento->nombre = $request->get('nombre');
        $emprendimiento->descripcion = $request->get('descripcion');
        $emprendimiento->localidad_id = $request->get('localidad_id');
        $emprendimiento->direccion = $request->get('direccion');
        $emprendimiento->sitio_web = $request->get('sitio_web');
        $emprendimiento->instagram = $request->get('instagram');
        $emprendimiento->facebook = $request->get('facebook');
        $emprendimiento->nro_telefono = $request->get('nro_telefono');
        //$emprendimiento->logo= $request->get('logo');
          
        
        if($request->hasFile('logo')){
            $emprendimiento=Emprendimiento::findOrFail($id);

            Storage::delete('public/'.$emprendimiento->logo);   
                        
            $emprendimiento['logo']=$request->file('logo')->store('uploads','public');
        }
       // $emprendimiento->usuario_id = auth()->user()->id;
        $emprendimiento->tipoempresa_id = $request->get('tipoempresa_id');
        $emprendimiento->latitud = $request->get('latitud');
        $emprendimiento->longitud = $request->get('longitud');
               
       // $emprendimiento::where('id','=',$id)->update($emprendimiento);
        
       $emprendimiento->save();
        return redirect('/emprendimiento')->with('Mensaje','Emprendimiento actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emprendimiento = Emprendimiento::find($id);
        $emprendimiento->delete();

        return redirect('emprendimiento')->with('Mensaje','Emprendimiento eliminado');
    }
}
