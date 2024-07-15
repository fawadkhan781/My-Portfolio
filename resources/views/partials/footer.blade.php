  <!--*********************************************************************************************************-->
  <!--************ FOOTER *************************************************************************************-->
  <!--*********************************************************************************************************-->
  
  <footer id="ts-footer" class="mt-5">

    <section id="contact" class="ts-block ts-separate-bg-element" data-bg-image="{{asset('assets/img/bg-man-wall.jpg')}}" data-bg-image-opacity=".1">
      <div class="container">
        <div class="ts-title text-center">
          <h2 class="ts-bubble-border">Get In Touch</h2>
        </div>
        <div class="row ts-xs-text-center ">
          <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp">
            <img src="{{asset('assets/img/icon-pin.png')}}" class="mb-4" alt="">
            <h5>Address</h5>
            <div class="ts-opacity__50">
              <figure class="mb-0">Islamabad Capital Territory</figure>
              <figure>I 9 Markaz I-9, Islamabad </figure>
            </div>
            <!--end ts-opacity__50-->
          </div>
          <!--end col-md-3-->
          <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".1s">
            <img src="{{asset('assets/img/icon-phone-02.png')}}" class="mb-4" alt="">
            <h5>Phone</h5>
            <div class="ts-opacity__50">
              <figure class="mb-0">+92 3197376043</figure>
              <figure>+92 3427704326</figure>
            </div>
            <!--end ts-opacity__50-->
          </div>
          <!--end col-md-3-->
          <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".2s">
            <img src="{{asset('assets/img/icon-envelope.png')}}" class="mb-4" alt="">
            <h5>Email</h5>
            <div class="ts-opacity__50">
              <a href="mailto:fawadgul311@gmail.com" class="mb-0">fawadgul311@gmail.com</a>
              <br>
              <a href="mailto:fawadatlantis@gmail.com">fawadatlantis@gmail.com</a>
            </div>
            <!--end ts-opacity__50-->

          </div>
          <div class="col-sm-6 col-md-3 mb-4" data-animate="ts-fadeInUp" data-delay=".2s">
            <img src="{{asset('assets/img/icon-talk-bubble.png')}}" class="mb-4" alt="">
            <h5>LinkedIn</h5>
            <div class="ts-opacity__50">
              <a href="https://www.linkedin.com/in/fawad-khan-458527174" target="_blank" class="mb-0">Visit my LinkedIn</a>
            </div>
            <!--end ts-opacity__50-->
          </div>
          <!--end col-md-3-->
          <!--end col-md-3-->
        </div>
        <!--end row-->

        <div class="pt-5">
          <div class="row">
            <div class="col-md-4">
              <h3>Let’s Connect</h3>
              <div class="ts-column-count-sm-2">
                <a href="https://m.facebook.com/100080373184721/" class="mb-3 d-flex text-white ts-align__vertical">
                  <span class="ts-circle__xs border border-white ts-border-light mr-4">
                    <i class="fab fa-facebook"></i>
                  </span>
                  <span>Facebook</span>
                </a>
                <!--end link-->
                <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                  <span class="ts-circle__xs border border-white ts-border-light mr-4">
                    <i class="fab fa-twitter"></i>
                  </span>
                  <span>Twitter</span>
                </a>
                <!--end link-->
                <a href="#" class="mb-3 d-flex text-white ts-align__vertical">
                  <span class="ts-circle__xs border border-white ts-border-light mr-4">
                    <i class="fab fa-instagram"></i>
                  </span>
                  <span>Instagram</span>
                </a>
                <!--end link-->
                <a href="https://www.pinterest.com/fawadgul311/" class="mb-3 d-flex text-white ts-align__vertical">
                  <span class="ts-circle__xs border border-white ts-border-light mr-4">
                    <i class="fab fa-pinterest-p"></i>
                  </span>
                  <span>Pinterest</span>
                </a>
                <!--end link-->
                <a href="https://join.skype.com/invite/tNpGT8FkKieF" class="mb-3 d-flex text-white ts-align__vertical">
                  <span class="ts-circle__xs border border-white ts-border-light mr-4">
                    <i class="fab fa-skype"></i>
                  </span>
                  <span>Skype</span>
                </a>
                <!--end link-->
              </div>
            </div>
            <!--end col-md-4-->
            <div class="col-md-8">
              <h3>Send Me a Message</h3>
              <div class="container mt-5">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        
          </div>
          <!--end row-->
        </div>
      </div>
      <!--end container-->
    </section>
    <!--end #contact-->

    <div class="text-dark bg-white">
      <div class="container py-3 position-relative">
        <small>© 2024 Fawad, All Rights Reserved</small>
        <a href="#page-top" class="ts-circle__xs rounded-0 bg-dark position-absolute ts-right__0 ts-top__0 ts-push-up__50 ts-scroll">
          <i class="fa fa-arrow-up text-white"></i>
        </a>
      </div>
    </div>

  
  

  </footer>

@section('scripts')
<script>
  $(document).ready(function(){
      // Auto close alert after 3 seconds
      setTimeout(function() {
          $("#success-alert").alert('close');
      }, 3000);
  });
</script>

  @endsection

  <!--end #footer-->

  