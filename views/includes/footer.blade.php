    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
   @if($contact_us)
      <div class="container">

        <div class="section-header">
          <h2>{{ $contact_us }}</h2>

        </div>

        <div class="row contact-info">

          <!-- <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address></address>
            </div>
          </div> -->

          <!-- <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855"></a></p>
            </div>
          </div> -->

          <!-- <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:mahaeringer@gmail.com">mahaeringer@gmail.com</a></p>
            </div>
          </div> -->

        </div>

        <div class="form">
            @if($message=='message sent')
          <div >Your message has been sent. Thank you!</div>
          @elseif($message=='error! please try again')
          <div >{{ $message }}</div>
          @endif
          <form action="{{ url('message') }}" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required />
<!--                <div class="validation"></div>-->
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required />
<!--                <div class="validation"></div>-->
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required/>
<!--              <div class="validation"></div>-->
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
<!--              <div class="validation"></div>-->
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
            <?php echo csrf_field(); ?>
          </form>
        </div>

      </div>
        @endif
    </section><!-- #contact -->

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <!-- <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">About us</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Services</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> -->

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Contact Us</h4>
            <p>
              <!-- A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br> -->
              <!-- <strong>Phone:</strong> +1 5589 55488 55<br> -->
              <strong>Email:</strong> mahaeringer@gmail.com<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ArsenijeTYts23</strong> All Rights Reserved
      </div>
      <!-- <div class="credits">

        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div> -->
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/easing/easing.min.js')}}"></script>
  <script src="{{asset('lib/superfish/hoverIntent.js')}}"></script>
  <script src="{{asset('lib/superfish/superfish.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $("#myModal").modal('show');
    });
  </script>
  <!-- Contact Form JavaScript File -->
<!--  <script src="contactform/contactform.js"></script>-->

  <!-- Template Main Javascript File -->
  <script src="{{asset('js/main.js')}}"></script>
</body>

</html>
