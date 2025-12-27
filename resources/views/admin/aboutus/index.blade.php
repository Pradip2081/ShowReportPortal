<x-app-layout>
{{-- This home page[related about us cotent] --}}
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header d-flex  justify-content-between">
                    <h4>About Details</h4>
                    <a href="{{route("admin.aboutus.create")}}" class="btn btn-primary ">Add</a>
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
                            <th>Description</th>
                                                    <th>status</th>
                            <th>meta description</th>
                            <th>Meta Keyword</th>
                            <th>Meta Og URL</th>
                            <th>Meta Keyword</th>
                            <th>Meta Og Title</th>
                            <th>Meta Og Description</th>
                            <th>Meta Og Image</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>

                        <tbody>
                      @foreach ($abouts as $index=> $about)
                          <tr>
                            <td>
                                {{++$index}}
                            </td>

                            <td> {{$about->title}} </td>
                            <td> {{$about->heading}} </td>
                           <td> {!! $about->description !!} </td>
                            <td>{{$about->status}} </td>
                            <td>{{$about->meta_description}}</td>
                            <td>{{$about->meta_keyword}}</td>
                            <td>{{$about->meta_author}}</td>
                            <td>{{$about->meta_og_url}}</td>
                            <td>{{$about->meta_og_title}}</td>
                            <td>{{$about->meta_og_description}}</td>
                            <td>{{$about->meta_og_image}}</td>
                            <td>
                                <img src="{{asset($about->image)}}" width="150" height="150" alt="about Image">
                            </td>


                            {{-- this code : $about->id) got to edit page as per $id --}}
                            <td ><a href="{{ route('admin.aboutus.edit', $about->id) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square"></i> Edit </a>

                                <form action="{{ route('admin.aboutus.destroy', $about->id) }}" method="POST" style="display:inline;">
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

