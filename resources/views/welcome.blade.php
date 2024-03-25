<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
    <link href="assets/css/stylecd4e.css?version=4.1" rel="stylesheet">
    <title>Job Portal</title>
  </head>
  <body>
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="text-center"><img src="assets/imgs/template/loading.gif" alt="jobBox"></div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ModalApplyJobForm" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content apply-job-form">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body pl-30 pr-30 pt-50">
            <div class="text-center">
              <p class="font-sm text-brand-2">Job Application </p>
              <h2 class="mt-10 mb-5 text-brand-1 text-capitalize">Start your career today</h2>
              <p class="font-sm text-muted mb-30">Please fill in your information and send it to the employer.                   </p>
            </div>
            <form class="login-register text-start mt-20 pb-30" action="#">
              <div class="form-group">
                <label class="form-label" for="input-1">Full Name *</label>
                <input class="form-control" id="input-1" type="text" required="" name="fullname" placeholder="Steven Job">
              </div>
              <div class="form-group">
                <label class="form-label" for="input-2">Email *</label>
                <input class="form-control" id="input-2" type="email" required="" name="emailaddress" placeholder="stevenjob@gmail.com">
              </div>
              <div class="form-group">
                <label class="form-label" for="number">Contact Number *</label>
                <input class="form-control" id="number" type="text" required="" name="phone" placeholder="(+01) 234 567 89">
              </div>
              <div class="form-group">
                <label class="form-label" for="des">Description</label>
                <input class="form-control" id="des" type="text" required="" name="Description" placeholder="Your description...">
              </div>
              <div class="form-group">
                <label class="form-label" for="file">Upload Resume</label>
                <input class="form-control" id="file" name="resume" type="file">
              </div>
              <div class="login_footer form-group d-flex justify-content-between">
                <label class="cb-container">
                  <input type="checkbox"><span class="text-small">Agree our terms and policy</span><span class="checkmark"></span>
                </label><a class='text-muted' href='page-contact.html'>Lean more</a>
              </div>
              <div class="form-group">
                <button class="btn btn-default hover-up w-100" type="submit" name="login">Apply Job</button>
              </div>
              <div class="text-muted text-center">Do you need support? <a href='page-contact.html'>Contact Us</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>

    {{-- Header Section Start --}}
      <x-header/>
    {{-- Header Section End --}}

    <main class="main">
      <section class="section-box mb-70">
        <div class="banner-hero hero-1 banner-homepage6">
          <div class="banner-inner">
            <div class="row">
              <div class="col-xl-12 col-lg-12">
                <div class="block-banner text-center pb-40 pt-40">
                  <h1 class="heading-banner wow animate__animated animate__fadeInUp">There Are <span class="color-brand-2">102,256 </span>Postings<br class="d-none d-lg-block">Here For you!</h1>
                  <p class="font-lg color-text-paragraph mt-20">Find Jobs, Employment & Career Opportunities</p>
                </div>
              </div>
            </div>
            <div class="box-search-2">
              <div class="block-banner form-none-shadow">
                <div class="form-find wow animate__animated animate__fadeIn" data-wow-delay=".2s">
                  <form>
                    <input class="form-input input-keysearch mr-10" type="text" placeholder="Your keyword... ">
                    <select class="form-input mr-10 select-active">
                      <option value="">Location</option>
                      <option value="AX">Aland Islands</option>
                      <option value="AF">Afghanistan</option>
                      <option value="AL">Albania</option>
                      <option value="DZ">Algeria</option>
                      <option value="AD">Andorra</option>
                      <option value="AO">Angola</option>
                      <option value="AI">Anguilla</option>
                      <option value="AQ">Antarctica</option>
                      <option value="AG">Antigua and Barbuda</option>
                      <option value="AR">Argentina</option>
                      <option value="AM">Armenia</option>
                      <option value="AW">Aruba</option>
                      <option value="AU">Australia</option>
                      <option value="AT">Austria</option>
                      <option value="AZ">Azerbaijan</option>
                      <option value="BS">Bahamas</option>
                      <option value="BH">Bahrain</option>
                      <option value="BD">Bangladesh</option>
                      <option value="BB">Barbados</option>
                      <option value="BY">Belarus</option>
                      <option value="PW">Belau</option>
                      <option value="BE">Belgium</option>
                      <option value="BZ">Belize</option>
                      <option value="BJ">Benin</option>
                      <option value="BM">Bermuda</option>
                      <option value="BT">Bhutan</option>
                      <option value="BO">Bolivia</option>
                      <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                      <option value="BA">Bosnia and Herzegovina</option>
                      <option value="BW">Botswana</option>
                      <option value="BV">Bouvet Island</option>
                      <option value="BR">Brazil</option>
                      <option value="IO">British Indian Ocean Territory</option>
                      <option value="VG">British Virgin Islands</option>
                      <option value="BN">Brunei</option>
                      <option value="BG">Bulgaria</option>
                      <option value="BF">Burkina Faso</option>
                      <option value="BI">Burundi</option>
                      <option value="KH">Cambodia</option>
                      <option value="CM">Cameroon</option>
                      <option value="CA">Canada</option>
                      <option value="CV">Cape Verde</option>
                      <option value="KY">Cayman Islands</option>
                      <option value="CF">Central African Republic</option>
                      <option value="TD">Chad</option>
                      <option value="CL">Chile</option>
                      <option value="CN">China</option>
                      <option value="CX">Christmas Island</option>
                      <option value="CC">Cocos (Keeling) Islands</option>
                      <option value="CO">Colombia</option>
                      <option value="KM">Comoros</option>
                      <option value="CG">Congo (Brazzaville)</option>
                      <option value="CD">Congo (Kinshasa)</option>
                      <option value="CK">Cook Islands</option>
                      <option value="CR">Costa Rica</option>
                      <option value="HR">Croatia</option>
                      <option value="CU">Cuba</option>
                      <option value="CW">Cura&Ccedil;ao</option>
                      <option value="CY">Cyprus</option>
                      <option value="CZ">Czech Republic</option>
                      <option value="DK">Denmark</option>
                      <option value="DJ">Djibouti</option>
                      <option value="DM">Dominica</option>
                      <option value="DO">Dominican Republic</option>
                      <option value="EC">Ecuador</option>
                      <option value="EG">Egypt</option>
                      <option value="SV">El Salvador</option>
                      <option value="GQ">Equatorial Guinea</option>
                      <option value="ER">Eritrea</option>
                      <option value="EE">Estonia</option>
                      <option value="ET">Ethiopia</option>
                      <option value="FK">Falkland Islands</option>
                      <option value="FO">Faroe Islands</option>
                      <option value="FJ">Fiji</option>
                      <option value="FI">Finland</option>
                      <option value="FR">France</option>
                      <option value="GF">French Guiana</option>
                      <option value="PF">French Polynesia</option>
                      <option value="TF">French Southern Territories</option>
                      <option value="GA">Gabon</option>
                      <option value="GM">Gambia</option>
                      <option value="GE">Georgia</option>
                      <option value="DE">Germany</option>
                      <option value="GH">Ghana</option>
                      <option value="GI">Gibraltar</option>
                      <option value="GR">Greece</option>
                      <option value="GL">Greenland</option>
                      <option value="GD">Grenada</option>
                      <option value="GP">Guadeloupe</option>
                      <option value="GT">Guatemala</option>
                      <option value="GG">Guernsey</option>
                      <option value="GN">Guinea</option>
                      <option value="GW">Guinea-Bissau</option>
                      <option value="GY">Guyana</option>
                      <option value="HT">Haiti</option>
                      <option value="HM">Heard Island and McDonald Islands</option>
                      <option value="HN">Honduras</option>
                      <option value="HK">Hong Kong</option>
                      <option value="HU">Hungary</option>
                      <option value="IS">Iceland</option>
                      <option value="IN">India</option>
                      <option value="ID">Indonesia</option>
                      <option value="IR">Iran</option>
                      <option value="IQ">Iraq</option>
                      <option value="IM">Isle of Man</option>
                      <option value="IL">Israel</option>
                      <option value="IT">Italy</option>
                      <option value="CI">Ivory Coast</option>
                      <option value="JM">Jamaica</option>
                      <option value="JP">Japan</option>
                      <option value="JE">Jersey</option>
                      <option value="JO">Jordan</option>
                      <option value="KZ">Kazakhstan</option>
                      <option value="KE">Kenya</option>
                      <option value="KI">Kiribati</option>
                      <option value="KW">Kuwait</option>
                      <option value="KG">Kyrgyzstan</option>
                      <option value="LA">Laos</option>
                      <option value="LV">Latvia</option>
                      <option value="LB">Lebanon</option>
                      <option value="LS">Lesotho</option>
                      <option value="LR">Liberia</option>
                      <option value="LY">Libya</option>
                      <option value="LI">Liechtenstein</option>
                      <option value="LT">Lithuania</option>
                      <option value="LU">Luxembourg</option>
                      <option value="MO">Macao S.A.R., China</option>
                      <option value="MK">Macedonia</option>
                      <option value="MG">Madagascar</option>
                      <option value="MW">Malawi</option>
                      <option value="MY">Malaysia</option>
                      <option value="MV">Maldives</option>
                      <option value="ML">Mali</option>
                      <option value="MT">Malta</option>
                      <option value="MH">Marshall Islands</option>
                      <option value="MQ">Martinique</option>
                      <option value="MR">Mauritania</option>
                      <option value="MU">Mauritius</option>
                      <option value="YT">Mayotte</option>
                      <option value="MX">Mexico</option>
                      <option value="FM">Micronesia</option>
                      <option value="MD">Moldova</option>
                      <option value="MC">Monaco</option>
                      <option value="MN">Mongolia</option>
                      <option value="ME">Montenegro</option>
                      <option value="MS">Montserrat</option>
                      <option value="MA">Morocco</option>
                      <option value="MZ">Mozambique</option>
                      <option value="MM">Myanmar</option>
                      <option value="NA">Namibia</option>
                      <option value="NR">Nauru</option>
                      <option value="NP">Nepal</option>
                      <option value="NL">Netherlands</option>
                      <option value="AN">Netherlands Antilles</option>
                      <option value="NC">New Caledonia</option>
                      <option value="NZ">New Zealand</option>
                      <option value="NI">Nicaragua</option>
                      <option value="NE">Niger</option>
                      <option value="NG">Nigeria</option>
                      <option value="NU">Niue</option>
                      <option value="NF">Norfolk Island</option>
                      <option value="KP">North Korea</option>
                      <option value="NO">Norway</option>
                      <option value="OM">Oman</option>
                      <option value="PK">Pakistan</option>
                      <option value="PS">Palestinian Territory</option>
                      <option value="PA">Panama</option>
                      <option value="PG">Papua New Guinea</option>
                      <option value="PY">Paraguay</option>
                      <option value="PE">Peru</option>
                      <option value="PH">Philippines</option>
                      <option value="PN">Pitcairn</option>
                      <option value="PL">Poland</option>
                      <option value="PT">Portugal</option>
                      <option value="QA">Qatar</option>
                      <option value="IE">Republic of Ireland</option>
                      <option value="RE">Reunion</option>
                      <option value="RO">Romania</option>
                      <option value="RU">Russia</option>
                      <option value="RW">Rwanda</option>
                      <option value="ST">S&atilde;o Tom&eacute; and Pr&iacute;ncipe</option>
                      <option value="BL">Saint Barth&eacute;lemy</option>
                      <option value="SH">Saint Helena</option>
                      <option value="KN">Saint Kitts and Nevis</option>
                      <option value="LC">Saint Lucia</option>
                      <option value="SX">Saint Martin (Dutch part)</option>
                      <option value="MF">Saint Martin (French part)</option>
                      <option value="PM">Saint Pierre and Miquelon</option>
                      <option value="VC">Saint Vincent and the Grenadines</option>
                      <option value="SM">San Marino</option>
                      <option value="SA">Saudi Arabia</option>
                      <option value="SN">Senegal</option>
                      <option value="RS">Serbia</option>
                      <option value="SC">Seychelles</option>
                      <option value="SL">Sierra Leone</option>
                      <option value="SG">Singapore</option>
                      <option value="SK">Slovakia</option>
                      <option value="SI">Slovenia</option>
                      <option value="SB">Solomon Islands</option>
                      <option value="SO">Somalia</option>
                      <option value="ZA">South Africa</option>
                      <option value="GS">South Georgia/Sandwich Islands</option>
                      <option value="KR">South Korea</option>
                      <option value="SS">South Sudan</option>
                      <option value="ES">Spain</option>
                      <option value="LK">Sri Lanka</option>
                      <option value="SD">Sudan</option>
                      <option value="SR">Suriname</option>
                      <option value="SJ">Svalbard and Jan Mayen</option>
                      <option value="SZ">Swaziland</option>
                      <option value="SE">Sweden</option>
                      <option value="CH">Switzerland</option>
                      <option value="SY">Syria</option>
                      <option value="TW">Taiwan</option>
                      <option value="TJ">Tajikistan</option>
                      <option value="TZ">Tanzania</option>
                      <option value="TH">Thailand</option>
                      <option value="TL">Timor-Leste</option>
                      <option value="TG">Togo</option>
                      <option value="TK">Tokelau</option>
                      <option value="TO">Tonga</option>
                      <option value="TT">Trinidad and Tobago</option>
                      <option value="TN">Tunisia</option>
                      <option value="TR">Turkey</option>
                      <option value="TM">Turkmenistan</option>
                      <option value="TC">Turks and Caicos Islands</option>
                      <option value="TV">Tuvalu</option>
                      <option value="UG">Uganda</option>
                      <option value="UA">Ukraine</option>
                      <option value="AE">United Arab Emirates</option>
                      <option value="GB">United Kingdom (UK)</option>
                      <option value="US">USA (US)</option>
                      <option value="UY">Uruguay</option>
                      <option value="UZ">Uzbekistan</option>
                      <option value="VU">Vanuatu</option>
                      <option value="VA">Vatican</option>
                      <option value="VE">Venezuela</option>
                      <option value="VN">Vietnam</option>
                      <option value="WF">Wallis and Futuna</option>
                      <option value="EH">Western Sahara</option>
                      <option value="WS">Western Samoa</option>
                      <option value="YE">Yemen</option>
                      <option value="ZM">Zambia</option>
                      <option value="ZW">Zimbabwe</option>
                    </select>
                    <div class="box-industry">
                      <select class="form-input mr-10 select-active input-industry">
                        <option value="0">Industry</option>
                        <option value="1">Software</option>
                        <option value="2">Finance</option>
                        <option value="3">Recruting</option>
                        <option value="4">Management</option>
                        <option value="5">Advertising</option>
                        <option value="6">Development</option>
                      </select>
                    </div>
                    <button class="btn btn-default btn-find font-sm">Search</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="text-center">
              <div class="list-tags-banner list-tags-banner-2 mt-20 wow animate__animated animate__fadeInUp" data-wow-delay=".3s"><strong>Popular Searches: </strong> <a href="#">Designer</a>, <a href="#">Web</a>, <a href="#">IOS</a>, <a href="#">Developer</a>, <a href="#">PHP</a>, <a href="#">Senior</a>, <a href="#">Engineer</a></div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="section-box mt-80">
        <div class="section-box wow animate__animated animate__fadeIn">
          <div class="container">
            <div class="text-center">
              <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Browse by category</h2>
              <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find the job that&rsquo;s perfect for you. about 800+ new jobs everyday</p>
            </div>
            <div class="box-swiper mt-50">
              <div class="swiper-container swiper-group-5 swiper">
                <div class="swiper-wrapper pb-70 pt-5">
                  <div class="swiper-slide hover-up"><a href='jobs-list.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/marketing.svg"></div>
                        <div class="text-info-right">
                          <h4>Marketing &amp; Sale</h4>
                          <p class="font-xs">1526<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/customer.svg"></div>
                        <div class="text-info-right">
                          <h4>Customer Help</h4>
                          <p class="font-xs">185<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/finance.svg"></div>
                        <div class="text-info-right">
                          <h4>Finance</h4>
                          <p class="font-xs">168<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href='jobs-list.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/lightning.svg"></div>
                        <div class="text-info-right">
                          <h4>Software</h4>
                          <p class="font-xs">1856<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/human.svg"></div>
                        <div class="text-info-right">
                          <h4>Human Resource</h4>
                          <p class="font-xs">165<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/management.svg"></div>
                        <div class="text-info-right">
                          <h4>Management</h4>
                          <p class="font-xs">965<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href='jobs-list.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/retail.svg"></div>
                        <div class="text-info-right">
                          <h4>Retail &amp; Products</h4>
                          <p class="font-xs">563<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/security.svg"></div>
                        <div class="text-info-right">
                          <h4>Security Analyst</h4>
                          <p class="font-xs">254<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                  <div class="swiper-slide hover-up"><a href='jobs-grid.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/content.svg"></div>
                        <div class="text-info-right">
                          <h4>Content Writer</h4>
                          <p class="font-xs">142<span> Jobs Available</span></p>
                        </div>
                      </div></a><a href='jobs-list.html'>
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/page/homepage1/research.svg"></div>
                        <div class="text-info-right">
                          <h4>Market Research</h4>
                          <p class="font-xs">532<span> Jobs Available</span></p>
                        </div>
                      </div></a>
                  </div>
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
          </div>
        </div>
      </section>
      <div class="section-box mb-30">
        <div class="container">
          <div class="box-we-hiring">
            <div class="text-1"><span class="text-we-are">We are</span><span class="text-hiring">Hiring</span></div>
            <div class="text-2">Let&rsquo;s <span class="color-brand-1">Work</span> Together<br> &amp; <span class="color-brand-1">Explore</span> Opportunities</div>
            <div class="text-3">
              <div class="btn btn-apply btn-apply-icon" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
            </div>
          </div>
        </div>
      </div>
      <section class="section-box mt-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs of the day</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Search and connect with the right candidates faster. </p>
            <div class="list-tabs mt-40">
              <ul class="nav nav-tabs" role="tablist">
                <li><a class="active" id="nav-tab-job-1" href="#tab-job-1" data-bs-toggle="tab" role="tab" aria-controls="tab-job-1" aria-selected="true"><img src="assets/imgs/page/homepage1/management.svg" alt="jobBox"> Management</a></li>
                <li><a id="nav-tab-job-2" href="#tab-job-2" data-bs-toggle="tab" role="tab" aria-controls="tab-job-2" aria-selected="false"><img src="assets/imgs/page/homepage1/marketing.svg" alt="jobBox"> Marketing &amp; Sale</a></li>
                <li><a id="nav-tab-job-3" href="#tab-job-3" data-bs-toggle="tab" role="tab" aria-controls="tab-job-3" aria-selected="false"><img src="assets/imgs/page/homepage1/finance.svg" alt="jobBox"> Finance</a></li>
                <li><a id="nav-tab-job-4" href="#tab-job-4" data-bs-toggle="tab" role="tab" aria-controls="tab-job-4" aria-selected="false"><img src="assets/imgs/page/homepage1/human.svg" alt="jobBox"> Human Resource</a></li>
                <li><a id="nav-tab-job-5" href="#tab-job-5" data-bs-toggle="tab" role="tab" aria-controls="tab-job-5" aria-selected="false"><img src="assets/imgs/page/homepage1/retail.svg" alt="jobBox"> Retail &amp; Products</a></li>
                <li><a id="nav-tab-job-6" href="#tab-job-6" data-bs-toggle="tab" role="tab" aria-controls="tab-job-6" aria-selected="false"><img src="assets/imgs/page/homepage1/content.svg" alt="jobBox"> Content Writer</a></li>
              </ul>
            </div>
          </div>
          <div class="mt-70">
            <div class="tab-content" id="myTabContent-1">
              <div class="tab-pane fade show active" id="tab-job-1" role="tabpanel" aria-labelledby="tab-job-1">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-2" role="tabpanel" aria-labelledby="tab-job-2">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-3" role="tabpanel" aria-labelledby="tab-job-3">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-4" role="tabpanel" aria-labelledby="tab-job-4">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-5" role="tabpanel" aria-labelledby="tab-job-5">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-job-6" role="tabpanel" aria-labelledby="tab-job-6">
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Periscope</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Lead Quality Control QA</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>iOS</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Laravel</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Golang</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>LinkedIn</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>UI / UX Designer fulltime</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Adobe XD</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Figma</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Adobe Ilustrator</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Full Stack Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>React</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>NodeJS</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Bing Search</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Java Software Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Python</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>AWS</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Photoshop</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Dailymotion</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Frontend Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Typescript</a><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Java</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Linkedin</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>React Native Web Developer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='jobs-grid.html'>Angular</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$500</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Quora JSC</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Senior System Engineer</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>PHP</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Android</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="card-grid-2 hover-up">
                      <div class="card-grid-2-image-left"><span class="flash"></span>
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="jobBox"></div>
                        <div class="right-info"><a class='name-job' href='company-details.html'>Nintendo</a><span class="location-small">New York, US</span></div>
                      </div>
                      <div class="card-block-info">
                        <h6><a href='job-details.html'>Products Manager</a></h6>
                        <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span> minutes ago</span></span></div>
                        <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                        <div class="mt-30"><a class='btn btn-grey-small mr-5' href='job-details.html'>ASP .Net</a><a class='btn btn-grey-small mr-5' href='job-details.html'>Figma</a>
                        </div>
                        <div class="card-2-bottom mt-30">
                          <div class="row">
                            <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span class="text-muted">/Hour</span></div>
                            <div class="col-lg-5 col-5 text-end">
                              <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">Apply now</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box overflow-visible mt-100 mb-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-12">
              <div class="box-image-job"><img class="img-job-1" alt="jobBox" src="assets/imgs/page/homepage1/img-chart.png"><img class="img-job-2" alt="jobBox" src="assets/imgs/page/homepage1/controlcard.png">
                <figure class="wow animate__animated animate__fadeIn"><img alt="jobBox" src="assets/imgs/page/homepage1/img1.png"></figure>
              </div>
            </div>
            <div class="col-lg-6 col-sm-12">
              <div class="content-job-inner"><span class="color-text-mutted text-32">Millions Of Jobs. </span>
                <h2 class="text-52 wow animate__animated animate__fadeInUp">Find The One That&rsquo;s <span class="color-brand-2">Right</span> For You</h2>
                <div class="mt-40 pr-50 text-md-lh28 wow animate__animated animate__fadeInUp">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 600,000 companies worldwide. The right job is out there.</div>
                <div class="mt-40">
                  <div class="wow animate__animated animate__fadeInUp"><a class='btn btn-default' href='jobs-grid.html'>Search Jobs</a><a class='btn btn-link' href='page-about.html'>Learn More</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box overflow-visible mt-50 mb-50">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="text-center">
                <h1 class="color-brand-2"><span class="count">25</span><span> K+</span></h1>
                <h5>Completed Cases</h5>
                <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of<br class="d-none d-lg-block"> any business</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="text-center">
                <h1 class="color-brand-2"><span class="count">17</span><span> +</span></h1>
                <h5>Our Office</h5>
                <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="text-center">
                <h1 class="color-brand-2"><span class="count">86</span><span> +</span></h1>
                <h5>Skilled People</h5>
                <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="text-center">
                <h1 class="color-brand-2"><span class="count">28</span><span> +</span></h1>
                <h5>CHappy Clients</h5>
                <p class="font-sm color-text-paragraph mt-10">We always provide people a <br class="d-none d-lg-block">complete solution upon focused of <br class="d-none d-lg-block">any business</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Top Recruiters</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Discover your next career move, freelance gig, or internship</p>
          </div>
        </div>
        <div class="container">
          <div class="box-swiper mt-50">
            <div class="swiper-container swiper-group-1 swiper-style-2 swiper">
              <div class="swiper-wrapper pt-5">
                <div class="swiper-slide">
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-1.png"></div>
                        <div class="text-info-right">
                          <h4>Linkedin</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                        <div class="text-info-right">
                          <h4>Adobe</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>42</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">17<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                        <div class="text-info-right">
                          <h4>Dailymotion</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>46</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">65<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-4.png"></div>
                        <div class="text-info-right">
                          <h4>NewSum</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>68</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">25<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                        <div class="text-info-right">
                          <h4>PowerHome</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>87</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                        <div class="text-info-right">
                          <h4>Whop.com</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">56<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-7.png"></div>
                        <div class="text-info-right">
                          <h4>Greewood</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>124</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">78<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                        <div class="text-info-right">
                          <h4>Kentucky</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">98<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-9.png"></div>
                        <div class="text-info-right">
                          <h4>Qeuity</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>76</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">90<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-10.png"></div>
                        <div class="text-info-right">
                          <h4>Honda</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>89</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">34<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-5.png"></div>
                        <div class="text-info-right">
                          <h4>Toyota</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>34</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">26<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-3.png"></div>
                        <div class="text-info-right">
                          <h4>Lexuxs</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>27</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">54<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-6.png"></div>
                        <div class="text-info-right">
                          <h4>Ondo</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>54</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">58<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-2.png"></div>
                        <div class="text-info-right">
                          <h4>Square</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>16</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">37<span> Open Jobs</span></span></div>
                      </div></a></div>
                  <div class="item-5 hover-up wow animate__animated animate__fadeIn"><a href="#">
                      <div class="item-logo">
                        <div class="image-left"><img alt="jobBox" src="assets/imgs/brands/brand-8.png"></div>
                        <div class="text-info-right">
                          <h4>Vista</h4><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><img alt="jobBox" src="assets/imgs/template/icons/star.svg"><span class="font-xs color-text-mutted ml-10"><span>(</span><span>97</span><span>)</span></span>
                        </div>
                        <div class="text-info-bottom mt-5"><span class="font-xs color-text-mutted icon-location">New York, US</span><span class="font-xs color-text-mutted float-end mt-5">43<span> Open Jobs</span></span></div>
                      </div></a></div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-button-next-1"></div>
            <div class="swiper-button-prev swiper-button-prev-1"></div>
          </div>
        </div>
      </section>
      <section class="section-box mt-50">
        <div class="container">
          <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Jobs by Location</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Find your favourite jobs and get the benefits of yourself</p>
          </div>
        </div>
        <div class="container">
          <div class="row mt-50">
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location1.png);"><span class="lbl-hot">Hot</span></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>Paris, France</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">5 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">120 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-7 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location2.png);"><span class="lbl-hot">Trending</span></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>London, England</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">7 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">68 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location3.png);"><span class="lbl-hot">Hot</span></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>New York, USA</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">9 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">80 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location4.png);"></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>Amsterdam, Holland</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">16 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">86 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location5.png);"></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>Copenhagen, Denmark</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">39 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">186 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-5 col-sm-12 col-12">
              <div class="card-image-top hover-up"><a href='jobs-grid.html'>
                  <div class="image" style="background-image: url(assets/imgs/page/homepage1/location6.png);"></div></a>
                <div class="informations"><a href='jobs-grid.html'>
                    <h5>Berlin, Germany</h5></a>
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="text-14 color-text-paragraph-2">15 Vacancy</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="color-text-paragraph-2 text-14">632 companies</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <livewire:blog-show-case/>
      
      <livewire:subscription/>
      
    </main>

    {{-- Footer Starts here --}}
    <x-footer/>
    {{-- Footer Ends here --}}
    
  </body>

</html>