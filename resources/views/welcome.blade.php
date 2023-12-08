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
    @if (session()->has('add_phone'))
        <script>
            window.onload = function() {
                notif({
                    msg: "تم الأضافة بنجاح",
                    type: "success"
                })
            }
        </script>
    @endif

    <a href="{{ route('add_phone') }}">
        <div class="btn btn-md btn-success">
            إضافة جوال

        </div>
    </a>
    <br>
    <br>
    @if ($phones != null && $phones->count() > 0)
        @foreach ($phones as $phone)
            <div class="card">
                <div class="card-body">
                    <div class="row row-sm">
                        <div class="-col-lg mg-t-10 mg-lg-t-0">
                            <div class="row">
                                <svg width="64px" height="64px" viewBox="0 0 128.00 128.00"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    aria-hidden="true" role="img" class="iconify iconify--noto"
                                    preserveAspectRatio="xMidYMid meet" fill="#000000" transform="rotate(0)">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path
                                            d="M87.4 124H40.6c-4.7 0-8.6-3.8-8.6-8.6V12.6C32 7.9 35.9 4 40.6 4h46.8c4.7 0 8.6 3.8 8.6 8.6v102.9c0 4.7-3.9 8.5-8.6 8.5z"
                                            fill="#424242"></path>
                                        <path
                                            d="M86.77 120.11H39.93c-2.15 0-3.89-1.74-3.89-3.89V19.65c0-2.14 1.74-3.88 3.88-3.88h48.15c2.15 0 3.89 1.74 3.89 3.89v95.93c0 .93-1.4 4.52-5.19 4.52z"
                                            fill="#000000"></path>
                                        <path
                                            d="M73.65 11.59h-19.2c-.7 0-1.2-.6-1.2-1.2s.6-1.2 1.2-1.2h19.1c.7 0 1.2.6 1.2 1.2s-.5 1.2-1.1 1.2z"
                                            fill="#212121"></path>
                                        <path
                                            d="M87.4 6c3.64 0 6.6 2.96 6.6 6.6v102.9c0 3.58-2.96 6.5-6.6 6.5H40.6c-3.64 0-6.6-2.96-6.6-6.6V12.6C34 9.02 37.02 6 40.6 6h46.8m0-2H40.6C35.9 4 32 7.9 32 12.6v102.8c0 4.8 3.9 8.6 8.6 8.6h46.8c4.7 0 8.6-3.8 8.6-8.5V12.6C96 7.8 92.1 4 87.4 4z"
                                            fill="#757575"></path>
                                        <path
                                            d="M48.35 29.96h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#eab56e"></path>
                                        <path
                                            d="M60.9 29.96h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#fb8c00"></path>
                                        <path
                                            d="M73.45 29.96H67.1c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.33 1.32z"
                                            fill="#ff80ab"></path>
                                        <path
                                            d="M86.01 29.96h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#0288d1"></path>
                                        <path
                                            d="M48.35 44.12h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#00bfa5"></path>
                                        <path
                                            d="M60.9 44.12h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#81d4fa"></path>
                                        <path
                                            d="M73.45 44.12H67.1c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.33 1.32z"
                                            fill="#fb8c00"></path>
                                        <path
                                            d="M86.01 44.12h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#eab56e"></path>
                                        <path
                                            d="M48.35 58.28h-6.36c-.73 0-1.32-.59-1.32-1.32V50.6c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#fb8c00"></path>
                                        <path
                                            d="M60.9 58.28h-6.36c-.73 0-1.32-.59-1.32-1.32V50.6c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#ff80ab"></path>
                                        <path
                                            d="M73.45 58.28H67.1c-.73 0-1.32-.59-1.32-1.32V50.6c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.33 1.32z"
                                            fill="#00bfa5"></path>
                                        <path
                                            d="M86.01 58.28h-6.36c-.73 0-1.32-.59-1.32-1.32V50.6c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#0288d1"></path>
                                        <path
                                            d="M48.35 72.44h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#0288d1"></path>
                                        <path
                                            d="M60.9 72.44h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .73-.59 1.32-1.32 1.32z"
                                            fill="#81d4fa"></path>
                                        <path
                                            d="M48.35 114.92h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .72-.59 1.32-1.32 1.32z"
                                            fill="#81d4fa"></path>
                                        <path
                                            d="M60.9 114.92h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .72-.59 1.32-1.32 1.32z"
                                            fill="#0288d1"></path>
                                        <path
                                            d="M73.45 114.92H67.1c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .72-.59 1.32-1.33 1.32z"
                                            fill="#00bfa5"></path>
                                        <path
                                            d="M86.01 114.92h-6.36c-.73 0-1.32-.59-1.32-1.32v-6.36c0-.73.59-1.32 1.32-1.32h6.36c.73 0 1.32.59 1.32 1.32v6.36c0 .72-.59 1.32-1.32 1.32z"
                                            fill="#ff80ab"></path>
                                    </g>
                                </svg>

                                <div class="col">
                                    <p>
                                        @if (isset($phone->factory->name))
                                            {{ $phone->factory->name }}
                                        @else
                                            لا يوجد بيانات
                                        @endif


                                    </p>
                                    <p>

                                        @if (isset($phone->serial_number))
                                            {{ $phone->serial_number }}
                                        @else
                                            لا يوجد بيانات
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0"> </div>
                        <div class="col-lg mg-t-10 mg-lg-t-0"> </div>
                    </div>
                    <div class="row ">

                        <div class="col">

                            <h6>
                                RAM : @if (isset($phone->memory->memory))
                                    {{ $phone->memory->memory }}
                                @else
                                    لا يوجد بيانات
                                @endif
                            </h6>
                        </div>
                        <div class="col">
                            <h6>STOEAGE : @if (isset($phone->phone_storage->name))
                                    {{ $phone->phone_storage->name }}
                                @else
                                    لا يوجد بيانات
                                @endif
                            </h6>

                        </div>
                        <div class="col">
                            <a href="{{ route('phones.show', $phone->id) }}" class="btn btn-sm btn-success"
                                title="عرض"><i class="las la-eye"></i>
                                عرض التفاصيل
                            </a>



                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        @include('layouts.no_data')
    @endif

    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
@endsection
