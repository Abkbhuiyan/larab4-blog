<div class="form-group">
    <label for="name">Name</label>
    <input name="name" value="{{ old('name',isset($category->name)?$category->name:null) }}" type="text" class="form-control" id="name" placeholder="category name">
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Category description">{{old('description',isset($category->description)?$category->description:null)}}</textarea>
    @error('description')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
