@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل الملف الشخصي</span>
            </div>

        </div>
    </div>
@endsection
@section('content')
    <form method="POST" enctype="multipart/form-data" action="{{ route('update-profile', $user->id) }}">
        @method('put')
        @csrf
        <div class="card">
            <div class="card-header">
                <h3> تعديل الملف الشخصي</h3>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="main-contact-info-header pt-3">
                        <div class="">
                            <div> <img height="100" width="100" alt=""
                                    src={{ asset('images/1645184504.png') }}>
                                <input type="file" id="input" style="" name="file"
                                    accept=".jpg, .png, image/jpeg, image/png" />
                            </div>

                        </div>

                    </div>
                    <div class="main-contact-info-body p-4 ps">

                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>الاسم الاول</label>
                            <input type="text"ر name="first_name" value="{{ $user->first_name }}" class="form-control">
                        </div>
                        <br>
                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>الاسم الاخير</label>
                            <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control">
                        </div>
                        <br>
                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>رقم الهاتف</label>
                            <input type="text" name="phone_number" value="{{ $user->phone_number }}"
                                class="form-control">
                        </div>
                        <br>
                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>البريد الالكتروني</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                        </div>
                        <br>
                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>النوع</label>
                            <select class="form-control" name="gender">
                                <option value="{{ $user->gender }}" selected>{{ $user->gender }}</option>

                                <option value="ذكر">ذكر</option>
                                <option value="انثى">انثى</option>

                            </select>
                        </div>
                        <br>
                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>المنطقة</label>
                            <select class="form-control" name="zone">
                                @if (isset($user->zone))
                                    <option value="{{ $user->zone->id }}" selected>{{ $user->zone->name }}</option>
                                @else
                                    <option value="" selected>اختر المنطقة</option>
                                @endif
                                @foreach ($zones as $zone)
                                    <option value={{ $zone->id }}>{{ $zone->name }}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                        <div class ="parsley-input col-md-12 mg-t-20 mg-md-t-0">
                            <label>المدينة</label>
                            <select class="form-control" name="city">
                                @if (isset($user->city))
                                    <option value="{{ $user->city->id }}" selected>{{ $user->city->name }}</option>
                                @else
                                    <option value="" selected>اختر المدينة</option>
                                @endif
                                @foreach ($citeis as $city)
                                    <option value={{ $city->id }}>{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <br>
                    </div>
                </div>


            </div>
            <div class="card-footer">
                <button class="btn btn-primary btn-lg" action ="sumbit">
                    تعديل
                </button>
            </div>
        </div>
    </form>
@endsection
@section('js')
    <script>
        function myFunction() {
            document.getElementById("input").focus();
        }
    </script>
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        </script> --}}
@endsection
