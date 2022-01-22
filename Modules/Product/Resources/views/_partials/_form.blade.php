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
<x-ladmin-form-group name="brand" label="Brand">
    <select class="select" multiple>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        <option value="4">Four</option>
        <option value="5">Five</option>
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
                <div class="col-xl-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 col-form-label">
                    pcs
                </div>
            </x-ladmin-form-group>
            <x-ladmin-form-group name="base_price" label="Base Price">
                <label for="price" class="col-form-label pl-1 pr-1">Rp </label><input type="text" class="form-control">
            </x-ladmin-form-group>

            <x-ladmin-form-group name="selling_price" label="Retail Price">
                <label for="price" class="col-form-label  pl-1 pr-1">Rp </label><input type="text" class="form-control">
            </x-ladmin-form-group>
            <x-ladmin-form-group name="selling_price" label="After discount price">
                <label for="price" class="col-form-label  pl-1 pr-1">Rp </label><input type="text" class="form-control">
            </x-ladmin-form-group>
        </div>
    </div>
    <div class="col-sm-6">
        <h5>Product Variant</h5>
        <br>
        <x-ladmin-form-group name="ecommerce_link" label="Ecommerce Link">
            <select class="select" multiple>
                <option value="1">Tokopedia
                </option>
                <option value="2">Shopee
                </option>
            </select>
        </x-ladmin-form-group>
        <x-ladmin-form-group name="categories" label="Category">
            @livewire('category')
        </x-ladmin-form-group>
        <x-ladmin-form-group name="tags" label="Tag">
            @livewire('category')
        </x-ladmin-form-group>
        <x-ladmin-form-group name="models" label="Signature Player">
            <select class="select" multiple>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three
                </option>
                <option value="4">Four
                </option>
                <option value="5">Five
                </option>
            </select>
        </x-ladmin-form-group>
        <x-ladmin-form-group name="sizes" label="Sizes">
            <select class="select" multiple>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
        </x-ladmin-form-group>
    </div>
</div>

{{-- <div class="pl-2">
    <br>
    <h5>Dimensions</h5>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <x-ladmin-form-group name="long_dimension" label="Long Dimension" class="no-border">
                <div class="col-xl-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 col-form-label">
                    cm (centimeters)
                </div>
            </x-ladmin-form-group>
            <x-ladmin-form-group name="wide_dimension" label="Wide Dimension">
                <div class="col-xl-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 col-form-label">
                    cm (centimeters)
                </div>
            </x-ladmin-form-group>
        </div>
        <div class="col-sm-6">
            <x-ladmin-form-group name="height_dimension" label="Height Dimension">
                <div class="col-xl-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 col-form-label">
                    cm (centimeters)
                </div>
            </x-ladmin-form-group>
            <x-ladmin-form-group name="weight" label="Product Wight">
                <div class="col-xl-6">
                    <input type="text" class="form-control">
                </div>
                <div class="col-6 col-form-label">
                    gr (grams)
                </div>
            </x-ladmin-form-group>
        </div>
    </div>
</div> --}}
<hr>

@include('components.is_active')
