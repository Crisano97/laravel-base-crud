<div class="mb-3">
    <label for="input-thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="input-thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
    @include('comics.includes.errors', ['value'=>'thumb'])
</div>
<div class="mb-3">
    <label for="input-title" class="form-label">Title</label>
    <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title', $comic->title) }}">
    @include('comics.includes.errors', ['value'=>'title'])
</div>
<div class="mb-3">
    <label for="input-description" class="form-label">Description</label>
    <textarea class="form-control" name="description" id="input-description" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
    @include('comics.includes.errors', ['value'=>'description'])
</div>

<div class="mb-3">
    <label for="input-series" class="form-label">Series</label>
    <input type="text" class="form-control" id="input-series" name="series" value="{{ old('series', $comic->series) }}">
    @include('comics.includes.errors', ['value'=>'series'])
</div>
<div class="mb-3">
    <label for="input-type" class="form-label">Type</label>
    <input type="text" class="form-control" id="input-type" name="type" value="{{ old('type', $comic->type) }}">
    @include('comics.includes.errors', ['value'=>'type'])
</div>
<div class="mb-3">
    <label for="input-price" class="form-label">Price</label>
    <input type="text" class="form-control" id="input-price" name="price" value="{{ old('price', $comic->price) }}">
    @include('comics.includes.errors', ['value'=>'price'])
</div>
<div class="mb-3">
    <label for="input-sale-date" class="form-label">Sale Date</label>
    <input type="date" class="form-control" id="input-sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
    @include('comics.includes.errors', ['value'=>'sale_date'])
</div>

<button type="submit" class="btn btn-primary">Submit</button>