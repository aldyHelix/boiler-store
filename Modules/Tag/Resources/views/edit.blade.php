<x-ladmin-layout>
	<x-slot name="title">Edit Tag</x-slot>

	<form action="{{ route('administrator.master-data.tag.update', $tag->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('tag::_partials._form', ['tag' => $tag])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Tag
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
