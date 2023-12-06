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
            <h3>{{ $phone->phone_name }}</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th>الرقم التسلسلي</th>
                        <td>
                            @if (isset($phone->serial_number))
                                {{ $phone->serial_number }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <th>تاريخ الشراء</th>
                        <td>
                            @if (isset($phone->created_at))
                                {{ $phone->created_at }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>



                    </tr>
                    <tr>
                        <th>الموديل</th>
                        <td>
                            @if (isset($phone->phone_model->name))
                                {{ $phone->phone_model->name }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>اللون</th>
                        <td>
                            @if (isset($phone->color->name))
                                {{ $phone->color->name }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>الشريحة</th>
                        <td>
                            @if (isset($phone->sim_card->name))
                                {{ $phone->sim_card->name }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>الدعم</th>
                        <td>
                            @if (isset($phone->support->name))
                                {{ $phone->support->name }}
                            @else
                                لا يوجد بيانات
                            @endif
                        </td>

                    </tr>


                    <th>المساحة التخزينية</th>
                    {{-- <td>{{ $phone->phone_storage->name }}</td> --}}

                    <td>
                        @if (isset($phone->phone_storage->name))
                            {{ $phone->phone_storage->name }}
                        @else
                            لا يوجد بيانات
                        @endif
                    </td>
                    </tr>
                    <th>الذاكرة العشوائية</th>
                    {{-- <td>{{ $phone->memory->memory }}</td> --}}
                    <td>
                        @if (isset($phone->memory->memory))
                            {{ $phone->memory->memory }}
                        @else
                            لا يوجد بيانات
                        @endif
                    </td>

                    </tr>
                </tbody>
            </table>
            <div class="card-footer">
                <a href="/add_order">
                    <div class="btn btn-md btn-primary">
                        طلب صيانة
                    </div>
                </a>
            </div>
        </div>
    </div>


    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
