<x-ladmin-layout>
	<x-slot name="title">Create Faq</x-slot>

	<form action="{{ route('administrator.master-data.faq.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('faq::_partials._form', ['faq' => $faq])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Faq
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
