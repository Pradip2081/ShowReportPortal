<x-app-layout>

    {{-- skill data --}}
         <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Create Skills</h4>
                    <a href="{{route("admin.aboutus.create")}}" class="btn btn-primary">Go Back</a>
                  </div>
                  <div class="card-body">

                    <form action="{{route('admin.skills.store')}}" method="post" enctype="multipart/form-data">
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
                        <input type="text" name="heading" id="heading" class="form-control" value="{{ old('heading')}}">
                          @error('heading')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="alphabet">alphabet<span class="text-danger">*</span> </label>
                        <input type="text" name="alphabet" id="alphabet" class="form-control" value="{{ old('alphabet') }}" required>
                          @error('alphabet')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>


                    <div class="col-6 mb-2">
                        <label for="language_name">languge Name </label>
                        <input type="text" name="language_name" id="language_name" class="form-control" value="{{ old('language_name') }}">
                          @error('language_name')
                        <div class="text-danger">{{$message}} </div>
                        @enderror
                    </div>

                     <div class="col-6 mb-2">
                         <select name="status" class="form-control" value="{{ old('status') }}" required>
                             <option value="pending">Pending</option>
                             <option value="publish">Publish</option>

                        </select>
                         @error('status')
                        <div class="text-danger">{{$message}} </div>
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
