<x-app-layout>
    <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
    <table class="mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <th scope="col" class="py-3 px-6">Descripcion</th>
            <th scope="col" class="py-3 px-">Stock</th>
            <th scope="col" class="py-3 px-6">Precio</th>
        </thead>
        <tbody>
        @foreach ($articulos as $articulo)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td scope="col" class="py-3 px-6">
                    {{ $articulo->descripcion }}
                </td>
                <td scope="col" class="py-3 px-6">
                    {{ $articulo->stock }}
                </td>
                <td scope="col" class="py-3 px-6">
                    {{ $articulo->precio }}
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
    </div>
</x-app-layout>
