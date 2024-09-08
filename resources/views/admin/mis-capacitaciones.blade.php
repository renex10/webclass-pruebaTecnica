<x-admin-layout>
    <h3>mis capacitaciones</h3>
    <div>
        <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Headliner </label>
      
        <select
          name="HeadlineAct"
          id="HeadlineAct"
          class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
        >
          <option value="">Please select</option>
          <option value="JM">John Mayer</option>
          <option value="SRV">Stevie Ray Vaughn</option>
          <option value="JH">Jimi Hendrix</option>
          <option value="BBK">B.B King</option>
          <option value="AK">Albert King</option>
          <option value="BG">Buddy Guy</option>
          <option value="EC">Eric Clapton</option>
        </select>
      </div>

      <div>
        <label for="HeadlineAct" class="block text-sm font-medium text-gray-900"> Headliner </label>
      
        <select
          name="HeadlineAct"
          id="HeadlineAct"
          class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm"
        >
          <option value="">Please select</option>
          <option value="JM">John Mayer</option>
          <option value="SRV">Stevie Ray Vaughn</option>
          <option value="JH">Jimi Hendrix</option>
          <option value="BBK">B.B King</option>
          <option value="AK">Albert King</option>
          <option value="BG">Buddy Guy</option>
          <option value="EC">Eric Clapton</option>
        </select>
      </div>
      
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-semibold mb-4">Capacitaciones</h1>
 
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead>
                <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">N° ID</th>
                    <th class="py-3 px-6 text-left">Tema</th>
                    <th class="py-3 px-6 text-left">Fecha capacitación</th>
                    <th class="py-3 px-6 text-left">Tipo</th>
                    <th class="py-3 px-6 text-left">Setmore ID</th>
                    <th class="py-3 px-6 text-left">Asistencia</th>
                    <th class="py-3 px-6 text-left">Colegio</th>
                    <th class="py-3 px-6 text-left">Herramientas</th>
                </tr>
            </thead>
            <tbody class="text-gray-700 text-sm">
                @for ($i = 1; $i <= 10; $i++)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $i }}</td>
                        <td class="py-3 px-6">Tema {{ $i }}</td>
                        <td class="py-3 px-6">{{ date('Y-m-d', strtotime("+{$i} days")) }}</td>
                        <td class="py-3 px-6">Tipo {{ $i }}</td>
                        <td class="py-3 px-6">Setmore {{ $i }}</td>
                        <td class="py-3 px-6">Asistencia {{ $i }}</td>
                        <td class="py-3 px-6">Colegio {{ $i }}</td>
                        <td class="py-3 px-6 text-center">
                            <a href="#" class="text-blue-500 hover:text-blue-700 mr-2" title="Ver">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="text-green-500 hover:text-green-700 mr-2" title="Crear">
                                <i class="fas fa-plus"></i>
                            </a>
                            <a href="#" class="text-yellow-500 hover:text-yellow-700 mr-2" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="#" class="text-red-500 hover:text-red-700" title="Eliminar">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
</x-admin-layout>