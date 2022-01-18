<x-ladmin-layout>
	<x-slot name="title">Edit Signature Player</x-slot>

	<form action="{{ route('administrator.master-data.signature-player.update', $signature->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('signatureplayer::_partials._form', ['signature' => $signature])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Signature Player
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
