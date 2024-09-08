<x-admin-layout>
    <div class="mb-4">
        <form action="{{ route('admin.capacitaciones.store') }}" method="POST" class="bg-white rounded-lg">
            @csrf

            <x-validation-errors class="mb-4" />

            <div>
                <x-label for="topic" value="Tema" />
                <x-input id="topic" name="topic" class="block mt-1 w-full" required autofocus />
            </div>

            <div>
                <x-label for="date" value="Fecha de capacitación" />
                <x-input id="date" name="date" type="date" class="block mt-1 w-full" required />
            </div>

            <div>
                <x-label for="type" value="Tipo" />
                <select id="type" name="type" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="remote">Remota</option>
                    <option value="in-person">Presencial</option>
                </select>
            </div>

            <div>
                <x-label for="attendance" value="Asistencia" />
                <select id="attendance" name="attendance" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="1">Asistió</option>
                    <option value="0">No asistió</option>
                </select>
            </div>

            <div>
                <x-label for="school_id" value="Colegio" />
                <select id="school_id" name="school_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="">Selecciona un colegio</option>
                    @foreach($schools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    Crear nueva capacitación
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
