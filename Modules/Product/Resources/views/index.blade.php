<x-base-layout>
    <x-slot name="styles">
        {{-- <link rel="stylesheet" href="{{ mix('css/custom.css') }}"> --}}
    </x-slot>
    <x-slot name="title">
        <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">Product</h1>
    </x-slot>
    <x-slot name="button_create">
        @can('administrator.product.create')
        <!--begin::Wrapper-->
            <div data-bs-toggle="tooltip" data-bs-placement="left" data-bs-trigger="hover" title="Create a new product">
                <a href="{{ route('administrator.product.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary fw-bolder">
                    Create Product
                </a>
            </div>
        <!--end::Wrapper-->
        @endcan
    </x-slot>

        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body pt-6">
                {{-- <x-ladmin-datatables :fields="$fields" :options="$options" /> --}}
                {{ $dataTable->table() }}
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
</x-base-layout>

{{-- Inject Scripts --}}
@section('scripts')
    {{ $dataTable->scripts() }}
@endsection
