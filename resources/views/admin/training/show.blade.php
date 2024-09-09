<x-admin-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Detalles de la Capacitación</h1>

        <!-- Información del entrenamiento -->
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <x-label for="topic" value="Tema" />
                <p class="text-gray-600">{{ $training->topic }}</p>
            </div>

            <div class="mb-4">
                <x-label for="date" value="Fecha de Capacitación" />
                <p class="text-gray-600">{{ $training->training_date }}</p>
            </div>

            <div class="mb-4">
                <x-label for="type" value="Tipo" />
                <p class="text-gray-600">{{ $training->type == 'remote' ? 'Remota' : 'Presencial' }}</p>
            </div>

            <div class="mb-4">
                <x-label for="attendance" value="Asistencia" />
                <p class="text-gray-600">{{ $training->attendance == 1 ? 'Asistió' : 'No asistió' }}</p>
            </div>

            <div class="mb-4">
                <x-label for="school_id" value="Colegio" />
                <p class="text-gray-600">{{ $training->school->name ?? 'Sin colegio' }}</p>
            </div>

            <!-- Botón para regresar a la lista -->
            <a href="{{ route('admin.capacitaciones.index') }}" class="text-indigo-600 hover:underline">
                Volver a la lista
            </a>
        </div>
    </div>
</x-admin-layout>
