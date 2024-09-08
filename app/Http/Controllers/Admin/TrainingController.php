<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;
use App\Models\School;


class TrainingController extends Controller
{

    public function index()
    {
        // Obtener capacitaciones con sus asistencias
        $trainings = Training::with('attendances')->paginate(5);

        return view('admin.training.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::all(); // muestro todo
        return view('admin.training.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aqui yo valido los datos que envio del formulario
        $validated = $request->validate([
            'topic' => 'required|string|max:255',
            'date' => 'required|date',
            'type' => 'required|string|max:255', 
            'attendance' => 'required|boolean',
            'school_id' => 'required|exists:schools,id',
        ]);
        
        Training::create($validated);
    
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Bien hecho!!!',
            'text' => 'Capacitación creada exitosamente'
        ]);
    
        return redirect()->route('admin.capacitaciones.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        //
    }
}
