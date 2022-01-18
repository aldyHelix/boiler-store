<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div>
        <select class="form-control" multiple>
            @foreach($productList as $product)
                <option value="{{$product}}">{{ $product }}</option>
            @endforeach
        </select>
    </div>
</div>
@push('scripts')
    <script>

    </script>
@endpush

