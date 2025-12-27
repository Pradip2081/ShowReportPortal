<x-app-layout>

    {{-- statement index --}}
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Statement Details</h4>
                    <a href="{{route("admin.statement.create")}}" class="btn btn-primary ">Add</a>
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
                            <th>Slug</th>
                            <th>name</th>
                            <th>description</th>
                            <th>Meta Title</th>
                            <th>Meta description</th>
                            <th>Meta_keyword</th>
                             <th>Status</th>

                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach ($mystatements as $index=> $mystatement)
                          <tr>
                            <td>
                                {{++$index}}
                            </td>

                            <td> {{$mystatement->title}} </td>
                            <td> {{$mystatement->slug}} </td>
                            <td> {{$mystatement->name}} </td>
                           <td> {!! $mystatement->description !!} </td>
                            <td>{{$mystatement->meta_title}}</td>
                            <td>{{ $mystatement->meta_description }}</td>
                            <td>{{$mystatement->meta_keyword}}</td>

                            <td>
                                @if($mystatement->status == 'pending')
                                <span class="badge badge-warning">Pending</span>
                                @else($mystatement->status == 'publish')
                                <span class="badge badge-success">Active</span>
                                @endif
                                </td>


                            {{-- this code : $serice->id) got to edit page as per $id --}}
                            <td ><a href="{{ route('admin.statement.edit', $mystatement->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit </a>

                            </td>
                            <td>
                                <form action="{{ route('admin.statement.destroy', $mystatement->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">
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

