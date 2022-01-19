<x-ladmin-layout>
	<x-slot name="title">Create Tag</x-slot>

	<form action="{{ route('administrator.master-data.tag.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('tag::_partials._form', ['tag' => $tag])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Tag
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
