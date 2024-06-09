<!-- resources/views/guest/companies/results.blade.php -->

@extends('layouts.app')

@section('main')
<div class="container">
<section class="section-4 bg-2">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="rounded-3 p-3">
                        <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                                <a href="javascript:void(0);" onclick="goBack()">
                                    <i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;Kembali
                                </a>
                        </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        <h1 class="mb-5">Search Results for "{{ $keyword }}"</h1>

    @if($companies->isEmpty())
        <p>No companies found.</p>
    @else
        <div class="row">
            @foreach($companies as $company)
                <div class="col-md-4 mb-4">
                    <div class="card border-1 p-1 shadow">
                        <a href="{{ route('guest.companies.show', $company) }}" class="card-body d-flex align-items-center text-decoration-none">
                            <div class="avatar avatar-xl me-4 rounded">
                                @if (!empty($company->company_logo))
                                    <img src="{{ asset('storage/company_logo/' . $company->company_logo) }}" class="img-fluid" alt="Company Logo">
                                @else
                                    <img src="{{ asset('images/default-logo.png') }}" class="img-fluid" alt="Company Logo">
                                @endif
                            </div>
                            <div>
                                <h5 class="card-title border-0 pb-2 mb-0">{{ $company->company_name }}</h5>
                                <p class="mb-1">
                                    <span class="fw-bolder"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="ps-1">{{ $company->company_address }}</span>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
<script>
        function goBack() {
            window.history.back();
        }
    </script>