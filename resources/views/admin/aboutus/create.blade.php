<x-app-layout>
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Create About Details </h4>
                    <a href="{{route("admin.aboutus.create")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.aboutus.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                    <div class="col-6 mb-2">
                        <label for="title">title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" >
                        @error('title')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="heading">heading <span class="text-danger">*</span></label>
                        <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading')}}" required>
                          @error('heading')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                    <div class="col-12 mb-2">
                        <label for="description">Description </label>
                        <textarea name="description" id="description" class="form-control summernote">
                            {{ old('description') }}
                          @error('description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                        </textarea>
                    </div>


                    <div class="col-6 mb-2">
                        <label for="meta_description">Meta Description </label>
                        <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                          @error('meta_description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                     <div class="col-6 mb-2">
                        <label for="meta_description">Meta Description </label>
                        <input type="text" name="meta_description" id="meta_description" class="form-control" value="{{ old('meta_description') }}">
                          @error('meta_description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


           <div class="col-6 mb-2">
                        <label for="author">Meta Og Author </label>
                        <input type="text" name="author" id="author" class="form-control" value="{{ old('author') }}">
                          @error('author')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                   <div class="col-6 mb-2">
                        <label for="meta_og_url">Meta Og Url </label>
                        <input type="text" name="meta_og_url" id="meta_og_url" class="form-control" value="{{ old('meta_og_url') }}">
                          @error('meta_og_url')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                   <div class="col-6 mb-2">
                        <label for="meta_og_title">Meta Og Title</label>
                        <input type="text" name="meta_og_title" id="meta_og_title" class="form-control" value="{{ old('meta_og_title') }}">
                          @error('meta_og_title')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                       <div class="col-6 mb-2">
                        <label for="meta_og_description">Meta OG Description </label>
                        <input type="text" name="meta_og_description" id="meta_og_description" class="form-control" value="{{ old('meta_og_description') }}">
                          @error('meta_og_description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                        <div class="col-6 mb-2">
                        <label for="meta_og_image">Meta OG  Image </label>
                        <input type="text" name="meta_og_image" id="meta_og_image" class="form-control" value="{{ old('meta_og_image') }}">
                          @error('meta_og_image')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                        <div class="col-6 mb-2">
                    <label for="status">Status</label>
                        <select name="status" class="form-control" value="{{ old('status') }}" required>
                             <option value="pending">Pending</option>
                             <option value="publish">Publish</option>

                        </select>
                     @error('name')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                    <div class="col-6 mb-2">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image" class="form-control" accept=".jpg,.jpeg,.png" required>

                    <!-- Image Preview -->
                    <img id="preview-image" src="#" alt="Selected Image" style="display: none; margin-top: 10px; max-height: 200px;">

                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-success">Save Record</button>
                    </div>
                    </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>



</x-app-layout>

<script>
document.getElementById('image').addEventListener('change', function(event) {
    const file = this.files[0];
    if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('preview-image');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>
