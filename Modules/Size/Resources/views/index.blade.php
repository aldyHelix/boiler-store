<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Size</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.size.create')
        <a href="{{ route('administrator.master-data.size.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary">
          Create Size
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
