@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    طلباتي</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @if ($orders != null && $orders->count() > 0)
        @foreach ($orders as $order)
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                                class="bi bi-phone" viewBox="0 0 16 16">
                                <path
                                    d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                            </svg>
                            <div class="col col-9 align-self-center ">
                                <p>#{{ $order->order_status_id }} - {{ $order->order_status->name }}</p>
                                <p>{{ $order->created_at }}</p>
                            </div>
                            <div class="col align-self-center">
                                <a aria-controls="collapseExample" aria-expanded="false"
                                    class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse"
                                    href="#collap{{ $order->id }}" role="">عرض</a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mg-t-5 collapse" id="collap{{ $order->id }}" style="">
                            <div class="card card-body">
                                <h5>بيانات الهاتف</h5>
                                <table>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>الرقم التسلسلي</th>
                                                <td>{{ $order->phone->serial_number }}</td>

                                            </tr>
                                            <tr>
                                                <th>الموديل</th>
                                                <td>{{ $order->phone->phone_model->name }}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                            <div class="card card-body">

                                <h5>بيانات الطلب</h5>
                                <table>
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>رقم الطلب</th>
                                                <td>{{ $order->id }}</td>

                                            </tr>
                                            <tr>
                                                <th>التاريخ</th>
                                                <td>{{ $order->created_at }}</td>

                                            </tr>
                                            <tr>
                                                <th>العطل</th>
                                                @if (isset($order->order_details))
                                                    <td>
                                                        @foreach ($order->order_details as $msc)
                                                            {{ $msc->malfunction_sub_category->name }} -
                                                        @endforeach
                                                    </td>
                                                @else
                                                    <td>لا يوجد تفاصيل</td>
                                                @endif

                                            </tr>
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        @include('layouts.no_data')
    @endif
@endsection
@section('js')
@endsection
