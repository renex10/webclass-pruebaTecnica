@php
    $links = [
        [
            'name' => 'Capacitaciones',
            'url' => route('admin.capacitaciones.index'), // Usar el nombre de ruta correcto
            'active' => request()->routeIs('admin.capacitaciones.index'),
            'icon' => 'fa-solid fa-book' // Cambia el ícono si es necesario
        ],
        [
            'name' => 'Mis Capacitaciones',
            'url' => route('admin.capacitaciones.index'),
            'active' => request()->routeIs('admin.capacitaciones.index'),
            'icon' => 'fa-solid fa-calendar-check'
        ],
        // Si tienes otras rutas, asegúrate de usar el nombre de ruta correcto
        // [
        //     'name' => 'Informe Colegio',
        //     'url' => route('admin.informe-colegio'),
        //     'active' => request()->routeIs('admin.informe-colegio'),
        //     'icon' => 'fa-solid fa-school'
        // ],
        // [
        //     'name' => 'Informe Progreso',
        //     'url' => route('admin.informe-progreso'),
        //     'active' => request()->routeIs('admin.informe-progreso'),
        //     'icon' => 'fa-solid fa-chart-line'
        // ],
        // [
        //     'name' => 'Calificaciones',
        //     'url' => route('admin.calificaciones'),
        //     'active' => request()->routeIs('admin.calificaciones'),
        //     'icon' => 'fa-solid fa-graduation-cap'
        // ]
    ];
@endphp


<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:border-gray-700" aria-label="Sidebar"
:class="{
    '-translate-x-full': !open,
    'transform-none': open,
}">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-slate-100 dark:bg-gray-100">
        <ul class="space-y-2 font-medium">
            <!-- Menú de Capacitaciones con dropdown -->
            <li x-data="{ open: false }">
                <!-- Reemplazamos el enlace con un botón -->
                <button @click="open = !open" class="flex items-center w-full p-2 text-gray-900 rounded-lg dark:text-gray-400 hover:bg-cyan-400 dark:hover:bg-cyan-600 group {{ request()->routeIs('admin.*') ? 'bg-cyan-400' : '' }}">
                    <i class="fa-solid fa-book"></i>
                    <span class="ms-3">Capacitaciones</span>
                    <i class="fa-solid fa-chevron-down ms-auto"></i>
                </button>
                <!-- Aquí comienza el dropdown -->
                <ul x-show="open" @click.away="open = false" class="space-y-2 pl-4 mt-2">
                    @foreach ($links as $link)
                        @if ($link['name'] != 'Capacitaciones')
                            <li>
                                <a href="{{ $link['url'] }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-400 hover:bg-cyan-400 dark:hover:bg-cyan-600 group {{ $link['active'] ? 'bg-cyan-400' : '' }}">
                                    <i class="{{ $link['icon'] }}"></i>
                                    <span class="ms-3">{{ $link['name'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </li>
        </ul>
    </div>
</aside>

