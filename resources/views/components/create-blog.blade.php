@props(['create'])
<form action="#">
    <div class="uk-switcher lg:flex lg:flex-col justify-between lg:h-full" id="form-type">
        <div class="line">
            <input class="line__input" id="product_name" autocomplete="off" name="product_name" type="text" onkeyup="this.setAttribute('value', this.value);" value="{{ old('product_name') }}">
            <span for="product_name" class="line__placeholder"> Product Name </span>
        </div>
        <div>
            <textarea maxlength="500" class="with-border px-3 py-3" placeholder="A product description is the short marketing words that explains what a product is 
                    and why it's worth purchasing. " name="short_description" value="">{{ old('short_description') }}</textarea>
        </div>
</form>