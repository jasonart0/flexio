<?php
use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home');
});

// About Page
Route::get('/about', function () {
    return view('about');
});

// Services Page
Route::get('/services', function () {
    return view('services');
});

// SEO Marketing Services
Route::get('/services/seo', function () {
    return view('services.seo');
});

// HR Services
Route::get('/services/hr', function () {
    return view('services.hr');
});

// Blog Page
Route::get('/blog', function () {
    return view('blog.index');
});

// Blog Post
Route::get('/blog/{slug}', function ($slug) {
    return view('blog.show', ['slug' => $slug]);
});

// Contact Page
Route::get('/contact', function () {
    return view('contact');
});

// FAQs Page
Route::get('/faqs', function () {
    return view('faqs');
});

// Testimonials Page
Route::get('/testimonials', function () {
    return view('testimonials');
});

// Privacy Policy Page
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});

// Terms and Conditions Page
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
