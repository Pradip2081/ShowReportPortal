<x-app-layout>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Create/Add Slide Show Picture </h4>
                    <a href="{{route("admin.slides.create")}}" class="btn btn-primary ">Add</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Title Details</th>
                            <th>Status</th>
                            <th>Meta Description</th>
                            <th>Meta Keyword</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach ($slides as $index=> $slide)
                          <tr>
                            <td>
                                {{++$index}}
                            </td>
                            <td>
                                <img src="{{asset($slide->image)}}" width="150" height="150" alt="Slide Image">
                            </td>

                            <td>   {{$slide->name}} </td>
                            <td> {{$slide->designation}} </td>
                            <td> {{$slide->title_details}} </td>
                            <td>{{$slide->status}} </td>
                            <td>{{$slide->meta_description}}</td>
                            <td>{{$slide->meta_keyword}}</td>

                            {{-- this code : $slide->id) got to edit page as per $id --}}
                            <td ><a href="{{ route('admin.slides.edit', $slide->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit </a>

                                <form action="{{ route('admin.slides.destroy', $slide->id) }}" method="POST" style="display:inline;">
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

