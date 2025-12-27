<x-app-layout>
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Edit Slide Show Picure </h4>
                    <a href="{{route("admin.slides.index")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.slides.update',  $slide->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put');
                    <div class="row">
                    <div class="col-6 mb-2">
                        <label for="name">name <span class="text-danger">*</span></label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $slide->name }} ">
                         @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="designation">Designation <span class="text-danger">*</span></label>
                        <input type="text" name="designation" id="designation" class="form-control" value="{{ $slide->designation }}"  required>

                    @error('designation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="title_details">Title Details<span class="text-danger">*</span> </label>
                        <input type="text" name="title_details" id="title_details" class="form-control" value="{{ $slide->title_details }}" required>

                         @error('title_details')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    </div>
                    <div class="col-6 mb-2">
                    <label for="status">Status</label>
                        <select name="status" class="form-control" value="{{ $slide->status }}" required>
                            <option value="publish">Publish</option>
                            <option value="pending">Pending</option>
                        </select>

                         @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="meta_description">Meta Description </label>
                        <input type="text" name="meta_description" id="meta_description" class="form-control"   value="{{ $slide->meta_description }}">
                    @error('meta_description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    </div>


                        <div class="col-6 mb-2">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"  value="{{ $slide->meta_keyword }}">

                      @error('meta_keyword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                    </div>
                    <div class="col-6 mb-2">
                        <label for="image">Image </label>
                        <input type="file" name="image" id="image" class="form-control">
                       <img src="{{asset($slide->image)}}" width="100" height="100"  alt="pic">

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

