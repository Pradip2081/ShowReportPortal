<x-app-layout>

    {{-- Video Index --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Video List</h4>
                    <a href="{{ route('admin.video.create') }}" class="btn btn-primary">Add</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Video Preview</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($myvideos as $index => $myvideo)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>

                                        {{-- Video Preview --}}
                                        <td>
                                            @php
                                                $videoUrl = $myvideo->video_url;
                                                // Detect YouTube
                                                $isYouTube = Str::contains($videoUrl, 'youtube.com') || Str::contains($videoUrl, 'youtu.be');
                                            @endphp

                                            @if ($isYouTube)
                                                @php
                                                    // Convert standard YouTube link to embed link
                                                    $embedUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                                                    $embedUrl = str_replace('youtu.be/', 'youtube.com/embed/', $embedUrl);
                                                @endphp
                                                <iframe width="200" height="120"
                                                    src="{{ $embedUrl }}" frameborder="0"
                                                    allowfullscreen></iframe>
                                            @else
                                                <video width="200" height="120" controls>
                                                    <source src="{{ asset('storage/' . $videoUrl) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </td>

                                        
                                        <td>{{ $myvideo->meta_title }}</td>
                                        <td>{{ $myvideo->meta_description }}</td>
                                        <td>{{ $myvideo->meta_keyword }}</td>

                                        <td>
                                            @if ($myvideo->status == 'pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @elseif($myvideo->status == 'publish')
                                                <span class="badge badge-success">Active</span>
                                            @endif
                                        </td>

                                        {{-- Action Buttons --}}
                                        <td class="d-flex gap-2">
                                            <a href="{{ route('admin.video.edit', $myvideo->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> Edit
                                            </a>

                                            <form action="{{ route('admin.video.destroy', $myvideo->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are you sure you want to delete this item?')">
                                                    <i class="bi bi-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
