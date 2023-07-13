<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdmin\SPDashboard;
use App\Http\Controllers\SuperAdmin\SPSpesies;
use App\Http\Controllers\SuperAdmin\SPEbook;
use App\Http\Controllers\SuperAdmin\SPKegiatan;
use App\Http\Controllers\SuperAdmin\SPRescue;
use App\Http\Controllers\SuperAdmin\SPUser;
use App\Http\Controllers\SuperAdmin\AnggotaController;
use App\Http\Controllers\Admin\AdminDashboard;
use App\Http\Controllers\Admin\AdminSpesies;
use App\Http\Controllers\Admin\AdminEbook;
use App\Http\Controllers\Admin\AdminKegiatan;
use App\Http\Controllers\Admin\AdminRescue;
use App\Http\Controllers\LandingPage\LPHome;
use App\Http\Controllers\SPAuth;


Route::get('/login', [SPAuth::class, 'login'])->name('login');
Route::post('/login', [SPAuth::class, 'aksiLogin']);
Route::post('/logout', [SPAuth::class, 'logout']);

Route::get('/register', [SPAuth::class, 'register']);
Route::post('/register-store', [SPAuth::class, 'store']);


Route::prefix('SuperAdmin')->group(function(){

    Route::controller(SPDashboard::class)->group(function(){
      Route::get('/dashboard','index');
    });

    Route::controller(SPSpesies::class)->group(function(){
      Route::get('/spesies','index');
      Route::get('/spesies/add','add');
      Route::post('/spesies/tambahAct','tambahAct');
      Route::get('/spesies/update/{spesies}','update');
      Route::post('/spesies/updateAct/{spesies}','updateAct');
      Route::get('/spesies/detail/{spesies}','detail');
      Route::post('/spesies/tambahGambar','tambahGambar');
      Route::post('/spesies/updateGambar/{gambar}','updateGambar');
      Route::get('/spesies/hapus/{spesies}','hapus');
    });
    Route::controller(SPEbook::class)->group(function(){
      Route::get('/ebook','index');
      Route::get('/ebook/add','add');
      Route::post('/ebook/tambahAct','tambahAct');
      Route::get('/ebook/update/{ebook}','update');
      Route::post('/ebook/updateAct/{ebook}','updateAct');
      Route::get('/ebook/hapus/{ebook}','hapus');
    });
    Route::controller(SPKegiatan::class)->group(function(){
      Route::get('/kegiatan','index');
      Route::get('/kegiatan/add','add');
      Route::post('/kegiatan/tambahAct','tambahAct');
      Route::get('/kegiatan/detail/{kegiatan}','detail');
      Route::get('/kegiatan/update/{kegiatan}','update');
      Route::post('/kegiatan/updateAct/{kegiatan}','updateAct');
      Route::get('/kegiatan/hapus/{kegiatan}','hapus');
    });
    Route::controller(SPRescue::class)->group(function(){
      Route::get('/rescue','index');
      Route::get('/rescue/add','add');
      Route::post('/rescue/tambahAct','tambahAct');
      Route::get('/rescue/detail/{rescue}','detail');
      Route::get('/rescue/update/{rescue}','update');
      Route::post('/rescue/updateAct/{rescue}','updateAct');
      Route::get('/rescue/hapus/{rescue}','hapus');
    });
    Route::controller(SPUser::class)->group(function(){
      Route::get('/user','index');
      Route::get('/user/add','add');
      Route::post('/user/tambahAct','tambahAct');
      Route::get('/user/detail/{user}','detail');
      Route::get('/user/update/{user}','update');
      Route::post('/user/updateAct/{user}','updateAct');
      Route::get('/user/hapus/{user}','hapus');
    });
    Route::controller(SPHakAkses::class)->group(function(){
      Route::get('/HakAkses','index');
      Route::get('/HakAkses/add','add');
      Route::post('/HakAkses/tambahAct','tambahAct');
      Route::get('/HakAkses/detail/{hak_akses}','detail');
      Route::get('/HakAkses/update/{hak_akkses}','update');
      Route::post('/HakAkses/updateAct/{hak_akses}','updateAct');
      Route::get('/HakAkses/hapus/{hak_akses}','hapus');
    });

    Route::get('anggota', [AnggotaController::class, 'index']);

});

Route::prefix('Admin')->group(function(){

  Route::controller(AdminDashboard::class)->group(function(){
    Route::get('/dashboard','index');
  });

  Route::controller(AdminSpesies::class)->group(function(){
    Route::get('/spesies','index');
    Route::get('/spesies/add','add');
    Route::post('/spesies/tambahAct','tambahAct');
    Route::get('/spesies/update/{spesies}','update');
    Route::post('/spesies/updateAct/{spesies}','updateAct');
    Route::get('/spesies/detail/{spesies}','detail');
    Route::post('/spesies/tambahGambar','tambahGambar');
    Route::post('/spesies/updateGambar/{gambar}','updateGambar');
    Route::get('/spesies/hapus/{spesies}','hapus');
  });
  Route::controller(AdminEbook::class)->group(function(){
    Route::get('/ebook','index');
    Route::get('/ebook/add','add');
    Route::post('/ebook/tambahAct','tambahAct');
    Route::get('/ebook/update/{ebook}','update');
    Route::post('/ebook/updateAct/{ebook}','updateAct');
    Route::get('/ebook/hapus/{ebook}','hapus');
  });
  Route::controller(AdminKegiatan::class)->group(function(){
    Route::get('/kegiatan','index');
    Route::get('/kegiatan/add','add');
    Route::post('/kegiatan/tambahAct','tambahAct');
    Route::get('/kegiatan/detail/{kegiatan}','detail');
    Route::get('/kegiatan/update/{kegiatan}','update');
    Route::post('/kegiatan/updateAct/{kegiatan}','updateAct');
    Route::get('/kegiatan/hapus/{kegiatan}','hapus');
  });
  Route::controller(AdminRescue::class)->group(function(){
    Route::get('/rescue','index');
    Route::get('/rescue/add','add');
    Route::post('/rescue/tambahAct','tambahAct');
    Route::get('/rescue/detail/{rescue}','detail');
    Route::get('/rescue/update/{rescue}','update');
    Route::post('/rescue/updateAct/{rescue}','updateAct');
    Route::get('/rescue/hapus/{rescue}','hapus');
  });
  Route::controller(AdminUser::class)->group(function(){
    Route::get('/user','index');
    Route::get('/user/add','add');
    Route::post('/user/tambahAct','tambahAct');
    Route::get('/user/detail/{user}','detail');
    Route::get('/user/update/{user}','update');
    Route::post('/user/updateAct/{user}','updateAct');
    Route::get('/user/hapus/{user}','hapus');
  });
  Route::controller(AdminHakAkses::class)->group(function(){
    Route::get('/HakAkses','index');
    Route::get('/HakAkses/add','add');
    Route::post('/HakAkses/tambahAct','tambahAct');
    Route::get('/HakAkses/detail/{hak_akses}','detail');
    Route::get('/HakAkses/update/{hak_akkses}','update');
    Route::post('/HakAkses/updateAct/{hak_akses}','updateAct');
    Route::get('/HakAkses/hapus/{hak_akses}','hapus');
  });
});

Route::prefix('/')->group(function(){

  Route::controller(LPHome::class)->group(function(){
    Route::get('/','index');
    Route::get('/amfibi','amfibi');
    Route::get('/reptil','reptil');
    Route::get('/detailReptil/{reptil}','detailReptil');
    Route::get('/seminar','seminar');
    Route::get('/detailSeminar/{seminar}','detailSeminar');
    Route::get('/trip','trip');
    Route::get('/detailTrip/{trip}','detailTrip');
    Route::get('/berita','berita');
    Route::get('/detailBerita/{berita}','detailBerita');
    Route::get('/ebook','ebook');

  });
});