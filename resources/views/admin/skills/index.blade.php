<x-app-layout>

    {{-- skills index --}}
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Skills Details</h4>
                    <a href="{{route("admin.skills.create")}}" class="btn btn-primary ">Add</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title</th>
                            <th>Heading</th>
                            <th>Alphabet</th>
                            <th>Language Name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach ($skills as $index=> $skill)
                          <tr>
                            <td>
                                {{++$index}}
                            </td>

                            <td> {{$skill->title}} </td>
                            <td> {{$skill->heading}} </td>
                           <td> {{$skill->alphabet}} </td>
                            <td>{{$skill->language_name}} </td>
                            <td>
                                  @if($skill->status == 'pending')
                                <span class="badge badge-warning">Pending</span>

                                @else($skill->status == 'publish')
                                <span class="badge badge-success">Active</span>
                                @endif
                            </td>

                            {{-- this code : $skill->id) got to edit page as per $id --}}
                            <td ><a href="{{ route('admin.skills.edit', $skill->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit </a>

                                <form action="{{ route('admin.skills.destroy', $skill->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger mt-2" onclick="return confirm('Are you sure?')">
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

