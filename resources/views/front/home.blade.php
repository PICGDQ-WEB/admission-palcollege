@extends('templates.main')
@section('title')
<title>Home Page</title>
@endsection
@section('cssandjs')
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
@endsection
@section('body')
<section id="herosection" class="hero-section d-flex justify-content-start align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 hero-first">
                <h2>Experience. Learn. Transform Possibilities <br>into Reality.</h2><br>
                <ul>
                    <li><i class="fa-solid fa-medal"></i>Ranked 6th for placements in India <br>
                        (Times B School Survey, 2023)
                    </li>
                    <li><i class="fa-solid fa-handshake-angle"></i>363+ Recruitment Partners</li>
                    <li><i class="fa-solid fa-user-graduate"></i>Offering 15+ Programs with 6 Schools</li>
                </ul>
            </div>
            <div class="col-12 col-md-4">
                <form action="/action_page.php" class="bg-white p-4">
                    <h2 class="text-dark text-center fs-3">Admission Form</h2>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-regular fa-user"></i>
                            <input type="text" class="form-control" id="email" placeholder="Enter Your Full Name*"
                                name="email">
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-regular fa-envelope"></i>
                            <input type="email" class="form-control" placeholder="Enter Your Email*" name="email">
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-solid fa-phone"></i>
                            <input type="text" class="form-control" placeholder="Enter Yout Phone Number*" name="email">
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-regular fa-user"></i>
                            <select class="form-select">
                                <option value="" selected>Select Gender*</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-solid fa-location-dot"></i>
                            <select class="form-select">
                                <option value="" selected>Select State*</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and
                                    Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                            </select>

                        </label>
                    </div>
                    <div class="mb-3 mt-3">
                        <label class="ilabel w-100"><i class="fa-solid fa-building-columns"></i>
                            <select class="form-select">
                                <option value="" selected>Select Course*</option>
                                <option value="BCA">BCA</option>
                                <option value="MCA">MCA</option>
                            </select>
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <label class="form-check-label">
                            <input class="form-check-input p-0" type="checkbox" name="remember"> I Agree to receive
                            information regarding my submitted application by signing up on IMS Unison University *
                        </label>
                    </div>
                    <button type="submit" class="apply-now-btn w-100"><i class="fa-solid fa-graduation-cap"></i>
                        Register Now</button>
                </form>
            </div>
        </div>
    </div>
</section>
<section id="Specializations">
    <div class="container py-5 featured-courses">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center fs-1">Featured Courses of PCTM</h2>
                <P class="text-center w-65 web-sub-heading">Get ahead of the curve with our courses, designed to provide
                    students with
                    the skills and knowledge necessary to excel in their chosen field.</P>
            </div>
            <div id="courselist" class="col-12 course-list">
                <ul>
                    <li style="padding-left:0px!important"><a href="#" data-course="AllCourses" class="dynamic-bgchange">All Courses</a></li>
                    <li><a href="#" data-course="Management">Management Courses</a></li>
                    <li><a href="#" data-course="Computer">Computer Applications</a></li>
                    <li><a href="#" data-course="Science">Science Courses</a></li>
                    <li><a href="#" data-course="Commerce">Commerce Courses</a></li>
                    <li><a href="#" data-course="Education">Education Courses</a></li>
                    <li style="padding-right:0px!important"><a href="#" data-course="Distance">Distance Courses</a></li>
                </ul>
            </div>
        </div>
        <div class="row my-3 mt-4">
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Management,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">BBA Corporate Industry <br>
                        Integrated Programme</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Computer,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">BCA (Bachelor Of <br>
                        Computer Applications)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Management,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">BBA (Bachelor Of <br>
                        Business Administration)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Management,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">BHM (Bachelor Of  <br>
                        Hotel Management)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Education,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">B.Ed (Bachelor of  <br>
                        Education)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Science,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">B.Sc. Biotech (Bachelor of  <br>
                        Science in Biotechnology)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Commerce,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">B.Com Hons. (Bachelor of <br>
                        Commerce- Honours)</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Computer,Distance,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">BCA (Bachelor Of  <br>
                        Computer Applications) UOU</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 mb-3 all-pctm-courses" data-course="Management,Distance,AllCourses">
                <div class="card course-card">
                    <div class="card-header m-0 p-0">
                        <img src="/assets/img/12.jpg" alt="12" width="100%">
                        <p class="course-name">Diploma In Hospitality <br>
                         Administration</p>
                    </div>
                    <div class="card-body">
                        <h3>Eligibility : * 10+2 in any discipline with min. 45% marks and English as a Subject.</h3>
                        <p>* 5% relaxation shall be offered to candidates belonging to SC/ST/Uttarakhand OBC Category.
                        </p>
                        <p><b>Duration :</b> Three-Year/Four-Year Semester Based, Full-Time Undergraduate Programme.</p>
                        <p><b>Type :</b> Semester Based</p>
                        <a href="#" class="apply-now-btn w-100 d-block text-center"><i
                                class="fa-solid fa-graduation-cap"></i>
                            Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="About" style="background:#e7ecef">
    <div class="container py-5">
        <div class="row why-choose">
            <div class="col-12">
                <h2 class="text-center w-65 mt-4">Why Choose</h2>
                <P class="text-center fs-1 text-capitalize">pal college of technology and management</P>
            </div>
        </div>
        <div class="row mt-md-5 mt-0">
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
            <div class="col-6 col-md-4 why-choose-card p-4">
                <p class="icon"><i class="fa-solid fa-user-graduate"></i></p>
                <h2>12,000+ alumni</h2>
                <p class="text-center sub-heading">Our network of 12,000 alumni reflects our core values globally</p>
            </div>
        </div>
    </div>
</section>
<section class="promo-video">
    <iframe width="100%" height="700px" src="https://www.youtube.com/embed/OThbGX1Vugo?si=MiVsaJn8NDSj1_iQ"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</section>
<section id="Awards" >
    <img src="/assets/img/list-paper.png" alt="" width="100%">
</section>
<section class="awards-sec">
    <div class="container">
        <div class="row main-row">
            <div class="col-12 col-md-6 ">
                <h2 class="web-heading mb-5">Our Rankings & Awards</h2>
                <div class="row inner-row">
                    <div class="col-6 p-2 p-md-5 ps-md-0 pt-md-0 award-1"
                        style="height:200px;border:1px solid transparent;border-collapse: collapse;border-right:1px solid #000">
                        <img src="/assets/img/aw1.png" alt="" class="">
                        <h2 class="fs-5 mt-3">8th Rank Top 36 Private Universities</h2>
                        <p>Times MBA School Survey, 2023</p>
                    </div>
                    <div class="col-6 p-2 ps-4 pe-0 p-md-5 pt-md-0 pe-md-0 award-2"
                        style="height:200px;border:1px solid transparent;border-collapse: collapse;border-bottom:1px solid #000">
                        <img src="/assets/img/aw1.png" alt="" class="">
                        <h2 class="fs-5 mt-3">8th Rank Top 36 Private Universities</h2>
                        <p>Times MBA School Survey, 2023</p>
                    </div>
                    <div class="col-6 p-2 pt-5 pb-0 p-md-5 ps-md-0 pb-md-0 award-3"
                        style="height:200px;border:1px solid transparent;border-collapse: collapse;border-top:1px solid #000;margin-top: -1px;margin-right: -1px;">
                        <img src="/assets/img/aw1.png" alt="" class="">
                        <h2 class="fs-5 mt-3">8th Rank Top 36 Private Universities</h2>
                        <p>Times MBA School Survey, 2023</p>
                    </div>
                    <div class="col-6 p-2 pt-5 ps-4 pb-0 p-md-5 pe-md-0 pb-md-0 award-4"
                        style="height:200px;border:1px solid transparent;border-collapse: collapse;border-left:1px solid #000">
                        <img src="/assets/img/aw1.png" alt="" class="">
                        <h2 class="fs-5 mt-3">8th Rank Top 36 Private Universities</h2>
                        <p>Times MBA School Survey, 2023</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end">
                <img src="/assets/img/unique-realistic-achievement-award-grant-diploma-concepts.jpg" alt="" width="80%"
                    style="margin-top:-50px">
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="web-heading mb-2 mb-md-5 w-65">Grow your career with top-notch career opportunities</h2>
            </div>
            <div class="col-12 career-ops py-3 py-md-5">
                <div class="row">
                    <div class="col-6 col-md-3 text-center text-md-start">
                        <p><i class="fa-solid fa-award"></i></p>
                        <p class="heading"><b>Ranked 6th for <br>placements in India</b></p>
                        <p class="sub-heading">(Times B School Survey, 2023)</p>
                    </div>
                    <div class="col-6 col-md-3 text-center text-md-start">
                        <p><i class="fa-solid fa-handshake-angle"></i></p>
                        <p class="heading"><b>363+ Recruitment <br>Partners</b></p>
                        <p class="sub-heading">(Times B School Survey, 2023)</p>
                    </div>
                    <div class="col-6 col-md-3 text-center text-md-start">
                        <p><i class="fa-brands fa-hire-a-helper"></i></p>
                        <p class="heading"><b>Recruiters from 10+ <br>Industry Domains</b></p>
                        <p class="sub-heading">(Times B School Survey, 2023)</p>
                    </div>
                    <div class="col-6 col-md-3 text-center text-md-start">
                        <p><i class="fa-solid fa-briefcase"></i></p>
                        <p class="heading"><b>95% Placement <br>Record</b></p>
                        <p class="sub-heading">(Times B School Survey, 2023)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="StudentPlacements">
    <div class="container py-2 py-md-5">
        <div class="row">
            <div class="col-12">
                <h2 class="web-heading w-65">Our Pride</h2>
                <P class="text-center w-65 web-sub-heading">With a 12000+ alumni base, our students can open exciting
                    <br>opportunities in their dream careers.
                </P>
            </div>
            <div class="col-12 course-list pride-list">
                <ul>
                    <li style="padding-left:0px!important"><a href="#"><img src="/assets/img/1.png" alt=""
                                width="150px"></a></li>
                    <li><a href="#"><img src="/assets/img/2.jpg" alt="" width="150px"></a></li>
                    <li><a href="#"><img src="/assets/img/3.png" alt="" width="150px"></a></li>
                    <li><a href="#"><img src="/assets/img/4.png" alt="" width="150px"></a></li>
                    <li><a href="#"><img src="/assets/img/5.png" alt="" width="150px"></a></li>
                    <li style="padding-right:0px!important"><a href="#"><img src="/assets/img/6.png" alt=""
                                width="150px"></a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/1.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/2.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/3.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/4.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/5.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/6.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/7.png" alt="" width="100%">
            </div>
            <div class="col-6 col-md-3 mb-3">
                <img src="/assets/img/placement/8.png" alt="" width="100%">
            </div>
        </div>
    </div>
</section>
<section id="CampusLife" style="background-color: #f9f9f9;">
    <div class="container py-5">
        <div class="row">
            <div class="-col-12">
                <h2 class="web-heading mb-5 w-65">PCTM Campus Life</h2>
            </div>
        </div>
        <div class="row video-section">
            <div class="col-12 col-md-3">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/F9xi93zRZPM?si=XqhusZLTcWf2GC9a"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h2 class="mt-3">Annual Fest At Pal College of Technology and Management</h2>
            </div>
            <div class="col-12 col-md-3">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/eg3qZNffMSk?si=79Dk1PHZnZS0v_Zd"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h2 class="mt-3">Flourishing Day 2015 | Pal College Haldwani | College in Haldwani</h2>
            </div>
            <div class="col-12 col-md-3">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/9JD2wWKlIK8?si=6CdS0nCDw5KSvzoj"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h2 class="mt-3">Pal College Infrastructure | Best College in Uttarakhand</h2>
            </div>
            <div class="col-12 col-md-3">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/OWY4nn5gxYM?si=kbZ9ZjEXYthwOo9Y"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h2 class="mt-3">PCTM | BHM | DHM | BCA | B.SC
                    Biotechnogy</h2>
            </div>
        </div>
    </div>
</section>
@endsection
@section('endjs')
<script type="text/javascript" src="assets/js/home.js"></script>
@endsection
