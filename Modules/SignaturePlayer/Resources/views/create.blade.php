<x-ladmin-layout>
	<x-slot name="title">Create Signature Player</x-slot>

	<form action="{{ route('administrator.master-data.signature-player.store') }}" method="post" enctype="multipart/form-data">
		@csrf

		@include('signatureplayer::_partials._form', ['signature' => $signature])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Signature Player
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
