@extends('frontend.layout.app')

@section('content')
    <!-- Page Content-->
    <div class="container">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0"
                    src="https://dummyimage.com/900x400/dee2e6/6c757d.jpg" alt="..." /></div>
            <div class="col-lg-5">
                <h1 class="font-weight-light">NF Shop</h1>
                <p>NF Shop: Your One-Stop Shop for Cutting-Edge Shop
                    Discover the World of Innovation with NF Shop
                    Experience the Future of Technology at NF Shop
                    Unleash the Power of Technology with NF Shop
                    Shop Smarter, Shop NF Shop
                    Stay Ahead with NF Shop: Your Trusted Shop Retailer
                    Transform Your Digital Lifestyle with NF Shop
                    Elevate Your Tech Game with NF Shop
                    Bringing You the Best in Shop: NF Shop
                    Innovate Your Life with NF Shop</p>
            </div>
        </div>
        <!-- Call to Action-->
        <div class="card text-white my-5 py-4 text-center" style="background-color: #fb8500">
            <div class="card-body">
                <p class="text-white m-0">Kami menyediakan beberapa produk menarik</p>
            </div>
        </div>
        <!-- Product Listing -->
        <div class="row">
            @foreach ($produk as $prod)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img class="custom-image" src="{{ asset('storage/images/products/' . $prod->gambar) }}"
                            alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $prod->nama }}</h5>
                            <p class="card-text">{{ $prod->deskripsi }}</p>
                            <p class="card-text">Harga: {{ $prod->harga_jual }}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-sm" href="{{ url('frontend/detail/' . $prod->id) }}">View
                                Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <style>
        .custom-image {
            width: 300px;
            height: 300px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 14px;
            color: #888;
            margin-bottom: 10px;
        }

        .btn {
            background-color: #007bff;
            color: #fff;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
@endsection
