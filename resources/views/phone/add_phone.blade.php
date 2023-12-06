@extends('layouts.master')
@section('css')
    <style>
        .ajax-loader {
            visibility: hidden;
            background-color: rgba(255, 255, 255, 0.7);
            position: absolute;
        }

        .model {
            display: none;
        }
    </style>
@endsection

@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    اضافة جوال جديد</span>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <form method="POST" action="{{ route('phones.store') }}">
        @csrf
        <div class="card">
            <div class="card-header">
                <h3> اضافة جوال جديد</h3>
            </div>
            <div class="card-body">
                @if (isset($show_invoic))
                    <div class="parsley-input col-lg-12">
                        <label>سنة الشراء</label>
                        <div class="input-group date">
                            <input type="text" class="form-control" value="">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="parsley-input col-lg-12">
                        <label>الفاتورة</label>

                        <div class="custom-file"> <input class="custom-file-input" id="customFile" type="file">
                            <label class="custom-file-label" for="customFile">اضافة الفاتورة</label>
                        </div>

                    </div>
                    <br>
                @endif
                <div class="parsley-input col-lg-12">
                    <label>الشركة المصنعة</label>
                    <select class="form-control" id ="factory" name="factory">
                        @if (isset($phone))
                            <option value="{{ $phone->factory->id }}" selected disabled>{{ $phone->factory->name }}</option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($factories as $factory)
                                <option value={{ $factory->id }}>{{ $factory->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="ajax-loader" id="global-loader">
                    <img src="{{ URL::asset('assets/img/loader.svg') }}" class="loader-img" alt="Loader">
                </div>
                @if (isset($phone))
                    <div class="parsley-input col-lg-12">

                        <label> الموديل</label>
                        <select name="model" class="form-control">
                            <option value="{{ $phone->phone_model->id }}" selected disabled>{{ $phone->phone_model->name }}
                            </option>

                        </select>
                    </div>
                @else
                    <div class="parsley-input col-lg-12">
                        <div class="model  parsley-input col-lg-12">
                            <label> الموديل</label>

                            <select name="model" class="form-control" id="model">

                            </select>
                        </div>
                    </div>
                @endif
                <br>
                <div class="parsley-input col-lg-12">
                    <label> الشاشة (إختياري)</label>
                    <select class="form-control" name="screen">
                        @if (isset($phone))
                            <option value="{{ $phone->screen->id }}" selected disabled>{{ $phone->screen->name }}</option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($screens as $screen)
                                <option value={{ $screen->id }}>{{ $screen->name }}</option>
                            @endforeach
                        @endif

                    </select>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label> الشريحة (إختياري)</label>
                    <select class="form-control" name="sim">
                        @if (isset($phone))
                            <option value="{{ $phone->sim_card->id }}" selected disabled>{{ $phone->sim_card->name }}
                            </option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($sims as $sim)
                                <option value={{ $sim->id }}>{{ $sim->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label>الدعم</label>
                    <select class="form-control" name="support">
                        @if (isset($phone))
                            <option value="{{ $phone->support->id }}" selected disabled>{{ $phone->support->name }}
                            </option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($supports as $support)
                                <option value={{ $support->id }}>{{ $support->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label>اللون</label>
                    <select class="form-control" name="color">
                        @if (isset($phone))
                            <option value="{{ $phone->color->id }}" selected disabled>{{ $phone->color->name }}</option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($colors as $color)
                                <option value={{ $color->id }}>{{ $color->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label> السعة التخزينية (إختياري)</label>
                    <select class="form-control" name="stoarge">
                        @if (isset($phone))
                            <option value="{{ $phone->phone_storage->id }}" selected disabled>
                                {{ $phone->phone_storage->name }}</option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($stoarages as $stoarage)
                                <option value={{ $stoarage->id }}>{{ $stoarage->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
                <div class="parsley-input col-lg-12">
                    <label> الذاكرة العشوائية (إختياري)</label>
                    <select class="form-control" name="memory">
                        @if (isset($phone))
                            <option value="{{ $phone->memory->id }}" selected disabled>{{ $phone->memory->memory }}
                            </option>
                        @else
                            <option value="" selected disabled>إختر نوع الجهاز</option>
                            @foreach ($memories as $memory)
                                <option value={{ $memory->id }}>{{ $memory->memory }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <br>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-lg" action ="sumbit">
                    حفظ
                </button>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
    </script>
    <script>
        $(document).ready(function() {
            $('#factory').on('change', function() {
                var factoryId = this.value;
                var url = "{{ url('api/get_models/id') }}";
                url = url.replace('id', factoryId);
                $.ajax({
                    url: url,
                    type: "get",
                    beforeSend: function() {
                        $('.ajax-loader').css("visibility", "visible");
                    },
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        console.log(result);
                        $('#model').html('<option value="">إختر</option>');
                        $.each(result.models, function(key, value) {
                            $("#model").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    },
                    complete: function() {
                        $('.ajax-loader').css("visibility", "hidden");
                        $('.model').css("display", "block");
                    }
                });
            });
        });
    </script>
    <script>
        $('#sandbox-container input').datepicker({});
    </script>
    <script>
        $('#customFile').on('change', function() {
            var fileName = $(this).val();
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>
@endsection
