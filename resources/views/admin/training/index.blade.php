<x-admin-layout>
    <div class="relative">
        <a
          class="absolute right-0 mb-5 rounded border border-current px-4 py-3 text-sm font-medium text-indigo-600 transition hover:rotate-2 hover:scale-110 focus:outline-none focus:ring active:text-indigo-500"
          href="{{ route('admin.capacitaciones.create') }}"
        >
         + Agregar nueva capacitación
        </a>
    </div>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-6">Lista de Capacitaciones</h1>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">ID</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Tema</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Fecha de capacitación</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Tipo</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Asistencia</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Colegio</th>
                    <th class="px-6 py-3 border-b text-left text-sm font-medium text-gray-600 uppercase">Herramientas</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($trainings as $training)
                    <tr>
                        <td class="px-6 py-4 border-b text-sm">{{ $training->id }}</td>
                        <td class="px-6 py-4 border-b text-sm">{{ $training->topic }}</td>
                        <td class="px-6 py-4 border-b text-sm">{{ $training->training_date }}</td>
                        <td class="px-6 py-4 border-b text-sm">{{ $training->type }}</td>
                        <td class="px-6 py-4 border-b text-sm">
                            {{ $training->attendances->where('attended', true)->count() }} Asistentes
                        </td>
                        <td class="px-6 py-4 border-b text-sm">{{ $training->school->name ?? 'Sin colegio' }}</td>
                        <td class="px-6 py-4 border-b text-sm flex justify-end space-x-4">
                            <a href="{{ route('admin.capacitaciones.show', $training) }}" class="text-blue-500 hover:underline">
                                <i class="fa-solid fa-eye fa-2x"></i>
                            </a>
                            <a href="{{ route('admin.capacitaciones.edit', $training) }}" class="text-yellow-500 hover:underline">
                                <i class="fa-solid fa-pen fa-2x"></i>
                            </a>
                            <form action="{{ route('admin.capacitaciones.destroy', $training) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline">
                                    <i class="fa-solid fa-trash fa-2x"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 border-b text-sm text-center">No hay capacitaciones disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $trainings->links() }} <!-- Enlaces de paginación -->
    </div>
</x-admin-layout>
