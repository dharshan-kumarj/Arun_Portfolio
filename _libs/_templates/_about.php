<?php 
  include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/Arun_Portfolio/_libs/load.php';
  ?>



<!doctype html>
<html lang="en" class="h-100" data-bs-theme="auto">
  <head><script src="/Arun_Portfolio/_libs/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>About Me - Arun</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/cover/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/Arun_Portfolio/_libs/assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/Arun_Portfolio/_libs/assets/images/arun.png">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/Arun_Portfolio/_libs/assets/dist/css/cover.css" rel="stylesheet">
    <link href="/Arun_Portfolio/_libs/assets/dist/css/about.css" rel="stylesheet">
    
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
  </head>
  <body class="bg-secondary p-2 text-dark bg-opacity-10">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    

    
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">

<? load_temp('_aboutheader'); ?>

  <main class="px-4">
 
  <br>
  <br>
      <div class="container-fluid">
        <div class="row pl-3">
          <div class="col">
          <h3 class="text-light">MY PROFILE :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 18%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br><br>
          <ul class=" text-effect opacity-55 pt-3 pl-3">
                <li>  Well versed in implementing quality standards to meet the organizational requirements.</li><br>
                <li>Exceptional problem-solving skills</li><br>
                <li>Handling organizational and administrative skills.</li><br>
                <li>Work within an ambiguous and fast-moving environment.</li><br>
                <li>Data collection and analysis.</li><br>
                <li>Ability to reduce Waste and cost control using lean tools</li><br>
                <li>Setting a 5s system at shop floor level and train the shop floor team members</li><br>
              </ul>
          </div>
        </div>
        <div class="row">
          <div class="col"><br><br>
          <h3 class="text-light">EDUCATION :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 36%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br>
          </div>
          <div >
              <h1 class="item-period">AT 2021</h1>
              <br>
              <h3 class="text-white">B.Tech (Food Technology)</h3>
              <p class="text-white ">I successfully completed my B.Tech in Food Technology at Kalasalingam Academy of Research and Education,Krishnan kovil. where I obtained a commendable CGPA of 7.79, reflecting my dedication and commitment to academic excellence</p>
          </div>
          <div >
              <h1 class="item-period">AT 2017</h1>
              <br>
              <h3 class="text-white">HSC</h3>
              <p class="text-white ">Achieving a commendable 81%, I completed my Higher Secondary Certificate at Zion Good Shepherd Matriculation Higher Secondary School, Madurai in 2017</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">AT 2015</h1>
              <br>
              <h3 class="text-white">SSLC</h3>
              <p class="text-white ">I successfully completed my SSLC at M. N. U. Jayaraj Nadar Higher Secondary School in Madurai, achieving an outstanding score of 96%.</p>
          </div><br><br><br><br>
          
          <div class="row">
          <div class="col">
          <br><br>
          <h3 class="text-light">PROFESSIONAL EXPERIENCE :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 54%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br>
          </div>
          <div >
              <h1 class="item-period">Sep 2023- Present</h1>
              <br>
              <h3 class="text-white">Travel Foods Services Pvt Ltd- Chennai</h3>
              <h5 class="text-white">QHSE – Executive</h5>
              <p class="text-white ">
              I conduct Food Safety Audits for airport stores, Lounges, warehouses, and vendors, ensuring compliance. I manage FSSAI Licensing for 85 outlets, address quality issues, and maintain records. Additionally, I implement Kaizen for food safety, conduct training, handle customer complaints, and ensure operational safety through audits and reporting.</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">Aug 2022- Present</h1>
              <br>
              <h3 class="text-white">Spencer Retail Ltd</h3>
              <h5 class="text-white">Food Safety Quality Executive</h5>
              <p class="text-white ">
              I conduct Food Safety Audits and train retail store employees for compliance. I contribute to enhancing Private brand products' quality and regulatory compliance. I oversee reducing GDP and store DAD, ensuring process quality in manufacturing units. I identify process quality gaps, manage pest control, and conduct lab testing for private brand food products.</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">Aug 2021 – Aug 2022</h1>
              <br>
              <h3 class="text-white">Vikaarte Foods pvt limited (Cavinkare pvt ltd)</h3>
              <h5 class="text-white">Quality control Trainee (Rice paste & Non veg pickles)</h5>
              <p class="text-white ">
              My portfolio highlights my skills in analyzing raw materials and finished goods, conducting tests, coordinating with teams for new product development, setting quality standards, implementing best practices, creating visual SOPs, training subordinates, and overseeing cleaning and pest control.</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">Feb 2021- April 2021</h1>
              <br>
              <h3 class="text-white">Manna Foods Private Ltd (Britannia Industry Limited)</h3>
              <h5 class="text-white">Quality intern (Biscuits & Bread)</h5>
              <p class="text-white ">
              I also emphasize my role in ensuring the quality of products across all four biscuit lines, analyzing the quality of raw materials, finished goods, and online product quality. Additionally, I showcase my expertise in checking GMP and GHP guidelines according to the checklist.</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">June 2019 - Jul 2019</h1>
              <br>
              <h3 class="text-white">Kaveri Krishna Fruit Products Industry</h3>
              <h5 class="text-white">Production and quality intern ( Fruit pulp)</h5>
              <p class="text-white ">
              II demonstrate expertise in overseeing daily production, ensuring high-quality standards, and meticulous reporting practices. Additionally, I excel in identifying bottlenecks in production processes and recommending effective control measures, showcasing a commitment to operational excellence.</p>
          </div><br><br><br><br>

          <div class="row">
          <div class="col">
          <br><br>
          <h3 class="text-light">PROJECTS  :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 72%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br>
          </div>
          <div >
              <h1 class="item-period">Jan 2020 -May 2020</h1>
              <br>
              <h3 class="text-white ">Extraction of adhesive from tamarind seeds</h3>
              <p class="text-white  ">Low-cost adhesive production for helping small scale industry with extended shelf-life.
              During my project work, I have used a sophisticated instrument such as RSM, Texture
              analyzer Applied patent on this</p>
          </div>
          <div >
              <h1 class="item-period">Nov 2020-April 2021</h1>
              <br>
              <h3 class="text-white">Development of symbiotic kefir with prebiotic</h3>
              <p class="text-white  ">It mitigates the gastrointestinal problems by increasing microbiome in human as well as aim to
provide the low-cost kefir drink along with prebiotics</p>
          </div><br><br><br><br>
          <div >
              <!-- <h1 class="item-period">??</h1> -->
              <br>
              <h3 class="text-white">Reduction of wrapper waste using Lean six-sigma by DMIAC methodology.</h3>
              <p class="text-white  ">By using continuous improvement process methodology. we troubleshoot and provide kaizens for
the root cause of the problem. It reduced the waste rate from 7.2% to 4.7%</p>
          </div><br><br><br><br>
          <div >
              <h1 class="item-period">June 2021 - July 2021</h1>
              <br>
              <h3 class="text-white">Working on Astro space food</h3>
              <p class="text-white  ">Working on Astro space food to provide sustainable packed food to Astronauts</p>
          </div><br><br><br><br>

          <div class="row">
          
          <div class="col">
          <br><br>
          <h3 class="text-light">AWARDS  :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 90%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br>
          </div>
          <ul class=" text-light opacity-55">
                <li>FOSTAC (level 2) supervisor certification</li><br>
                <li>Lean six sigma white belt completion</li><br>
                <li>Certified lean practitioner in QMS</li><br>
                <li>Basics of ISO 9001:2015 Implementation</li><br>
                
          </ul>

          <div class="row">
          
          <div class="col">
          <br><br>
          <h3 class="text-light">SKILL  :</h3>
          <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 100%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="70"></div>
              </div><br>
          </div>
          <ul class="text-white opacity-55">
                <li>Leadership</li><br>
                <li>Learning</li><br>
                <li>Proficient in MS office</li><br>
                <li>Motivation</li><br>
                <li>Problem solving</li><br>
                <li>Critical thinking</li><br>
                
          </ul>

          <p class="p-5 text-center text-white">Developed By <a  href = "https://nexrof.in/" target="_blank"
rel="noopener noreferrer" class="text-white">Nexrof</a></p>
          
  
 </main>
</div>

<script src="/Arun_Portfolio/_libs/assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
