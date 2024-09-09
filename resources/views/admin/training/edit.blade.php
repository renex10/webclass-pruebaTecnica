<x-admin-layout>
    <div class="mb-4">
        <form action="{{ route('admin.capacitaciones.update', $training->id) }}" method="POST" class="bg-white rounded-lg">
            @csrf
            @method('PUT')

            <x-validation-errors class="mb-4" />

            <!-- Campo Tema -->
            <div>
                <x-label for="topic" value="Tema" />
                <x-input id="topic" name="topic" class="block mt-1 w-full" required autofocus value="{{ old('topic', $training->topic) }}" />
            </div>

            <!-- Campo Fecha de capacitación -->
            <div>
                <x-label for="date" value="Fecha de capacitación" />
                <x-input id="date" name="date" type="date" class="block mt-1 w-full" required value="{{ old('date', $training->training_date) }}" />
            </div>

            <!-- Campo Tipo -->
            <div>
                <x-label for="type" value="Tipo" />
                <select id="type" name="type" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="remote" {{ $training->type == 'remote' ? 'selected' : '' }}>Remota</option>
                    <option value="in-person" {{ $training->type == 'in-person' ? 'selected' : '' }}>Presencial</option>
                </select>
            </div>

            <!-- Campo Asistencia -->
            <div>
                <x-label for="attendance" value="Asistencia" />
                <select id="attendance" name="attendance" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <option value="1" {{ $training->attendance == 1 ? 'selected' : '' }}>Asistió</option>
                    <option value="0" {{ $training->attendance == 0 ? 'selected' : '' }}>No asistió</option>
                </select>
            </div>

            <!-- Campo Colegio -->
            <div>
                <x-label for="school_id" value="Colegio" />
                <select id="school_id" name="school_id" class="block mt-1 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" required>
                    <option value="">Selecciona un colegio</option>
                    @foreach($schools as $school)
                        <option value="{{ $school->id }}" {{ $school->id == $training->school_id ? 'selected' : '' }}>
                            {{ $school->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4">
                    {{ __('Actualizar') }}
                </x-button>
            </div>
        </form>
    </div>
</x-admin-layout>
