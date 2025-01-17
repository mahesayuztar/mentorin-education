<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

// Route Welcome
Route::get('/', function () {
    return view('user.home');
});

// Route Download File
Route::get('/download/{filename}', function ($filename) {
    $filePath = base_path('../public_html/user/materi/'.$filename);
    if (file_exists($filePath)) {
        return response()->download($filePath);
    } else {
        abort(404);
    }
})->name('download');

Route::fallback([HomeController::class, 'notFoundPage']);

Route::get('/soal', function () {
    return view('user.pages.soal');
});

// Route Admin
Route::get('admin/dashboard', [HomeController::class, 'index'])->
    middleware(['auth', 'admin']);

// Route Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [PaketController::class, 'viewDashboard'])->name('dashboard');
    Route::get('/try-out', [OrderController::class, 'viewOrder'])->name('try-out');
    Route::get('/exercise', function () {
        return view('user.pages.exercise');
    })->name('exercise');
    Route::get('/history', [HomeController::class, 'viewHistory'])->name('history');
    Route::get('/rank', [HomeController::class, 'viewRank'])->name('rank');
    Route::get('/discussion', function () {
        return view('user.pages.discussion');
    })->name('discussion');
    Route::get('/pack', function () {
        return view('user.pages.pack');
    })->name('pack');
    Route::get('/materi', function () {
        return view('user.pages.materi');
    })->name('materi');
    Route::get('/pembahasan', [OrderController::class, 'viewPembahasan'])->name('pembahasan');
    Route::get('/review', function () {
        return view('user.pages.review');
    })->name('review');
    Route::post('/submit-review', [HomeController::class, 'submitReview'])->name('submit-review');
});

// Paket Routes
Route::middleware('auth')->group(function () {
    Route::get('/paket-list', [AdminController::class, 'indexPaket']);
    Route::get('/add-paket', [AdminController::class, 'addPaket']);
    Route::post('/save-paket', [AdminController::class, 'savePaket']);
    Route::get('/edit-paket/{id}', [AdminController::class, 'editPaket']);
    Route::post('/update-paket', [AdminController::class, 'updatePaket']);
    Route::get('/delete-paket/{id}', [AdminController::class, 'deletePaket']);
});

// Soal Routes
Route::middleware('auth')->group(function () {
    Route::get('/soal-list', [AdminController::class, 'indexSoal']);
    Route::get('/add-soal', [AdminController::class, 'addSoal']);
    Route::post('/save-soal', [AdminController::class, 'saveSoal']);
    Route::get('/edit-soal/{id}', [AdminController::class, 'editSoal']);
    Route::post('/update-soal', [AdminController::class, 'updateSoal']);
    Route::get('/delete-soal/{id}', [AdminController::class, 'deleteSoal']);
    Route::get('/delete-gambar-soal/{id}', [AdminController::class, 'deleteGambarSoal']);
    Route::get('/delete-gambar-solusi/{id}', [AdminController::class, 'deleteGambarSolusi']);
});

// Jawaban Routes
Route::middleware('auth')->group(function () {
    Route::get('/jawaban-list', [AdminController::class, 'indexJawaban']);
    Route::get('/add-jawaban', [AdminController::class, 'addJawaban']);
    Route::post('/save-jawaban', [AdminController::class, 'saveJawaban']);
    Route::get('/edit-jawaban/{id}', [AdminController::class, 'editJawaban']);
    Route::post('/update-jawaban', [AdminController::class, 'updateJawaban']);
    Route::get('/delete-jawaban/{id}', [AdminController::class, 'deleteJawaban']);
    Route::get('/delete-gambar-jawaban/{id}', [AdminController::class, 'deleteGambarJawaban']);
});

// Order Routes
Route::middleware('auth')->group(function () {
    Route::get('/edit-order-status/{id}', [AdminController::class, 'editOrderStatus']);
    Route::get('/edit-order-konfirmasi/{id}', [AdminController::class, 'editOrderKonfirmasi']);
    Route::get('/delete-order/{id}', [AdminController::class, 'deleteOrder']);
    Route::post('/update-order-status', [AdminController::class, 'updateOrderStatus']);
});

// Route Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route Category
Route::middleware('auth')->group(function () {
    Route::get('/category/cpns', function () {
        return view('user.category.cpns.cpns-list');
    })->name('/category/cpns');
    Route::get('/category/polri', function () {
        return view('user.category.polri.polri-list');
    })->name('/category/polri');
    Route::get('/category/tni', function () {
        return view('user.category.tni.tni-list');
    })->name('/category/tni');
    Route::get('/category/sekdin', function () {
        return view('user.category.sekdin.sekdin-list');
    })->name('/category/sekdin');
});

// Route Exercise
Route::middleware('auth')->group(function () {
    Route::get('/exercise/cpns', function () {
        return view('user.exercise.cpns.cpns-list');
    })->name('/exercise/cpns');
    Route::get('/exercise/polri', function () {
        return view('user.exercise.polri.polri-list');
    })->name('/exercise/polri');
    Route::get('/exercise/tni', function () {
        return view('user.exercise.tni.tni-list');
    })->name('/exercise/tni');
    Route::get('/exercise/sekdin', function () {
        return view('user.exercise.sekdin.sekdin-list');
    })->name('/exercise/sekdin');
});

// Route CPNS
Route::middleware('auth')->group(function () {
    // Route::get('/category/cpns/skd-cpns', function () {return view('user.category.cpns.skd-cpns');})->name('/category/cpns/skd-cpns');
    Route::get('/category/cpns/skb-cpns', function () {
        return view('user.category.cpns.skb-cpns');
    })->name('/category/cpns/skb-cpns');
    Route::get('/category/cpns/lainnya-cpns', function () {
        return view('user.category.cpns.lainnya-cpns');
    })->name('/category/cpns/lainnya-cpns');

    // Route CPNS skb
    // Route::get('/category/cpns/skb-cpns/cat-cpns', function () {return view('user.category.cpns.skb.cat');})->name('/category/cpns/skb-cpns/cat-cpns');
    Route::get('/category/cpns/lainnya-cpns/psikotes-cpns', function () {
        return view('user.category.cpns.skb.psikologi-cpns');
    })->name('/category/cpns/lainnya-cpns/psikotes-cpns');

    // Route::get('/category/cpns/skd-cpns', function () {return view('user.category.cpns.skd-cpns');})->name('/category/cpns/skd-cpns');
    Route::get('/exercise/cpns/skb-cpns', function () {
        return view('user.exercise.cpns.skb-cpns');
    })->name('/exercise/cpns/skb-cpns');
    Route::get('/exercise/cpns/lainnya-cpns', function () {
        return view('user.exercise.cpns.lainnya-cpns');
    })->name('/exercise/cpns/lainnya-cpns');

    // Route CPNS skb
    // Route::get('/exercise/cpns/skb-cpns/cat-cpns', function () {return view('user.exercise.cpns.skb.cat');})->name('/exercise/cpns/skb-cpns/cat-cpns');
    Route::get('/exercise/cpns/lainnya-cpns/psikotes-cpns', function () {
        return view('user.exercise.cpns.skb.psikologi-cpns');
    })->name('/exercise/cpns/lainnya-cpns/psikotes-cpns');
    // Route::get('/category/cpns/skb-cpns/praktek-kerja', function () {return view('user.category.cpns.skb.praktek-kerja');})->name('/category/cpns/skb-cpns/praktek-kerja');

    // Route CPNS Lainnya
    // Route::get('/category/cpns/lainnya-cpns/akademik-cpns', function () {return view('user.category.cpns.lainnya.akademik-cpns');})->name('/category/cpns/lainnya-cpns/akademik-cpns');
    //Route::get('/category/cpns/lainnya-cpns/psikotes-cpns', function () {return view('user.category.cpns.lainnya.psikotes-cpns');})->name('/category/cpns/lainnya-cpns/psikotes-cpns');

    // Route Psikologi CPNS
    /*
    Route::get('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kecerdasan', function () {return view('user.category.cpns.lainnya.psikologi.tes-kecerdasan');})->name('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kecerdasan');
    Route::get('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kecermatan', function () {return view('user.category.cpns.lainnya.psikologi.tes-kecermatan');})->name('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kecermatan');
    Route::get('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kepribadian', function () {return view('user.category.cpns.lainnya.psikologi.tes-kepribadian');})->name('/category/cpns/lainnya-cpns/psikologi-cpns/tes-kepribadian');
    */
});

// Route Sekdin
Route::middleware('auth')->group(function () {
    Route::get('/category/sekdin/akademik-sekdin', function () {
        return view('user.category.sekdin.akademik-sekdin');
    })->name('/category/sekdin/akademik-sekdin');
    Route::get('/category/sekdin/lanjutan-sekdin', function () {
        return view('user.category.sekdin.lanjutan-sekdin');
    })->name('/category/sekdin/lanjutan-sekdin');

    // Route Sekdin Lanjutan
    Route::get('/category/sekdin/lanjutan-sekdin/akademik-sekdin', function () {
        return view('user.category.sekdin.lanjutan.akademik-sekdin');
    })->name('/category/sekdin/lanjutan-sekdin/akademik-sekdin');
    Route::get('/category/sekdin/lanjutan-sekdin/psikologi-sekdin', function () {
        return view('user.category.sekdin.lanjutan.psikologi-sekdin');
    })->name('/category/sekdin/lanjutan-sekdin/psikologi-sekdin');

    // Route Psikologi CPNS
    Route::get('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecerdasan', function () {
        return view('user.category.sekdin.lanjutan.psikologi.tes-kecerdasan');
    })->name('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecerdasan');
    Route::get('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecermatan', function () {
        return view('user.category.sekdin.lanjutan.psikologi.tes-kecermatan');
    })->name('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecermatan');
    Route::get('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kepribadian', function () {
        return view('user.category.sekdin.lanjutan.psikologi.tes-kepribadian');
    })->name('/category/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kepribadian');

    Route::get('/exercise/sekdin/akademik-sekdin', function () {
        return view('user.exercise.sekdin.akademik-sekdin');
    })->name('/exercise/sekdin/akademik-sekdin');
    Route::get('/exercise/sekdin/lanjutan-sekdin', function () {
        return view('user.exercise.sekdin.lanjutan-sekdin');
    })->name('/exercise/sekdin/lanjutan-sekdin');

    // Route Sekdin Lanjutan
    Route::get('/exercise/sekdin/lanjutan-sekdin/akademik-sekdin', function () {
        return view('user.exercise.sekdin.lanjutan.akademik-sekdin');
    })->name('/exercise/sekdin/lanjutan-sekdin/akademik-sekdin');
    Route::get('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin', function () {
        return view('user.exercise.sekdin.lanjutan.psikologi-sekdin');
    })->name('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin');

    // Route Psikologi CPNS
    Route::get('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecerdasan', function () {
        return view('user.exercise.sekdin.lanjutan.psikologi.tes-kecerdasan');
    })->name('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecerdasan');
    Route::get('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecermatan', function () {
        return view('user.exercise.sekdin.lanjutan.psikologi.tes-kecermatan');
    })->name('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kecermatan');
    Route::get('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kepribadian', function () {
        return view('user.exercise.sekdin.lanjutan.psikologi.tes-kepribadian');
    })->name('/exercise/sekdin/lanjutan-sekdin/psikologi-sekdin/tes-kepribadian');
});

// Route POLRI
Route::middleware('auth')->group(function () {
    Route::get('/category/polri/psikologi-polri', function () {
        return view('user.category.polri.psikologi-polri');
    })->name('/category/polri/psikologi-polri');
    Route::get('/category/polri/akademik-polri', function () {
        return view('user.category.polri.akademik-polri');
    })->name('/category/polri/akademik-polri');
    Route::get('/category/polri/lainnya-polri', function () {
        return view('user.category.polri.lainnya-polri');
    })->name('/category/polri/lainnya-polri');
    Route::get('/category/{test}/{type}', [PaketController::class, 'viewPaket']);
    Route::get('/category/{test}/{type}/{type2}', [PaketController::class, 'viewPaket2']);
    Route::get('/category/{test}/{type}/{type2}/{type3}', [PaketController::class, 'viewPaket3']);

    Route::get('/exercise/polri/psikologi-polri', function () {
        return view('user.exercise.polri.psikologi-polri');
    })->name('/exercise/polri/psikologi-polri');
    Route::get('/exercise/polri/akademik-polri', function () {
        return view('user.exercise.polri.akademik-polri');
    })->name('/exercise/polri/akademik-polri');
    Route::get('/exercise/polri/lainnya-polri', function () {
        return view('user.exercise.polri.lainnya-polri');
    })->name('/exercise/polri/lainnya-polri');
    Route::get('/exercise/{test}/{type}', [PaketController::class, 'viewLatihanSoal']);
    Route::get('/exercise/{test}/{type}/{type2}', [PaketController::class, 'viewLatihanSoal2']);
    Route::get('/exercise/{test}/{type}/{type2}/{type3}', [PaketController::class, 'viewLatihanSoal3']);

    Route::post('/category/order', [PaketController::class, 'orderPaket']);

    /*
    Route::get('/category/polri/akademik-polri', function () {return view('user.category.polri.akademik-polri');})->name('/category/polri/akademik-polri');
    Route::get('/category/polri/lainnya-polri', function () {return view('user.category.polri.lainnya-polri');})->name('/category/polri/lainnya-polri');

    // Route Psikologi POLRI
    Route::get('/category/polri/psikologi-polri/tes-kecerdasan', function () {return view('user.category.polri.psikologi.tes-kecerdasan');})->name('/category/polri/psikologi-polri/tes-kecerdasan');
    Route::get('/category/polri/psikologi-polri/tes-kecermatan', function () {return view('user.category.polri.psikologi.tes-kecermatan');})->name('/category/polri/psikologi-polri/tes-kecermatan');
    Route::get('/category/polri/psikologi-polri/tes-kepribadian', function () {return view('user.category.polri.psikologi.tes-kepribadian');})->name('/category/polri/psikologi-polri/tes-kepribadian');
    */
});

// Route TNI
Route::middleware('auth')->group(function () {
    Route::get('/category/tni/skd-tni', function () {
        return view('user.category.tni.skd-tni');
    })->name('/category/tni/skd-tni');
    Route::get('/category/tni/psikologi-tni', function () {
        return view('user.category.tni.psikologi-tni');
    })->name('/category/tni/psikologi-tni');
    Route::get('/category/tni/akademik-tni', function () {
        return view('user.category.tni.akademik-tni');
    })->name('/category/tni/akademik-tni');

    // Route Psikologi TNI
    Route::get('/category/tni/psikologi-tni/tes-kecerdasan', function () {
        return view('user.category.tni.psikologi.tes-kecerdasan');
    })->name('/category/tni/psikologi-tni/tes-kecerdasan');
    Route::get('/category/tni/psikologi-tni/tes-kecermatan', function () {
        return view('user.category.tni.psikologi.tes-kecermatan');
    })->name('/category/tni/psikologi-tni/tes-kecermatan');
    Route::get('/category/tni/psikologi-tni/tes-kepribadian', function () {
        return view('user.category.tni.psikologi.tes-kepribadian');
    })->name('/category/tni/psikologi-tni/tes-kepribadian');
});

// Route Order
Route::middleware('auth')->group(function () {
    Route::get('/try-out/{test}', [OrderController::class, 'viewOrderDetails']);
    Route::get('/try-out/{test}/{type}', [OrderController::class, 'viewOrderTypes']);
    Route::get('/pembahasan/{test}', [OrderController::class, 'viewPembahasanDetails']);
    Route::get('/pembahasan/{test}/{type}', [OrderController::class, 'viewPembahasanTypes']);
    /*
    Route::get('/try-out/cpns', function () {return view('user.try-out.cpns.cpns-list');})->name('/try-out/cpns');
    Route::get('/try-out/polri', [OrderController::class, 'viewOrderPolri'])->name('/try-out/polri');
    Route::get('/try-out/tni', function () {return view('user.try-out.tni.tni-list');})->name('/try-out/tni');
    Route::get('/try-out/sekdin', function () {return view('user.try-out.sekdin.sekdin-list');})->name('/try-out/sekdin');
    */
});

// Route Order POLRI
Route::middleware('auth')->group(function () {
    // Route::get('/try-out/polri/{type}', [OrderController::class, 'viewOrderPolriDetails']);
    /*
    Route::get('/try-out/polri/psikologi-polri', function () {return view('user.try-out.polri.psikologi-polri');})->name('/try-out/polri/psikologi-polri');
    Route::get('/try-out/polri/akademik-polri', function () {return view('user.try-out.polri.akademik-polri');})->name('/try-out/polri/akademik-polri');
    Route::get('/try-out/polri/lainnya-polri', function () {return view('user.try-out.polri.lainnya-polri');})->name('/try-out/polri/lainnya-polri');

    // Route Psikologi POLRI
    Route::get('/try-out/polri/psikologi-polri/tes-kecerdasan', function () {return view('user.try-out.polri.psikologi.tes-kecerdasan');})->name('/try-out/polri/psikologi-polri/tes-kecerdasan');
    Route::get('/try-out/polri/psikologi-polri/tes-kecermatan', function () {return view('user.try-out.polri.psikologi.tes-kecermatan');})->name('/try-out/polri/psikologi-polri/tes-kecermatan');
    Route::get('/try-out/polri/psikologi-polri/tes-kepribadian', function () {return view('user.try-out.polri.psikologi.tes-kepribadian');})->name('/try-out/polri/psikologi-polri/tes-kepribadian');
    */
});

// Route Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
Route::get('/payment-callback', [OrderController::class, 'paymentCallback'])->name('payment-callback');

// Route Soal
Route::middleware('auth')->group(function () {
    Route::post('/soal/submit', [SoalController::class, 'submitJawaban']);
    Route::get('/soal/{id_paket}', [SoalController::class, 'viewSoal'])->name('soal');
    Route::get('/soal/aturan/{id_paket}', [SoalController::class, 'viewAturan']);
    Route::get('/soal/hasil/{id_paket}', [SoalController::class, 'viewHasil']);
    Route::get('/soal/solusi/{id_paket}', [SoalController::class, 'viewSolusi']);
    Route::get('/soal/solusi/{id_paket}/{type}', [SoalController::class, 'viewSolusiPaket']);

    Route::get('/soal/{id_paket}/{type}', [SoalController::class, 'viewSoalPaket']);
    Route::get('/soal/aturan/{id_paket}/{type}', [SoalController::class, 'viewAturanPaket']);
    Route::post('/soal/submit-paket', [SoalController::class, 'submitJawabanPaket']);

    Route::get('/soal-coba', function () {
        return view('user.soal.soal-baru');
    });
});

require __DIR__.'/auth.php';
