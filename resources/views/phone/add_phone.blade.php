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
    <!-- row -->
    <br>
    <br>


    <div class="card">
        <div class="card-header">
            <h3>إضافة هاتف</h3>
        </div>
        <div class="card-body">
            <div class="">
                <input class="form-control" type="text" placeholder="اكتب الرقم المتسلسل">
            </div>
            <br>
            <a href="/">
                <div class="btn btn-primary btn-md">
                    بحث
                </div>
            </a>
        </div>
    </div>


    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
