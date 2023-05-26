<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

//usar el modelo categoria para tener acceso a sus ID
use App\Models\Categoria;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtroCompletado = $request->input('filtroCompletado');
        $filtroCategoria = $request->input('filtroCategoria');
    
        $tareas = Tarea::query();
    
        if (!is_null($filtroCompletado)) {
            $tareas->where('completado', $filtroCompletado);
        }
    
        if (!is_null($filtroCategoria)) {
            $tareas->whereHas('categoria', function ($query) use ($filtroCategoria) {
                $query->where('id', $filtroCategoria);
            });
        }
    
        $tareas = $tareas->paginate();
        $categorias = Categoria::all(); // Obtener todas las categorías
    
        return view('tarea.index', compact('tareas', 'filtroCompletado', 'categorias', 'filtroCategoria'))
            ->with('i', ($request->input('page', 1) - 1) * $tareas->perPage());
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea();
        $categorias = Categoria::all();
        return view('tarea.create', compact('tarea', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarea::$rules);

        $tarea = Tarea::create($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);

        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        $categorias = Categoria::all();
        return view('tarea.edit', compact('tarea', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarea $tarea
     * @return \Illuminate\Http\Response
     */
 
     public function update(Request $request, Tarea $tarea)
    {
        request()->validate(Tarea::$rules);
    
        $data = $request->all();
    
        // Verificar si se marcó el checkbox completado
        $completado = isset($data['completado']) ? 1 : 0;
    
        // Actualizar el campo completado en los datos
        $data['completado'] = $completado;
    
        $tarea->update($data);
    
        return redirect()->route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }
    

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
}
