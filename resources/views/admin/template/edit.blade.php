<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Edit Template </h4>
                    <a href="{{ route('admin.template.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.template.update', $template->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put');


                        <div class="row">
                            {{-- Title --}}

                            <div class="col-6 mb-2">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ $template->title }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-6 mb-2">
                                <label for="slug">Slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" id="slug" class="form-control"
                                    value="{{ $template->slug }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                              <div class="col-6 mb-2">
                                <label for="temp_url">Template URL<span class="text-danger">*</span></label>
                                <input type="text" name="temp_url" id="temp_url" class="form-control"
                                    value="{{ $template->temp_url }}">
                                @error('temp_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Meta Title --}}
                            <div class="col-6 mb-2">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control"
                                    value="{{ $template->meta_title }}">
                                @error('meta_title')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            {{-- Meta Description --}}
                            <div class="col-6 mb-2">
                                <label for="meta_description">Meta Description</label>
                                <input type="text" name="meta_description" id="meta_description" class="form-control"
                                   value="{{ $template->meta_description }}">
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Meta Keyword --}}
                            <div class="col-6 mb-2">
                                <label for="meta_keyword">Meta Keyword</label>
                                <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"
                                   value="{{ $template->meta_keyword }}">
                                @error('meta_keyword')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Canonical URL --}}
                            <div class="col-6 mb-2">
                                <label for="canonical_url">Canonical URL</label>
                                <input type="text" name="canonical_url" id="canonical_url" class="form-control"
                                   value="{{ $template->canonical_url }}">
                                @error('canonical_url')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Meta Image --}}
                            <div class="col-6 mb-2">
                                <label for="meta_image">Meta Image</label>
                                <input type="text" name="meta_image" id="meta_image" class="form-control"
                                   value="{{ $template->meta_image }}">
                                @error('meta_image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- OG Type --}}
                            <div class="col-6 mb-2">
                                <label for="og_type">OG Type</label>
                                <input type="text" name="og_type" id="og_type" class="form-control"
                                   value="{{ $template->og_type }}">
                                @error('og_type')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Meta Robots --}}
                            <div class="col-6 mb-2">
                                <label for="meta_robots">Meta Robots</label>
                                <input type="text" name="meta_robots" id="meta_robots" class="form-control"
                                    value="{{ $template->meta_robots }}">
                                @error('meta_robots')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                                                     {{-- Status --}}
                            <div class="col-6 mb-2">
                                  <select name="status" class="form-control" required>
                                    <option value="" disabled
                                        {{ old('status', $template->status ?? '') == '' ? 'selected' : '' }}>Select
                                        Status</option>
                                    <option value="publish"
                                        {{ old('status', $template->status ?? '') == 'publish' ? 'selected' : '' }}>
                                        Publish</option>
                                    <option value="pending"
                                        {{ old('status', $template->status ?? '') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                </select>


                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>



                            {{-- Upload Image --}}
                            <div class="col-6 mb-2">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-control"
                                    accept=".jpg,.jpeg,.png">
                                <img id="preview-image" src="#" alt="Selected Image"
                                    style="display:none; margin-top:10px; max-height:200px;">
                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-success">Save Record</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview-image');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });




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
