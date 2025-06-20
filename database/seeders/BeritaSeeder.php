<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'judul' => 'Pemerintah Umumkan Kebijakan Baru Pendidikan',
                'isi' => 'Pemerintah telah merilis kebijakan baru yang akan mulai diterapkan tahun depan, menyasar pendidikan dasar hingga perguruan tinggi.',
                'kategori' => 'Pendidikan',
            ],
            [
                'judul' => 'Timnas Indonesia Lolos ke Final Piala AFF',
                'isi' => 'Dalam pertandingan yang menegangkan, Timnas Indonesia berhasil mengalahkan Vietnam dengan skor 2-1 dan lolos ke final Piala AFF 2025.',
                'kategori' => 'Olahraga',
            ],
            [
                'judul' => 'Harga BBM Naik Mulai Awal Bulan Depan',
                'isi' => 'Pemerintah resmi menaikkan harga bahan bakar minyak (BBM) bersubsidi mulai tanggal 1 Juli, sebagai respons terhadap lonjakan harga minyak dunia.',
                'kategori' => 'Ekonomi',
            ],
            [
                'judul' => 'Penemuan Teknologi Baru di Bidang Energi Terbarukan',
                'isi' => 'Para peneliti berhasil menemukan teknologi baru untuk meningkatkan efisiensi panel surya hingga 40% lebih baik.',
                'kategori' => 'Teknologi',
            ],
            [
                'judul' => 'Festival Budaya Nusantara Digelar Meriah di Surabaya',
                'isi' => 'Festival yang menampilkan kesenian dan kuliner khas daerah ini berhasil menarik ribuan pengunjung dari berbagai penjuru negeri.',
                'kategori' => 'Budaya',
            ],
        ];

        foreach ($data as $item) {
            Berita::create($item);
        }
    }
}
