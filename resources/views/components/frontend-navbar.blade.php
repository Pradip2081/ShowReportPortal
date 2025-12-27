<div class="heder_section_wrapper">
<div class="header_section">

<div class="contact_details">
   <span>
    <i class="fa-solid fa-envelope"></i>
    <span id="email-text">demoemail @gmail.com</span>
    <i class="fa-solid fa-copy copy-icon" onclick="copyText('email-text')" title="Copy Email"></i>
    <span style="position:relative; padding-left: 20px;"> <i class="fa-solid fa-phone"></i></span>
       <a  id="phone-text" href="tel:+9775634564"> +977 5634564</a>
    </span>
</div>

  <div class="social_media">
    <span><a href="https://www.facebook.com/pradip.kumar.shrestha.2025/"><i class="fa-brands fa-facebook"></i>
      </a></span>
    <span><a href="https://www.facebook.com/pradip.kumar.shrestha.2025/"><i class="fa-solid fa-envelope"></i></a></span>
     <span><a href="https://www.facebook.com/pradip.kumar.shrestha.2025/"><i class="fa-brands fa-viber"></i></a></span>
    <span> <a href="https://www.facebook.com/pradip.kumar.shrestha.2025/"><i class="fa-solid fa-envelope"></i></a></span>
    <button class="pill_button" onclick="openAuthModal()">Login</button>

  </div>

</div>
</div>
{{-- end header  --}}


{{-- login and register form --}}

<!--login and registatio  from  -->

<div class="modal-overlay" id="authModal">
  <div class="auth-container">

    <!-- CLOSE BUTTON -->
    <span id="close-modal" onclick="closeAuthModal()">&times;</span>

    <div class="auth-forms">

      <!-- LOGIN FORM -->
      <form id="loginForm" class="form active">
        <h2>Login</h2>
        <div class="input-group">
          <i class="fa fa-envelope"></i>
          <input type="email" required placeholder=" type your enail ">
          <label>Email</label>
        </div>
        <div class="input-group">
          <i class="fa fa-lock"></i>
          <input type="password" required placeholder=" Type you pasword  ">
          <label>Password</label>
        </div>
        <button class="login_btn left" type="submit"><span>Login</span></button>
        <p class="toggle">Don't have an account? <span onclick="toggleForms()">Register</span></p>
        <label>
          <input type="checkbox" id="firstTimeCheckbox">
          are you new patient? please listen this sound
        </label>
        <p>hello</p>

        <audio id="clickSound">
          <source src="soundfile/bgsound.mp3" type="audio/mpeg">
        </audio>
      </form>

      <!-- REGISTER FORM -->
      <form id="registerForm" class="form">
        <h2>Create Account</h2>
        <div class="input-group">
          <i class="fa fa-user"></i>
          <input type="text" required placeholder=" Type your full name  ">
          <label>Full Name</label>
        </div>
        <div class="input-group">
          <i class="fa fa-envelope"></i>
          <input type="email" required placeholder=" type your full email ">
          <label>Email</label>
        </div>
        <div class="input-group">
          <i class="fa fa-lock"></i>
          <input type="password" required placeholder=" passwrod">
          <label>Password</label>
        </div>
        <button class="register_btn" type="submit"><span>Register</span></button>
        <p class="toggle">Already have an account? <span onclick="toggleForms()">Login</span></p>
        <p>heloo</p>
      </form>

    </div>
  </div>
</div>



{{-- end login and register form  --}}

<div class="menus" class="sticky">
    <div class="logo">
        <img src="{{asset($showImg->image)}}" width="40" height="40">
    </div>
    <div class="toggleMenu"></div>

    <nav>
        <ul>
            <li class="{{ request()->routeIs('frontend.index') ? 'current' : '' }}">
                <a href="{{ route('frontend.index') }}">Home</a>
            </li>

            <li class="{{ request()->routeIs('frontend.drlist') ? 'current' : '' }}">
                <a href="{{ route('frontend.drlist') }}">Doctors</a>
            </li>

            <li class="{{ request()->routeIs('frontend.contact') ? 'current' : '' }}">
                <a href="{{ route('frontend.contact') }}">Contact</a>
            </li>
        </ul>
    </nav>
</div>

<script>
function copyText(id) {
    const element = document.getElementById(id);
    const text = element.textContent.trim(); // safe for span or <a>

    navigator.clipboard.writeText(text)
        .then(() => {
            alert("Copied: " + text);
        })
        .catch(err => {
            console.error("Failed to copy:", err);
        });
}
</script>
