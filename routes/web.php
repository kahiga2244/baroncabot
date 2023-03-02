<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!a
|
*/

Route::get('/', [App\Http\Controllers\pagesController::class, 'home'])->name('page.home');
Route::get('{url}', [App\Http\Controllers\pagesController::class, 'page'])->name('page');
Route::get('{parent}/{url}', [App\Http\Controllers\pagesController::class, 'child_page'])->name('child.page');

Route::get('project/{url}/details', [App\Http\Controllers\pagesController::class, 'project_details'])->name('project.details');

Route::get('project/{url}/roi/setup', [App\Http\Controllers\roiController::class, 'roi_setup'])->name('project.roi.setup');
Route::get('project/{url}/roi', [App\Http\Controllers\roiController::class, 'roi'])->name('project.roi');
Route::post('project/calculate/roi', [App\Http\Controllers\roiController::class, 'calculate_roi'])->name('project.roi.calculate');
Route::post('project/calculate/roi/first', [App\Http\Controllers\roiController::class, 'calculate_first'])->name('project.roi.calculate.first');
Route::post('project/roi/store', [App\Http\Controllers\roiController::class, 'roi_store'])->name('project.roi.store');

Route::post('save/newsletter/submit', [App\Http\Controllers\pagesController::class, 'newsletter'])->name('newsletter.submit');
Route::post('save/website/inquiry', [App\Http\Controllers\pagesController::class, 'inquiry'])->name('website.inquiry');

Route::get('blog/{url}/details', [App\Http\Controllers\pagesController::class, 'blog_details'])->name('blog.details');
Route::get('blog/{url}/category', [App\Http\Controllers\pagesController::class, 'blog_category'])->name('blog.category');

Route::post('facebook/leads/upload', [App\Http\Controllers\pagesController::class, 'facebook_leads_post'])->name('facebook.leads.post');

Route::get('landing/v/questions', [App\Http\Controllers\pagesController::class, 'questions'])->name('landing.questions');
Route::post('landing/v/questions/submit/one', [App\Http\Controllers\pagesController::class, 'funnel_step_one'])->name('questions.submit.one');

Route::get('landing/v/questions/next/{email}/{phone_number}/{first_name}/{last_name}', [App\Http\Controllers\pagesController::class, 'question_next'])->name('landing.questions.next');
Route::post('landing/v/questions/submit', [App\Http\Controllers\pagesController::class, 'question_submit'])->name('questions.submit');

Route::get('landing/v2/questions2', [App\Http\Controllers\pagesController::class, 'questions2'])->name('landing.questions2');

Route::get('landing/v/funnel', [App\Http\Controllers\pagesController::class, 'funnel'])->name('landing.funnel');
Route::post('landing/v/funnel/submit', [App\Http\Controllers\pagesController::class, 'funnel_submit'])->name('funnel.submit');

Route::get('landing/v/leads', [App\Http\Controllers\landingPageController::class, 'leads1'])->name('landing.page.leads1');
Route::get('landing/v/leads2', [App\Http\Controllers\landingPageController::class, 'leads2'])->name('landing.page.leads2');

Route::post('project/roi/changes', [App\Http\Controllers\pagesController::class, 'roi_changes'])->name('project.roi.changes');
Route::get('project/roi/pdf/{url}', [App\Http\Controllers\pagesController::class, 'pdf'])->name('project.download.pdf');


Route::post('send-email', [App\Http\Controllers\SubMainController::class, 'sendEmail'])->name('send.email');
