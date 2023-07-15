@extends('admin.layouts.app')
@section('content')
{{-- ini adalah halaman dashboard --}}
<div class='row'>
    <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-5">
                <svg width="319" height="198" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <defs>
                      <path id="welcome-a" d="M64 0l64 128-64-20-64 20z" />
                      <path id="welcome-e" d="M40 0l40 80-40-12.5L0 80z" />
                      <path id="welcome-g" d="M40 0l40 80-40-12.5L0 80z" />
                      <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="welcome-b">
                          <stop stop-color="#A5B4FC" offset="0%" />
                          <stop stop-color="#818CF8" offset="100%" />
                      </linearGradient>
                      <linearGradient x1="50%" y1="24.537%" x2="50%" y2="100%" id="welcome-c">
                          <stop stop-color="#4338CA" offset="0%" />
                          <stop stop-color="#6366F1" stop-opacity="0" offset="100%" />
                      </linearGradient>
                  </defs>
                  <g fill="none" fill-rule="evenodd">
                      <g transform="rotate(64 36.592 105.604)">
                          <mask id="welcome-d" fill="#fff">
                              <use xlink:href="#welcome-a" />
                          </mask>
                          <use fill="url(#welcome-b)" xlink:href="#welcome-a" />
                          <path fill="url(#welcome-c)" mask="url(#welcome-d)" d="M64-24h80v152H64z" />
                      </g>
                      <g transform="rotate(-51 91.324 -105.372)">
                          <mask id="welcome-f" fill="#fff">
                              <use xlink:href="#welcome-e" />
                          </mask>
                          <use fill="url(#welcome-b)" xlink:href="#welcome-e" />
                          <path fill="url(#welcome-c)" mask="url(#welcome-f)" d="M40.333-15.147h50v95h-50z" />
                      </g>
                      <g transform="rotate(44 61.546 392.623)">
                          <mask id="welcome-h" fill="#fff">
                              <use xlink:href="#welcome-g" />
                          </mask>
                          <use fill="url(#welcome-b)" xlink:href="#welcome-g" />
                          <path fill="url(#welcome-c)" mask="url(#welcome-h)" d="M40.333-15.147h50v95h-50z" />
                      </g>
                  </g>
              </svg>
              </div>
        
              <div class="col-7 my-5">
                <h3 class="mb-1 pt-2 text-bold">Welcome, {{ Auth::user()->name }} 👋</h>
                <p class="">Here is what's happening with your projects today:</p>
            </div>
            </div>
          </div>
        </div>
      </div>
</div>
<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
      <div class="card">
        <div class="card-body p-3">
          <div class="row">
            <div class="col-lg-6">
              <div class="d-flex flex-column h-100">
                <p class="mb-1 pt-2 text-bold">Built by developers</p>
                <h5 class="font-weight-bolder">Soft UI Dashboard</h5>
                <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p>
                <a class="text-body text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                  Read More
                  <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                </a>
              </div>
            </div>
            <div class="col-lg-5 ms-auto text-center mt-5 mt-lg-0">
              <div class="bg-gradient-primary border-radius-lg h-100">
                <img src="{{asset('admin/img/shapes/waves-white.svg')}}" class="position-absolute h-100 w-50 top-0 d-lg-block d-none" alt="waves">
                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                  <img class="w-100 position-relative z-index-2 pt-4" src="{{asset('admin/img/illustrations/rocket-white.png')}}" alt="rocket">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5">
      <div class="card h-100 p-3">
        <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100" style="background-image: url('{{asset('admin/img/ivancik.jpg')}}');">
          <span class="mask bg-gradient-dark"></span>
          <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-3">
            <h5 class="text-white font-weight-bolder mb-4 pt-2">Work with the rockets</h5>
            <p class="text-white">Wealth creation is an evolutionarily recent positive-sum game. It is all about who take the opportunity first.</p>
            <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
              Read More
              <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection