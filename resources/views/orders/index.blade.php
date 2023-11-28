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
                        <p>طلب صيانة #68 (قيد المراجعة)</p>
                        <p>2023/5/5 22:55:00</p>
                    </div>
                    <div class="col align-self-center">
                        <a aria-controls="collapseExample" aria-expanded="false"
                            class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse" href="#collapseExample"
                            role="">عرض</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="mg-t-5 collapse" id="collapseExample" style="">
                    <div class="card card-body">
                        <h5>بيانات الهاتف</h5>
                        <table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>الموديل</th>
                                        <td>2023/5/5</td>

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
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>التاريخ</th>
                                        <td>2023/5/5</td>

                                    </tr>
                                    <tr>
                                        <th>العطل</th>
                                        <td>شاشة اللمس لا تعمل</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <p>طلب صيانة #68 (قيد المراجعة)</p>
                        <p>2023/5/5 22:55:00</p>
                    </div>
                    <div class="col align-self-center">
                        <a aria-controls="collapseExample" aria-expanded="false"
                            class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse" href="#collapseExample"
                            role="">عرض</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="mg-t-5 collapse" id="collapseExample" style="">
                    <div class="card card-body">
                        <h5>بيانات الهاتف</h5>
                        <table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>الموديل</th>
                                        <td>2023/5/5</td>

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
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>التاريخ</th>
                                        <td>2023/5/5</td>

                                    </tr>
                                    <tr>
                                        <th>العطل</th>
                                        <td>شاشة اللمس لا تعمل</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <p>طلب صيانة #68 (قيد المراجعة)</p>
                        <p>2023/5/5 22:55:00</p>
                    </div>
                    <div class="col align-self-center">
                        <a aria-controls="collapseExample" aria-expanded="false"
                            class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse" href="#collapseExample"
                            role="">عرض</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="mg-t-5 collapse" id="collapseExample" style="">
                    <div class="card card-body">
                        <h5>بيانات الهاتف</h5>
                        <table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>الموديل</th>
                                        <td>2023/5/5</td>

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
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>التاريخ</th>
                                        <td>2023/5/5</td>

                                    </tr>
                                    <tr>
                                        <th>العطل</th>
                                        <td>شاشة اللمس لا تعمل</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <p>طلب صيانة #68 (قيد المراجعة)</p>
                        <p>2023/5/5 22:55:00</p>
                    </div>
                    <div class="col align-self-center">
                        <a aria-controls="collapseExample" aria-expanded="false"
                            class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse" href="#collapseExample"
                            role="">عرض</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="mg-t-5 collapse" id="collapseExample" style="">
                    <div class="card card-body">
                        <h5>بيانات الهاتف</h5>
                        <table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>الموديل</th>
                                        <td>2023/5/5</td>

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
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>التاريخ</th>
                                        <td>2023/5/5</td>

                                    </tr>
                                    <tr>
                                        <th>العطل</th>
                                        <td>شاشة اللمس لا تعمل</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                        <p>طلب صيانة #68 (قيد المراجعة)</p>
                        <p>2023/5/5 22:55:00</p>
                    </div>
                    <div class="col align-self-center">
                        <a aria-controls="collapseExample" aria-expanded="false"
                            class="btn btn-sm btn-success  ripple collapsed" data-toggle="collapse"
                            href="#collapseExample" role="">عرض</a>
                    </div>
                </div>
            </div>
            <div>
                <div class="mg-t-5 collapse" id="collapseExample" style="">
                    <div class="card card-body">
                        <h5>بيانات الهاتف</h5>
                        <table>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>الرقم التسلسلي</th>
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>الموديل</th>
                                        <td>2023/5/5</td>

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
                                        <td>1545485148481</td>

                                    </tr>
                                    <tr>
                                        <th>التاريخ</th>
                                        <td>2023/5/5</td>

                                    </tr>
                                    <tr>
                                        <th>العطل</th>
                                        <td>شاشة اللمس لا تعمل</td>

                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
