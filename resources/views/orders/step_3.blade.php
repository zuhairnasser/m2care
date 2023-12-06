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
                @foreach ($data as $key => $value)

                    <input type="hidden" name="{{ $key }}" value="{{ $value }}">

                @endforeach


                <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                    <label> حدد مكان الالتقاط</label>
                    <input class="form-control fc-datepicker" name="catch_up" placeholder="" type="text" required>
                </div>
                <br>
                <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                    <label> العنوان</label>
                    <input class="form-control fc-datepicker" name="address" placeholder="" type="text" required>
                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> حدد التاريخ المناسب</label>
                            <input class="form-control fc-datepicker" name="date_to_catch_up" type="text" value="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> حدد الزمن المناسب</label>

                            <select class="form-control" name="time">
                                <option value="" selected>الفترة المسائية</option>
                                <option value="">الفترة الصباحية</option>
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">التالي</button>
            </div>
        </form>
    </div>

    <!-- MultiStep Form -->
@endsection
@section('js')
@endsection
