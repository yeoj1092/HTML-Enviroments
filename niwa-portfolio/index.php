<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>R&D Team Portfolio</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link href="./default.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body class="d-flex flex-column">

  <!--Header-->


  <nav class="navbar navbar-expand-lg navbar-dark bg-img">
    <a class="navbar-brand px-5" href="#">
      <img src="https://niwa.co.nz/sites/niwa.co.nz/files/niwa-2018-horizontal-final-400_0.png" height="70" alt="" />
    </a>

    <ul class="navbar-nav mb-lg-0">
      <li class="nav-item">
        <a class="nav-link underline" id="nav-item-home" href="#" style="color:  rgb(5, 1, 68); font-size:20px"
          onclick="showContent('home')"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-item-about" href="#" style="color: rgb(5, 1, 68); font-size:20px"
          onclick="showContent('about')"><b>About</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-item-research" href="#" style="color: rgb(5, 1, 68); font-size:20px"
          onclick="showContent('research')"><b>Research & Upskilling</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-item-planning" href="#" style="color: rgb(5, 1, 68); font-size:20px"
          onclick="showContent('planning')"><b>Planning & Control</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-item-communication" href="#" style="color: rgb(5, 1, 68); font-size:20px"
          onclick="showContent('communication')"><b>Communication & Teamwork</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="nav-item-devandqa" href="#" style="color: rgb(5, 1, 68); font-size:20px"
          onclick="showContent('devandqa')"><b>Development & Quality Assurance</b></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#"
          style="color: rgb(5, 1, 68); font-size:20px" role="button" data-bs-toggle="dropdown"
          aria-expanded="false"><b>Appendix</b></a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
          <li><a class="dropdown-item" id="nav-item-Team_Workbooks" href="#"
              style="color: rgb(5, 1, 68); font-size:20px" onclick="showContent('Team_Workbooks')">Team WorkBooks</a>
          </li>
          <li><a class="dropdown-item" id="nav-item-Presentation" href="#" style="color: rgb(5, 1, 68); font-size:20px"
              onclick="showContent('Presentation')">Presentation Slides</a></li>
        </ul>
      </li>
    </ul>

  </nav>

  <!--Header-->

  <!--Home-->
  <div id="content" class="content">
    <div class="show" id="home">

      <!-- Header-->
      <header class="bg-dark py-5">
        <div class="container px-5">
          <div class="row gx-5 align-items-center justify-content-center">
            <div class="col-lg-8 col-xl-7 col-xxl-6">
              <div class="my-5 text-center text-xl-start">
                <h1 class="display-5 fw-bolder text-white mb-2">Welcome to view our R&D team portfolio</h1>
                <p class="lead fw-normal text-white-50 mb-4">This is a final year R&D project with AUT and NIWA. The
                  goal of this project is to develop an Android application proof of concept to crowd-source data on
                  heating emmissions from wood and coal burning in households.</p>
                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                  <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Read More</a>
                  <a class="btn btn-outline-light btn-lg px-4" href="#" onclick="showContent('research')">Learn More</a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5"
                src="https://cdn.pixabay.com/photo/2017/03/15/14/17/fire-2146343_960_720.jpg" alt="..." /></div>
          </div>
        </div>
      </header>


      <!-- Features section-->
      <section class="py-5" id="features">
        <div class="container px-5 my-5">
          <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <h2 class="fw-bolder mb-0">Four main functions of our Wood Smoke Monitoring App</h2>
            </div>
            <div class="col-lg-8">
              <div class="row gx-5 row-cols-1 row-cols-md-2">
                <div class="col mb-5 h-100">
                  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-map"></i></div>
                  <h2 class="h5">No.1 - Air Quality Map</h2>
                  <p class="mb-0">Always check the air quality near you when you feel unsecure.</p>
                </div>
                <div class="col mb-5 h-100">
                  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-pen"></i></div>
                  <h2 class="h5">No.2 - Report Smoke Incident</h2>
                  <p class="mb-0">A quick way to report any smoke incident here.</p>
                </div>
                <div class="col mb-5 mb-md-0 h-100">
                  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-book"></i></div>
                  <h2 class="h5">No.3 - Report history</h2>
                  <p class="mb-0">You can always check your report history here.</p>
                </div>
                <div class="col h-100">
                  <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-info"></i></div>
                  <h2 class="h5">No.4 - Information Page</h2>
                  <p class="mb-0">Getting to know more information about air quality here.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Testimonial section-->
      <div class="py-5 bg-light">
        <div class="container px-5 my-5">
          <div class="row gx-5 justify-content-center">
            <div class="col-lg-10 col-xl-7">
              <div class="text-center">
                <div class="fs-4 mb-4 fst-italic">Smoke and pollutants from fires can cause a number of health problems,
                  including breathing difficulties and eye irritations.</div>
                <div class="d-flex align-items-center justify-content-center">
                  <img class="rounded-circle me-3" src="img/aucklandcouncil.png" alt="..." />
                  <div class="fw-bold">
                    Auckland Council
                    <span class="fw-bold text-primary mx-1">/</span>
                    New Zealand Goverment
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    </main>

  </div>
  </div>

  <!-- About page-->
  <div class="hide" id="about">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Our mission is to make report wood smoke incident easier for
                everyone live in Aotearoa New Zealand.</h1>

              <a class="btn btn-primary btn-lg" href="#scroll-target">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
      <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/trellooo.png" alt="..." /></div>
          <div class="col-lg-6">
            <h2 class="fw-bolder">Collaboration tool-Trello Board</h2>
            <p class="lead fw-normal text-muted mb-0">Our team use trello board as one of our collaboration tool to
              manager the project development.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- About section two-->
    <section class="py-5">
      <div class="container px-5 my-5">
        <div class="row gx-5 align-items-center">
          <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="img/dc.png"
              alt="..." /></div>
          <div class="col-lg-6">
            <h2 class="fw-bolder">Team Communication tool-Discord</h2>
            <p class="lead fw-normal text-muted mb-0">Our team use discord as our main communication tool in everyday
              developing life</p>
          </div>
        </div>
      </div>
    </section>
    <!-- About section three-->
    <section class="py-5 bg-light">
      <div class="container px-5 my-5">
        <div class="text-center">
          <h2 class="fw-bolder">Our R&D team</h2>
          <p class="lead fw-normal text-muted mb-5">Dedicated to quality and project success</p>
        </div>
        <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
          <div class="col mb-5 mb-5 mb-xl-0">
            <div class="text-center">
              <img class="img-fluid rounded-circle mb-4 px-4" src="img/Vinson.png" alt="..." />
              <h5 class="fw-bolder">Vinson Benduya - 19089783</h5>
              <div class="fst-italic text-muted">Project Manager</div>
            </div>
          </div>
          <div class="col mb-5 mb-5 mb-xl-0">
            <div class="text-center">
              <img class="img-fluid rounded-circle mb-4 px-4" src="img/Allan.png" alt="..." />
              <h5 class="fw-bolder">Allan liang - 18022501</h5>
              <div class="fst-italic text-muted">Software Developer</div>
            </div>
          </div>
          <div class="col mb-5 mb-5 mb-sm-0">
            <div class="text-center">
              <img class="img-fluid rounded-circle mb-4 px-4" src="img/Eric.png" alt="..." />
              <h5 class="fw-bolder">Yungyeom Hwang - 19067595</h5>
              <div class="fst-italic text-muted">Software Developer</div>
            </div>
          </div>
          <div class="col mb-5">
            <div class="text-center">
              <img class="img-fluid rounded-circle mb-4 px-4" src="img/Chenduo.png" alt="..." />
              <h5 class="fw-bolder">Chenduo Ouyang - 19091093</h5>
              <div class="fst-italic text-muted">Software Developer</div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>


  <!-- Research page-->
  <div class="hide" id="research">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Why we need to do a project research?</h1>
              <p class="lead fw-normal text-white text-muted mb-4">The main purposes of research are to inform action,
                gather evidence for theories, and contribute to developing knowledge in a field of study</p>
              <a class="btn btn-primary btn-lg" href="#research1">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- section one -->
    <header class="py-5" id="research1">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Research</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R&D/Portfolio/01-Research-and-Upskilling/platform_research.pdf"
                    target="_blank">Application Platform Research</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Project Requirements</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/project_requirements.docx?d=w1af13104f1a74ee6a46b51e964e82f5d&csf=1&web=1&e=I0PdgH"
                    target="_blank">Project Requirements</a>
                </li>
              </ul>

              <h2 class="fw-bolder">UI Mock-up</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/mockup_v1.pdf?csf=1&web=1&e=hyeZlB"
                    target="_blank">UI Mock-up v1</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/mockup_v2.pdf?csf=1&web=1&e=yvrghu"
                    target="_blank">UI Mock-up v2</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/mockup_v3.pdf?csf=1&web=1&e=HSxdIG"
                    target="_blank">UI Mock-up v3</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Project Methodology - Scrumban</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/R%26D%20Project%20Methodology.docx?d=wef4cb7657f144e4bbb352119ae6d1aaf&csf=1&web=1&e=63Ks2v"
                    target="_blank">Project Methodology - Scrumban</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Skills Analysis</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:x:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/skills_analysis.xlsx?d=w89424628228642259d0b08841dcad481&csf=1&web=1&e=5xivkS"
                    target="_blank">Skills Analysis</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Training Links and Resources</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/training-links-and-resources.docx?d=w30ab6dde1f774139b950dcdf6457430b&csf=1&web=1&e=iSTOr4"
                    target="_blank">Training Links and Resources</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Simple Application Diagram</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:i:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/simple-application-diagram.png?csf=1&web=1&e=Weze6u"
                    target="_blank">Simple Application Diagram</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Software Architecture Diagram</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:i:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/software-architecture_diagram.png?csf=1&web=1&e=nMepaY"
                    target="_blank">Software Architecture Diagram</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Database Schema</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/01-Research-and-Upskilling/database_schema_v1.pdf?csf=1&web=1&e=VDS0rl"
                    target="_blank">Database Schema</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!--Research-->

  <!--Planning-->
  <div class="hide" id="planning">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Why we need to do project planning?</h1>
              <p class="lead fw-normal text-white text-muted mb-4">Project planning plays an essential role in helping
                guide stakeholders, sponsors, teams, and the project manager through other project phases. Planning is
                needed to identify desired goals, reduce risks, avoid missed deadlines, and ultimately deliver the
                agreed product, service or result.</p>
              <a class="btn btn-primary btn-lg" href="#planning1">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="py-5" id="planning1">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Project Proposal</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/project_proposal_v1.pdf?csf=1&web=1&e=ChIa4A"
                    target="_blank">Project Proposal v1</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/project_proposal_v2.pdf?csf=1&web=1&e=51RbJf"
                    target="_blank">Project Proposal v2</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/project_proposal_v3.pdf?csf=1&web=1&e=whcPxs"
                    target="_blank">Project Proposal v3</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/project_proposal_v4.pdf?csf=1&web=1&e=hOfdCv"
                    target="_blank">Project Proposal v4</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Communication Management Plan</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/communication_management_plan.docx?d=w34c9cf1e99584ddfbc551c6b2c05576d&csf=1&web=1&e=57xlSJ"
                    target="_blank">Communication Management Plan</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Gantt Chart</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/gantt_chart_v1.pdf?csf=1&web=1&e=aShKY6"
                    target="_blank">Gantt Chart v1</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:i:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/gantt_chart_v2.jpg?csf=1&web=1&e=gdg3Ph"
                    target="_blank">Gantt Chart v2</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Issue Log</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/issue_log.docx?d=w158bb90dfccf44998b3fcc84c111181b&csf=1&web=1&e=AhYlia"
                    target="_blank">Issue Log</a>
                </li>
              </ul>


              <h2 class="fw-bolder">Milestone</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:x:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/milestone.xlsx?d=w2090a1cebddd4fdb9ba5aeafecf0721c&csf=1&web=1&e=5VsjUy"
                    target="_blank">Milestone</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Project Charter</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/project_charter.docx?d=wa1c3ec359e6241658675beb1288cfc35&csf=1&web=1&e=omrMFB"
                    target="_blank">Project Charter</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Quality Assurance Plan</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/R%26D%20Quality%20Assurance%20Plan.docx?d=wac38a4f1c884461da4cbe8e521407159&csf=1&web=1&e=zNzzsg"
                    target="_blank">Quality Assurance Plan</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Risk Register</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/R%26D%20Risk%20register.docx?d=w1edcf1a0d051467f951d9b2c9f1290d0&csf=1&web=1&e=3OEzda"
                    target="_blank">Risk Register v1</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:x:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/Risk%20Register%20v2.xlsx?d=w15fc3c7703d746f5bf4870f2b1b50e04&csf=1&web=1&e=uKQ6YK"
                    target="_blank">Risk Register v2</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Stakeholder Strategy</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/stakeholder_strategy.docx?d=waa1c3702b1af4a25847c57820f0e938b&csf=1&web=1&e=jWggCa"
                    target="_blank">Stakeholder Strategy</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Stakeholder Register</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/stakeholder-register.docx?d=wea873e7b01c340dea0ea689e442eeb26&csf=1&web=1&e=R2IlS3"
                    target="_blank">Stakeholder Register</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Work Breakdown Structure</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/work_breakdown_structure.docx?d=w8f2e6794c6484022bc04f51f2aecfec0&csf=1&web=1&e=WdxrP4"
                    target="_blank">Work Breakdown Structure</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Mid-Project Status Report</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/02-Planning-and-Control/status_report_v1.pdf?csf=1&web=1&e=VWKuID"
                    target="_blank">Mid-Project Status Report</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

  </div>

  <!--Planning-->

  <!--Communication-->
  <div class="hide" id="communication">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Why communication is important? </h1>
              <p class="lead fw-normal text-white text-muted mb-4">Good communication keeps conflict and confusion from
                bogging your project down by ensuring key players are aligned on project goals and know exactly what's
                expected of them. It also helps build team-wide trust so everyone works better together from project
                start to finish.</p>
              <a class="btn btn-primary btn-lg" href="#communication1">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="py-5" id="communication1">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Team Bio</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/03-Communication-and-Teamwork/team_bio_for_client.pdf?csf=1&web=1&e=mgWWx5"
                    target="_blank">Team Bio</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Team Contact Information</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:x:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/03-Communication-and-Teamwork/team_contact_information.xlsx?d=w35dc43650903425db5246da020d9c781&csf=1&web=1&e=VNWN77"
                    target="_blank">Team Contact Information</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Team Contact</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/03-Communication-and-Teamwork/team_contract.docx?d=w265d3f9600e34562921f509f118dbecb&csf=1&web=1&e=MUc5Tm"
                    target="_blank">Team Contract</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Client and Mentor Meeting Minutes</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/03-Communication-and-Teamwork/R%26D_client_mentor_meeting_minutes.docx?d=wd3fd6ecd81e8447f85782a08ad9cbce9&csf=1&web=1&e=DGnDV6"
                    target="_blank">Client and Mentor Meeting Minutes</a>
                </li>
              </ul>

              <h2 class="fw-bolder">Team Only Meeting Minutes</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/03-Communication-and-Teamwork/R%26D_team_meeting_minutes.docx?d=w65c8619bab96400d8ce337a848880ab7&csf=1&web=1&e=ob7wKk"
                    target="_blank">Team Only Meeting Minutes</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

  </div>

  <!--Communication-->

  <!--Development & Quanlity Assurance-->
  <div class="hide" id="devandqa">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Why is development important?</h1>
              <p class="lead fw-normal text-white text-muted mb-4">As well as creating better jobs, development is
                important for a country because it improves business and trade. As countries develop more international
                companies move in and trade with other countries grows. This further improves the countries economy and
                also further increases the range of good jobs on offer.</p>
              <a class="btn btn-primary btn-lg" href="#qa">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="py-5" id="qa">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Development and Quality Assurance</h2>
              <ul>
                <li>
                  <a href="https://rnd-team-niwa-aut-android.atlassian.net/jira/software/projects/RTNA/boards/1"
                    target="_blank">JIRA Board</a>

                </li>
                <h2 class="fw-bolder">Our Trello Board</h2>
                <ul>
                  <li>
                    <a href="https://trello.com/b/57xG76iN/woodsmoke-monitoring-application-board"
                      target="_blank">Trello Board</a>
                    <h2 class="fw-bolder">Our Github Repository</h2>
                    <ul>
                      <li>
                        <a href="https://github.com/tzq8947/niwa-woodsmoke-monitoring-android" target="_blank">Github
                          Repository</a>
                      </li>
                    </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

  </div>
  <!--Development & Quanlity Assurance-->

  <!--Presentation-->
  <div class="hide" id="Presentation">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">What Are Benefits of PowerPoint?</h1>
              <p class="lead fw-normal text-white text-muted mb-4"> It can even help reduce speaking anxiety by drawing
                eyes away from the speaker and towards a screen. Just do not expect this technology to substitute for
                sound and dynamic speaking skills.</p>
              <a class="btn btn-primary btn-lg" href="#presentation1">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="py-5" id="presentation1">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Presentation Slides</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:p:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/06%20-%20Presentation%20Slides/tech_stack_research.pptx?d=w3a4de5f1c0b4441796a266cad0a82d4c&csf=1&web=1&e=j3baXF"
                    target="_blank">Platform Research</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:p:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/06%20-%20Presentation%20Slides/Woodsmoke%20Monitoring%20Application%20Proposal.pptx?d=w6432c9dd1c844541b81dd854f9cce5f3&csf=1&web=1&e=Mt005B"
                    target="_blank">Project Proposal Presentation</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/06%20-%20Presentation%20Slides/Mid-Project%20status%20report%20Presentation.pdf?csf=1&web=1&e=0EOKHR"
                    target="_blank">Mid-project Status Report</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
  </div>
  <!--Presentation End-->

  <!--Team workbooks-->
  <div class="hide" id="Team_Workbooks">

    <header class="bg-dark py-5">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h1 class="fw-bolder text-white mb-3">Why we should keep a worklog?</h1>
              <p class="lead fw-normal text-white text-muted mb-4">The prioritized daily task list and appointments were
                the easy part. They represented the plan. If everything went according to plan, then I would have a
                perfect record of what I did that day, and who I met with. When was the last time your day went exactly
                like you planned?
                This look back at the day will help you get a better picture of what you’re doing with your time and get
                better at getting things done.</p>
              <a class="btn btn-primary btn-lg" href="#teamwork">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <header class="py-5" id="teamwork">
      <div class="container px-5">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-xxl-6">
            <div class="text-center my-5">
              <h2 class="fw-bolder">Team Workbooks</h2>
              <ul>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/05%20-%20Workbooks/Alan_Liang_logbook_18022501.pdf?csf=1&web=1&e=CuUgSv"
                    target="_blank">Alan Liang</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/05%20-%20Workbooks/Chenduo_Ouyang_logbook_19091093.docx?d=w94db4b1bbb2a4a2baef8e1699bea7ca1&csf=1&web=1&e=WsmNvf"
                    target="_blank">Chenduo Ouyang (Yumi)</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:b:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/05%20-%20Workbooks/Vinson_Beduya_logbook_19089783_Week_1_to_11.pdf?csf=1&web=1&e=e9FsCg"
                    target="_blank">Vinson Beduya</a>
                </li>
                <li>
                  <a href="https://autuni-my.sharepoint.com/:w:/r/personal/tzq8947_autuni_ac_nz/Documents/NIWA%20R%26D/Portfolio/05%20-%20Workbooks/Yungyeom_Hwang_Logbook_19067595.docx?d=w8a9f3fb7b9324c5fb2b08b285dc398b7&csf=1&web=1&e=4X1U7u"
                    target="_blank">Yungyeom Hwang (Eric)</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

  </div>
  <!--Team workbooks-->

  <!-- Footer-->
  <footer class="bg-dark py-4 mt-auto">
    <div class="container px-5">
      <div class="row align-items-center justify-content-between flex-column flex-sm-row">
        <div class="col-auto">
          <div class="small m-0 text-white">Copyright &copy; Niwa R&D Team 2022</div>
        </div>
        <div class="col-auto">
          <a class="link-light small" href="#!">Privacy</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Terms</a>
          <span class="text-white mx-1">&middot;</span>
          <a class="link-light small" href="#!">Contact</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script> 
  const DIV_IDS = ["home", "about", "research", "planning", "communication", "devandqa", "Presentation", "Team_Workbooks", "Reflection"]
const APPENDIX_DIV_IDS = ["Presentation", "Team_Workbooks", "Reflection"]
const DROPDOWN_ID = "navbarDropdownPortfolio"

const showContent = (id) => {
  DIV_IDS.forEach(divId => {
    const divIdQuery = $(`div#${divId}`)
    const navLinkQuery = $(`a#nav-item-${divId}`)
    const dropdownQuery = $(`a#${DROPDOWN_ID}`)
    if (id == divId) {
      divIdQuery
        .addClass("show")
        .removeClass("hide")

      // Add Nav Item Underline
      navLinkQuery.addClass("underline")

      // Add Dropdown Appendix Underline
      if (APPENDIX_DIV_IDS.includes(divId)) {
        dropdownQuery.addClass("underline")
      }
    } else {
      divIdQuery
        .addClass("hide")
        .removeClass("show")

      // Remove Nav Item Underline
      navLinkQuery.removeClass("underline")

      // Remove Dropdown Appendix Underline
      if (!APPENDIX_DIV_IDS.includes(divId)) {
        dropdownQuery.removeClass("underline")
      }
    }
  })
}
</script>
</body>

</html>