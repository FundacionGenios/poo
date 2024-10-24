<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>Celulares</h2>

    <table>
        <thead>
            <tr>
                <th>Marca</th>
                <th>Nombre</th>
                <th>Rom</th>
                <th>Ram</th>
            </tr>
        </thead>
        <tbody>
            <?php
            class Celulares {
                private $marca;
                private $nombre;
                private $rom;
                private $ram;

                public function __construct($marca, $nombre, $rom, $ram) {
                    $this->marca = $marca;
                    $this->nombre = $nombre;
                    $this->rom = $rom;
                    $this->ram = $ram;
                }

                public function getMarca() {
                    return $this->marca;
                }

                public function getNombre() {
                    return $this->nombre;
                }

                public function getRom() {
                    return $this->rom;
                }

                public function getRam() {
                    return $this->ram;
                }

            }

            $celulares = [];

            $celulares[] = new Celulares("Samsung", "Galaxy S10", "128GB", "6GB");
            $celulares[] = new Celulares("Apple", "iPhone 12", "128GB", "12GB");
            $celulares[] = new Celulares("Huawei", "Mate 20", "552GB", "8GB");
            $celulares[] = new Celulares("Xiaomi", "Mi 10", "64GB", "4GB");
            $celulares[] = new Celulares("OnePlus", "6T", "256GB", "6GB"); 
            $celulares[] = new Celulares("LG", "G7", "128GB", "6GB");
            $celulares[] = new Celulares("Sony", "Xperia 10", "552GB", "12GB");
            $celulares[] = new Celulares("Google", "Pixel 4", "64GB", "4GB");
            $celulares[] = new Celulares("Asus", "Zenfone Max Pro 7", "256GB", "6GB");
            $celulares[] = new Celulares("Samsung", "Galaxy A10", "256GB", "16GB");

            foreach ($celulares as $celular) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($celular->getMarca()) . "</td>";
                echo "<td>" . htmlspecialchars($celular->getNombre()) . "</td>";
                echo "<td>" . htmlspecialchars($celular->getRom()) . "</td>";
                echo "<td>" . htmlspecialchars($celular->getRam()) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
