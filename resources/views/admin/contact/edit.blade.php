<x-app-layout>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Edit Contact</h4>
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Go Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <!-- Social Media Fields -->
                             <div class="col-6 mb-2">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $contact->name }}">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-6 mb-2">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" name="facebook" id="facebook" class="form-control" value="{{ $contact->facebook }}">
                                @error('facebook')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="gmail" class="form-label">Gmail</label>
                                <input type="text" name="gmail" id="gmail" class="form-control" value="{{ $contact->gmail }}">
                                @error('gmail')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="youtube" class="form-label">YouTube</label>
                                <input type="text" name="youtube" id="youtube" class="form-control" value="{{ $contact->youtube }}">
                                @error('youtube')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="whatsapp" class="form-label">WhatsApp</label>
                                <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="{{ $contact->whatsapp }}">
                                @error('whatsapp')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="viber" class="form-label">Viber</label>
                                <input type="text" name="viber" id="viber" class="form-control" value="{{ $contact->viber }}">
                                @error('viber')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" id="twitter" class="form-control" value="{{ $contact->twitter }}">
                                @error('twitter')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="linkedin" class="form-label">LinkedIn</label>
                                <input type="text" name="linkedin" id="linkedin" class="form-control" value="{{ $contact->linkedin }}">
                                @error('linkedin')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" id="instagram" class="form-control" value="{{ $contact->instagram }}">
                                @error('instagram')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Contact Details -->
                            <div class="col-6 mb-2">
                                <label for="map" class="form-label">Map (Embed Link)</label>
                                <input type="text" name="map" id="map" class="form-control" value="{{ $contact->map }}">
                                @error('map')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" name="address" id="address" class="form-control" {{ $contact->address }}>
                                @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Contact Numbers -->
                            <div class="col-md-3 mb-2">
                                <label for="contact_one" class="form-label">Contact One</label>
                                <input type="number" name="contact_one" id="contact_one" class="form-control" value="{{ $contact->contact_one }}">
                                @error('contact_one')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-2">
                                <label for="contact_two" class="form-label">Contact Two</label>
                                <input type="number" name="contact_two" id="contact_two" class="form-control" value="{{ $contact->contact_two }}">
                                @error('contact_two')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-2">
                                <label for="contact_three" class="form-label">Contact Three</label>
                                <input type="number" name="contact_three" id="contact_three" class="form-control" value="{{ $contact->contact_three }}">
                                @error('contact_three')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-3 mb-2">
                                <label for="contact_four" class="form-label">Contact Four</label>
                                <input type="number" name="contact_four" id="contact_four" class="form-control" value="{{ $contact->contact_four }}">
                                @error('contact_four')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- SEO Meta -->
                            <div class="col-6 mb-2">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea name="meta_description" id="meta_description" class="form-control" rows="2">{{ $contact->meta_description }}</textarea>
                                @error('meta_description')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-6 mb-2">
                                <label for="meta_keyword" class="form-label">Meta Keyword</label>
                                <textarea name="meta_keyword" id="meta_keyword" class="form-control" rows="2">{{ $contact->meta_keyword }}</textarea>
                                @error('meta_keyword')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status -->
                         <div class="col-6 mb-2">
                    <select name="status" class="form-control" >
                        <option value="" disabled>Select Status</option>
                        <option value="publish" {{ $contact->status == 'publish' ? 'selected' : '' }}>Publish</option>
                        <option value="pending" {{ $contact->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>

                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary me-2">Cancel</a>
                            <button type="submit" class="btn btn-success">Update Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
