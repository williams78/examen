<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
               'Listar-Roles',
               'Agregar-Roles',
               'Editar-Roles',
               'Eliminar-Roles',
               'product-list',
               'product-create',
               'product-edit',
               'Listar_Usuarios',
               'Agregar_Usuarios',
               'Editar_Usuarios',
               'Eliminar_Usuarios'
        ];
        foreach($permissions as $permission){
        	Permission::create(['name'=>$permission])
        }
    }
}
