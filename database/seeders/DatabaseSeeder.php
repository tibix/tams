<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('roles')->insert([
            'role' => 'User',
            'description' => 'Normal user wit limited access',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('roles')->insert([
            'role' => 'Journalist',
            'description' => 'User with article writing privileges',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('roles')->insert([
            'role' => 'Editor',
            'description' => 'User with approval rights',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('roles')->insert([
            'role' => 'Admin',
            'description' => 'Super user',
            'created_at' => date("Y-m-d H:i:s"),
        ]);


        DB::table('states')->insert([
            'state' => 'Published',
            'description' => 'Published and active on the website',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('states')->insert([
            'state' => 'Unpublished',
            'description' => 'Pending approval from Editor',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('states')->insert([
            'state' => 'Draft',
            'description' => 'Work in progress',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('states')->insert([
            'state' => 'Archived',
            'description' => 'Not available on the website',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('states')->insert([
            'state' => 'Rejected',
            'description' => 'Rejected by Editor, pending changes from Journalist',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('categories')->insert([
            'category' => 'Art',
            'description' => 'Descover the world of Art',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('categories')->insert([
            'category' => 'Technology',
            'description' => 'Welcome to the fascinating world of Technology',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('categories')->insert([
            'category' => 'Science',
            'description' => 'Let us explore the univers enigmas',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('categories')->insert([
            'category' => 'Fashion',
            'description' => 'Fashion presentations and the latest to wear',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('users')->insert([
            'u_name' => 'tdascal',
            'f_name' => 'Tiberiu',
            'l_name' => 'Dascal',
            'email' => 'tdascal@email.com',
            'password' => bcrypt('tdascal'),
            'role_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'u_name' => 'jurnalist',
            'f_name' => 'Jurnalist',
            'l_name' => 'Primar',
            'email' => 'jurnalist@email.com',
            'password' => bcrypt('jurnalist'),
            'role_id' => 2,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'u_name' => 'editor',
            'f_name' => 'Editor',
            'l_name' => 'Primar',
            'email' => 'editor@email.com',
            'password' => bcrypt('editor'),
            'role_id' => 3,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        DB::table('users')->insert([
            'u_name' => 'admin',
            'f_name' => 'Admin',
            'l_name' => 'Super',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin'),
            'role_id' => 4,
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
