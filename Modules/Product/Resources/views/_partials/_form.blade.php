<div class="mr-5 ml-5 mt-3 p-2 mb-2">
    @livewire('product-image')
</div>

<x-ladmin-form-group name="product_code" label="Code *">
    <input type="text" placeholder="Product Code" class="form-control" name="product_code" id="product_code" required
        value="{{ old('product_code', $product->product_code) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="product_name" label="Name *">
    <input type="text" placeholder="Product Name" class="form-control" name="product_name" id="product_name" required
        value="{{ old('product_name', $product->product_name) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="product_url" label="Link *">
    <input type="text" placeholder="Product Link" class="form-control" name="product_url" id="product_url" required>
</x-ladmin-form-group>
<x-ladmin-form-group name="brand" label="Brand">
    <select class="form-select" data-control="select2" data-placeholder="Select an option">
        <option></option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
    </select>
</x-ladmin-form-group>
<hr>
<h3>Product Details</h3>
<br>
<div class="row">
    <div class="col-sm-6">
        <h5>Quantity & Prices</h5>
        <div class="pl-2">
            <br>
            <x-ladmin-form-group name="qty" label="Product Quantity Stock">
                <div class="input-group mb-5">
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                    <span class="input-group-text"> pcs</span>
                </div>
            </x-ladmin-form-group>
            <x-ladmin-form-group name="base_price" label="Base Price">
                <div class="input-group mb-5">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                </div>
            </x-ladmin-form-group>

            <x-ladmin-form-group name="selling_price" label="Retail Price">
                <div class="input-group mb-5">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                </div>
            </x-ladmin-form-group>

            <x-ladmin-form-group name="selling_price" label="After discount price">
                <div class="input-group mb-5">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"/>
                </div>
            </x-ladmin-form-group>
        </div>
    </div>
    <div class="col-sm-6">
        <h5>Product Variant</h5>
        <br>
        <x-ladmin-form-group name="sizes" label="Sizes">
            @livewire('category')
        </x-ladmin-form-group>
        <x-ladmin-form-group name="categories" label="Category">
            @livewire('category')
        </x-ladmin-form-group>
        <x-ladmin-form-group name="tags" label="Tag">
            @livewire('category')
        </x-ladmin-form-group>
        <x-ladmin-form-group name="models" label="Signature Player">
            @livewire('category')
        </x-ladmin-form-group>
    </div>
</div>
<hr>

@include('components.is_active')

@push('scripts')
<script>
    var input1 = document.querySelector("#kt_tagify_1");

    new Tagify(input1);
</script>
@endpush
