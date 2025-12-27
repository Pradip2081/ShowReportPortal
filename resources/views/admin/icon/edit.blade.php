<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Edit ICON</h4>
                    <a href="{{ route('admin.icon.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.icon.update', $icon->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" id="image" class="form-control"
                                    accept=".jpg,.jpeg,.png">

                                <!-- Image Preview -->
                                <img id="preview-image" src="#" alt="Selected Image"
                                    style="display: none; margin-top: 10px; max-height: 200px;">

                                @error('image')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="image">upload image </label>
                                <img src="{{ asset($icon->image) }}" width="200" height="100" alt="pic">
                            </div>

                            <!-- Status -->
                            <div class="col-6 mb-2">
                                <select name="status" class="form-control">
                                    <option value="" disabled>Select Status</option>
                                    <option value="publish" {{ $icon->status == 'publish' ? 'selected' : '' }}>Publish
                                    </option>
                                    <option value="pending" {{ $icon->status == 'pending' ? 'selected' : '' }}>Pending
                                    </option>
                                </select>

                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('admin.icon.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-success">Update Contact</button>
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
</script>
