@extends('layouts.app')

@section('title', 'Our Services')

@section('content')
    <h1>Our Services</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>SEO Marketing</h2>
            <p>Optimize your online presence and drive more traffic to your website.</p>
            <a href="/services/seo" class="btn btn-secondary">Learn More</a>
        </div>
        <div class="col-md-6">
            <h2>HR Services</h2>
            <p>Streamline your HR processes and improve employee satisfaction.</p>
            <a href="/services/hr" class="btn btn-secondary">Learn More</a>
        </div>
    </div>
@endsection
