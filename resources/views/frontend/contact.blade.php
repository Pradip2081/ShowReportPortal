<x-frontend-layout
    title="Contact"
    :meta_title="$show_contact->meta_title"
    :meta_keyword="$show_contact->meta_keyword"
    :meta_description="$show_contact->meta_description">

    <div class="header_two">
        <h1>Get in Touch</h1>
        <p>Feel free to contact me for any queries or collaborations.</p>
    </div>

    <section class="background_style_c margin-top_twenty">
        <div class="row">

            {{-- LEFT COLUMN: Contact Form --}}
            <div class="col-s-12 col-m-8">
                <div class="contact_form div_anim left">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.sendOtp') }}">
                        @csrf
                        <div class="row">

                            <div class="col-m-6">
                                <div class="form_group">
                                    <i class="fa-solid fa-user"></i>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required>
                                    @error('name') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-6">
                                <div class="form_group">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
                                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-6">
                                <div class="form_group">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="text" name="number" value="{{ old('number') }}" placeholder="Your Contact Number" required>
                                    @error('number') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-6">
                                <div class="form_group">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <select name="service" required>
                                        <option value="">Select Service</option>
                                        <option value="CMS Website" {{ old('service') == 'CMS Website' ? 'selected' : '' }}>CMS Website</option>
                                        <option value="E-Commerce Website" {{ old('service') == 'E-Commerce Website' ? 'selected' : '' }}>E-Commerce Website</option>
                                    </select>
                                    @error('service') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-12">
                                <div class="form_group">
                                    <i class="fa-solid fa-pen"></i>
                                    <textarea name="description" placeholder="Write about your project">{{ old('description') }}</textarea>
                                    @error('description') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-12">
                                <div class="form_group">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <input type="number" name="budget" value="{{ old('budget') }}" placeholder="Write your budget" required>
                                    @error('budget') <div class="text-danger">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-m-12">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>

                    {{-- OTP Modal --}}
                    <div id="otpModal" style="display:none; background:rgba(0,0,0,0.5); position:fixed; inset:0; z-index:9999; justify-content:center; align-items:center;">
                        <div style="background:#fff; padding:20px; border-radius:10px; width:300px; text-align:center;">
                            <h5>Enter OTP</h5>
                            <input type="text" id="otpInput" class="form-control" placeholder="Enter OTP" style="margin-bottom:10px;">
                            <button type="button" id="verifyOtpBtn" class="btn btn-success">Verify OTP</button>
                            <button type="button" id="closeOtpModal" class="btn btn-secondary">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT COLUMN: Contact Details --}}
            <div class="col-s-12 col-m-4">
                @if($show_contact)
                    <div class="contact_detail div_anim right">
                        @if($show_contact->name)
                            <p><i class="fa-solid fa-user"></i> {{ $show_contact->name }}</p>
                        @endif

                        @if($show_contact->address)
                            <p><i class="fa-solid fa-location-dot"></i> {{ $show_contact->address }}</p>
                        @endif

                        @if($show_contact->gmail)
                            <p><i class="fa-solid fa-envelope"></i> {{ $show_contact->gmail }}</p>
                        @endif

                        @if($show_contact->contact_one)
                            <p><i class="fa-solid fa-phone"></i> <a href="tel:{{ $show_contact->contact_one }}">{{ $show_contact->contact_one }}</a></p>
                        @endif

                        <p class="text_deco">Follow Me</p>
                        <div class="social_media_icon">
                            @if($show_contact->facebook)
                                <a href="{{ $show_contact->facebook }}" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                            @endif
                            @if($show_contact->whatsapp)
                                <a href="{{ $show_contact->whatsapp }}" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                            @endif
                            @if($show_contact->youtube)
                                <a href="{{ $show_contact->youtube }}" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                            @endif
                            @if($show_contact->viber)
                                <a href="{{ $show_contact->viber }}" target="_blank"><i class="fa-brands fa-viber"></i></a>
                            @endif
                            @if($show_contact->instagram)
                                <a href="{{ $show_contact->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                @else
                    <p>No contact information found.</p>
                @endif
            </div>
        </div>
    </section>

   <section class="google_map_section" style="margin-top:40px;">
    @if($show_contact && $show_contact->map)
        <iframe src="{{ $show_contact->map }}"
            width="100%" height="450"
            style="border:0; display:block;"
            allowfullscreen=""
            loading="lazy"></iframe>
    @else
        <p>No map data found.</p>
    @endif
</section>

</x-frontend-layout>



