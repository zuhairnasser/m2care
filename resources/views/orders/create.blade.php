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
        <form method="POST" action="{{ route('step_one') }}">
            {!! csrf_field() !!}
            <div class="card-body">
                <div class="parsley-input col-lg-12">
                    <div class="row">
                        <div class="col">
                            <label> تحديد مكان العطل:</label>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($malfunctions as $malfunction)
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">{{ $malfunction->name }}</label>
                                {{ Form::checkbox('malfunctions[]', $malfunction->id, false, ['class' => 'form-check-input']) }}
                            </div>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label>نوع الجهاز</label>
                    <select class="form-control" name="factory">
                        <option value="" selected disabled>إختر نوع الجهاز</option>
                        @foreach ($factories as $factory)
                            <option value={{ $factory->id }}>{{ $factory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                {{-- <div class="parsley-input col-lg-12">
                    <label>نوع العطل</label>
                    <select class="form-control" name="n">
                        <option value="" selected disabled>إختر نوع العطل</option>
                        @foreach ($malfunctions as $malfunction)
                            <option value={{ $malfunction->id }}>{{ $malfunction->name }}</option>
                        @endforeach
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
                        @foreach ($accessories as $accessory)
                            <div class="col-lg mg-5"> <label class="ckbox"><input type="checkbox"><span>
                                        {{ $accessory->name }}
                                    </span></label>
                            </div>
                        @endforeach
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

                <div class="row">
                    <div class="col">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> حدد التاريخ المناسب</label>
                            <input class="form-control fc-datepicker" name="B_date" type="text" value="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="parsley-input col-md-12 mg-t-20 mg-md-t-0" id="lnWrapper">
                            <label> حدد الزمن المناسب</label>

                            <select class="form-control" name="range">
                                <option value="" selected>الفترة المسائية</option>
                                <option value="">الفترة الصباحية</option>
                            </select>
                        </div>
                    </div>
                </div> --}}

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
