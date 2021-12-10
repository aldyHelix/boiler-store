<x-ladmin-layout>
	<x-slot name="title">Create Category</x-slot>

	<form action="{{ route('administrator.master-data.ecommerce-link.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('ecommercelink::_partials._form', ['ecommerce' => $ecommerce])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Category
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
