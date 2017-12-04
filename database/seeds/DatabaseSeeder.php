<?php
use App\Capa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    private $arrayCapas = array(
    array(
        'pk' => '0',
        'nombre' => 'Cofete',
        'imagen' => 'imagenes/cofete.jpg',
        'descripcion' => 'Es un paraiso virgen rodeada de montañas. Está ubicada al sur de la isla en la península de Jandía'),        
    array(
        'pk' => '1',
        'nombre' => 'Sotavento',
        'imagen' => 'imagenes/sotavento.jpg',
        'descripcion' => 'Está al sur de la isla en la peninsula de jandía. Tiene alrededor de 10kms y se caracteriza por el lago que se forma entre la orilla y la barra de arena. Es una de las más famosas y la que casi siempre sale fotografiada en los folletos turísticos, con aguas cristalinas y arena blanca.
        Esta zona de playas se encuentra al sur de Costa Calma, y al no tener apenas hoteles, y debido también a su gran tamaño, nunca tienen mucha gente, excepto practicantes de Windsurfing y Kiteboarding'),
    array(
        'pk' => '2',
        'nombre' => 'La Concha',
        'imagen' => 'imagenes/concha.jpg',
        'descripcion' => 'Está al norte de la isla en el pueblo del Cotillo. Tiene forma de bahía que la protege de las mareas y el oleaje, y suave arena blanca')
        );

    private function seedCatalog()
    {
		DB::table('capas')->delete();
		foreach( $this->arrayCapas as $capa ) {
          $c = new Capa;
          $c->nombre = $capa['nombre'];
          $c->imagen = $capa['imagen'];
          $c->descripcion = $capa['descripcion'];
          $c->save();
        }

    }
    public function run()
    {
      self::seedCatalog();
      $this->command->info('Tabla capas inicializada con datos!');

        // $this->call(UsersTableSeeder::class);
    }
}
