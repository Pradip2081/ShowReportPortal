<x-app-layout>

    {{-- statement  Create data --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Statement Create/Add</h4>
                    <a href="{{ route('admin.statement.create') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.statement.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="title">title <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title" class="form-control"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>
                            <div class="col-6 mb-2">
                                <label for="slug">slug <span class="text-danger">*</span></label>
                                <input type="text" name="slug" id="slug" class="form-control"
                                    value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-6 mb-2">
                                <label for="name">Name </label>
                                <input type="text" name="name" id="name" class="form-control"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-12 mb-2">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" class="form-control summernote">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="col-6 mb-2">
                                <label for="meta_title">Meta Title </label>
                                <input type="text" name="meta_title" id="meta_title" class="form-control"
                                    value="{{ old('meta_title') }}">
                                @error('meta_title')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="meta_keyword">Meta Keyword </label>
                                <input type="text" name="meta_keyword" id="meta_keyword" class="form-control"
                                    value="{{ old('meta_keyword') }}">
                                @error('meta_keyword')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>


                            <div class="col-6 mb-2">
                                <label for="meta_description">Meta Description </label>
                                <input type="text" name="meta_description" id="meta_description" class="form-control"
                                    value="{{ old('meta_description') }}">
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                            </div>



                            <div class="col-6 mb-2">
                                <select name="status" class="form-control" required>
                                    <option value="" disabled
                                        {{ old('status', $mystatement->status ?? '') == '' ? 'selected' : '' }}>Select
                                        Status</option>
                                    <option value="publish"
                                        {{ old('status', $mystatement->status ?? '') == 'publish' ? 'selected' : '' }}>
                                        Publish</option>
                                    <option value="pending"
                                        {{ old('status', $mystatement->status ?? '') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
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
