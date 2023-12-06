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
    <div class="card">
        <div class="main-contact-info-header pt-3">
            <div class="media">
                <div class="main-img-user"> <img alt="avatar" src={{ asset('images/'.$user->profile_photo_path) }}> <a href=""><i
                            class="fe fe-camera"></i></a> </div>

            </div>
            <div class="main-contact-action btn-list pt-3 pr-3"> <a href="{{ route('edit-profile') }}"
                    class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip"
                    title="" data-original-title="Edit Profile"><i class="fe fe-edit"></i></a> </div>
        </div>
        <div class="main-contact-info-body p-4 ps">
            <div class="media">
                <div class="media-body">
                    <div> <label>الاسم</label>
                        @if (isset($user->first_name))
                            <span class="tx-medium">{{ $user->first_name }}
                                {{ $user->last_name }}</span>
                        @else
                            لا يوجد
                        @endif
                    </div>

                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <div> <label>رقم الهاتف</label>
                        <span class="tx-medium">
                            @if (isset($user->phone_number))
                                {{ $user->phone_number }}
                            @else
                                لا يوجد
                            @endif

                        </span>
                    </div>

                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <div> <label>البريد الالكتروني</label>

                        <span class="tx-medium">
                            @if (isset($user->email))
                                {{ $user->email }}
                            @else
                                لا يوجد
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="media mb-0">
                <div class="media-body">
                    <div> <label>النوع</label>
                        <span class="tx-medium">

                            @if (isset($user->gender))
                                {{ $user->gender }}
                            @else
                                لا يوجد
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <div> <label>المدينة</label>
                        <span class="tx-medium">
                            @if (isset($user->city->name))
                                {{ $user->city->name }}
                            @else
                                لا يوجد
                            @endif

                        </span>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <div> <label>المنطقة</label> <span class="tx-medium">
                            @if (isset($user->zone->name))
                                {{ $user->zone->name }}
                            @else
                                لا يوجد
                            @endif
                        </span>
                    </div>
                </div>
            </div>

            <div class="ps__rail-x" style="left: 0px; top: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; right: 711px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
