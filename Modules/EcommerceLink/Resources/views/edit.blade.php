<x-ladmin-layout>
	<x-slot name="title">Edit Category</x-slot>

	<form action="{{ route('administrator.master-data.ecommerce-link.update', $ecommerceLink->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('ecommercelink::_partials._form', ['ecommerce' => $ecommerce])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Category
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
