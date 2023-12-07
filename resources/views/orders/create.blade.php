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
                <div class="parsley-input col-md-12">
                    <label> العلاوة: <span class="tx-danger">*</span></label>
                    <div class="col-lg-12">
                        @foreach ($malfunctions as $malfunction)
                            <div class="form-check form-check-inline">
                                <label
                                    style="font-size: 16px;">{{ Form::checkbox('malfunctions[]', $malfunction->id, false, ['class' => 'form control']) }}
                                    {{ $malfunction->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label>نوع الجهاز</label>
                    <select required class="form-control" name="factory">
                        <option value="" selected disabled>إختر نوع الجهاز</option>
                        @foreach ($factories as $factory)
                            <option value={{ $factory->id }}>{{ $factory->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light ">التالي</button>
            </div>
        </form>
    </div>
@endsection
@section('js')
@endsection
