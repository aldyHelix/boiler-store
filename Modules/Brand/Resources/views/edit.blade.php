<x-ladmin-layout>
	<x-slot name="title">Edit Brand</x-slot>

	<form action="{{ route('administrator.master-data.brand.update', $brand->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('brand::_partials._form', ['brand' => $brand])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Brand
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
