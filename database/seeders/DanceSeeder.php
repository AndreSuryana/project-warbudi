<?php

namespace Database\Seeders;

use App\Models\Dance;
use Illuminate\Database\Seeder;

class DanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dances = [
            [
                'name' => 'Tari Rejang',
                'slug' => 'tari-rejang',
                'type_id' => '1',
                'history' => 'Menurut beberapa sumber sejarah yang ada, Tari Rejang diperkirakan sudah ada sejak jaman pra-Hindu. Tarian ini dilakukan sebagai persembahan suci untuk menyambut kedatangan para dewa yang turun ke Bumi. Di kalangan masyarakat Hindu Bali, Tari Rejang ini selalu ditampilkan pada berbagai upacara adat dan keagamaan yang diselenggarakan di pura seperti upacara Odalan. Selain itu di beberapa tempat di Bali, tarian ini juga tampilkan setiap tahunnya, sebagai bagian dari upacara peringatan tertentu di lingkungan desa mereka.',
                'description' => 'Tari Rejang merupakan salah satu jenis tari Wali atau tari sakral yang ditarikan saat proses upacara odalan di Pura. Karena kesakralan atau kesucian tarian ini, biasanya ditarikan oleh anak-anak yang masih gadis atau belum pernah datang bulan.',
                'video_link' => 'DrWBmmM9Y04',
            ], [
                'name' => 'Tari Topeng',
                'slug' => 'tari-topeng',
                'type_id' => '2',
                'history' => 'Tarian topeng Bali, sebenarnya sudah ada sejak zaman pemerintahan raja Jaya Pangus yakni sekitar abad X. Hal ini tertera pada kumpulan prasasti Jaya Pangus yang menyatakan bahwa ada pertunjukan yang mempergunakan alat-alat penutup muka alias topeng. Pada prasasti Blantih (1059 Masehi) juga mengungkapkan topeng sudah dikenal dan kerap dijadikan sebagai properti di sebuah pertunjukan. Ada pula prasasti lainnya yakni Ularan Plasraya yang menyebutkan pemerintahan Dalem Waturenggong di Gelgel (1460-1550) menaklukan Kerajaan Blambangan maka dirampaslah beberapa barang yang salah satunya adalah peti topeng.',
                'description' => 'Keberadaan topeng dalam masyarakat Bali berkaitan erat dengan upacara keagamaan Hindu, karena kesenian luluh dalam agama dan masyarakat. Tari Topeng Bali adalah sebuah tradisi yang kental dengan nuansa ritual magis, umumnya yang ditampilkan di tengah masyarakat adalah seni yang disakralkan. Tuah dari topeng yang merepresentasikan dewa-dewa dipercaya mampu menganugrahkan ketenteraman dan keselamatan.',
                'video_link' => 'iU67jWGpG44',
            ]
        ];

        Dance::insert($dances);
    }
}
