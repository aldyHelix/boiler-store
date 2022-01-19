<x-ladmin-layout>
	<x-slot name="title">Edit Faq</x-slot>

	<form action="{{ route('administrator.master-data.faq.update', $faq->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('faq::_partials._form', ['faq' => $faq])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Faq
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
