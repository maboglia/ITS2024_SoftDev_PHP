<?php

namespace Database\Seeders;

use App\Models\Flag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FlagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $paesi = [
            ['nome'=>'Italia', 'bandiera'=>'it'],
            ['nome'=>'Francia', 'bandiera'=>'fr'],
            ['nome'=>'Germania', 'bandiera'=>'de'],
        ];

        foreach ($paesi as $paese) {
            $record = new Flag();
            $record->country = $paese['nome'];
            $record->url =  '/img/' . $paese['bandiera'] .'.png';
            $record->save();
        }

    }
}
