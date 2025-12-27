<x-app-layout>

    {{-- Service index --}}
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex  justify-content-between">
                    <h4>Add Contact </h4>
                    <a href="{{ route('admin.contact.create') }}" class="btn btn-primary ">Add</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                     <th>Name</th>
                                    <th>Facebook</th>
                                    <th>Gmail</th>
                                    <th>Youtube</th>
                                    <th>Whatsapp</th>
                                    <th>Viber</th>
                                    <th>Twitter</th>
                                    <th>LinkedIn</th>
                                    <th>Instagram</th>
                                    <th>Map</th>
                                    <th>Address</th>
                                    <th>Contact One</th>
                                    <th>Contact Two</th>
                                    <th>Contact Three</th>
                                    <th>Contact Four</th>
                                    <th>Meta Title</th>
                                    <th>Meta Description</th>
                                    <th>Meta Keyword</th>
                                    <th>Action</th>
                                  <th>Status</th>

                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                    <tr>
                                        <td>
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $contact->name }}</td>
                                        <td class="text_limit">{{ $contact->facebook }}</td>
                                        <td>{{ $contact->gmail }}</td>
                                        <td class="text_limit"> {{ $contact->youtube }}</td>
                                        <td>{{ $contact->whatsapp }}</td>
                                        <td>{{ $contact->viber }}</td>
                                        <td>{{ $contact->twitter }}</td>
                                        <td>{{ $contact->linkedin }}</td>
                                        <td>{{ $contact->instagram }}</td>
                                        <td class="text_limit">{{ $contact->map }}</td>
                                        <td>{{ $contact->address }}</td>
                                            //   {{-- <td>{{ Str::limit($contact->address, 40) }}</td> --}}
                                        <td>{{ $contact->contact_one }}</td>
                                        <td>{{ $contact->contact_two }}</td>
                                        <td>{{ $contact->contact_three }}</td>
                                         <td>{{ $contact->contact_four }}</td>
                                        <td>{{ $contact->meta_title }}</td>
                                        <td>{{ $contact->meta_description }}</td>
                                        <td>{{ $contact->meta_keyword }}</td>
                                        <td>
                                        @if($contact->status == 'pending')
                                        <span class="badge badge-warning">Pending</span>
                                        @else($contact->status == 'publish')
                                        <span class="badge badge-success">Active</span>
                                        @endif
                                        </td>

                                        {{-- this code : $serice->id) got to edit page as per $id --}}
                                        <td><a href="{{ route('admin.contact.edit', $contact->id) }}"
                                                class="btn btn-sm btn-primary">
                                                <i class="bi bi-pencil-square"></i> Edit </a>

                                        </td>
                                        <td>
                                            <form action="{{ route('admin.contact.destroy', $contact->id) }}"
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


