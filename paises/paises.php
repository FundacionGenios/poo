<?php

    include ("Pais.php");

    $paises = [];
    $paises[] = new Pais(1, "Argentina", "Alberto Fernández", 45000000, 4);
    $paises[] = new Pais(2, "Brasil", "Luiz Inácio Lula da Silva", 213000000, 1);
    $paises[] = new Pais(3, "México", "Andrés Manuel López Obrador", 128000000, 2);
    $paises[] = new Pais(4, "Colombia", "Gustavo Petro", 51000000, 32);
    $paises[] = new Pais(5, "España", "Pedro Sánchez", 47000000, 7);
    $paises[] = new Pais(6, "Francia", "Emmanuel Macron", 67000000, 1);
    $paises[] = new Pais(7, "Alemania", "Frank-Walter Steinmeier", 83000000, 2);
    $paises[] = new Pais(8, "Canadá", "Justin Trudeau", 38000000, 3);
    $paises[] = new Pais(9, "Australia", "Anthony Albanese", 26000000, 4);
    $paises[] = new Pais(10, "Italia", "Sergio Mattarella", 60000000, 5);    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Países</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Open main menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Productos</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Países</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Profesores</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Mascotas</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Celulares</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Motos</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Log in <span aria-hidden="true">&rarr;</span></a>
        </div>
        </nav>
        <div class="lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 z-10"></div>
        <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">Your Company</span>
                <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
            </a>
            <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            </div>
            <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                <div class="-mx-3">
                    <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                    Product
                    <!--
                    Expand/collapse icon, toggle classes based on menu open state.

                    Open: "rotate-180", Closed: ""
                    -->
                    <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                    </svg>
                    </button>
                <!-- 'Product' sub-menu, show/hide based on menu state. --> 
                    <div class="mt-2 space-y-2" id="disclosure-1">
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Analytics</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Engagement</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Security</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Integrations</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Automations</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Watch demo</a>
                    <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact sales</a>
                    </div>
                </div>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </header>

    <table class="w-3/4 mx-auto border-collapse bg-white shadow-md rounded-lg mt-20">
        <thead class="bg-gray-800 text-white">
            <tr>
                <th class="px-4 py-2 text-left">ID País</th>
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Presidente</th>
                <th class="px-4 py-2 text-left">Población</th>
                <th class="px-4 py-2 text-left">Cant. Deptos</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <?php foreach ($paises as $pais): ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?php echo $pais->getIdPais(); ?></td>
                    <td class="px-4 py-2"><?php echo $pais->getNombre(); ?></td>
                    <td class="px-4 py-2"><?php echo $pais->getPresidente(); ?></td>
                    <td class="px-4 py-2"><?php echo $pais->getCantidadPoblacion(); ?></td>
                    <td class="px-4 py-2"><?php echo $pais->getCantidadDepartamentos(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

</body>
</html>
