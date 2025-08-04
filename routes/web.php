<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::post('/set-locale', [LocaleController::class, 'setLocale'])->name('set-locale');


Route::get('/courses/{course}', function ($course) {
    $courses = [
        'أساسيات-إعداد-القهوة' => [
            'title' => 'أساسيات إعداد القهوة',
            'description' => 'تعلم أساسيات تحضير القهوة المختصة بأسلوب احترافي مع خبراء الصناعة.',
            'video' => '/video1.mp4',
            'pdf' => '/course1.pdf',
        ],
        'فن-اللاتيه' => [
            'title' => 'فن اللاتيه',
            'description' => 'إتقان تقنيات رسم اللاتيه وتحضير مشروبات القهوة بالحليب بأسلوب فني.',
            'video' => '/video2.mp4',
            'pdf' => '/course2.pdf',
        ],
        'القهوة-المختصة' => [
            'title' => 'القهوة المختصة',
            'description' => 'اكتشف أسرار تحميص وتحضير القهوة المختصة بأعلى معايير الجودة.',
            'video' => '/video3.mp4',
            'pdf' => '/course3.pdf',
        ],
    ];

    $courseData = $courses[$course] ?? null;

    if (!$courseData) {
        abort(404);
    }

    return view('courses.show', compact('courseData'));
})->name('courses.show');