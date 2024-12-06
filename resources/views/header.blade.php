 <div id="root">
    <!-- here main content will output -->
    <style>
      #header_0 .media-fit img {
        object-fit: contain;
        height: 40px;
      }

      @media screen and (min-width: 750px) {
        #header_0 .media-fit img {
          object-fit: contain;
          height: 59px;
        }
      }

      #header_0 .theme-title .jwset {
        font-size: px;
        font-family: ;
        font-weight: ;
        line-height: ;
        letter-spacing: ;
      }
    </style>


    <header class="header nav-down" id="header_0">
      <div class="top-bar ">
        <div class="container d-flex justify-content-between align-items-center">
          <div class="logo desk align-items-center gap-2">
            <div class="d-flex flex-wrap gap-2 align-items-center">
              <a href="/" class="media-fit"><img
                  src="/static.joonsite.com/storage/21443/media/2404241259411841.png" alt /></a>
            </div>
          </div>
         
              <a href="tel:9990473738"><i class="fa-solid fa-phone me-2"></i><span
                  class="para enquiry">9990473738</span></a>
         
              <a href="mailto:help@diagnomitra.com"><i class="fa-solid fa-envelope me-2"></i><span
                  class="para enquiry">help@diagnomitra.com</span></a>
            
              <a href="mailto:diagnomitralabs@gmail.com"><i class="fa-solid fa-envelope me-2"></i><span
                  class="para enquiry">diagnomitralabs@gmail.com</span></a>
<!--        

          <a href="signup.html" class="btn-1 btn-lg comm-btn fontStyle7 background3">SignIn</a> -->

        </div>
      </div>
      <nav class="nav background1">
        <div class="container">
          <div class="overlay"></div>
          <div class="navbars">
            <div class="logo mob align-items-center gap-2 py-2">
              <div class="d-flex flex-wrap gap-2 align-items-center">
                <a href="/" class="media-fit"><img
                    src="/static.joonsite.com/storage/21443/media/2404241259411841.png" alt /></a>
              </div>
            </div>
            <div class="hamburgers">
              <div class="hamburger">
                <svg width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" id="Editable-line"
                  version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink">
                  <circle cx="5" cy="6" fill="none" id="XMLID_303_" r="1" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                  <circle cx="5" cy="16" fill="none" id="XMLID_305_" r="1" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                  <circle cx="5" cy="26" fill="none" id="XMLID_304_" r="1" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                  <line fill="none" id="XMLID_29_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="6" y2="6"></line>
                  <line fill="none" id="XMLID_30_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="16" y2="16"></line>
                  <line fill="none" id="XMLID_31_" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-miterlimit="10" stroke-width="2" x1="10" x2="28" y1="26" y2="26"></line>
                </svg>
              </div>
            </div>
            <div class="nav-links al w-100">
              <ul class="links">

                <li><a href="/" class="fontStyle">Home</a></li>
                <li>
                <a href="{{ URL::asset('about-us')}}"class="fontStyle">About Us</a>
                </li>
                <li><a href="{{ URL::asset('partner')}}"  class="fontStyle">Partner</a></li>
                <li><a href="{{ URL::asset('blog')}}"  class="fontStyle">Blog</a></li>
                <li>
                <a href="{{ URL::asset('contact-us')}}"class="fontStyle">Contact Us</a>
                </li>
                <li>
                  <a href="javascript:void(0);" class="fontStyle">Policy</a><i
                    class="bx bxs-chevron-down htmlcss-arrow arrow"></i>
                  <ul class="htmlCss-sub-menu sub-menu background3">
                    <li class="more">
                      <span><a href="{{ URL::asset('privacy-policy')}}"class="fontStyle7">Privacy Policy</a></span>
                    </li>
                    <li class="more">
                      <span><a href="{{ URL::asset('terms-of-service')}}"class="fontStyle7">Terms & Conditions</a></span>
                    </li>
                    <li class="more">
                      <span><a href="{{ URL::asset('refund-policy')}}"class="fontStyle7">Cancellation & Refund</a></span>
                    </li>
                    <li class="more">
                      <span><a href="{{ URL::asset('our-services')}}"
                          class="fontStyle7">Our Services</a></span>
                    </li>
                  </ul>
                </li>

                <li>
                 
            </div>
            </li>
            </ul>
          </div>
        </div>
  </div>
  </nav>
  </header>
   <style>
    .nav-links .links {
      display: flex;
      justify-content: space-between;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .nav-links .links li {
      position: relative;
    }

    .nav-links .links li a {
      position: relative;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
      color: #ffffff;
      font-size: 16px;
      font-weight: bold;
      transition: transform 0.3s ease-in-out;
    }

    .nav-links .links li a:hover {
      transform: scale(1.1);
    }

    .nav-links .links li a:after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0%;
      height: 2px;
      background-color: #eb2188;
      transition: width 0.3s ease-in-out;
    }

    .nav-links .links li a:hover:after {
      width: 100%;
    }

    .see-xsm-logo img {
      height: 40px !important;
      object-fit: contain;
    }

    .see-sm-logo img {
      height: 50px !important;
      object-fit: contain;
    }

    .see-medium-logo img {
      height: 70px !important;
      object-fit: contain;
    }

    .see-large-logo img {
      height: 85px !important;
      object-fit: contain;
    }

    .see-extra-large-logo img {
      height: 100px !important;
      object-fit: contain;
    }

    .navbars {
      display: flex;
      justify-content: space-evenly;

    }
    .top-bar{
        background-color:#bee4ea;
    }

    .btn {
      background-color: #2e90f3;
    }

    .nav-links {
      /* display: flex; */
      justify-content: space-around;
    }
    .header nav {
      height: 50px;
      z-index: 99;
    }

    @media (max-width: 992px) {
      .header {
        box-shadow: unset;
        position: unset;
      }

      .overlay {
        background: var(--color6);
        width: 100%;
        height: auto;
      }

      nav .navbars .nav-links {
        display: none;

      }

      .header nav {
      height: 80px;
      z-index: 99;
    }
    }

   

    .input-group {
      position: relative;
      display: flex;
      align-items: stretch;
      width: 100%;
      color: black;
      top: 3px
    }

    .form-control {
      display: block;
      width: 102%;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      border-radius: .375rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
  </style>
    <script>
      let navLinks = document.querySelector(".nav-links");
      let overlay = document.querySelector(".overlay");
      let menuOpenBtn = document.querySelector(
        ".navbars .bx-menu, .hamburger"
      );
      let menuCloseBtn = document.querySelector(
        ".overlay, .nav-links .fa-xmark, .hamburger"
      );
      menuOpenBtn.onclick = function () {
        navLinks.style.top = "0";
        overlay.style.top = "0";
        overlay.style.height = "100%";
        navLinks.style.display = "block";
      };
      menuCloseBtn.onclick = function () {
        navLinks.style.top = "-100%";
        overlay.style.top = "-100%";
      };

      // sidebar submenu open close js code
      let htmlcssArrow = document.querySelector(".htmlcss-arrow");
      htmlcssArrow.onclick = function () {
        navLinks.classList.toggle("show1");
      };
      let moreArrow = document.querySelector(".more-arrow");
      moreArrow.onclick = function () {
        navLinks.classList.toggle("show2");
      };
      let jsArrow = document.querySelector(".js-arrow");
      jsArrow.onclick = function () {
        navLinks.classList.toggle("show3");
      };
    </script>