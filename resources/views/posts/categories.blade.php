<div class="mb-4">
    <label for="car">Brand</label>
    <select name="car_brand" id="car_brand" class="border" required>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
</div>
