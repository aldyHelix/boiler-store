<!--begin::Image input-->
<div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url({{ asset('demo1/media/blank/blank-image.png') }})">
    <!--begin::Image preview wrapper-->
    <div class="image-input-wrapper w-125px h-125px"></div>
    <!--end::Image preview wrapper-->

    <!--begin::Edit button-->
    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
       data-kt-image-input-action="change"
       data-bs-toggle="tooltip"
       data-bs-dismiss="click"
       title="Change avatar">
        <i class="bi bi-pencil-fill fs-7"></i>

        <!--begin::Inputs-->
        <input type="file" name="product_image[]" accept=".png, .jpg, .jpeg" />
        <input type="hidden" name="avatar_remove" />
        <!--end::Inputs-->
    </label>
    <!--end::Edit button-->

    <!--begin::Cancel button-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
       data-kt-image-input-action="cancel"
       data-bs-toggle="tooltip"
       data-bs-dismiss="click"
       title="Cancel avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Cancel button-->

    <!--begin::Remove button-->
    <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
       data-kt-image-input-action="remove"
       data-bs-toggle="tooltip"
       data-bs-dismiss="click"
       title="Remove avatar">
        <i class="bi bi-x fs-2"></i>
    </span>
    <!--end::Remove button-->
</div>
<!--end::Image input-->