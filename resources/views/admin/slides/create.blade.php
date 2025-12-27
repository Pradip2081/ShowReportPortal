<x-app-layout>
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Slide Create </h4>
                    <a href="{{route("admin.slides.create")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.slides.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                    <div class="col-6 mb-2">
                        <label for="name">name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" >
                        @error('name')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="designation">Designation <span class="text-danger">*</span></label>
                        <input type="text" name="designation" id="designation" class="form-control" value="{{ old('designation')}}" required>
                          @error('designation')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="title_details">Title Details<span class="text-danger">*</span> </label>
                        <input type="text" name="title_details" id="title_details" class="form-control" value="{{ old('title_details') }}" required>
                          @error('title_details')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>
                    <div class="col-6 mb-2">
                    <label for="status">Status</label>
                        <select name="status" class="form-control" value="{{ old('status') }}" required>
                             <option value="pending">Pending</option>
                             <option value="publish">Publish</option>

                        </select>
                     @error('status')
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
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}">
                          @error('meta_keyword')
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
