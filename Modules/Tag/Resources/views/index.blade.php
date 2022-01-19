<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Tag</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.tag.create')
        <a href="{{ route('administrator.master-data.tag.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary">
          Create Tag
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
