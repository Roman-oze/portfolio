@extends('master')

@section('main_content')

<div class="container-fluid ">
    <div class="row ">
      <div class="col-md-6 intro">
        <div class="top">
          <h1 class="text-light">Hello!</h1>
         <h3 class="text-animation">I'm Roman Oze<img src="{{asset('frontend/image/verify.png')}}" class="verify"></h3>
         <!-- <h1>Web Developer</h1>    -->
         <div id="typing-text" class=" web_developer text-white-50">
          Web Developer
        </div>
        </div>
        <div class="down animate__animated animate__bounce animate__repeat-2">
          <a target="_blank" href="https://github.com/Roman-oze" class=" btn btn-md btn-outline-success ">GitHub <i class="fa-brands fa-github text-white"></i></a>

        </div>
      </div>
      <div class="col-md-6  animate__animated animate__fadeInRight p-1">
        <div class="cover-border text-center ">
        {{-- <img src="{{asset('frontend/image/black-jacket.png')}}" class="dp">
        <img src="{{asset('frontend/image/diu-3.png')}}" class="dp"> --}}
        <img src="{{asset('frontend/image/black-jacket-2.png')}}" class="dp">
      </div>
      </div>
    </div>
  </div>


  <div class="container-fluid  skill-bg">
    <br>
    <br>
    <br>
    <div class="text-center">
      <h3 class="text-center p-2 ">Expertise</h3>
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <p class=" text-white-50">I specialize in designing responsive, user-friendly websites. Experienced in SEO and accessibility standard</p>
    </div>
    <div class="row  p-5 ">

       <div class="col-md-2 text-center p-2">
        <div class="custom-box">
          <img src=" {{asset('frontend/image/html.png')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-1">HTML</a>
        </div>
       </div>
       <div class="col-md-2 text-center p-2">
        <div class="custom-box">
          <img src=" {{asset('frontend/image/CSS3_logo.svg.png')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-2">CSS</a>
        </div>
       </div>
       <div class="col-md-2 text-center p-2">
        <div class="custom-box">
          <img src=" {{asset('frontend/image/Bootstrap_logo.svg.png')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-3">Bootstrap</a>
        </div>
       </div>
       <div class="col-md-2 text-center p-2">
        <div class="custom-box">
          <img src="{{asset('frontend/image/js.png ')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-4">JavaScript</a>
        </div>
       </div>
       <div class="col-md-2 text-center p-2">
        <div class="custom-box">
          <img src="{{asset('frontend/image/php.png ')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-5">PHP</a>
        </div>
       </div>
       <div class="col-md-2  text-center p-2">
        <div class="custom-box">
          <img src="{{asset('frontend/image/database.png ')}}" alt="" class="smallphoto"><br>
          <a href="" class="customiz_button-6">Database</a>
        </div>
       </div>
    </div>
  </div>
  <br>
  <br>

  <section id="academic">
    <div class="text-center mt-5">
      <h3 class="text-center">Academic Skills</h3>
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    </div>
  <div class="container mt-5">
    <div class="row mt-5">
   <div class="col-md-4 text-center">
    <div class="card p-3">
      <div class="progress-container">
      <!-- <i class="fa-solid fa-code iconic"></i>     -->
      <img src="{{asset('frontend/image/website-icon.png')}}" alt="" class="smallimage" >

      </div>
      <div class="card-content">
        <h4 class="p-2">Web Development</h4>
        <p class="smooth-text">Full Stack Web development included wed design & responsive</p>
      </div>
    </div>
   </div>
   <div class="col-md-4 text-center">
    <div class="card p-3">
      <div class="progress-container">
      <!-- <i class="fa-solid fa-mobile iconic" ></i>  -->
      <img src=" {{asset('frontend/image/android-studio-icon.webp')}}" alt="" class="smallimage" >
      </div>
      <div class="card-content">
        <h4 class="p-2">App Development</h4>
        <p class="smooth-text">Flutter and dart is used for developing android & iOS  </p>
      </div>
    </div>
   </div>
   <div class="col-md-4 text-center">
    <div class="card p-3">
      <div class="progress-container ">
        <!-- <i class="fa-brands fa-wordpress  iconic"></i>   -->
        <img src=" {{asset('frontend/image/wordpress.png ')}}" alt="" class="smallimage rounded-circle" >

      </div>
      <div class="card-content">
        <h4 class="p-2">Wordpress</h4>
        <p class="smooth-text">websites WordPress platform's customizable themes and plugins.</p>
      </div>
    </div>
  </div>
  </div>
  </div>
  </section>
  <br>
  <br>
  <br>
  <!-- <div class="container">
    <div class="row text-center">
      <h2 class="smooth-text p-5">About Me <i class="fa-solid fa-person text-light"></i></h2>

    <div class="col-md-6 ">
      <img src="diu-3.png" alt="" class="image">
    </div>
    <div class="col-md-6 d-flex justify-content-end  align-items-center">
    <div class="item rounded-3">
          <h5 class="text-color p-4">Welcome to my web developer portfolio! I'm Roman Oze, a skilled web developer dedicated to crafting exceptional digital experiences. With expertise in both front-end and back-end development, I create websites and web applications that surpass expectations. Explore my portfolio to see examples of my work, and let's discuss how I can help bring your digital projects to life.</h5>
          <button class="download_button">CV <i class="fa-solid fa-arrow-down h-40"></i></button>


        </div>

    </div>

  </div>
  </div> -->
  <div class="container mt-5">
    <div class="row text-center skill-bg1">
      <h2 class="smooth-text p-3 text-white-50">About Me <i class="fa-solid fa-person "></i></h2>

    <div class="col-md-6 p-1">
      <img src="{{asset('frontend/image/diu-3.png')}}" alt="" class=" animate__animated animate__fadeInLeft">
    </div>
    <div class="col-md-6 d-flex justify-content-center  align-items-center">
      <main class="text-start">
        <h5 class="medium-text p-1"><i class="fa-solid fa-graduation-cap "></i> Studies at Daffodil International University-ITM</h5>
        <h6 class="medium-text p-1"><i class="fa-solid fa-graduation-cap"></i> Studies at Dhanmondi Ideal College</h6>
        <p class="medium-text p-1"><i class="fa-solid fa-house"></i> Living in Dhaka</p>
        <p class="text-light "><i class="fa-solid fa-heart text-danger"></i> Single</p>
              <!-- <a href="">Facebook</a>
              <a href="">Linkdin</a> -->
            <br>
            <p id="demo">
               <a href="{{asset('frontend/image/RomanOze-CV.pdf')}}"><button class="touch btn bg-success btn-md btn-outline-success p-2"> Download CV</button></a><br><br>
              <button background-color="red" onclick="typeWriter()" class="touch btn btn-md btn-outline-success ">Touch me <i class="fa-solid fa-eye"></i></button>
            </p>
       </main>
    </div>
  </div>
  </div>
  <br>
  <br>
  <br>
  <div class="container ">
    <div class="row mt-5  d-flex justify-content-space-between">
      <div class="col-lg-3 col-6 text-center ">
        <div class="border rounded-3  container_design text-center p-5 ">
        <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="0" class="purecounter">25</span>
        <p class="text-color">Website</p>
      </div>
      </div>
      <div class="col-lg-3 col-6 text-center">
        <div class="border rounded-3  container_design text-center p-5 ">
        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="0" class="purecounter">10</span>
        <p class="text-color">Compelete</p>
      </div>
      </div>

      <div class="col-lg-3 col-6 text-center ">
      <div class="border rounded-3 container_design text-center p-5 ">
        <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span>
        <p class="text-color">Draft</p>
      </div>
      </div>

      <div class="col-lg-3 col-6 text-center ">
      <div class="border rounded-3 container_design text-center p-5 ">
        <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="0" class="purecounter">3</span>
        <p class="text-color">Running</p>
      </div>
      </div>
    </div>
    </div>
    <br>
    <br>
    <section id="academic">
      <div class="text-center mt-5">
        <h3 class="text-center">Academic  <i class="fa-solid fa-user-graduate"></i></h3>
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      </div>
    <div class="container mt-5">
      <div class="row mt-5">
     <div class="col-md-4 text-center">
      <div class="card p-3">
        <i class="fa-solid fa-school iconic"></i>
        <div class="card-content">
          <h4 class="p-1">School</h4>
          <p class="text-color">People's Standard high school</p>
          <a class="btn btn-md btn-outline-light">Read More</a>
        </div>
      </div>
     </div>
     <div class="col-md-4 text-center">
      <div class="card p-3">
        <i class="fa-solid fa-building-columns iconic" ></i>
        <div class="card-content">
          <h4 class="p-1">College</h4>
          <p class="text-color">Dhanmondi Ideal Collage</p>
          <a class="btn btn-md btn-outline-light">Read More</a>
        </div>
      </div>
     </div>
     <div class="col-md-4 text-center">
      <div class="card p-3">
        <i class="fa-solid fa-graduation-cap iconic"></i>
        <div class="card-content">
          <h4 class="p-1">University</h4>
          <p class="text-color">Daffodil International University</p>
          <a class="btn btn-md btn-outline-light">Read More</a>
        </div>
      </div>
     </div>
    </div>
    </div>
    </section>
    <br>
    <br>
    <br>
    <br>
   <section id="skill">
    <div class="container-fluid">
      <div class="text-center mt-5">
        <h3 class="text-center">Skills Predicted</h3>
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
          <div class="divider-custom-line"></div>

      </div>
      <p class="text-center text-color">Gather practical experiences by each position</p>
    </div>
    <br>
    <br>
    <br>
      <div class="row p-3">
          <div class="col-md-6 p-5">
            <div class=" text-center">
              <h3 class="text-white-50">FrontEnd</h3>
            </div>
            <div class="skill mb-4 p-1">
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-bold text-white-50">HTML</h6>
                    <h6 class="font-weight-bold text-color">90%</h6>
                </div>
                <div class="progress bg-dark">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                </div>
            </div>

            <div class="skill mb-4 p-1">
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-bold text-white-50">Bootstrap</h6>
                    <h6 class="font-weight-bold text-color">85%</h6>
                </div>
                <div class="progress bg-dark">
                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                </div>
            </div>
            <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">CSS</h6>
                  <h6 class="font-weight-bold text-color">75%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
              </div>
          </div>
            <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">Tailwind</h6>
                  <h6 class="font-weight-bold text-color">60%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
              </div>
          </div>
            <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">JavaScript</h6>
                  <h6 class="font-weight-bold text-color">15%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
              </div>
          </div>
        </div>
        <div class="col-md-6 p-5">
          <div class=" text-center">
            <h3 class="text-white-50">BackEnd</h3>
          </div>

          <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">PHP</h6>
                  <h6 class="font-weight-bold text-color">55%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
              </div>
          </div>
          <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">Laravel</h6>
                  <h6 class="font-weight-bold text-color">65%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
              </div>
          </div>

          <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">Mysql</h6>
                  <h6 class="font-weight-bold text-color">70%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
              </div>
          </div>
          <div class="skill mb-4 p-1">
              <div class="d-flex justify-content-between">
                  <h6 class="font-weight-bold text-white-50">Database</h6>
                  <h6 class="font-weight-bold text-color">65%</h6>
              </div>
              <div class="progress bg-dark">
                  <div class="progress-bar bg-warning " role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
              </div>
          </div>
          <div class="skill mb-4 p-1">
            <div class="d-flex justify-content-between">
                <h6 class="font-weight-bold text-white-50">JavaScript</h6>
                <h6 class="font-weight-bold text-color">15%</h6>
            </div>
            <div class="progress bg-dark">
                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"></div>
            </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
    <div class="underline text-center">
      <!-- <h1>My Project List  <img src="website-icon.png" alt="" class="smallimage"></h1> -->
      <h1 class="text-white-50">My Project List <i class="fa-regular fa-circle-check text-success"></i></h1>
    </div>
    <div class="container">
      <div class="row text-center mt-5">
        <div class="col-md-6 p-4">
          <div class="border rounded-3 p-4 shadow-lg border-700 box">
            <div class="row align-items-center">
              <div class="col-sm"><img class="img-fluid rounded-3 shadow-sm" src="{{asset('frontend/image/itm-web.png')}}" alt="About"></div>
              <div class="col">
                <h4 class="text-200">Restaurent Website</h4>
                <a class="btn btn-md btn-outline-success" href="https://prium.github.io/slick/v2.0.0/generator.html" target="_blank">Watch Live <i class="fa-solid fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-4">
          <div class="border rounded-3 p-4 shadow-lg border-900 box">
            <div class="row align-items-center">
              <div class="col-sm"><img class="img-fluid rounded-3 shadow-sm" src="{{asset('frontend/image/rest-web.png')}}" alt="About"></div>
              <div class="col">
                <h4 class="text-200">Academic Website</h4>
                <a class="btn btn-md btn-outline-success " href="https://prium.github.io/slick/v2.0.0/generator.html" target="_blank">Watch Live <i class="fa-solid fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
      </div>
      <br>
      <br>
      <div class="container">
      <div class="row text-center mt-5">
        <div class="col-md-6 p-4">
          <div class="border rounded-3 p-4 shadow-lg border-700 box">
            <div class="row align-items-center">
              <div class="col-sm"><img class="img-fluid rounded-3 shadow-sm" src="{{asset('frontend/image/e-commerce.png ')}}" alt="About"></div>
              <div class="col">
                <h4 class="text-180">Commerce Website</h4>
                <a class="btn btn-md btn-outline-success" href="https://prium.github.io/slick/v2.0.0/generator.html" target="_blank">Watch Live <i class="fa-solid fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-4">
          <div class="border rounded-3 p-4 shadow-lg border-900 box">
            <div class="row align-items-center">
              <div class="col-sm"><img class="img-fluid rounded-3 shadow-sm" src="{{asset('frontend/image/portfolio.png ')}}" alt="About"></div>
              <div class="col">
                <h4 class="text-200">Portfolio</h4>
                <a class="btn btn-md btn-outline-success " href="https://prium.github.io/slick/v2.0.0/generator.html" target="_blank">Watch Live <i class="fa-solid fa-eye"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  <br>
  <br>

  <br>
  <br>
  <section id="certificate">
  <div class="container">
    <div class="row mt-5 ">
      <div class="text-center">
        <h3 class="text-center p-2 ">Certificates <i class="fa-solid fa-award iconic"></i></h3>
        <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
          <div class="divider-custom-line"></div>
      </div>
      <p class=" medium-text">I specialize in designing responsive, user-friendly websites. Experienced in SEO and accessibility standard</p>
      </div>

      <div class="col-md-3 p-4">
        <div class="container mt-5">
          <div class="card1 mx-auto">
              <img src="{{asset('frontend/image/vp.jpg ')}}" class="certificate1" alt="Placeholder Image">
              <div class="card-content p-3">
                  <h5 class="card-title ">Vice-President</h5>
                  <p class="card-text">I'm VP of ITMClub organizing activites and managing club members</p>
                  <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
                </div>
          </div>
      </div>
      </div>
      <div class="col-md-3 p-4">
        <div class="container mt-5">
          <div class="card1 mx-auto" >
            <img src="{{asset('frontend/image/cr-3.png')}}" class="img-fluid" alt="Placeholder Image">
            <div class="card-content p-3">
                <h5 class="card-title">Leadership</h5>
                <p class="card-text">I had this skill to lead and maintaining anywhere situation</p>
                <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
              </div>
          </div>
      </div>
      </div>
      <div class="col-md-3 p-4">
        <div class="container mt-5">
          <div class="card1 mx-auto">
            <img src="{{asset('frontend/image/cr-1.png')}}" class="img-fluid" alt="Placeholder Image">
            <div class="card-content p-3">
                <h5 class="card-title">Positivity</h5>
                <p class="card-text">I got this certificate for responsibility from my university</p>
                <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
              </div>
          </div>
      </div>
      </div>
      <div class="col-md-3 p-4">
        <div class="container mt-5">
          <div class="card1 mx-auto">
            <img src="{{asset('frontend/image/cr-2.jpg')}}" alt="Placeholder Image" class="img-fluid">
            <div class="card-content p-3">
                <h5 class="card-title">Chinese Course</h5>
                <p class="card-text">I completed 6 month chinese language course from china </p>
                <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
              </div>
          </div>
      </div>
      </div>
    </div>
  </div>
  </section>
  <br>
  <br>
  <!-- reference -->

  <br>
  <br>
  <section id="achievement">
    <div class="text-center mt-5">
      <h3 class="text-center">Achievement</h3>
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    </div>
    <div class="container ">
      <div class="row text-center">

      <div class="col-md-12 text-center ">
            <div class=" rounded-3 p-3 shadow-lg border-900 box">
              <p class="item1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Scholarship</p><br>
              <p class="item1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Exchange Program</p><br>
              <p class="item1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Internship</p><br>

            </div>
          </div>
          <div class=" text-box">
            <p class="smooth-text text-200">
              As a web developer, I excel in creating user-friendly interfaces and efficient code. I specialize in crafting responsive designs, optimizing performance, and leveraging emerging technologies. With a dedication to innovation and ongoing learning, I deliver impactful solutions that enhance online experiences and propel business growth.
            </p>
          </div>

  </div>
  </section>
  <br>
  <br>

  <br>
  <div class="container mt-5 d-flex flex-column justify-content-space-between  align-items-center">
  <div class="row p-3">
    <div class="col-md-6">
      <img src=" {{asset('frontend/image/Flutter-App.png')}}" alt="Placeholder Image" class="smallphoto">
    </div>
    <div class="col-md-6">
      <div class="text-container border-succeess border-bottom ">
        <h5 class="card-title">Flutter</h5>
        <p class="card-text">This is to certify that Roman Oze has successfully completed the course on...</p>
        <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
    </div>
    </div>
  </div>
  <div class="row p-3">
    <div class="col-md-6">
      <img src="{{asset('frontend/image/java.png  ')}}" alt="Placeholder Image" class="smallphoto">
    </div>
    <div class="col-md-6">
      <div class="text-container border-succeess border-bottom">
        <h5 class="card-title">Java</h5>
        <p class="card-text">This is to certify that Roman Oze has successfully completed the course on...</p>
        <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
    </div>
    </div>
  </div>
  <div class="row p-3">
    <div class="col-md-6">
      <img src=" {{asset('frontend/image/fire.png')}}" alt="Placeholder Image" class="smallphoto">
    </div>
    <div class="col-md-6">
      <div class="text-container border-succeess border-bottom ">
        <h5 class="card-title">Firebase</h5>
        <p class="card-text">This is to certify that Roman Oze has successfully completed the course on...</p>
        <p class="card-text"><small class="text-success">Issued on March 25, 2024</small></p>
    </div>
    </div>
  </div>
  <div class="row ">
    <marquee class=" logos text-center mt-5 ">
    <img src="{{asset('frontend/image/powerbi.png')}}" alt="">
    <img src="{{asset('frontend/image/bigml.png')}}" alt="">
    <img src="{{asset('frontend/image/up.png')}}" alt="">
    <img src="{{asset('frontend/image/pw1.png')}}" alt="">
    <img src="{{asset('frontend/image/Excel.png')}}" alt="">
    <img src="{{asset('frontend/image/database.png')}}" alt="">
   </marquee>
   </div>
   <br>
  <br>
  <br>
  <br>
  <br>

  <!-- experiences -->
  <section id="academic">
    <div class="text-center mt-5">
      <h3 class="text-center p-1">Experience</h3>
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>

    </div>
    <p class="text-center text-light ">Gather practical experiences by each position</p>

    </div>
  <div class="container-fluid mt-5">
    <div class="row mt-5 d-flex justify-content-center ">

   <div class="col-md-3 text-center  ">
    <div class="card p-2">
      <i class="fa-solid fa-book-open-reader iconic"></i>
      <div class="card-content">
        <h4 class="p-2">Leadership</h4>
        <p class="text-color">I know how lead in the  organizational</p>
      </div>
    </div>
   </div>
   <div class="col-md-3 text-center ">
    <div class="card p-2">
      <i class="fa-solid fa-lightbulb iconic"></i>
      <div class="card-content">
        <h4 class="p-2">Creativity</h4>
        <p class="text-color">When Suddenly need to innovation something </p>
      </div>
    </div>
   </div>
   <div class="col-md-3 text-center ">
    <div class="card p-2">
      <i class="fa-solid fa-circle-info iconic"></i>
      <div class="card-content">
        <h4 class="p-2">IT Support</h4>
        <p class="text-color ">Technical tool and technique thats i do daily basis</p>
      </div>
    </div>
   </div>
   <div class="col-md-3 text-center  ">
    <div class="card p-2">
      <i class="fa-solid fa-person-rays iconic"></i>
      <div class="card-content">
        <h4 class="p-2">Human Resource</h4>
        <p class="text-color ">Talent,performance.innovation for each organizational</p>
      </div>
    </div>
   </div>

  </div>
  </div>

@endsection