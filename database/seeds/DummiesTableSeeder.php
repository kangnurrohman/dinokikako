<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DummiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['id' => 1, 'role' => 'admin', 'nama' => 'Administrator', 'email' => 'ainur@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 2, 'role' => 'pembudidaya', 'nama' => 'Bram', 'email' => 'bram@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 3, 'role' => 'pembudidaya', 'nama' => 'Nurkholis', 'email' => 'nurkholis@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 4, 'role' => 'pembudidaya', 'nama' => 'Ammar', 'email' => 'ammar@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 5, 'role' => 'pembudidaya', 'nama' => 'Jamul', 'email' => 'jamul@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 6, 'role' => 'pembudidaya', 'nama' => 'Nanda', 'email' => 'nanda@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 7, 'role' => 'pembudidaya', 'nama' => 'Rahmat', 'email' => 'rahmat@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 8, 'role' => 'pembudidaya', 'nama' => 'Nanang', 'email' => 'nanang@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 9, 'role' => 'pembudidaya', 'nama' => 'Sayyid', 'email' => 'sayyid@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 10, 'role' => 'pembudidaya', 'nama' => 'Zinda', 'email' => 'zinda@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 11, 'role' => 'pembudidaya', 'nama' => 'Tio', 'email' => 'tio@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 12, 'role' => 'pembudidaya', 'nama' => 'Anang', 'email' => 'anang@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 13, 'role' => 'pembudidaya', 'nama' => 'Edo', 'email' => 'edo@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
            ['id' => 14, 'role' => 'pembudidaya', 'nama' => 'sadam', 'email' => 'sadam@gmail.com', 'password' => Hash::make('123456'), 'remember_token' => Str::random()],
        ];

        DB::table('users')->insert($users);
        
        $pembudidaya = [
            ['id' => 1, 'nama' => 'Bram', 'email' => 'bram@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 2],
            ['id' => 2, 'nama' => 'Nurkholis', 'email' => 'nurkholis@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 3],
            ['id' => 3, 'nama' => 'Ammar', 'email' => 'ammar@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 4],
            ['id' => 4, 'nama' => 'Jamul', 'email' => 'jamul@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 5],
            ['id' => 5, 'nama' => 'Nanda', 'email' => 'nanda@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 6],
            ['id' => 6, 'nama' => 'Rahmat', 'email' => 'rahmat@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 7],
            ['id' => 7, 'nama' => 'Nanang', 'email' => 'nanang@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 8],
            ['id' => 8, 'nama' => 'Sayyid', 'email' => 'sayyid@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 9],
            ['id' => 9, 'nama' => 'Zinda', 'email' => 'zinda@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 10],
            ['id' => 10, 'nama' => 'Tio', 'email' => 'tio@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 11],
            ['id' => 11, 'nama' => 'Anang', 'email' => 'anang@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 12],
            ['id' => 12, 'nama' => 'Edo', 'email' => 'edo@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 13],
            ['id' => 13, 'nama' => 'sadam', 'email' => 'sadam@gmail.com', 'alamat' => 'Banyuwangi', 'user_id' => 14],
        ];

        DB::table('pembudidaya')->insert($pembudidaya);

        $gejala = [
            ['id' =>1, 'kode' => 'G001', 'nama' => 'Melompat'],
            ['id' =>2, 'kode' => 'G002', 'nama' => 'Berenang dengan cepat'],
            ['id' =>3, 'kode' => 'G003', 'nama' => 'Mengesekkan badan ke dinding dan dasar kolam'],
            ['id' =>4, 'kode' => 'G004', 'nama' => 'Megap-megap di permukaan air'],
            ['id' =>5, 'kode' => 'G005', 'nama' => 'Menyendiri'],
            ['id' =>6, 'kode' => 'G006', 'nama' => 'Berkumpul di sekitar pancuran air'],
            ['id' =>7, 'kode' => 'G007', 'nama' => 'Bagian badan rusak'],
            ['id' =>8, 'kode' => 'G008', 'nama' => 'Badan membengkak'],
            ['id' =>9, 'kode' => 'G009', 'nama' => 'Bagian perut membengkak'],
            ['id' =>10, 'kode' => 'G010', 'nama' => 'Kulit kasar'],
            ['id' =>11, 'kode' => 'G011', 'nama' => 'Terbungkus lendir'],
            ['id' =>12, 'kode' => 'G012', 'nama' => 'Radang dan iritasi pada kulit'],
            ['id' =>13, 'kode' => 'G013', 'nama' => 'Kulit berdarah'],
            ['id' =>14, 'kode' => 'G014', 'nama' => 'Bintik merah pada kulit'],
            ['id' =>15, 'kode' => 'G015', 'nama' => 'Lendir mengucur'],
            ['id' =>16, 'kode' => 'G016', 'nama' => 'Kulit tampak terbakar'],
            ['id' =>17, 'kode' => 'G017', 'nama' => 'Organisme berwarna putih di permukaan'],
            ['id' =>18, 'kode' => 'G018', 'nama' => 'Sirip berlubang'],
            ['id' =>19, 'kode' => 'G019', 'nama' => 'Bagian kepala menjadi putih'],
            ['id' =>20, 'kode' => 'G020', 'nama' => 'Bagian sekitar mulut memerah'],
            ['id' =>21, 'kode' => 'G021', 'nama' => 'Kerusakan di daerah mulut'],
            ['id' =>22, 'kode' => 'G022', 'nama' => 'Mata masuk ke dalam'],
            ['id' =>23, 'kode' => 'G023', 'nama' => 'Radang di daerah mata'],
        ];

        DB::table('gejala')->insert($gejala);

        $bobot = [
            ['id' => 1, 'bobot' => 0.2],
            ['id' => 2, 'bobot' => 0.4],
            ['id' => 3, 'bobot' => 0.6],
            ['id' => 4, 'bobot' => 0.8],
            ['id' => 5, 'bobot' => 1],
        ];

        DB::table('bobot')->insert($bobot);

        $penyakit = [
            ['id' =>1, 'kode' => 'P001', 'nama' => 'Kutu Ikan', 'penyebab' => 'Parasit'],
            ['id' =>2, 'kode' => 'P002', 'nama' => 'Cacing Jangkar', 'penyebab' => 'Parasit'],
            ['id' =>3, 'kode' => 'P003', 'nama' => 'Trichodina', 'penyebab' => 'Parasit'],
            ['id' =>4, 'kode' => 'P004', 'nama' => 'Chilodonella', 'penyebab' => 'Parasit'],
            ['id' =>5, 'kode' => 'P005', 'nama' => 'Ichthyobodo', 'penyebab' => 'Parasit'],
            ['id' =>6, 'kode' => 'P006', 'nama' => 'Dactylogyrus', 'penyebab' => 'Parasit'],
            ['id' =>7, 'kode' => 'P007', 'nama' => 'Columnaris', 'penyebab' => 'Bakteri'],
            ['id' =>8, 'kode' => 'P008', 'nama' => 'Infeksi aeromonas hydrophilia', 'penyebab' => 'Bakteri'],
            ['id' =>9, 'kode' => 'P009', 'nama' => 'Dropsy', 'penyebab' => 'Virus'],
            ['id' =>10, 'kode' => 'P010', 'nama' => 'KHV (Koi Herpes Virus)', 'penyebab' => 'Virus'],
        ];

        DB::table('penyakit')->insert($penyakit);

        $aturan = [
            ['id' => 1, 'penyakit_id' => 1, 'gejala_id' => 4, 'bobot_id' => 2],
            ['id' => 2, 'penyakit_id' => 1, 'gejala_id' => 5, 'bobot_id' => 3],
            ['id' => 3, 'penyakit_id' => 1, 'gejala_id' => 12, 'bobot_id' => 2],
            ['id' => 4, 'penyakit_id' => 2, 'gejala_id' => 2, 'bobot_id' => 2],
            ['id' => 5, 'penyakit_id' => 2, 'gejala_id' => 4, 'bobot_id' => 3],
            ['id' => 6, 'penyakit_id' => 2, 'gejala_id' => 5, 'bobot_id' => 1],
            ['id' => 7, 'penyakit_id' => 2, 'gejala_id' => 12, 'bobot_id' => 1],
            ['id' => 8, 'penyakit_id' => 2, 'gejala_id' => 13, 'bobot_id' => 2],
            ['id' => 9, 'penyakit_id' => 2, 'gejala_id' => 17, 'bobot_id' => 2],
            ['id' => 10, 'penyakit_id' => 3, 'gejala_id' => 3, 'bobot_id' => 1],
            ['id' => 11, 'penyakit_id' => 3, 'gejala_id' => 5, 'bobot_id' => 2],
            ['id' => 12, 'penyakit_id' => 3, 'gejala_id' => 12, 'bobot_id' => 3],
            ['id' => 13, 'penyakit_id' => 3, 'gejala_id' => 19, 'bobot_id' => 3],
            ['id' => 14, 'penyakit_id' => 4, 'gejala_id' => 3, 'bobot_id' => 2],
            ['id' => 15, 'penyakit_id' => 4, 'gejala_id' => 5, 'bobot_id' => 1],
            ['id' => 16, 'penyakit_id' => 4, 'gejala_id' => 11, 'bobot_id' => 3],
            ['id' => 17, 'penyakit_id' => 4, 'gejala_id' => 12, 'bobot_id' => 2],
            ['id' => 18, 'penyakit_id' => 4, 'gejala_id' => 19, 'bobot_id' => 2],
            ['id' => 19, 'penyakit_id' => 5, 'gejala_id' => 5, 'bobot_id' => 3],
            ['id' => 20, 'penyakit_id' => 5, 'gejala_id' => 11, 'bobot_id' => 1],
            ['id' => 21, 'penyakit_id' => 5, 'gejala_id' => 12, 'bobot_id' => 1],
            ['id' => 22, 'penyakit_id' => 5, 'gejala_id' => 19, 'bobot_id' => 1],
            ['id' => 23, 'penyakit_id' => 6, 'gejala_id' => 1, 'bobot_id' => 1],
            ['id' => 24, 'penyakit_id' => 6, 'gejala_id' => 3, 'bobot_id' => 3],
            ['id' => 25, 'penyakit_id' => 6, 'gejala_id' => 5, 'bobot_id' => 1],
            ['id' => 26, 'penyakit_id' => 6, 'gejala_id' => 10, 'bobot_id' => 2],
            ['id' => 27, 'penyakit_id' => 6, 'gejala_id' => 11, 'bobot_id' => 1],
            ['id' => 30, 'penyakit_id' => 6, 'gejala_id' => 12, 'bobot_id' => 1],
            ['id' => 31, 'penyakit_id' => 6, 'gejala_id' => 15, 'bobot_id' => 2],
            ['id' => 32, 'penyakit_id' => 7, 'gejala_id' => 2, 'bobot_id' => 1],
            ['id' => 33, 'penyakit_id' => 7, 'gejala_id' => 5, 'bobot_id' => 2],
            ['id' => 34, 'penyakit_id' => 7, 'gejala_id' => 8, 'bobot_id' => 1],
            ['id' => 35, 'penyakit_id' => 7, 'gejala_id' => 11, 'bobot_id' => 2],
            ['id' => 36, 'penyakit_id' => 7, 'gejala_id' => 13, 'bobot_id' => 2],
            ['id' => 37, 'penyakit_id' => 7, 'gejala_id' => 14, 'bobot_id' => 1],
            ['id' => 38, 'penyakit_id' => 7, 'gejala_id' => 20, 'bobot_id' => 1],
            ['id' => 39, 'penyakit_id' => 7, 'gejala_id' => 22, 'bobot_id' => 2],
            ['id' => 40, 'penyakit_id' => 7, 'gejala_id' => 23, 'bobot_id' => 1],
            ['id' => 41, 'penyakit_id' => 8, 'gejala_id' => 4, 'bobot_id' => 1], 
            ['id' => 42, 'penyakit_id' => 8, 'gejala_id' => 5, 'bobot_id' => 1],
            ['id' => 43, 'penyakit_id' => 8, 'gejala_id' => 6, 'bobot_id' => 1],
            ['id' => 44, 'penyakit_id' => 8, 'gejala_id' => 7, 'bobot_id' => 2],
            ['id' => 45, 'penyakit_id' => 8, 'gejala_id' => 9, 'bobot_id' => 2],
            ['id' => 46, 'penyakit_id' => 8, 'gejala_id' => 11, 'bobot_id' => 1],
            ['id' => 47, 'penyakit_id' => 8, 'gejala_id' => 13, 'bobot_id' => 2],
            ['id' => 48, 'penyakit_id' => 8, 'gejala_id' => 15, 'bobot_id' => 1],
            ['id' => 49, 'penyakit_id' => 8, 'gejala_id' => 20, 'bobot_id' => 1],
            ['id' => 50, 'penyakit_id' => 8, 'gejala_id' => 21, 'bobot_id' => 1],
            ['id' => 51, 'penyakit_id' => 8, 'gejala_id' => 22, 'bobot_id' => 1],
            ['id' => 52, 'penyakit_id' => 8, 'gejala_id' => 23, 'bobot_id' => 1],
            ['id' => 53, 'penyakit_id' => 9, 'gejala_id' => 11, 'bobot_id' => 1],
            ['id' => 54, 'penyakit_id' => 9, 'gejala_id' => 12, 'bobot_id' => 1],
            ['id' => 55, 'penyakit_id' => 9, 'gejala_id' => 13, 'bobot_id' => 2],
            ['id' => 56, 'penyakit_id' => 9, 'gejala_id' => 15, 'bobot_id' => 2],
            ['id' => 57, 'penyakit_id' => 9, 'gejala_id' => 17, 'bobot_id' => 1],
            ['id' => 58, 'penyakit_id' => 9, 'gejala_id' => 22, 'bobot_id' => 3],
            ['id' => 59, 'penyakit_id' => 10, 'gejala_id' => 4, 'bobot_id' => 1],
            ['id' => 60, 'penyakit_id' => 10, 'gejala_id' => 10, 'bobot_id' => 2],
            ['id' => 61, 'penyakit_id' => 10, 'gejala_id' => 12, 'bobot_id' => 2],
            ['id' => 62, 'penyakit_id' => 10, 'gejala_id' => 13, 'bobot_id' => 1],
            ['id' => 63, 'penyakit_id' => 10, 'gejala_id' => 14, 'bobot_id' => 2],
            ['id' => 64, 'penyakit_id' => 10, 'gejala_id' => 15, 'bobot_id' => 1],
            ['id' => 65, 'penyakit_id' => 10, 'gejala_id' => 16, 'bobot_id' => 1],
            ['id' => 66, 'penyakit_id' => 10, 'gejala_id' => 17, 'bobot_id' => 1],
            ['id' => 67, 'penyakit_id' => 10, 'gejala_id' => 18, 'bobot_id' =>2],
        ];

        DB::table('aturan')->insert($aturan);

    }
    
}
