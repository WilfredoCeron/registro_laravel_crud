<?php

namespace App\Http\Controllers;

use App\Models\MxgMateriaxgrado;
use Illuminate\Http\Request;

/**
 * Class MxgMateriaxgradoController
 * @package App\Http\Controllers
 */
class MxgMateriaxgradoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mxgMateriaxgrados = MxgMateriaxgrado::paginate();

        return view('mxg-materiaxgrado.index', compact('mxgMateriaxgrados'))
            ->with('i', (request()->input('page', 1) - 1) * $mxgMateriaxgrados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mxgMateriaxgrado = new MxgMateriaxgrado();
        return view('mxg-materiaxgrado.create', compact('mxgMateriaxgrado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(MxgMateriaxgrado::$rules);

        $mxgMateriaxgrado = MxgMateriaxgrado::create($request->all());

        return redirect()->route('mxg-materiaxgrados.index')
            ->with('success', 'MxgMateriaxgrado created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mxgMateriaxgrado = MxgMateriaxgrado::find($id);

        return view('mxg-materiaxgrado.show', compact('mxgMateriaxgrado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mxgMateriaxgrado = MxgMateriaxgrado::find($id);

        return view('mxg-materiaxgrado.edit', compact('mxgMateriaxgrado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  MxgMateriaxgrado $mxgMateriaxgrado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MxgMateriaxgrado $mxgMateriaxgrado)
    {
        request()->validate(MxgMateriaxgrado::$rules);

        $mxgMateriaxgrado->update($request->all());

        return redirect()->route('mxg-materiaxgrados.index')
            ->with('success', 'MxgMateriaxgrado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mxgMateriaxgrado = MxgMateriaxgrado::find($id)->delete();

        return redirect()->route('mxg-materiaxgrados.index')
            ->with('success', 'MxgMateriaxgrado deleted successfully');
    }
}
