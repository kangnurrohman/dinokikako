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

    }
}
