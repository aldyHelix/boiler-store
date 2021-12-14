<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Product</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.product.create')
        <a href="{{ route('administrator.master-data.product.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary">
          Create Product
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
