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
        // Obtener el último entrenamiento agregado
        $lastTraining = Training::with('school', 'attendances')->latest()->first();
    
        // Obtener los entrenamientos paginados
        $trainings = Training::with('school', 'attendances')->paginate(10);
    
        // Pasar los datos a la vista
        return view('admin.training.index', compact('trainings', 'lastTraining'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $schools = School::all(); // Mostrar todas las escuelas
        return view('admin.training.create', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos enviados desde el formulario
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
        return view('admin.training.show', compact('training'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Training $training)
    {
        $schools = School::all(); // Obtener todas las escuelas
        return view('admin.training.edit', compact('training', 'schools'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Training $training)
    {
        $request->validate([
            'topic' => 'required|string|max:255',
            'date' => 'required|date',
            'type' => 'required|in:remote,in-person',
            'attendance' => 'required|boolean',
            'school_id' => 'nullable|exists:schools,id',
        ]);

        $training->update($request->only('topic', 'training_date', 'type', 'attendance', 'school_id'));

        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Bien hecho!!!',
            'text' => 'Capacitación actualizada exitosamente',
        ]);

        return redirect()->route('admin.capacitaciones.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Training $training)
    {
        $training->delete();
    
        session()->flash('swal', [
            'icon' => 'success',
            'title' => 'Eliminado!',
            'text' => 'Capacitación eliminada exitosamente',
        ]);
    
        return redirect()->route('admin.capacitaciones.index');
    }
    
}
