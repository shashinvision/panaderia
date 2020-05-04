<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $productos = Producto::orderBy('id', 'DESC')->paginate(10);
        return view('productos', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Producto $valor)
    {
        $tipo = [
            'tipo' => 'subir'
        ];
        $categorias = Categoria::all();
        return view('subir', compact('categorias','valor', 'tipo'));
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
        // Producto::create(request()->all());
        // Producto::update(request()->all());
        // request()->img = $request->file('img')->store('public/images');
        // return dd($request->file('img')->store('public/images')); para ver la ruta donde se guarda

        request()->validate([
            'nombre' => 'required',
            'categoria_id' => 'required',
            'img' => 'required',
            'precioUnitario' => 'required',
            'precioPorMayor' => 'required'
            ]);

        $subir = array(
            'nombre' => $request->get('nombre'), 
            'categoria_id' => $request->get('categoria_id'),
            'precioUnitario' => $request->get('precioUnitario'),
            'precioPorMayor' => $request->get('precioPorMayor'),
            'img' => request()->file('img')->getCLientOriginalName()
        );
        Producto::create($subir);
        // mover la imagen
        request('img')->move(public_path('images'), request()->file('img')->getCLientOriginalName());

        return  redirect()->route('mostrarproductos')->with('estatus', 'Producto creado con éxito.');
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
        
        $tipo = [
            'tipo' => 'editar'
        ];
        $categorias = Categoria::all();
        $valor = Producto::find($id);
        return view('editar', compact('valor', 'categorias', 'tipo'));
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
        request()->validate([
            'nombre' => 'required',
            'categoria_id' => 'required',
            'precioUnitario' => 'required',
            'precioPorMayor' => 'required'
        ]);

        if(request()->file('img') == ''){
            $img = $request->get('imgOld');
        } else{
            $img =  request()->file('img')->getCLientOriginalName();
            // mover la imagen
            request('img')->move(public_path('images'), request()->file('img')->getCLientOriginalName());
        }

        $subir = array(
            'nombre' => $request->get('nombre'), 
            'categoria_id' => $request->get('categoria_id'),
            'img' => $img,
            'precioUnitario' => $request->get('precioUnitario'),
            'precioPorMayor' => $request->get('precioPorMayor')
        );
        // return $subir; 
        Producto::find($id)->update($subir);


        return  redirect()->route('mostrarproductos')->with('estatus', 'Producto editado con éxito.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $producto = Producto::find($id);
        return view('eliminar', compact('producto'));
    }
    public function remove($id)
    {
        // para eliminar la imagen
        $img = Producto::find($id)->img;
        $image_path = public_path().'/images/'.$img;

            if($image_path){
            unlink($image_path);
            }
        //  fin de eliminar la imagen
        Producto::find($id)->delete();
        return redirect()->route('mostrarproductos')->with('estatus', 'Producto eliminado con éxito.');
    }
    public function destroy($id)
    {
        //
    }
}
