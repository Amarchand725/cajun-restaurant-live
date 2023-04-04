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
                    <a href="{{ route('gallery.index') }}" title="All Admin.galleries" class="btn btn-primary btn-sm">View All</a>
                </div>
                <!--end::Card title-->
            </div>
            <!--begin::Card header-->

            <!--begin::Content-->
            <div id="" class="collapse show">
                <!--begin::Form-->
                <form action="{{ route("gallery.update", $model->id) }}" id="regform" class="form-horizontal" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                    {{ method_field('PATCH') }}

                    <div class="card-body border-top p-9">
                         <div class="row mb-6">
<label for="image" class="col-lg-2 col-form-label required fw-bold fs-6">Image</label><div class="col-md-6 col-sm-6">@php $default = asset("public/default.png"); @endphp @if ($model->image) @php $default = asset("public/admin/images/galleries")."/".$model->image; @endphp @endif <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url({{ $default }})"><div class="image-input-wrapper w-125px h-125px" style="background-image: none;"></div><label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Logo"><i class="bi bi-pencil-fill fs-7"></i><input type="file" name="image" accept=".png, .jpg, .jpeg"/></label><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Logo"><i class="bi bi-x fs-2"></i></span><span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Logo"><i class="bi bi-x fs-2"></i></span></div><span style="color: red">{{ $errors->first("image") }}</span></div></div> <div class="row mb-6">
<label for="status" class="col-lg-2 col-form-label required fw-bold fs-6">Status</label><div class="col-md-6 col-sm-6"><select class="selectpicker" name="status"><option value="1" {{ $model->status==1?"selected":"" }}>Active</option><option value="0" {{ $model->status==0?"selected":"" }}>In Active</option></select><span style="color: red">{{ $errors->first("status") }}</span></div></div>
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