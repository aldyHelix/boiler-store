<x-ladmin-layout>
	<x-slot name="title">Edit Banner</x-slot>

	<form action="{{ route('administrator.master-data.banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('banner::_partials._form', ['banner' => $banner])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Banner
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
