<x-ladmin-layout>
	<x-slot name="title">Create Brand</x-slot>

	<form action="{{ route('administrator.master-data.brand.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('brand::_partials._form', ['brand' => $brand])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Brand
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
