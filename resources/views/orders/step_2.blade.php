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
            <h3> الأعطال </h3>
        </div>
        <form method="POST" action="{{ route('step_two') }}">
            {!! csrf_field() !!}
            <div class="card-body">
                <input name="factory" value="{{ $factory }}" hidden type="text">
                @foreach ($collection as $input)
                    <div class="parsley-input col-lg-12">
                        <label>{{ $input->name }}</label>
                        <select required class="form-control" name="{{ $input->en_name }}">
                            <option value="" selected disabled>إختر نوع العطل</option>
                            @foreach ($input->malfunction_sub_categories as $malfunction)
                                <option value={{ $malfunction->id }}>{{ $malfunction->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                @endforeach
                <div class="parsley-input col-lg-12">
                    <label class="form-label"> أوصف مشكلتك بوضوح</label>
                    <textarea class="form-control" name="note" rows="3">{{ old('add') }}</textarea>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label class="form-label">ملحقات</label>
                    <br>
                    @if (isset($accessories))
                    <div class="row">
                        @foreach ($accessories as $accessory)
                            <div class="col-lg mg-5"> <label class="ckbox"><input type="checkbox"><span>
                                        {{ $accessory->name }}
                                    </span></label>
                            </div>
                        @endforeach
                    </div>
                    @else
                     
                    @endif
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">التالي</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection
