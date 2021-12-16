<?php

namespace App\Http\Controllers;

use App\Models\GrdGrado;
use Illuminate\Http\Request;

/**
 * Class GrdGradoController
 * @package App\Http\Controllers
 */
class GrdGradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grdGrados = GrdGrado::paginate();

        return view('grd-grado.index', compact('grdGrados'))
            ->with('i', (request()->input('page', 1) - 1) * $grdGrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grdGrado = new GrdGrado();
        return view('grd-grado.create', compact('grdGrado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(GrdGrado::$rules);

        $grdGrado = GrdGrado::create($request->all());

        return redirect()->route('grd-grado.index')
            ->with('success', 'GrdGrado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grdGrado = GrdGrado::find($id);

        return view('grd-grado.show', compact('grdGrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grdGrado = GrdGrado::find($id);

        return view('grd-grado.edit', compact('grdGrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  GrdGrado $grdGrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GrdGrado $grdGrado)
    {
        request()->validate(GrdGrado::$rules);

        $grdGrado->update($request->all());

        return redirect()->route('grd-grado.index')
            ->with('success', 'GrdGrado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $grdGrado = GrdGrado::find($id)->delete();

        return redirect()->route('grd-grado.index')
            ->with('success', 'GrdGrado deleted successfully');
    }
}
