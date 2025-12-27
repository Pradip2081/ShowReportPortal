<section>
  <div class="section_design_a margin-top_twenty">
    <footer class="footer">
      <div class="footer-container div_anim"> <!-- note: class = d_nimation -->
        <div class="footer-about">
        <h2>Pradip Kumar Shrestha</h2>
          <p>For best website & Web application Remember me.</p>
        </div>

        <div class="footer-links">
          <h3>Quick Links</h3>
          <ul>
             <ul>
            <li class="{{ request()->routeIs('frontend.index') ? 'current' : '' }}">
                <a href="{{ route('frontend.index') }}">Home</a>
            </li>

            <li class="{{ request()->routeIs('frontend.template') ? 'current' : '' }}">
                <a href="{{ route('frontend.template') }}">Template</a>
            </li>

            <li class="{{ request()->routeIs('frontend.statement') ? 'current' : '' }}">
                <a href="{{ route('frontend.statement') }}">Statement</a>
            </li>

            <li class="{{ request()->routeIs('frontend.videos') ? 'current' : '' }}">
                <a href="{{ route('frontend.videos') }}">Videos</a>
            </li>

            <li class="{{ request()->routeIs('frontend.contact') ? 'current' : '' }}">
                <a href="{{ route('frontend.contact') }}">Contact</a>
            </li>
        </ul>
          </ul>
        </div>

        <div class="footer-social">
          <h3>Follow Us</h3>

          @if ($showContacts->count())

          @foreach ($showContacts as $showContact)

          <div class="social-icons">
            <a href="{{ $showContact->facebook }}"><i class="fab fa-facebook-f"></i></a>
            <a href="{{ $showContact->twitter }}"><i class="fab fa-twitter"></i></a>
            <a href="{{ $showContact->instagram}}"><i class="fab fa-instagram"></i></a>
            <a href="{{ $showContact->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
          </div>
           @endforeach


            @else
           <p>not data get</p>
           @endif

        </div>
      </div>

      <div class="footer-bottom">
        <p>&copy; <span id="year"></span> MyCompany. All rights reserved.</p>

<script>
  document.getElementById("year").textContent = new Date().getFullYear();
</script>

      </div>
    </footer>
  </div>
</section>


