<x-ladmin-layout>
	<x-slot name="title">Edit Size</x-slot>

	<form action="{{ route('administrator.master-data.size.update', $size->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('size::_partials._form', ['size' => $size])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Size
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
