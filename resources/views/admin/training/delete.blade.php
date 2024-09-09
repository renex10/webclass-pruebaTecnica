<x-admin-layout>
    <div class="mb-4 p-4 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Confirmar eliminación</h1>
        
        <p class="mb-4 text-gray-600">¿Estás seguro de que deseas eliminar la capacitación <strong>{{ $training->topic }}</strong>? Esta acción no se puede deshacer.</p>
        
        <form action="{{ route('admin.capacitaciones.destroy', $training->id) }}" method="POST">
            @csrf
            @method('DELETE')

            <div class="flex items-center justify-end mt-4">
                <x-button class="ml-4 bg-red-500 hover:bg-red-600">
                    {{ __('Eliminar') }}
                </x-button>
                <a href="{{ route('admin.capacitaciones.index') }}" class="ml-4 text-blue-500 hover:underline">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
</x-admin-layout>
