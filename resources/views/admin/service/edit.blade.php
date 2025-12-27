<x-app-layout>

    {{-- Service edit data --}}
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Edit Service </h4>
                    <a href="{{route("admin.service.create")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.service.update', $servicetype->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                      @method('put');

                    <div class="row">
                    <div class="col-6 mb-2">
                        <label for="title">title <span class="text-danger">*</span></label>
                        <input type="text" name="title" id="title" class="form-control"  value="{{ $servicetype->title }}" >
                        @error('title')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="heading">heading <span class="text-danger">*</span></label>
                        <input type="text" name="heading" id="heading" class="form-control" value="{{ $servicetype->heading}}">
                          @error('heading')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="service_name">service name<span class="text-danger">*</span> </label>
                        <input type="text" name="service_name" id="service_name" class="form-control" value="{{ $servicetype->service_name }}">
                          @error('service_name')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-12 mb-2">
                        <label for="description">Description </label>
                        <textarea name="description" id="description" class="form-control summernote" >
                            {{ $servicetype->description }}
                          @error('description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                        </textarea>
                    </div>

                     <div class="col-6 mb-2">
                        <label for="meta_title">Meta Title </label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control"  value="{{ $servicetype->meta_title }}">
                          @error('meta_title')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                     <div class="col-6 mb-2">
                        <label for="meta_keyword">Meta Keyword </label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"  value="{{ $servicetype->meta_keyword }}">
                          @error('meta_keyword')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                     <div class="col-6 mb-2">
                        <label for="meta_description">Meta Description </label>
                        <input type="text" name="meta_description" id="meta_description" class="form-control"  value="{{ $servicetype->meta_description }}">
                          @error('meta_description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                      <div class="col-6 mb-2">
                        <label for="canonical_url">Canonical URL </label>
                        <input type="text" name="canonical_url" id="canonical_url" class="form-control"  value="{{ $servicetype->canonical_url }}">
                          @error('canonical_url')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                     <div class="col-6 mb-2">
                        <label for="og_type">OG  Type </label>
                        <input type="text" name="og_type" id="og_type" class="form-control"  value="{{ $servicetype->og_type }}">
                          @error('og_type')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                     <div class="col-6 mb-2">
                        <label for="meta_robots">Meta Robert </label>
                        <input type="text" name="meta_robots" id="meta_robots" class="form-control"  value="{{ $servicetype->meta_robots }}">
                          @error('meta_robots')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="structured_data">Json Data</label>
                        <input type="text" name="structured_data" id="structured_data" class="form-control"  value="{{ $servicetype->structured_data }}">
                          @error('structured_data')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                <div class="col-6 mb-2">
                    <select name="status" class="form-control" >
                        <option value="" disabled>Select Status</option>
                        <option value="publish" {{ $servicetype->status == 'publish' ? 'selected' : '' }}>Publish</option>
                        <option value="pending" {{ $servicetype->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>

                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                    <div class="col-6 mb-2">
                        <label for="meta_image">Meta Iamge </label>
                    <input type="text" name="meta_image" id="meta_image" class="form-control" value="{{ $servicetype->meta_image }}">
                          @error('meta_image')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                    <label for="icon_img"></label>
                   <img src="{{asset($servicetype->icon_img)}}" width="200" height="100"  alt="pic">

                    <!-- Image Preview -->
                    <img id="preview-icon_img" src="#" alt="Selected Image" style="display: none; margin-top: 10px; max-height: 200px;">

                    @error('icon_img')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>


                    <div class="col-6 mb-2">
                    <label for="icon_img">Upload Image</label>
                    <input type="file" name="icon_img" id="icon_img" class="form-control" accept=".jpg,.jpeg,.png" >

                    <!-- Image Preview -->
                    <img id="preview-icon_img" src="#" alt="Selected Image" style="display: none; margin-top: 10px; max-height: 200px;">

                    @error('icon_img')
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

$('.summernote').summernote({
    cleanPastedHTML: true,
    disableDragAndDrop: true,
    height: 250,
    callbacks: {
        onPaste: function(e) {
            let text = ((e.originalEvent || e).clipboardData).getData('text/plain');
            e.preventDefault();
            document.execCommand('insertText', false, text);
        }
    }
});


document.getElementById('icon_img').addEventListener('change', function(event) {
    const file = this.files[0];
    if (file && file.type.startsWith('icon_img/')) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('preview-icon_img');
            preview.src = e.target.result;
            preview.style.display = 'block';
        };
        reader.readAsDataURL(file);
    }
});
</script>
