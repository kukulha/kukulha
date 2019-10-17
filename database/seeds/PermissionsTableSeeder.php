<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Users
        Permission::create([
        	'name' 			=> 'Listar Usuarios',
        	'slug' 			=> 'users.index',
        	'description' 	=> 'Listado de usuarios',
        ]);

        Permission::create([
        	'name' 			=> 'Edición de un Usuario',
        	'slug' 			=> 'users.edit',
        	'description' 	=> 'Editar un usuario',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminación de Usuario',
        	'slug' 			=> 'users.destroy',
        	'description' 	=> 'Eliminar un usuario',
        ]);

        //Roles
        Permission::create([
        	'name' 			=> 'Listar Roles',
        	'slug' 			=> 'roles.index',
        	'description' 	=> 'Listado de Roles',
        ]);

        Permission::create([
        	'name' 			=> 'Editar un Rol',
        	'slug' 			=> 'roles.edit',
        	'description' 	=> 'Editar un Rol',
        ]);

        Permission::create([
        	'name' 			=> 'Crear un Rol',
        	'slug' 			=> 'roles.create',
        	'description' 	=> 'Crear un Rol',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminación de un Rol',
        	'slug' 			=> 'roles.destroy',
        	'description' 	=> 'Eliminar un Rol',
        ]);

        //Posts
        Permission::create([
        	'name' 			=> 'Listar Artículos',
        	'slug' 			=> 'posts.index',
        	'description' 	=> 'Listado de Artículos',
        ]);

        Permission::create([
        	'name' 			=> 'Editar un Artículo',
        	'slug' 			=> 'posts.edit',
        	'description' 	=> 'Editar un Artículo',
        ]);

        Permission::create([
        	'name' 			=> 'Crear un Artículo',
        	'slug' 			=> 'posts.create',
        	'description' 	=> 'Crear un Artículo',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminación de un Artículo',
        	'slug' 			=> 'posts.destroy',
        	'description' 	=> 'Eliminar un Artículo',
        ]);

        //Images
        Permission::create([
        	'name' 			=> 'Listar Imágenes',
        	'slug' 			=> 'images.index',
        	'description' 	=> 'Listado de Imágenes',
        ]);

        Permission::create([
        	'name' 			=> 'Editar una Imágen',
        	'slug' 			=> 'images.edit',
        	'description' 	=> 'Editar una Imágen',
        ]);

        Permission::create([
        	'name' 			=> 'Crear una Imágen',
        	'slug' 			=> 'images.create',
        	'description' 	=> 'Crear una Imágen',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminación de una Imágen',
        	'slug' 			=> 'images.destroy',
        	'description' 	=> 'Eliminar una Imagén',
        ]);

        //Categories
        Permission::create([
        	'name' 			=> 'Listar Categorías',
        	'slug' 			=> 'categories.index',
        	'description' 	=> 'Listado de Categorías',
        ]);

        Permission::create([
        	'name' 			=> 'Editar una Categoría',
        	'slug' 			=> 'categories.edit',
        	'description' 	=> 'Editar una Categoría',
        ]);

        Permission::create([
        	'name' 			=> 'Crear un Categoría',
        	'slug' 			=> 'categories.create',
        	'description' 	=> 'Crear una Categoría',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminación de una Categoría',
        	'slug' 			=> 'categories.destroy',
        	'description' 	=> 'Eliminar una Categoría',
        ]);

        //Messages
        Permission::create([
        	'name' 			=> 'Listar Mensajes',
        	'slug'			=> 'messages.index',
        	'description' 	=> 'Listado de mensajes' 
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar Mensajes',
        	'slug'			=> 'messages.destroy',
        	'description' 	=> 'Eliminar un mensaje' 
        ]);
    }
}
