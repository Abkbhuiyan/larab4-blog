<div class="form-group">
    <label for="name">Name</label>
    <input name="name" value="{{ old('name',isset($user->name)?$user->name:null) }}" type="text" class="form-control" id="name" placeholder="User name">
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input name="email" value="{{ old('email',isset($user->email)?$user->email:null) }}" type="email" class="form-control" id="email" placeholder="User email">
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="User password">
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label>Image</label>
    <input type="file" name="image" class="file-upload-default">
    <div class="input-group col-xs-12">
        <input name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
    </div>
    @if(isset($post->image) and $post->image != null)
        <img src="{{asset($post->image)}}" width="30%" alt="">
    @endif
    @error('image')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
