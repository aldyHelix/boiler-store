<x-ladmin-layout>
	<x-slot name="title">Edit Product</x-slot>

	<form action="{{ route('administrator.master-data.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('product::_partials._form', ['product' => $product])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Product
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
