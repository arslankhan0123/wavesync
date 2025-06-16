<div class="mb-3">
    <label>Title</label>
    <input type="text" name="title" value="{{ old('title', $service->title ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Image</label>
    <input type="file" name="image" class="form-control">
    @if(!empty($service->image))
    <img src="{{ asset('storage/' . $service->image) }}" width="100">
    @endif
</div>

<div class="mb-3">
    <label>Short Description</label>
    <textarea name="short_description" class="form-control summernote">{{ old('short_description', $service->short_description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Long Description</label>
    <textarea name="long_description" class="form-control summernote">{{ old('long_description', $service->long_description ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label>Price</label>
    <input type="number" step="0.01" name="price" value="{{ old('price', $service->price ?? '') }}" class="form-control">
</div>

<div class="mb-3">
    <label>Status</label>
    <select name="status" class="form-control">
        <option value="1" {{ (isset($service) && $service->status) ? 'selected' : '' }}>Active</option>
        <option value="0" {{ (isset($service) && !$service->status) ? 'selected' : '' }}>Inactive</option>
    </select>
</div>

{{-- Include Summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 150
        });
    });
</script>