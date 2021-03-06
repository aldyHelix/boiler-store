<x-base-layout>
  <x-slot name="title"><h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3">{{ $title ?? null }}</h1></x-slot>

  <x-slot name="button_create">
    {!! $button_create ?? null !!}
  </x-slot>

       <!--begin::Card-->
    <div class="card">
        <!--begin::Card body-->
        <div class="card-body pt-6">
            {{--
            <x-ladmin-datatables :fields="$fields" :options="$options" /> --}}
            {{ $dataTable->table() }}
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    {{-- Inject Scripts --}}
    @push('scripts')
    {{ $dataTable->scripts() }}
    @endpush

</x-base-layout>
