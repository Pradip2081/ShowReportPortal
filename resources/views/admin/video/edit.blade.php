<x-app-layout>

    {{-- myvideo edit data --}}
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Edit Video </h4>
                    <a href="{{route("admin.video.index")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.video.update', $myvideo->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                      @method('put');

                    <div class="row">
                    <div class="col-6 mb-2">
                        <label for="video_url">video url <span class="text-danger">*</span></label>
                        <input type="text" name="video_url" id="video_url" class="form-control"  value="{{ $myvideo->video_url }}" >
                        @error('video_url')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                     <div class="col-6 mb-2">
                        <label for="meta_title">Meta Title </label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control"  value="{{ $myvideo->meta_title }}">
                          @error('meta_title')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                      <div class="col-6 mb-2">
                        <label for="meta_description">Meta Description </label>
                        <input type="text" name="meta_description" id="meta_description" class="form-control"  value="{{ $myvideo->meta_description }}">
                          @error('meta_description')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                     <div class="col-6 mb-2">
                        <label for="meta_keyword">Meta Keyword </label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"  value="{{ $myvideo->meta_keyword }}">
                          @error('meta_keyword')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>






                <div class="col-6 mb-2">
                    <select name="status" class="form-control" >
                        <option value="" disabled>Select Status</option>
                        <option value="publish" {{ $myvideo->status == 'publish' ? 'selected' : '' }}>Publish</option>
                        <option value="pending" {{ $myvideo->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>

                    @error('status')
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

  document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slug = title
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '') // remove special characters
            .replace(/\s+/g, '-') // replace spaces with -
            .replace(/-+/g, '-'); // collapse multiple hyphens
        document.getElementById('slug').value = slug;
    });
</script>
