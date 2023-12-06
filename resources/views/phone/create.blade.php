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
@endsection
@section('content')
    <form method="POST" action="{{ route('add_new_phone') }}">
        {!! csrf_field() !!}
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <h5>إضافة هاتف</h5>
            </div>
            <div class="card-body">
                <div class="parsley-input col-lg-12">
                    <label>أدخل الرقم التسلسلي</label>
                    <div class="input-group date">
                        <input type="text" class="form-control" name="serial_number">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <br>
                <div class="col">
                    <button class="btn btn-md btn-success">بحث</button>

                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
@endsection
@section('js')
@endsection
