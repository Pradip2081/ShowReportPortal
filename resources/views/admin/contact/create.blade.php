<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Create Contact Address</h4>
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                 <div class="card-body">
            <form action="{{ route('admin.contact.store') }}" method="POST">
                @csrf

                <div class="row">
                    <!-- Social Media Fields -->
                        <div class="col-6 mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                         @error('name')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>



                    <div class="col-6 mb-2">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" name="facebook" id="facebook" class="form-control" value="{{ old('facebook') }}">
                         @error('facebook')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="gmail" class="form-label">Gmail</label>
                        <input type="text" name="gmail" id="gmail" class="form-control" value="{{ old('gmail') }}">
                         @error('gmail')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="youtube" class="form-label">YouTube</label>
                        <input type="text" name="youtube" id="youtube" class="form-control" value="{{ old('youtube') }}">
                         @error('yotube')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="whatsapp" class="form-label">WhatsApp</label>
                        <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ old('whatsapp') }}">
                         @error('whatsapp')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="viber" class="form-label">Viber</label>
                        <input type="text" name="viber" id="viber" class="form-control" value="{{ old('viber') }}">
                         @error('viber')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" name="twitter" id="twitter" class="form-control" value="{{ old('twitter') }}">
                         @error('twitter')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin') }}">
                         @error('linkedin')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}">
                         @error('instagram')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <!-- Contact Details -->
                    <div class="col-6 mb-2">
                        <label for="map" class="form-label">Map (Embed Link)</label>
                        <input type="text" name="map" id="map" class="form-control" value="{{ old('map') }}">
                         @error('map')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" {{ old('address') }}  >
                         @error('address')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="contact_one" class="form-label">Contact One</label>
                        <input type="text" name="contact_one" id="contact_one" class="form-control" value="{{ old('contact_one') }}">
                         @error('contact_one')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="contact_two" class="form-label">Contact Two</label>
                        <input type="text" name="contact_two" id="contact_two" class="form-control" value="{{ old('contact_two') }}">
                         @error('contact_two')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="contact_three" class="form-label">Contact Three</label>
                        <input type="text" name="contact_three" id="contact_three" class="form-control" value="{{ old('contact_three') }}">
                         @error('contact_three')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="contact_four" class="form-label">Contact Four</label>
                        <input type="text" name="contact_four" id="contact_four" class="form-control" value="{{ old('contact_four') }}">
                         @error('contact_four')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <!-- SEO Meta -->

                      <div class="col-6 mb-2">
                        <label for="meta_title" class="form-label">Meta Description</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control" {{ old('meta_title') }} >
                         @error('meta_title')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>
                    <div class="col-6 mb-2">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <input  type="text" name="meta_description" id="meta_description" class="form-control" {{ old('meta_description') }}>
                         @error('meta_description')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <div class="col-6 mb-2">
                        <label for="meta_keyword" class="form-label">Meta Keyword</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control" {{ old('meta_keyword') }}>
                         @error('meta_keyword')
                                    <div class="text-danger">{{ $message }} </div>
                                @enderror
                    </div>

                    <!-- Status -->

                            <div class="col-6 mb-2">
                                  <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="" disabled
                                        {{ old('status', $contact->status ?? '') == '' ? 'selected' : '' }}>Select
                                        Status</option>
                                    <option value="publish"
                                        {{ old('status', $contact->status ?? '') == 'publish' ? 'selected' : '' }}>
                                        Publish</option>
                                    <option value="pending"
                                        {{ old('status', $contact->status ?? '') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                </select>


                                @error('status')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                </div>

                <div class="col-12 mt-2">
                    <button type="submit" class="btn btn-success">Save Contact</button>
                </div>
            </form>
        </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                const preview = document.getElementById('preview-image');
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    });




    document.getElementById('title').addEventListener('input', function() {
        const title = this.value;
        const slug = title
            .toLowerCase()
            .trim()
            .replace(/[^a-z0-9\s-]/g, '') // remove special characters
            .replace(/\s+/g, '-') // replace spaces with -
            .replace(/-+/g, '-'); // collapse multiple hyphens
        document.getElementById('slug').value = slug;
    });
</script>
