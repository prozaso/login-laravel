<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $useradmin=User::create([ 'name' => 'admin', 
                                  'email' => 'admin@admin.com', 
                                  'password' => Hash::make('admin'), 
                                  'tipo' => '1', ]);

        $user1=User::create([ 'name' => 'usuario', 
                              'email' => 'usuario@usuario.com', 
                              'password' => Hash::make('usuario'), 
                              'tipo' => '2', ]);

        $user1=User::create([ 'name' => 'moderador', 
                              'email' => 'moderador@moderador.com', 
                              'password' => Hash::make('moderador'), 
                              'tipo' => '3', ]);
    }
}
