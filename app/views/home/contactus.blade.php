@extends('layout.index')
@section('TitlePage')
  Liên hệ với chúng tôi
@endsection
@section('desribePage')

@endsection
@section('content')
  @include("components.header2")
  <main>
    <div class="blog-page-box pt-5">

      <!-- contact -->
      <div class="contact-information container py-5">
        <div class="row d-flex">
          @foreach($allcontact as $value)
          <div class="col-md-4 pt-3">
            <div class="contact-information-text p-5 text-center">
              <img src="./public/upload/contact_us/{{ $value->logo }}" width="50" alt="">
              <h3 class="py-2">{{ $value->content	 }}</h3>
              <p class="text-muted">{{ $value->meta	 }}
              </p>
            </div>
          </div>
          @endforeach
        </div>


      </div>
    </div>
    @include("components.socialcontact")
  </main>

  <div class="make-appointment-contact mt-5">
    <div class="background-make-appointment"></div>
    <div class="box-make-appointment container d-flex">
      <div class="row">
        <div class="text-left-make-appointment col-12 col-md-6 col-lg-6" data-aos="fade-right">
          <div class="title-text-make-appointment">
            <h3>Contact</h3>

            <p class="hr-after-form"></p>
            <h1>Get in touch</h1>
            <p class="mt-3 mb-4 fs-6 text" >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris</p>
            <div class="map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5279906195747!2d105.72918181176156!3d21.051564180522636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31345551a699e24f%3A0xbd593c1821a34094!2zWMOzbSB0cuG7jSBDw7QgSOG7k25n!5e0!3m2!1svi!2s!4v1678635633117!5m2!1svi!2s"
                width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="text py-4">
              Social Media: <a href=""><i class='bx bxl-facebook'></i></a><a href=""><i class='bx bxl-instagram' ></i></a><a href=""><i class='bx bxl-twitter' ></i></a><a href=""><i class='bx bxl-pinterest-alt'></i></a>

            </div>

          </div>
        </div>
        <div class="form-right-make-appointment col-12 col-md-6 col-lg-6 container" data-aos="fade-left">
          <form action="" id="form-contact">

            <div class="item py-4">

              <input type="text" id="name-form-contact" class="border ps-2" placeholder="Your Name">
              <span class="text-danger" id="nameform-contact-error"></span>
            </div>
            <div class="item py-4">

              <input type="text" id="email-form-contact" class="border ps-2" placeholder="Your Email">
              <span class="text-danger" id="emailform-contact-error"></span>
            </div>
            <div class="item py-4">

              <input type="text" id="subject-form-contact" class="border ps-2" placeholder="Your Subject">
              <span class="text-danger" id="subject-contact-error"></span>
            </div>
            <div class="item py-4">

                                <textarea name="form" id="form-contact" cols="110" rows="10" class="border ps-2"
                                          placeholder="Your Message"></textarea>
              <span class="text-danger" id="form-contact-error"></span>
            </div>
            <button type="submit" class="my-2">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
