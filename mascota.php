<?php
 include ("luisa.php");


$Mascotas=[];
$Mascotas[]=new Mascota("teo", 2, "roja", "pug");
$Mascotas[]=new Mascota("lupe", 1, "azul", "schnauzer");
$Mascotas[]=new Mascota("pedro", 14, "rojo", "pincher");
$Mascotas[]=new Mascota("kiara", 2, "verde", "criolla");
$Mascotas[]=new Mascota("lulu", 16, "azul", "criolla");
$Mascotas[]=new Mascota("tito", 4, "roja", "pincher");
$Mascotas[]=new Mascota("popeye", 6, "rojo", "pincher");
    




?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>

<table class="w-3/4 mx-auto border-collapse bg-white shadow-md rounded-lg mt-20">
        <thead class="bg-gray-800 text-white">
            <tr>
         
                <th class="px-4 py-2 text-left">Nombre</th>
                <th class="px-4 py-2 text-left">Edad</th>
                <th class="px-4 py-2 text-left">Color</th>
                <th class="px-4 py-2 text-left">Raza</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
        <?php foreach ($Mascotas as $mascota): ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?php echo $mascota->getNombre(); ?></td>
                    <td class="px-4 py-2"><?php echo $mascota->getEdad(); ?></td>
                    <td class="px-4 py-2"><?php echo $mascota->getColor()?></td>
                    <td class="px-4 py-2"><?php echo $mascota->getRaza() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>

    
</body>

