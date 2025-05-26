@extends('layout.layout')
@section('content')

    <div class="container my-5">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="display-4">Welcome to Jordan's Bakery</h1>
                <p class="lead">Crafting delicious moments since 1995</p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Fresh Bread</h3>
                        <p>Handcrafted artisanal breads baked fresh daily.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Pastries</h3>
                        <p>Delectable pastries made with premium ingredients.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3>Custom Cakes</h3>
                        <p>Beautiful custom cakes for any special occasion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('form');

    {{-- <footer class="bg-light py-4 mt-5">
        <div class="container text-center">
            <p>© 2025 Jordan's Bakery. All rights reserved.</p>
        </div>
    </footer> --}}

@endsection
