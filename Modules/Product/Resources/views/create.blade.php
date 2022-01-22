<x-ladmin-layout>
	<x-slot name="title">Create Product</x-slot>

	<form action="{{ route('administrator.product.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('product::_partials._form', ['product' => $product])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Product
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
