<?php

namespace App\Http\Controllers;

use App\Models\AlmAlumno;
use Illuminate\Http\Request;

/**
 * Class AlmAlumnoController
 * @package App\Http\Controllers
 */
class AlmAlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $almAlumnos = AlmAlumno::paginate();

        return view('alm-alumno.index', compact('almAlumnos'))
            ->with('i', (request()->input('page', 1) - 1) * $almAlumnos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $almAlumno = new AlmAlumno();
        return view('alm-alumno.create', compact('almAlumno'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AlmAlumno::$rules);

        $almAlumno = AlmAlumno::create($request->all());

        return redirect()->route('alm-alumnos.index')
            ->with('success', 'AlmAlumno created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $almAlumno = AlmAlumno::find($id);

        return view('alm-alumno.show', compact('almAlumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $almAlumno = AlmAlumno::find($id);

        return view('alm-alumno.edit', compact('almAlumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AlmAlumno $almAlumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AlmAlumno $almAlumno)
    {
        request()->validate(AlmAlumno::$rules);

        $almAlumno->update($request->all());

        return redirect()->route('alm-alumnos.index')
            ->with('success', 'AlmAlumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $almAlumno = AlmAlumno::find($id)->delete();

        return redirect()->route('alm-alumnos.index')
            ->with('success', 'AlmAlumno deleted successfully');
    }
}
