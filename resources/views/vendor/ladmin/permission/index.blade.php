<x-base-layout>
  <x-slot name="title"><h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Select Role</h1></x-slot>

      <!--begin::Card-->
      <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            <x-ladmin-datatables :fields="$fields" :options="$options" />
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

</x-base-layout>
