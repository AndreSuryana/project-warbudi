<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wali = [
            'slug'          => 'tari-wali',
            'name'          => 'Tari Wali (Religius Dance)',
            'subtitle'      => 'Tari Wali merupakan jenis tarian upacara atau tari sakral',
            'description'   => 'Tari Wali merupakan jenis tarian upacara atau tari sakral, ditarikan pada setiap kegiatan Upacara Adat Hindu di Bali. Tarian Wali ini hanya di pentaskan di Pura pada area terdalam yang disebut (Jeroan).'
        ];
        Type::create($wali);
        
        $bebali = [
            'slug'          => 'tari-bebali',
            'name'          => 'Tari Bebali (Ceremonial Dance)',
            'subtitle'      => 'Tari Bebali adalah jenis-jenis tari yang difungsikan sebagai pengiring upacara keagamaan',
            'description'   => 'Tari Bebali adalah jenis-jenis tari yang difungsikan sebagai pengiring upacara keagamaan yang dipentaskan pada hari-hari dan tempat-tempat tertentu yaitu di halaman tengan (jaba tengah) suatu pura dalam rangka piodalan.'
        ];
        Type::create($bebali);

        $balih = [
            'slug'          => 'tari-balih-balihan',
            'name'          => 'Tari Balih-Balihan (Secular Dance)',
            'subtitle'      => 'Tari Balih-balihan adalah golongan seni tari yang difungsikan hanya untuk hiburan belaka',
            'description'   => 'Tari Balih-balihan adalah golongan seni tari yang difungsikan hanya untuk hiburan belaka, dipentaskan di halaman paling luar pura (jaba sisi). Golongan seni tari seperti ini disebut dengan seni profane.'
        ];
        Type::create($balih);
    }
}
