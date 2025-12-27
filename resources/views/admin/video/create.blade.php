<x-app-layout>

    {{-- Video  Create data --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Video Create</h4>
                    <a href="{{ route('admin.statement.create') }}" class="btn btn-primary">Go Back</a>
                </div>
                <div class="card-body">

                    <form action="{{ route('admin.video.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="video_url">video_url; <span class="text-danger">*</span></label>
                                <input type="text" name="video_url" id="video_url" class="form-control"
                                    value="{{ old('video_url') }}">
                                @error('video_url')
                                    <div class="text-danger">{{ $message }} </div>
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
                                <label for="meta_description">Meta Description </label>
                                <input type="text" name="meta_description" id="meta_description" class="form-control"
                                    value="{{ old('meta_description') }}">
                                @error('meta_description')
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
                                <select name="status" class="form-control" required>
                                    <option value="" disabled
                                        {{ old('status', $myvideo->status ?? '') == '' ? 'selected' : '' }}>Select
                                        Status</option>
                                    <option value="publish"
                                        {{ old('status', $myvideo->status ?? '') == 'publish' ? 'selected' : '' }}>
                                        Publish</option>
                                    <option value="pending"
                                        {{ old('status', $myvideo->status ?? '') == 'pending' ? 'selected' : '' }}>
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

