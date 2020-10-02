<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Categoria;
use App\Precio;
use Kodeine\Acl\Models\Eloquent\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        $categoria = new Categoria();
        $categoriaAdmin = $categoria->create([
            'nombre' => 'Consumo diario',
            'descripcion' => 'Articulos de consumo diario'
        ]);

        $categoria = new Categoria();
        $categoriaCocinero = $categoria->create([
            'nombre' => 'Bebidas',
            'descripcion' => 'Bebidas fermentadas y no fermentadas'
        ]);

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Pañales suaves',
                'nombre' => 'Pañales',
                'categoria_id' => 1,
            ]
        );

        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 12, 'descripcion' => 'Mayoreo', 'producto_id' => 1]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Arroz amarillo',
                'nombre' => 'arroz',
                'categoria_id' => 1,
            ]
        );

        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 6, 'descripcion' => 'Mayoreo', 'producto_id' => 2]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Cereal Kellogs',
                'nombre' => 'Cereal',
                'categoria_id' => 1,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 22, 'descripcion' => 'Mayoreo', 'producto_id' => 3]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Leche 1 lt',
                'nombre' => 'Leche',
                'categoria_id' => 1,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 8, 'descripcion' => 'Mayoreo', 'producto_id' => 4]
        );


        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Frijol lata ',
                'nombre' => 'Frijol',
                'categoria_id' => 1,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 5, 'descripcion' => 'Mayoreo', 'producto_id' => 5]
        );

        /// 
        $producto = $producto->create(
            ['descripcion' => 'Pepsi 1.5 lt',
                'nombre' => 'Pepsi',
                'categoria_id' => 2,
            ]
        );

        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 12, 'descripcion' => 'Mayoreo', 'producto_id' => 6]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Coca Cola 600 ml',
                'nombre' => 'Coca Cola',
                'categoria_id' => 2,
            ]
        );

        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 6, 'descripcion' => 'Mayoreo', 'producto_id' => 7]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Jugo Sabores',
                'nombre' => 'Jugo Kerns',
                'categoria_id' => 2,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 22, 'descripcion' => 'Mayoreo', 'producto_id' => 8]
        );

        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Leche 1 lt',
                'nombre' => 'Leche',
                'categoria_id' => 2,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 8, 'descripcion' => 'Mayoreo', 'producto_id' => 9]
        );


        $producto = new producto();
        $producto = $producto->create(
            ['descripcion' => 'Tampico naranja, mandarina, limon ',
                'nombre' => 'Tampico',
                'categoria_id' => 2,
            ]
        );
        $precio = new Precio();
        $precio = $precio->create(
            ['costo' => 5, 'descripcion' => 'Mayoreo', 'producto_id' => 10]
        );
        
    }
} 