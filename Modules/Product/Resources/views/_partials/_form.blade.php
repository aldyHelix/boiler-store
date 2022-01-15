
<x-ladmin-form-group name="product_code" label="Code *">
    <input type="text" placeholder="Product Code" class="form-control" name="product_code" id="product_code" required
        value="{{ old('product_code', $product->product_code) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="product_name" label="Name *">
    <input type="text" placeholder="Product Name" class="form-control" name="product_name" id="product_name" required
        value="{{ old('product_name', $product->product_name) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="condition" label="Condition *">
    <input type="text" placeholder="Product Condition" class="form-control" name="condition" id="condition" required
        value="{{ old('condition', $product->condition) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="minimal_order" label="Minimal Order *">
    <input type="text" placeholder="Minimal order" class="form-control" name="minimal_order" id="minimal_order" required
        value="{{ old('minimal_order', $product->minimal_order) }}">
</x-ladmin-form-group>
<x-ladmin-form-group name="image" label="Main image">
    <input type="file" class="form-control" name="image" id="image" value="{{ old('image', $product->image) }}">
</x-ladmin-form-group>
<hr>
<h3>Product Variant</h3>
<br>
<x-ladmin-form-group name="ecommerce_link" label="Product Ecommerce Link">

</x-ladmin-form-group>
<x-ladmin-form-group name="categories" label="Product Category">
    @livewire('category')
</x-ladmin-form-group>
<x-ladmin-form-group name="colors" label="Product Color">
    <select class="select" multiple>
        <option value="1" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp">One</option>
        <option value="2" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp">Two</option>
        <option value="3" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp">Three</option>
        <option value="4" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp">Four</option>
        <option value="5" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp">Five</option>
    </select>
</x-ladmin-form-group>
<x-ladmin-form-group name="models" label="Product Model">
    <select class="select" multiple>
        <option value="1" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp">One</option>
        <option value="2" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp">Two</option>
        <option value="3" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp">Three</option>
        <option value="4" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp">Four</option>
        <option value="5" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp">Five</option>
    </select>
</x-ladmin-form-group>
<x-ladmin-form-group name="sizes" label="Product Sizes">
    <select class="select" multiple>
        <option value="1" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp">One</option>
        <option value="2" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp">Two</option>
        <option value="3" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp">Three</option>
        <option value="4" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp">Four</option>
        <option value="5" data-mdb-icon="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp">Five</option>
    </select>
</x-ladmin-form-group>
<hr>
<h3>Product Details</h3>
<div class="pl-2">
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
</div>
<hr>
<h5>Quantity & Prices</h5>
<div class="pl-2">
    <br>
    <div class="row">
        <div class="col-sm-6">
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
        </div>
        <div class="col-sm-6">
            <x-ladmin-form-group name="list_price" label="List Price">
                <label for="price" class="col-form-label  pl-1 pr-1">Rp </label><input type="text" class="form-control">
            </x-ladmin-form-group>
            <x-ladmin-form-group name="selling_price" label="Selling Price">
                <label for="price" class="col-form-label  pl-1 pr-1">Rp </label><input type="text" class="form-control">
            </x-ladmin-form-group>
        </div>
    </div>
    <hr>
    <h5>Product Images</h5>
    <br>
    <x-ladmin-form-group name="product_image" label="Other Image">
        <input type="text" class="form-control">
    </x-ladmin-form-group>
    <x-ladmin-form-group name="product_image_colors" label="Product Image with Color">
        <input type="text" class="form-control">
    </x-ladmin-form-group>
    <hr>
    @include('components.is_active')
