<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Email verification success confirmation route
Route::get('/email/verification-success', function () {
    return view('auth.verified-email');
})->middleware(['auth'])->name('verification.success');

// Routes without authentication for testing purposes
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

// Competency Management routes - without auth for testing
Route::get('/competency/framework', function () {
    return view('competency.framework');
})->name('competency.framework');

Route::get('/competency/framework-builder', function () {
    return view('competency.framework-builder');
})->name('competency.framework-builder');

Route::get('/competency/assessment-builder', function () {
    return view('competency.assessment-builder');
})->name('competency.assessment-builder');

Route::get('/competency/gap-analysis', function () {
    return view('competency.gap-analysis');
})->name('competency.gap-analysis');

Route::get('/competency/questionnaire-builder', function () {
    return view('competency.questionnaire-builder');
})->name('competency.questionnaire-builder');

Route::get('/competency/questionnaire-assign', function () {
    return view('competency.questionnaire-assign');
})->name('competency.questionnaire-assign');

Route::get('/competency/questionnaire-results', function () {
    return view('competency.questionnaire-results');
})->name('competency.questionnaire-results');

Route::get('/competency/development-plan', function () {
    return view('competency.development-plan');
})->name('competency.development-plan');

Route::get('/competency/comparison', function () {
    return view('competency.comparison');
})->name('competency.comparison');

Route::get('/competency/report-card', function () {
    return view('competency.report-card');
})->name('competency.report-card');

Route::get('/competency/analytics', function () {
    return view('competency.analytics');
})->name('competency.analytics');

// Training Management routes - without auth for testing
Route::get('/training/catalog', function () {
    return view('training.catalog');
})->name('training.catalog');

Route::get('/training/assign', function () {
    return view('training.assign');
})->name('training.assign');

Route::get('/training/progress', function () {
    return view('training.progress');
})->name('training.progress');

Route::get('/training/evaluation', function () {
    return view('training.evaluation');
})->name('training.evaluation');

// Learning Management routes - without auth for testing
Route::get('/learning/path-setup', function () {
    return view('learning.path-setup');
})->name('learning.path-setup');

Route::get('/learning/assignment', function () {
    return view('learning.assignment');
})->name('learning.assignment');

Route::get('/learning/progress', function () {
    return view('learning.progress');
})->name('learning.progress');

Route::get('/learning/analytics', function () {
    return view('learning.analytics');
})->name('learning.analytics');

// Succession Planning routes - without auth for testing
Route::get('/succession/talent-pool', function () {
    return view('succession.talent-pool');
})->name('succession.talent-pool');

Route::get('/succession/role-mapping', function () {
    return view('succession.role-mapping');
})->name('succession.role-mapping');

Route::get('/succession/successor-identification', function () {
    return view('succession.successor-identification');
})->name('succession.successor-identification');

Route::get('/succession/development-plans', function () {
    return view('succession.development-plans');
})->name('succession.development-plans');

Route::get('/succession/readiness-evaluation', function () {
    return view('succession.readiness-evaluation');
})->name('succession.readiness-evaluation');

Route::get('/succession/reports', function () {
    return view('succession.reports');
})->name('succession.reports');
