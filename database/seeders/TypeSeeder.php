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
        $types = [
            [
                'slug'          => 'tari-wali',
                'name'          => 'Tari Wali (Religius Dance)',
                'subtitle'      => 'Lorem ipsum dolor sit amet sagittis augue, eleifend consequat mi nibh et',
                'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quibusdam distinctio sed deserunt ab tempore ipsam nesciunt modi similique aperiam, iure provident, praesentium voluptates. Amet iste magnam odio accusamus nesciunt.'
            ], [
                'slug'          => 'tari-bebali',
                'name'          => 'Tari Bebali (Ceremonial Dance)',
                'subtitle'      => 'Lorem ipsum dolor sit amet sagittis augue, eleifend consequat mi nibh et',
                'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quibusdam distinctio sed deserunt ab tempore ipsam nesciunt modi similique aperiam, iure provident, praesentium voluptates. Amet iste magnam odio accusamus nesciunt.'
            ], [
                'slug'          => 'tari-balih-balihan',
                'name'          => 'Tari Balih-Balihan (Secular Dance)',
                'subtitle'      => 'Lorem ipsum dolor sit amet sagittis augue, eleifend consequat mi nibh et',
                'description'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quibusdam distinctio sed deserunt ab tempore ipsam nesciunt modi similique aperiam, iure provident, praesentium voluptates. Amet iste magnam odio accusamus nesciunt.'
            ],
        ];

        Type::insert($types);
    }
}
