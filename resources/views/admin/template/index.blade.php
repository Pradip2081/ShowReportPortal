<x-app-layout>

    {{-- Service index --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Template Details </h4>
                    <a href="{{ route('admin.template.create') }}" class="btn btn-primary ">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                    <th> #</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Tempate Url</th>
                                    <th>Meta Title</th>
                                    <th>Slug</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <th>Canonical URL</th>
                                    <th>Meta Image</th>
                                    <th>OG Type</th>
                                    <th>Meta Robots</th>
                                     <th>Status</th>
                                    <th>action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($templates as $index => $template)
                                    <tr>
                                        <td>
                                            {{ ++$index }}
                                        </td>

                                        <td><img src="{{ asset($template->image) }}" width="50" height="50"
                                                alt="imge"></td>
                                        <td> {{ $template->title }} </td>
                                        <td> {{ $template->temp_url }} </td>
                                        <td> {{ $template->meta_title }} </td>
                                        <td>{{ $template->slug }}</td>
                                        <td>{{ $template->meta_description }}</td>
                                        <td>{{ $template->meta_keyword }}</td>
                                        <td>{{ $template->canonical_url }}</td>
                                        <td>{{ $template->meta_image }}</td>
                                        <td>{{ $template->og_type }}</td>
                                        <td>{{ $template->meta_robots }}</td>
                                        <td>{{ $template->status }}</td>

                                        {{-- this code : $serice->id) got to edit page as per $id --}}
                                        <td><a href="{{ route('admin.template.edit', $template->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> Edit </a>

                                        </td>
                                        <td>
                                            <form action="{{ route('admin.template.destroy', $template->id) }}"
                                                method="POST">
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


