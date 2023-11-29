@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    طلب صيانة</span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="parsley-input col-lg-12">
                <label>نوع الجهاز</label>
                <select class="form-control" name="degree">
                    <option value="1"> لينوفو</option>
                    <option value="2"> ايفون</option>
                    <option value="2"> ساسمسونج</option>


                </select>
            </div>
            <br>
            <div class="parsley-input col-lg-12">
                <label>نوع العطل</label>
                <select class="form-control" name="degree">
                    <option value="1"> شاشة</option>
                    <option value="2"> بطارية</option>
                    <option value="2"> كاميرا</option>
                    <option value="2"> الشرائح</option>
                    <option value="2"> الذاكرة</option>

                </select>
            </div>
            <br>
            <div class="parsley-input col-lg-12">
                <label class="form-label"> أوصف مشكلتك بوضوح</label>
                <textarea class="form-control" name="note" rows="3">{{ old('add') }}</textarea>
            </div>
            <br>
            <div class="parsley-input col-lg-12">
                <label class="form-label">ملحقات</label>
                <br>

                <div class="row">
                    <div class="col-lg-3 mg-5"> <label class="ckbox"><input type="checkbox"><span> سماعة
                                سلكية</span></label>

                    </div>
                    <div class="col-lg-3 mg-5"> <label class="ckbox"><input type="checkbox"><span>شاحن</span></label>
                    </div>
                    <div class="col-lg-3 mg-5"> <label class="ckbox"><input type="checkbox"><span>سماعة لا
                                سلكية</span></label>
                    </div>

                </div>
            </div>
            <br>
            <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                <label> حدد مكان الالتقاط</label>
                <input class="form-control fc-datepicker" name="B_date" placeholder="" type="text" required>
            </div>
            <br>
            <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                <label> العنوان</label>
                <input class="form-control fc-datepicker" name="B_date" placeholder="" type="text" required>
            </div>
            <br>
            <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                <label> حدد الزمن المناسب</label>
                <input class="form-control fc-datepicker" name="B_date" placeholder="YYYY-MM-DD" type="text"
                    value="{{ date('Y-m-d') }}" required>
            </div>

        </div>
        <div class="card-footer">
            <div class="btn btn-success btn-md">
                ارسال
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
