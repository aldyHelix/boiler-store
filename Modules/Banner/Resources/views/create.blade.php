<x-ladmin-layout>
	<x-slot name="title">Create Banner</x-slot>

	<form action="{{ route('administrator.master-data.banner.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('banner::_partials._form', ['banner' => $banner])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Banner
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
