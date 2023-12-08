<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dosen;
use App\Models\Event;
use App\Models\Hibah;
use App\Models\Karya;
use App\Models\Berita;
use App\Models\Penjurusan;
use App\Models\BerandaHero;
use Illuminate\Database\Seeder;
use Database\Seeders\HibahSeeder;
use Database\Seeders\ProfilSeeder;
use App\Models\BerandaVideoSection;
use Database\Seeders\BerandaSeeder;
use Database\Seeders\PengmasSeeder;
use Database\Seeders\ProgramSeeder;
use Illuminate\Foundation\Auth\User;
use Database\Seeders\KurikulumSeeder;
use Database\Seeders\KuliahUmumSeeder;
use Database\Seeders\KategoriGambarSeeder;

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
            $this->call(BerandaSeeder::class);
            $this->call(ProfilSeeder::class);
            //AKADEMIK
            $this->call(KurikulumSeeder::class);
            $this->call(KuliahUmumSeeder::class);
            $this->call(PengmasSeeder::class);
            //PENELITIAN
            $this->call(HibahSeeder::class);
            //PROGRAM
            $this->call(ProgramSeeder::class);
            //GALERI
            $this->call(KategoriGambarSeeder::class);
            $this->call(GaleriSeeder::class);
            
    }
}
