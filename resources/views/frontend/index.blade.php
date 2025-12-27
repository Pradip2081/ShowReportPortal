{{-- its called props --}}
@php
    $about = $abouts->first();
@endphp
<style>
    /* for read more */
.modal_box { display:none;
 position:fixed;
 z-index:9999;
inset:0;
background:rgba(0,0,0,0.6);
     justify-content:center;
      align-items:center; }

.modal_box.show { display:flex; }
.modal_content { background:#fff;
    padding:20px; border-radius:10px;
     max-width:800px; width:95%;
      box-shadow:0 6px 18px rgba(0,0,0,0.2);
      position:relative;
    text-align: justify;}

.close_btn { position:absolute;
right:12px; top:8px; font-size:22px;
border:none;
 background:transparent;
 cursor:pointer; }
</style>

<x-frontend-layout
    title="home"
    :meta_keyword="$about->meta_keyword ?? 'default keywords'"
    :meta_description="$about->meta_description ?? 'default description'"
     :meta_author="$about->meta_author ?? 'default meta_author'"
     :meta_og_url="$about->meta_og_url ?? 'default meta_og_url'"
     :meta_og_title="$about->meta_og_title ?? 'default meta_og_title'"
     :meta_og_description="$about->meta_og_description ?? 'default description'"
     :meta_og_image="$about->meta_og_image ?? 'default meta_og_image'">

    <!-- home page slide show section-->

   div class="info_section">
  <div class="slideshow_container">
    <div class="slide fade active">
      <img src="images/slide-1.jpg" alt="Slide 1">
    </div>
    <div class="slide fade">
      <img src="images/slide-3.jpg" alt="Slide 2">
    </div>

    <a class="nav_arrow left" onclick="changeSlide(-1)">&#10094;</a>
    <a class="nav_arrow right" onclick="changeSlide(1)">&#10095;</a>
  </div>
  <!-- text outside slideshow -->
  <div class="text_content">
    <h1>Show Yours Report Via Online </h1>
      <p>Download and use 100,000+ Patient Care stock photos for free. Thousands of new images every day Completely Free to Use High-quality videos and images from Pexels </p>
    </p>
  </div>

  <div class="order_btn">
      <button  onclick="openAuthModal()">BookOnline Ticket</button>
  </div>
</div>
<!-- home page slide show section-->
<!-- get ticket info -->
<section>
  <div class="box_wrapper">
        <div class="content_box d_nimation left">
      <div class="new_ticket_style">
      <h1>For New Ticket</h1>
      </div>
      <div class="get_ticket_info">
        <span>1</span>  <p> Register first</p>
        </div>
        <div class="get_ticket_info">
        <span>2</span>  <p> log in  dashboard</p>
        </div>
        <div class="get_ticket_info">
        <span>3</span>  <p> Select Doctor</p>
        </div>
        <div class="get_ticket_info">
        <span>4</span>  <p> Clik on get ticket button </p>
        </div>

  </div>
<div class="content_box d_nimation right">
    <div class="old_ticket_style">
      <h1>For New Ticket</h1>
      </div>
        <div class="get_ticket_info">
        <span>1</span>  <p> log in dashboard </p>
        </div>
        <div class="get_ticket_info">
        <span>2</span>  <p> Choose Doctor</p>
        </div>
        <div class="get_ticket_info">
        <span>3</span>  <p> Clik on Button to get ticket</p>
        </div>

  </div>

<div class="content_box d_nimation right">
      <h1 style="color:#07278f;">Notice</h1>
       <div class="notice_info">
        <h5>Recent Notice</h5>
      <p>Demo Text</p>
       </div>

        <div class="notice_info">
        <h5>Past Notice</h5>
      <p>Demo text</p>
       </div>


  </div>


  </div>
</section>

<!-- end get ticket info -->


<!--about us section-->
<section class="background_style_a">
      <div class="about_us_wrapper">
            <!-- Left side: Text -->
       <div class="about_us d_nimation left">
           <h3>  <i class="fa fa-calendar"></i><span>O</span>ur Schedule</h3>
          <h1 class="typewriter">Service Day 375  </h1>
         <div class="circle">
        <i class="fa fa-clock"></i>

        <span class="days1">Sunday</span>
        <span class="days2">Monday</span>
        <span class="days3">Tuesday</span>
        <span class="days4">Wednesday</span>
        <span class="days5">Thursday</span>
        <span class="days6">Friday</span>
        <span class="days7">Saturday</span>
      </div>
         </div>


      <!-- Right side: Image -->

        <div class="online_service d_nimation right">
          <div class="heading">

              <h2> <i class="fa fa-tools"></i> Online Service</h2>
           </div>
        <div class="online_service_content">

        <div class="service_content success">
       <span>1</span>
      <p>Ha ocurrido un problema por favor </p>
        </div>
          <div class="service_content success">
      <span>2</span>
      <p>Ha ocurrido un problema por favor </p>
        </div>
        </div>
      </div>

        <div class="online_service d_nimation right">
          <div class="heading">

              <h2> <i class="fa fa-user-gear"></i> Other Services</h2>
           </div>
        <div class="online_service_content">

        <div class="service_content other_service">
       <span>1</span>
      <p>Ha ocurrido un problema por favor </p>
        </div>
          <div class="service_content other_service">
      <span>2</span>
      <p>Ha ocurrido un problema por favor </p>
        </div>
        </div>
      </div>
   </div>
</section>
<!-- End about us section-->

<!-- About company message -->




<!-- about Skills section-->
<section class="background_style_b">
  <div class="speciality_header">
    <p class="short-lined">About</p>
    <h1 class="h_anim">Available Speciality</h1>

  </div>
  <div class="speciality_details">
    <div class="list_box d_nimation left"><span>G</span>
      <p>General Practive </p>
    </div>
    <div class="list_box d_nimation"><span>G</span>
      <p>Obstetrics and Gaybecology</p>
    </div>

    <div class="list_box d_nimation"><span>G</span>
      <p>Obstetrics and Gaybecology</p>
    </div>

    <div class="list_box d_nimation"><span>G</span>
      <p>Obstetrics and Gaybecology</p>
    </div>

    <div class="list_box d_nimation"><span>G</span>
      <p>Obstetrics and Gaybecology</p>
    </div>

    <div class="list_box d_nimation"><span>G</span>
      <p>Obstetrics and Gaybecology</p>
    </div>

    </div>

</section>

</x-frontend-layout>

