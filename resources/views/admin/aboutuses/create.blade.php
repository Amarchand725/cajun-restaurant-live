@extends('admin.layouts.app')
@section('title', $page_title)
@push('css')
@endpush
@section('content')
<div id="kt_app_content" class="app-content" style="margin-top:5px">
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container ">
        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" >
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0">{{ $page_title }}</h3>
                </div>
                <div class="content-header-right mt-3">
                    <a href="{{ route('aboutus.index') }}" title="All Admin.aboutuses" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route("aboutus.store") }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf

                    <div class="card-body border-top p-9">
                         <div class="row mb-6">
<label for="title" class="col-lg-2 col-form-label required fw-bold fs-6">Title</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="title" value="{{ old("title") }}" placeholder="Enter title">
<span style="color: red">{{ $errors->first("title") }}</span></div></div> <div class="row mb-6">
<label for="short_description" class="col-lg-2 col-form-label required fw-bold fs-6">Short_description</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="short_description" value="{{ old("short_description") }}" placeholder="Enter short_description">
<span style="color: red">{{ $errors->first("short_description") }}</span></div></div> <div class="row mb-6">
<label for="about_us" class="col-lg-2 col-form-label  fw-bold fs-6">About_us</label><div class="col-lg-8 fv-row"><textarea class="form-control ckeditor form-control-lg form-control-solid" id="about_us" name="about_us" placeholder="Enter about_us">{{ old("about_us") }}</textarea>
<span style="color: red">{{ $errors->first("about_us") }}</span></div></div> <div class="row mb-6">
<label for="week_days_timing" class="col-lg-2 col-form-label  fw-bold fs-6">Week_days_timing</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="week_days_timing" value="{{ old("week_days_timing") }}" placeholder="Enter week_days_timing">
<span style="color: red">{{ $errors->first("week_days_timing") }}</span></div></div> <div class="row mb-6">
<label for="saturday_timing" class="col-lg-2 col-form-label  fw-bold fs-6">Saturday_timing</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="saturday_timing" value="{{ old("saturday_timing") }}" placeholder="Enter saturday_timing">
<span style="color: red">{{ $errors->first("saturday_timing") }}</span></div></div> <div class="row mb-6">
<label for="sunday_timing" class="col-lg-2 col-form-label  fw-bold fs-6">Sunday_timing</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="sunday_timing" value="{{ old("sunday_timing") }}" placeholder="Enter sunday_timing">
<span style="color: red">{{ $errors->first("sunday_timing") }}</span></div></div> <div class="row mb-6">
<label for="call_now" class="col-lg-2 col-form-label  fw-bold fs-6">Call_now</label><div class="col-lg-8 fv-row"><input type="text" class="form-control form-control-lg form-control-solid" name="call_now" value="{{ old("call_now") }}" placeholder="Enter call_now">
<span style="color: red">{{ $errors->first("call_now") }}</span></div></div> <div class="row mb-6">
<label for="short_description_logo" class="col-lg-2 col-form-label  fw-bold fs-6">Short_description_logo</label><div class="col-lg-8 fv-row">@php $default = asset("public/default.png"); @endphp<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ $default }})"><div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div><label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo"><i class="bi bi-pencil-fill fs-7"></i><input type="file" name="short_description_logo" accept=".png, .jpg, .jpeg"/></label><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo"><i class="bi bi-x fs-2"></i></span><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo"><i class="bi bi-x fs-2"></i></span></div><span style="color: red">{{ $errors->first("short_description_logo") }}</span></div></div> <div class="row mb-6">
<label for="signature" class="col-lg-2 col-form-label  fw-bold fs-6">Signature</label><div class="col-lg-8 fv-row">@php $default = asset("public/default.png"); @endphp<div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ $default }})"><div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div><label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo"><i class="bi bi-pencil-fill fs-7"></i><input type="file" name="signature" accept=".png, .jpg, .jpeg"/></label><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo"><i class="bi bi-x fs-2"></i></span><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo"><i class="bi bi-x fs-2"></i></span></div><span style="color: red">{{ $errors->first("signature") }}</span></div></div> <div class="row mb-6">
<label for="status" class="col-lg-2 col-form-label required fw-bold fs-6">Status</label><div class="col-lg-8 fv-row"><select class="selectpicker" name="status" data-live-search="true"><option value="1" {{ old("status")==1?"selected":"" }}>Active</option><option value="0" {{ old("status")==0?"selected":"" }}>In Active</option></select><span style="color: red">{{ $errors->first("status") }}</span></div></div>
                    </div>
                    <!--begin::Actions-->
                    <div class="card-footer d-flex justify-content-end py-6 px-9">
                        <button type="reset" class="btn btn-white btn-active-light-primary me-2">Discard</button>

                        <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                            <!--begin::Indicator-->
                            <span class="indicator-label">
                                Save Changes
                            </span>
                            <span class="indicator-progress">
                                Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Content-->
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
