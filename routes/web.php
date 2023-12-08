<?php

use App\Models\Karya;
use App\Models\Beranda;
use App\Models\BerandaHero;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AkademikController;
use App\Http\Controllers\PenelitianController;
/*
|------------------------------------s--------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BerandaController::class,'index']);
Route::get('/profil', [ProfilController::class,'index']);
Route::get('/profil/detail-dosen/{nama}', [ProfilController::class,'detail_dosen'])->name('detail.dosen');

//AKADEMIK
Route::get('/akademik',[AkademikController::class,'index']);
Route::get('/akademik/mbkm',[AkademikController::class,'mbkm_index'])->name('akademik.mbkm');
Route::get('/akademik/kurikulum',[AkademikController::class,'kurikulum_index'])->name('akademik.kurikulum');
Route::get('/akademik/kuliahUmum',[AkademikController::class,'kuliahUmum_index'])->name('akademik.kuliahUmum');
Route::get('/akademik/kuliahUmum/{id}',[AkademikController::class,'detailKuliahUmum_index'])->name('akademik.detailKuliahUmum');
Route::get('/akademik/pengmas',[AkademikController::class,'pengmas_index'])->name('akademik.pengmas');
Route::get('/akademik/pengmas/{id}',[AkademikController::class,'detailPengmas_index'])->name('akademik.detailPengmas');
Route::get('/akademik/tugas-akhir',[AkademikController::class,'tugasAkhir_index'])->name('akademik.tugasAkhir');
Route::get('/akademik/kerja-praktek',[AkademikController::class,'kerjaPraktek_index'])->name('akademik.kerjaPraktek');
//END AKADEMIK

//PENELITIAN
Route::get('/penelitian/hibah',[PenelitianController::class,'hibah_index'])->name('penelitian.hibah');
//END PENELITIAN

//PROGRAM
Route::get('/program',[ProgramController::class,'index']);
Route::get('/detail-program/{nama}',[ProgramController::class,'detailProgram_index'])->name('detail.program');

//ENDPROGRAM

//GALERI
Route::get('/galeri',[GaleriController::class,'index']);
//ENDGALERI

//BERITA
Route::get('/artikel',[BeritaController::class,'index']);
Route::get('/detail-artikel/{id}',[BeritaController::class,'detailArtikel_index'])->name('detail.artikel');

//ADMIN
Route::get('/admin', function () {
    return view('admin.beranda.section1', [
        "title" => "Section 1",
        "form_description"  => "form untuk Section 1",
        "datas" => BerandaHero::all()
    ]);
});

//BERANDA ADMIN
Route::prefix('admin/beranda/section1')->group(function(){
    Route::get('',[BerandaController::class,'section1_index'])->name('beranda.section1');
    Route::post('',[BerandaController::class,'section1_store'])->name('beranda.section1.store');
    Route::post('/{id}/edit',[BerandaController::class,'section1_update'])->name('beranda.section1.update');
    Route::get('/{id}/delete',[BerandaController::class,'section1_delete'])->name('beranda.section1.delete');
    Route::get('/{id}/setDefault',[BerandaController::class,'section1_setDefault'])->name('beranda.section1.setDefault');
});
Route::prefix('admin/beranda/section2')->group(function(){
    Route::get('',[BerandaController::class,'section2_index'])->name('beranda.section2');
    Route::post('',[BerandaController::class,'section2_store'])->name('beranda.section2.store');
    Route::post('/{id}/edit',[BerandaController::class,'section2_update'])->name('beranda.section2.update');
    Route::get('/{id}/delete',[BerandaController::class,'section2_delete'])->name('beranda.section2.delete');
    Route::get('/{id}/setDefault',[BerandaController::class,'section2_setDefault'])->name('beranda.section2.setDefault');
});
Route::prefix('admin/beranda/section3')->group(function(){
    Route::get('',[BerandaController::class,'section3_index'])->name('beranda.section3');
    Route::post('',[BerandaController::class,'section3_store'])->name('beranda.section3.store');
    Route::post('/{id}/edit',[BerandaController::class,'section3_update'])->name('beranda.section3.update');
    Route::get('/{id}/delete',[BerandaController::class,'section3_delete'])->name('beranda.section3.delete');
});
Route::prefix('admin/beranda/section4')->group(function(){
    Route::get('',[BerandaController::class,'section4_index'])->name('beranda.section4');
    Route::post('',[BerandaController::class,'section4_store'])->name('beranda.section4.store');
    Route::post('/{id}/edit',[BerandaController::class,'section4_update'])->name('beranda.section4.update');
    Route::get('/{id}/delete',[BerandaController::class,'section4_delete'])->name('beranda.section4.delete');
});
Route::prefix('admin/beranda/section5')->group(function(){
    Route::get('',[BerandaController::class,'section5_index'])->name('beranda.section5');
    Route::post('',[BerandaController::class,'section5_store'])->name('beranda.section5.store');
    Route::post('/{id}/edit',[BerandaController::class,'section5_update'])->name('beranda.section5.update');
    Route::get('/{id}/delete',[BerandaController::class,'section5_delete'])->name('beranda.section5.delete');
});
Route::prefix('admin/beranda/section6')->group(function(){
    Route::get('',[BerandaController::class,'section6_index'])->name('beranda.section6');
    Route::post('',[BerandaController::class,'section6_store'])->name('beranda.section6.store');
    Route::post('/{id}/edit',[BerandaController::class,'section6_update'])->name('beranda.section6.update');
    Route::get('/{id}/delete',[BerandaController::class,'section6_delete'])->name('beranda.section6.delete');
});
Route::prefix('admin/beranda/section7')->group(function(){
    Route::get('',[BerandaController::class,'section7_index'])->name('beranda.section7');
    Route::post('',[BerandaController::class,'section7_store'])->name('beranda.section7.store');
    Route::post('/{id}/edit',[BerandaController::class,'section7_update'])->name('beranda.section7.update');
    Route::get('/{id}/delete',[BerandaController::class,'section7_delete'])->name('beranda.section7.delete');
});

//PROFIL ADMIN
Route::prefix('admin/profil/section1')->group(function(){
    Route::get('',[ProfilController::class,'section1_index'])->name('profil.section1');
    Route::post('',[ProfilController::class,'section1_store'])->name('profil.section1.store');
    Route::post('/{id}/edit',[ProfilController::class,'section1_update'])->name('profil.section1.update');
    Route::get('/{id}/delete',[ProfilController::class,'section1_delete'])->name('profil.section1.delete');
    Route::get('/{id}/setDefault',[ProfilController::class,'section1_setDefault'])->name('profil.section1.setDefault');
});

//GALERI ADMIN
Route::prefix('admin/galeri/section1')->group(function(){
    Route::get('',[GaleriController::class,'section1_index'])->name('galeri.section1');
    Route::post('',[GaleriController::class,'section1_store'])->name('galeri.section1.store');
    Route::post('/{id}/edit',[GaleriController::class,'section1_update'])->name('galeri.section1.update');
    Route::get('/{id}/delete',[GaleriController::class,'section1_delete'])->name('galeri.section1.delete');
    Route::get('/{id}/setDefault',[GaleriController::class,'section1_setDefault'])->name('galeri.section1.setDefault');
});


Route::get('/detail-karya/{id}',function($id){
    $data = Karya::where('id', $id)->first(); // Menggunakan ->first() untuk mengambil satu data
    return view('detail-karya',[
        "data" => $data
    ]);
})->name('detail.karya');
Route::get('instagram-scrape',[BerandaController::class,'instagramScrape']);

//END ADMIN
