<?php

namespace App\Http\Controllers;

use App\Models\MatMaterium;
use Illuminate\Http\Request;

/**
 * Class MatMateriumController
 * @package App\Http\Controllers
 */
class MatMateriumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matMateria = MatMaterium::paginate();

        return view('mat-materium.index', compact('matMateria'))
            ->with('i', (request()->input('page', 1) - 1) * $matMateria->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matMaterium = new MatMaterium();
        return view('mat-materium.create', compact('matMaterium'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MatMaterium::$rules);

        $matMaterium = MatMaterium::create($request->all());

        return redirect()->route('mat-materia.index')
            ->with('success', 'MatMaterium created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matMaterium = MatMaterium::find($id);

        return view('mat-materium.show', compact('matMaterium'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matMaterium = MatMaterium::find($id);

        return view('mat-materium.edit', compact('matMaterium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MatMaterium $matMaterium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MatMaterium $matMaterium)
    {
        request()->validate(MatMaterium::$rules);

        $matMaterium->update($request->all());

        return redirect()->route('mat-materia.index')
            ->with('success', 'MatMaterium updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $matMaterium = MatMaterium::find($id)->delete();

        return redirect()->route('mat-materia.index')
            ->with('success', 'MatMaterium deleted successfully');
    }
}
