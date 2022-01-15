@push('styles')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush
@push('scripts')
    <script>
        console.log("ok1");
        $(document).ready(function () {
            console.log("ok2");
            $('#category-dropdown').select2();
            $('#category-dropdown').on('change', function (e) {
                let data = $(this).val();
                 @this.set('category', data);
            });
            // window.livewire.on('productStore', () => {
            //     $('#category-dropdown').select2();
            // });
        });
    </script>
@endpush
<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div wire:ignore>
        <select id="category-dropdown" class="form-control" multiple wire:model="category">
            @foreach($productList as $product)
                <option value="{{$product}}">{{ $product }}</option>
            @endforeach
        </select>
    </div>
</div>

