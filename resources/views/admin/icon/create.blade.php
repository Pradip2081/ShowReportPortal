<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Create Icon</h4>
                    <a href="{{ route('admin.icon.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.icon.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <!-- Social Media Fields -->
                            <div class="col-6 mb-2">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-control"
                                    accept=".jpg,.jpeg,.png" required>

                                <!-- Image Preview -->
                                <img id="preview-image" src="#" alt="Selected Image"
                                    style="display: none; margin-top: 10px; max-height: 200px;">

                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <!-- Status -->

                            <div class="col-6 mb-2">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="" disabled
                                        {{ old('status', $icon->status ?? '') == '' ? 'selected' : '' }}>Select
                                        Status</option>
                                    <option value="publish"
                                        {{ old('status', $icon->status ?? '') == 'publish' ? 'selected' : '' }}>
                                        Publish</option>
                                    <option value="pending"
                                        {{ old('status', $icon->status ?? '') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                </select>


                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-success">Save Contact</button>
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
