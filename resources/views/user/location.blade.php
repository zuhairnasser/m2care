@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    جوالاتي</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="bg-light p-5 rounded">
        <h1>How To Get Current User Location using IP Address in Laravel 8</h1>

        <div class="mt-5">
            <p><b>Country:</b> {{ $location->countryName }}</p>
            <p><b>Country Code:</b> {{ $location->countryCode }}</p>
            <p><b>Region Code:</b> {{ $location->regionCode }}</p>
            <p><b>Region Name:</b> {{ $location->regionName }}</p>
            <p><b>City Name:</b> {{ $location->cityName }}</p>
            <p><b>Zip Code:</b> {{ $location->zipCode }}</p>
            <p><b>Latitude:</b> {{ $location->latitude }}</p>
            <p><b>Longitude:</b> {{ $location->longitude }}</p>
            <p><b>Area Code:</b> {{ $location->areaCode }}</p>
        </div>
    </div>
@endsection
