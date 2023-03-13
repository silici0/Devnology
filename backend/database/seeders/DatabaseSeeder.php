<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ret = file_get_contents('http://616d6bdb6dacbb001794ca17.mockapi.io/devnology/brazilian_provider');
        $ret = json_decode($ret);
        for ($i =0; $i <= 10; $i++) {
            DB::table('products')->insert(
                [
                    'name' => $ret[$i]->nome,
                    'price' => $ret[$i]->preco,
                    'image' => $ret[$i]->imagem,
                ]
            );
        }
        //\App\Models\Product::factory(10)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
