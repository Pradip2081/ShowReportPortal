<x-app-layout>

    {{-- Service index --}}
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>Service Details</h4>
                    <a href="{{route("admin.service.create")}}" class="btn btn-primary ">Add</a>
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
                            <th>Service Nmae</th>
                            <th>Icon</th>
                            <th>Description</th>
                            <th>Meta_keyword</th>
                            <th>Meta Description</th>
                            <th>Meta Title</th>
                            <th>Canonical URL</th>
                            <th>Meta Image</th>
                            <th>OG Type</th>
                            <th>Meta Robots</th>
                            <th>Structured Data</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach ($servicetypes as $index=> $servicetype)
                          <tr>
                            <td>
                                {{++$index}}
                            </td>

                            <td> {{$servicetype->title}} </td>
                            <td> {{$servicetype->heading}} </td>
                           <td> {{$servicetype->service_name}} </td>
                            <td><img src="{{asset($servicetype->icon_img)}}" width="50" height="50" alt="imge"></td>
                            <td >{!! Str::limit(strip_tags($servicetype->description), 50 , '(more)') !!}</td>
                            <td>{{$servicetype->meta_keyword}}</td>
                            <td>{!! $servicetype->meta_description !!}</td>
                            <td>{{$servicetype->meta_title}}</td>
                            <td>{{$servicetype->canonical_url}}</td>
                            <td>{{$servicetype->meta_image}}</td>
                            <td>{{$servicetype->og_type}}</td>
                            <td>{{$servicetype->meta_robots}}</td>
                            <td>{{$servicetype->structured_data}}</td>


                            <td>
                                @if($servicetype->status == 'pending')
                                <span class="badge badge-warning">Pending</span>
                                @else($servicetype->status == 'publish')
                                <span class="badge badge-success">Active</span>
                                @endif
                                </td>


                            {{-- this code : $serice->id) got to edit page as per $id --}}
                            <td ><a href="{{ route('admin.service.edit', $servicetype->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit </a>

                            </td>
                            <td>
                                <form action="{{ route('admin.service.destroy', $servicetype->id) }}" method="POST">
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

