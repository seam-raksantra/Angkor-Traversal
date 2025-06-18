@extends('layouts.app')
@section('content')
<style>
    .hero {
        position: relative;
        height: 90vh;
        overflow: hidden;
        text-align: center;
    }

    .hero img {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
    }

    .hero .overlay {
        position: absolute;
        top: 0; left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        z-index: 2;
    }

    .hero .text-container {
        position: absolute;
        bottom: 40px;
        left: 0;
        right: 0;
        z-index: 3;
        padding: 0 1rem;
        color: white;
        max-width: 800px;
        margin: 0 auto;
    }

    .hero h1 {
        font-weight: 700;
        font-size: 3rem;
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.2rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        color: #222;
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .timeline {
        position: relative;
        margin: 0 auto;
        padding: 40px 0;
        width: 100%;
        max-width: 1000px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        width: 4px;
        height: 100%;
        background: linear-gradient(to bottom, #d4af37, #f0e6cc);
        transform: translateX(-50%);
    }

    .timeline-item {
        position: relative;
        width: 50%;
        padding: 20px 40px;
    }

    .timeline-item.left {
        left: 0;
        text-align: right;
    }

    .timeline-item.right {
        left: 50%;
        text-align: left;
    }

    .timeline-item .content {
        position: relative;
        background: #fffdf8;
        padding: 30px;
        border-radius: 1rem;
        box-shadow: 0 4px 16px rgba(0,0,0,0.1);
        border-left: 5px solid #d4af37;
    }

    .timeline-item.left .content {
        margin-left: auto;
        border-left: none;
        border-right: 5px solid #d4af37;
    }

    .timeline-item h5 {
        font-weight: 600;
        color: #d4af37;
        margin-bottom: 10px;
    }

    .highlight-section {
        background-color: #f9f9f9;
        border-radius: 12px;
        padding: 40px;
        margin-bottom: 50px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }

    .service-card {
        background: white;
        border-radius: 12px;
        padding: 25px;
        text-align: center;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
        transition: 0.3s;
    }

    .service-card:hover {
        box-shadow: 0 8px 30px rgba(0,0,0,0.1);
    }

    .news-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0,0,0,0.05);
    }

    .news-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .news-card-body {
        padding: 20px;
    }

    .contact-section {
        background: #f0f0f0;
        padding: 60px 0;
    }

    .developer-card {
        background: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
        text-align: center;
    }

    .developer-card img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2rem;
        }

        .hero p {
            font-size: 1rem;
        }

        .section-title {
            font-size: 1.8rem;
        }

        .timeline::before {
            left: 10px;
        }

        .timeline-item {
            width: 100%;
            padding: 20px;
        }

        .timeline-item.left,
        .timeline-item.right {
            text-align: left;
            left: 0;
        }

        .timeline-item.left .content,
        .timeline-item.right .content {
            margin: 0;
            border-left: 5px solid #d4af37;
            border-right: none;
        }

        .highlight-section {
            padding: 20px;
            margin-bottom: 30px;
        }

        .developer-card img {
            width: 90px;
            height: 90px;
        }
    }
</style>

<!-- Hero Section -->
<div class="hero">
    <img src="{{ asset('storage/Kep_header.jpg') }}" alt="About Banner" />
    <div class="overlay"></div>
    <div class="text-container">
        <h1>Angkor Traversal</h1>
        <p class="fw-semibold">
            Where timeless heritage meets modern luxury. At Angkor Traversal, we curate premium travel experiences across Cambodia — from majestic temples and cultural treasures to serene rivers and hidden eco-sanctuaries. Journey beyond the ordinary with us.
        </p>
    </div>
</div>

<!-- Our Story -->
<div class="container my-5">
    <h2 class="section-title text-center">Our Story</h2>
    <div class="timeline">
        <div class="timeline-item left">
            <div class="content">
                <h5>2018 – Founding Vision</h5>
                <p>We were born from a dream — to craft luxurious journeys through the sacred Angkor landscape. Our vision has always been heritage, authenticity, and elegance.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="content">
                <h5>2019 – Elite Experiences</h5>
                <p>We expanded our offerings with premium guides, custom hotel partnerships, and sunset cruises through Tonle Sap. Our guests began experiencing Cambodia in gold.</p>
            </div>
        </div>
        <div class="timeline-item left">
            <div class="content">
                <h5>2021 – Global Recognition</h5>
                <p>International press and travel agencies recognized our boutique experiences. We became known for perfection, detail, and heartfelt service.</p>
            </div>
        </div>
        <div class="timeline-item right">
            <div class="content">
                <h5>2024 – A Digital Luxury Era</h5>
                <p>We launched our smart-booking system, multilingual guides, and real-time concierge support. The future of luxurious Cambodian travel is now.</p>
            </div>
        </div>
    </div>
</div>

<!-- Services Section -->
<div class="container my-5 highlight-section">
    <h2 class="section-title text-center">Our Services</h2>
    <div class="row g-4">
        <div class="col-md-4 col-sm-6 col-12">
            <div class="service-card">
                <h4 class="fw-semibold text-uppercase mb-4">🌏 Heritage Tours</h4>
                <p>Discover Angkor Wat, Bayon Temple, and other UNESCO wonders with professional guides.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="service-card">
                <h4 class="fw-semibold text-uppercase mb-4">🚤 River & Eco Tours</h4>
                <p>Explore Tonle Sap, floating villages, and natural parks through our eco-luxury trips.</p>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="service-card">
                <h4 class="fw-semibold text-uppercase mb-4">🍽️ Culinary & Culture</h4>
                <p>Experience Cambodian flavors with curated food tours and Apsara dance evenings.</p>
            </div>
        </div>
    </div>
</div>

<!-- Provinces Section -->
<div class="container my-5 highlight-section">
    <h2 class="section-title text-center">Provinces in Spotlight</h2>
    <div class="row g-4">
        <div class="col-md-4 col-sm-6 col-12">
            <div class="news-card">
                <img src="{{ asset('storage/places/seim_reap.jpg') }}" alt="Siem Reap">
                <div class="news-card-body">
                    <h3 class="text-uppercase fw-bold mb-4">Siem Reap</h3>
                    <p>Hosting new luxury hotels and extending guided night tours around Angkor Thom.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="news-card">
                <img src="{{ asset('storage/places/kampot.jpg') }}" alt="Kampot">
                <div class="news-card-body">
                    <h3 class="text-uppercase fw-bold mb-4">Kampot</h3>
                    <p>River cruises and farm-to-table retreats are now trending with eco-tourists.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-12">
            <div class="news-card">
                <img src="{{ asset('storage/places/ratanakiri.png') }}" alt="Ratanakiri">
                <div class="news-card-body">
                    <h3 class="text-uppercase fw-bold mb-4">Ratanakiri</h3>
                    <p>Jungle treks and ethnic village homestays are drawing in international explorers.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact Info -->
<div class="contact-section">
    <div class="container text-center">
        <h2 class="section-title">Contact Our Team</h2>
        <p><strong>Email:</strong> angkor.traversal.18@gmail.com</p>
        <p><strong>Phone:</strong> +855 962145989</p>
        <p><strong>Address:</strong> Street 1998, Phnom Penh, Cambodia</p>
    </div>
</div>

<!-- Developer Section -->
<div class="container my-5">
    <h2 class="section-title text-center">Developer Team</h2>
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="developer-card">
                <img src="{{ asset('storage/Cooper/san.jpg') }}" alt="Developer Photo">
                <h5>Raksantra Seam</h5>
                <p>Front-end Developer | UI/UX Designer</p>
                <a href="https://github.com/sansanseam21" target="_blank" class="btn btn-outline-dark btn-sm mt-2">GitHub Profile</a>
            </div>
        </div>
    </div>
</div>
@endsection