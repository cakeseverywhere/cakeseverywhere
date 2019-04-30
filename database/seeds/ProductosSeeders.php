<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //el ultimo es un alias

class ProductosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
                'nom_producto'=>'Imposible',
                'desc_producto'=>'Pan de chocolate bañado en tres leches, relleno de mousse de fresa con arroz con leche.'

            ]);

        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Pastel de tres leches de vainilla',
            'desc_producto'=>'Pan de vainilla bañado en tres leches, relleno de mousse de fresa con arroz con leche.'

        ]);
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Explosion de chocolate',
            'desc_producto'=>'Pan de chocolate bañado en tres leches de chocolate relleno de ganache.'
        ]);
        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Cuatro chocolates',
            'desc_producto'=>'Pan de chocolate envinado con ron y relleno de mousse de chocolate blanco, oscuro y leche.'

        ]);

        App\models\ModuloProducto\producto::create([
            //DB::table('productos')->insert(array(
            'nom_producto'=>'Supremo de chocolate',
            'desc_producto'=>'Pan de chocolate tipo americano, relleno de ganache, fresa y nuez.'

        ]);
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Malteada',
            'desc_producto'=>'Pan de chocolate relleno de cereza, bañado en malteada de moka con un toque de ron y yogurt.'

        ]);
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Arcoiris',
            'desc_producto'=>'Pan de vainilla, fresa y chocolate bañado en mezcla napolitana. De tres leches relleno de crema con nuez.'

        ]);

        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Reina de fresa',
            'desc_producto'=>'Pan de vainilla envinado con jarabe natural y relleno de fresa con crema pura.'

        ]);
        App\models\ModuloProducto\producto::create([

            'nom_producto'=>'Azucena',
            'desc_producto'=>' Queso horneado con truffas de chocolate semiamargo con avellanas. Y truffas de leche con almendra y trozos de flan y pan de chocolate con tres leches.'

        ]);
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Agua de rosas',
            'desc_producto'=>'Elaborado con pan de vainilla tipo americano relleno de crema de queso y frambuesa. Envinado con jarabe de agua de rosas.'

        ]);
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Rey de chocolate',
            'desc_producto'=>'Pan de chocolate envinado con ron, cubierto de chocolate liquido y fresas.'

        ]);
        App\models\ModuloProducto\producto::create([
            'nom_producto'=>'Pastel de banana',
            'desc_producto'=>'Pan de banana con relleno y decorado de banana.'

        ]);








    }
}
