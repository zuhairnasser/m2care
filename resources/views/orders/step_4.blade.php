@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    طلب صيانة</span>
            </div>
        </div>

    </div>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>اضافة طلب جديد</h3>
        </div>
        <form method="POST" action="{{ route('step_three') }}">
            {!! csrf_field() !!}
            <div class="card-body">

                <div class="card">
                    <div class="card-header">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> تفاصيل المشكلة</label>
                            <div class="card-body">
                                @foreach ($collection as $data)
                                    @foreach ($data as $result)
                                        {{ $result->malfunction_category->name }}
                                        :
                                        {{ $result->name }}
                                        <br>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> تفاصيل مكان وتاريخ الالتقاط</label>
                            <div class="card-body">
                                مكان الالتقاط
                                {{ $all_data['catch_up'] }}
                                <br>
                                العنوان بالتفصيل
                                {{ $all_data['address'] }}
                                <br>
                                اليوم
                                {{ $all_data['date_to_catch_up'] }}
                                <br>
                                الزمن
                                {{ $all_data['time'] }}


                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> الملاحظات والملحقات</label>
                            <div class="card-body">
                                الملاحظات
                                {{ $all_data['note'] }}
                                <br>
                                الملحقات
                                {{ $all_data['address'] }}
                                <br>



                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success mr-1 mb-1 waves-effect waves-light ">تأكيد الطلب</button>
            </div>
        </form>
    </div>

    <!-- MultiStep Form -->
@endsection
@section('js')
@endsection
