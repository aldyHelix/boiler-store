<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Banner</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.banner.create')
        <a href="{{ route('administrator.master-data.banner.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary">
          Create Banner
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
