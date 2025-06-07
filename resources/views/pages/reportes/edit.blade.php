<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        <div class="sm:flex sm:justify-between sm:items-center mb-8">
            <div class="mb-4 sm:mb-0">
                <h1 class="text-2xl md:text-3xl text-gray-800 dark:text-gray-100 font-bold">Editar Reporte de Falla</h1>
            </div>
        </div>
        
        <x-forms.form-reporte :reporte="$reporte" :clientes="$clientes" :direcciones="$direcciones"/>
    </div>
</x-app-layout>