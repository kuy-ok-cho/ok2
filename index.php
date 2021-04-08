<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ok2</title>
    



    <!-- css -->
    <link rel="stylesheet" href="jquery.fullPage.css">
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/media.css" />
    <link rel="stylesheet" href="css/home.css" />
    <link rel="stylesheet" href="css/myskill.css" />
    <link rel="stylesheet" href="css/profile.css" />
    <link rel="stylesheet" href="css/portfolio.css" />
    <link rel="stylesheet" href="css/contact.css" />
    <link rel="stylesheet" href="css/scroll.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />


    <!-- profile -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
     <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="wrap">

<!-- start of header -->

    <header>
        <div class="center headerCenter">
            <div class="ok2">
                welcome
            </div>
            <nav>
                <ul class="topNav">
                    <li data-menuanchor="section1"><a href="#section1">Home</a></li>
                    <li data-menuanchor="section2"><a href="#section2">Profile</a></li>
                    <li data-menuanchor="section3"><a href="#section3">Myskill</a></li>
                    <li data-menuanchor="section4"><a href="#section4">Portfolio</a></li>
                    <li data-menuanchor="section5"><a href="#section5">Contact</a></li>
                </ul>
            </nav>
            </div>
    </header>

    <!-- end of header -->
    <!-- start of fullpage -->
    <main id="fullpage">
    <script src="js/fullpage.js"></script>


        <section class="section">
          <div class="homeSection">
        <!-- canvas -->
        <canvas>
        </canvas>

        <!-- start of homeCenter -->        
        <div class="center homeCenter">

          <!-- first event start -->
            <ul class="slider">
              <li>
                <img src="img/hi1.png" alt="emoji1">
              </li>
              <li>
                <img src="img/hi2.png" alt="emoji2">
              </li>
              <li>
                <img src="img/wink.png" alt="emoji3">
              </li>
              <li>
                <img src="img/bye.png" alt="emoji4">
              </li>

            </ul>
            <!-- end of slider-->    
            
            <div class="typing-txt"> 
              <ul>
                <li>안녕하세요 조규옥입니다!</li>
                <li>방문해주셔서 감사합니다!</li>
                <li>저를 소개하겠습니다^_^</li>
                <li>스크롤을 내려주세요~~~</li>
              </ul>

            </div> 

            <p class="typing"></p>
            


          </div>
        <!-- end of homeCenter -->
         </div>
         <!-- end of homeSection -->
      </section>

        <!-- end of first section -->

        <!-- start of second sectoion -->
        <section class="section">
          <div class="profile">

            <div class="prf">

                <svg id="blob-1" viewbox="0 0 800 800">
                  <defs>
                    <clipPath id="mask">
                      <path id="path-1"/>
                    </clipPath>
                  </defs>
                  <path id="path-2" />
                </svg>

              <div class="prfImg">
                  
                    <img src="img/ok.jpeg"  class="active" alt="myphoto" />
                    <img src="img/side.jpeg" alt="myphoto/">
                    <img src="img/black.jpeg" alt="myphoto" />
 
              </div>
              
              <div class="prfBtn">
                Click!
              </div>

            </div>
            <!-- end of prfImg -->

           <!-- partial:index.partial.html -->
           <div class="prf-txt">
            <h2 class="heading">
              <span class="underline--magical" >
                My Profile
              </span> 
             </h2>

             
            <h2 class="subheading">이름 : 
              <span class="underline--magical">
              조규옥
              </span> 
            </h2>
            <h2 class="subheading">   생년월일 :             
              1994년 12월 20일
            </h2>
            <h2 class="subheading">
              <span class="underline--magical">
                최종학력 : 
              </span>  서일대학교 의상과
            </h2>
            <h2 class="subheading">거주지 : 서울시 동작구 사당동
              <span class="underline--magical">
              (자취 가능)
              </span>   
            </h2>
            <h2 class="subheading">
              <span class="underline--magical">
              교육 이수 : 
              </span>  
              2020.11~2021.04 더조은컴퓨터아카데미<br>
                  스마트웹디자인(UI/UX) 콘텐츠개발(웹퍼블리셔) 
            </h2>
            <h2 class="subheading">           
                경력사항 : 
                    2017.01~2017.06 이동우 컬렉션<br />
                    2017.09~2020.09 매장관리
            </h2>

            <h2 class="subheading"> 
              <span class="underline--magical">
              수상내역 : 
              </span> 
              한국의상디자인협회 2015 넥타이 공모전 - 특선
                    <br />한국의상디자인협회 2016 넥타이공모전 - 특선            
            </h2>
            </div>
            </div>
        </section>
        <!-- end of  section2 -->

      <!-- start of section3 -->
        <section class="section">
          <div class="center skCenter">
        <div class="main-wrapper">

      <div class="badge yellow">
        <div class="circle"> 
          <img src="img/html5.png" alt="html5">         
        </div>
        <div class="ribbon">HTML5</div>
        <div class="percent">90%</div>

      </div>

      <div class="badge orange">
        <div class="circle"> 
        <img src="img/css.png" alt="css3">
        </div>
        <div class="ribbon">CSS</div>
        <div class="percent">70%</div>

      </div>

      <div class="badge pink">
        <div class="circle"> 
        <img src="img/js.png" alt="javaScript">
        </div>
        <div class="ribbon">JS</div>
        <div class="percent">50%</div>

      </div>

      <div class="badge red">
        <div class="circle"> 
        <img src="img/jquery.png" alt="jquery">
        </div>
        <div class="ribbon">jQuery</div>
        <div class="percent">50%</div>

      </div>

      <div class="badge purple">
        <div class="circle"> 
        <img src="img/php.png" alt="php">
        </div>
        <div class="ribbon">PHP</div>
        <div class="percent">50%</div>

      </div>

      <div class="badge teal">
        <div class="circle"> 
        <img src="img/word.png" alt="word">
        </div>
        <div class="ribbon">Word</div>
        <div class="percent">80%</div>

      </div>

      <div class="badge blue">
        <div class="circle"> 
        <img src="img/ex.png" alt="excell">
        </div>
        <div class="ribbon">EXCELL</div>
        <div class="percent">70%</div>

      </div>

      <div class="badge gold">
        <div class="circle"> 
        <img src="img/ppt.png" alt="powerpoint">
        </div>
        <div class="ribbon">PPT</div>
        <div class="percent">90%</div>

      </div>

      </div>
    </div>
        


   </section>
  <!-- end of section3 -->


  <!-- start of section4 -->
  <section class="section">

    <div class="main-content">

      <div class="recipe-wrapper">

        <div class="navigation">
          <i
            class="js-navigate js-left disabled 	fa fa-arrow-circle-o-right"
          ></i
          ><i class="js-navigate js-right 	fa fa-arrow-circle-o-right"></i>
        </div>

        <div class="recipe-image">

          <div class="recipe active">
            <img
              class="pie-photo"
              src="img/gold2.png" alt="database poroject"
            />
          </div>

          <div class="recipe">
            <img
              class="pie-photo"
              src="img/tumblbug4.png" alt="site renewal"
            />
          </div>

          <div class="recipe">
            <img
              class="pie-photo"
              src="img/movie.png" alt="movie search site"
            />
          </div>

          <div class="recipe">
            <img
              class="pie-photo"
              src="img/sc5.png" alt="scheduler"
            />
          </div>

          <div class="recipe">
            <img
              class="pie-photo"
              src="img/lan5.png" alt="lansuntraveler"
            />
          </div>

          <div class="recipe">
            <img
              class="pie-photo"
              src="img/ok22.png" alt="portfolio"
            />
          </div>

        </div>

        <div class="recipe-content">

          <div class="recipe active blue">
            <div class="recipe-page">1/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">Gold</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463">
                </svg>
                <p>Database Project</p>
              </div>
              <div class="pie-context">
                Design / Web / App / Q & A
              </div>
              <div class="pie-cta" 
            onclick ="window.open('http://hah0573.dothome.co.kr/gold/')" >
              Detail View</div>
              <div class="pie-cta" 
            onclick ="window.open('https://github.com/kuy-ok-cho/db-project')" >
              README</div>
            </div>
          </div>

          <div class="recipe">
            <div class="recipe-page">2/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">Tumblbug</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463"></svg>
                <p>Site Renewal</p>
              </div>
              <div class="pie-context">
                기존 사이트 클론
              </div>
              <div class="pie-cta"
              onclick ="window.open('http://hah0573.dothome.co.kr/tumblbug/')">Detail View</div>
              <div class="pie-cta" 
            onclick ="window.open('https://github.com/kuy-ok-cho/tumblbug')" >
              README</div>
            </div>
          </div>
          
          <div class="recipe orange">
            <div class="recipe-page">3/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">Movie Api</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463">
                  <g></g>
                </svg>
                <p>Movie Search Site</p>
              </div>
              <div class="pie-context">
                영화 검색 사이트
              </div>
              <div class="pie-cta" onclick ="window.open('http://hah0573.dothome.co.kr/movie_api/')">Detail View</div>
              <div class="pie-cta" 
            onclick ="window.open('https://github.com/kuy-ok-cho/movie_api')" >
              README</div>
            </div>
          </div>

          <div class="recipe brown">
            <div class="recipe-page">4/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">My Schedule</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463"></svg>
                <p>Schdule</p>
              </div>
              <div class="pie-context">
              일정관리 페이지
              </div>
              <div class="pie-cta"
              onclick ="window.open('http://hah0573.dothome.co.kr/myschedule/')">Detail Veiw</div>
              <div class="pie-cta" 
            onclick ="window.open('https://github.com/kuy-ok-cho/My-schedule')" >
              README</div>
            </div>
          </div>

          <div class="recipe green">
            <div class="recipe-page">5/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">Lansun Traveler</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463"></svg>
                <p>사이트 기획</p>
              </div>
              <div class="pie-context">
                '랜선 여행가' 커뮤니티 사이트 기획
              </div>
              <div class="pie-cta"
              onclick ="window.open('http://hah0573.dothome.co.kr/lansuntraveler/')">
                  Detail View</div>
                  <div class="pie-cta"
              onclick ="window.open('https://drive.google.com/file/d/1VtwuYwsdCYK939XYgQsl8GPUZbeh7i3Y/view?usp=sharing')">
                  PDF</div>
            </div>
          </div>

          <div class="recipe green">
            <div class="recipe-page">6/6</div>
            <div class="recipe-content-inner">
              <h1 class="pie-name">Ok's Portfolio</h1>
              <div class="pie-serving">
                <svg x="0px" y="0px" viewBox="0 0 463 463"></svg>
                <p>Collecting work</p>
              </div>
              <div class="pie-context">
                작업물 모아보는 포트폴리오
              </div>
              <div class="pie-cta"
              onclick ="window.open('http://hah0573.dothome.co.kr/ok2/')">
                  Detail View</div>
                  <div class="pie-cta"
              onclick ="window.open('https://github.com/kuy-ok-cho/ok2')">
                  PDF</div>
            </div>
          </div>

        </div>
      </div>
      </div>

     </section>
        <!-- end of section3 -->


      <footer class="section fp-auto-height">
        <div class="center ctCenter">
        <div class="sign">
          <svg class="happy" viewBox="0 0 400 220">
            <defs>
              <path id="curve" d="m-0.41001,199.5607c63.99761,-54.47379 122.62126,-64.15525 202.63849,-65.18877c80.01723,-1.03352 153.51356,23.10371 197.04216,64.72611"></path>
            </defs>
            
            <text >
              <textPath href="#curve" startOffset="10%" class="thanx">Thank you!</textPath>
            </text>
          </svg>
          <div class="year">
            <span>C</span>
            <span>o</span>
            <span>n</span>
            <span>t</span>
            <span>a</span>
            <span>c</span>
            <span>t</span>
            <span>&nbsp;</span>
            <span>M</span>
            <span>e</span>
            <span>?</span>
          </div>

          <div class="stars">
            <span><i class="fa fa-hand-o-down"></i></span>
            <span><i class="fa fa-hand-o-down"></i></span>
          </div>
      </div>


        <!-- start of contact sns -->
        <div class="sns">

          <div class="hexagon-wrapper">           
          <div class="hexagon">
            <i class="fa fa-facebook"
            onclick ="window.open('https://www.facebook.com/profile.php?id=100003677657091')" ></i>
          </div>
          </div>

          <div class="hexagon-wrapper">
          <div class="hexagon">
            <i class="fa fa-github"
            onclick="window.open('https://github.com/kuy-ok-cho')"></i>
          </div>
          </div>

          <div class="hexagon-wrapper">
          <div class="hexagon">
            <i class="fa fa-instagram"
            onclick="window.open('https://www.instagram.com/invites/contact/?i=19uz0sr422yy7&utm_content=szfr78')"></i>          
          </div>
          </div>

          <div class="hexagon-wrapper">
          <div class="hexagon">
            <i class="fa fa-commenting"
            onclick="window.open('https://open.kakao.com/o/sqKP3g4c')"></i>          
          </div>
          </div>

          <div class="hexagon-wrapper">
          <div class="hexagon">
          <a href="mailto:okj941220@gmail.com"
          class="fa fa-envelope-o">  
            </a>      
          </div>
          </div>

        </div>
        <!-- end of contact  sns-->
        </div>
        <!-- end of contact center -->
      </footer>
      <!-- end of footer -->

    </main>
</div>




<!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- fullpage -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.js"></script>
<script src="js/fullpage.js"></script>

<!-- canvus -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/stats.js/r11/Stats.js'></script>
<script src="js/canvas.js"></script>


<!-- partial -->
<script src='https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js'></script>

<!-- portfolio -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js'></script>
<script src="js/portfolio.js"></script>


<script  src="js/profile.js"></script>
<script src="js/slide.js"></script>
<script src="js/typing.js"></script>
<script src="js/scroll.js"></script>
<script src="js/contact.js"></script>


   
</body>
</html>