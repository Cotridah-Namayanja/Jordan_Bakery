@extends('layout.layout')
@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-12 text-center mb-5">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead">We'd love to hear from you!</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h3>Contact Information</h3>
                    <ul class="list-unstyled">
                        <li class="mb-3">
                            <i class="bi bi-geo-alt-fill"></i>
                            123 Baker Street, Amman, Jordan
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-telephone-fill"></i>
                            +962 123 456 789
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope-fill"></i>
                            info@jordansbakery.com
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-clock-fill"></i>
                            Mon-Sat: 7:00 AM - 8:00 PM<br>
                            Sunday: 8:00 AM - 6:00 PM
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-4">Send us a Message</h3>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Bootstrap Icons CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
@endsection

