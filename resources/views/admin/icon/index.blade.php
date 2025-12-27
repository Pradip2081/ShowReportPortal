<x-app-layout>

    {{-- Service index --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Add Icon  </h4>
                    <a href="{{ route('admin.icon.create') }}" class="btn btn-primary ">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>icon</th>
                                    <th>Status</th>
                                    <th>E-Action</th>
                                    <th>D-Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($icons as $index => $icon)
                                    <tr>
                                        <td>
                                            {{ ++$index }}
                                        </td>
                                        <td><img src="{{ asset($icon->image) }}" al="image"></td>
                                        <td>
                                            @if ($icon->status == 'pending')
                                                <span class="badge badge-warning">Pending</span>
                                            @else($icon->status == 'publish')
                                                <span class="badge badge-success">Active</span>
                                            @endif
                                        </td>

                                        {{-- this code : $serice->id) got to edit page as per $id --}}
                                        <td><a href="{{ route('admin.icon.edit', $icon->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> Edit </a>

                                        </td>
                                        <td>
                                            <form action="{{ route('admin.icon.destroy', $icon->id) }}" method="POST">
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
