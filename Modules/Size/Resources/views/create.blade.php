<x-ladmin-layout>
	<x-slot name="title">Create Size</x-slot>

	<form action="{{ route('administrator.master-data.size.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('size::_partials._form', ['size' => $size])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Size
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
