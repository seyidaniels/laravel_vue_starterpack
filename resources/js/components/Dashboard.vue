<template>
  <div>
    <!-- MODALS
    ==================================================-->
    <!-- Modal: Demo -->
    <div
      class="modal fade fixed-right"
      id="modalDemo"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">
            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="text-center">
              <img
                src="/dashboard_assets/assets/img/illustrations/designer-life.svg"
                alt="..."
                class="img-fluid mb-3"
              >
            </div>

            <h2 class="text-center mb-2">Make Dashkit Your Own</h2>

            <p
              class="text-center mb-4"
            >Set preferences that will be cookied for your live preview demonstration.</p>

            <hr class="mb-4">

            <h4 class="mb-1">Color Scheme</h4>

            <p class="small text-muted mb-3">Overall light or dark presentation.</p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked>
                <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark">
                <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">Navigation Position</h4>

            <p class="small text-muted mb-3">Select the primary navigation paradigm for your app.</p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input
                  type="radio"
                  name="navPosition"
                  id="navPositionSidenav"
                  value="sidenav"
                  checked
                > Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <h4 class="mb-1">Sidebar Color</h4>

            <p
              class="small text-muted mb-3"
            >Usually dictated by the color scheme, but can be overriden.</p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input
                  type="radio"
                  name="sidebarColor"
                  id="sidebarColorDefault"
                  value="default"
                  checked
                > Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="submit" class="btn btn-block btn-primary mt-auto">Preview</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values="['name']">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">Add a member</h4>
                </div>
                <div class="col-auto">
                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              </div>
              <!-- / .row -->
            </div>
            <div class="card-header">
              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge">
                  <input
                    type="search"
                    class="form-control form-control-prepended search"
                    placeholder="Search"
                  >
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-body">
              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-5.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </a>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Miyah Myles</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">Add</a>
                    </div>
                  </div>
                  <!-- / .row -->
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-6.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </a>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Ryu Duke</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">Add</a>
                    </div>
                  </div>
                  <!-- / .row -->
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-7.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </a>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Glen Rouse</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">Add</a>
                    </div>
                  </div>
                  <!-- / .row -->
                </li>
                <li class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-8.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </a>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Grace Gross</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>
                    </div>
                    <div class="col-auto">
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">Add</a>
                    </div>
                  </div>
                  <!-- / .row -->
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-body" data-toggle="lists" data-lists-values="['name']">
            <!-- Form -->
            <form class="mb-4">
              <div class="input-group input-group-merge">
                <input
                  type="search"
                  class="form-control form-control-prepended search"
                  placeholder="Search"
                >
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- List group -->
            <div class="my--3">
              <div class="list-group list-group-flush list">
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/teams/team-logo-1.jpg"
                          alt="..."
                          class="avatar-img rounded"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Airbnb</h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span>
                        <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/teams/team-logo-2.jpg"
                          alt="..."
                          class="avatar-img rounded"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Medium Corporation</h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span>
                        <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img
                          src="/dashboard_assets/assets/img/avatars/projects/project-1.jpg"
                          alt="..."
                          class="avatar-img rounded"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Homepage Redesign</h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span>
                        <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img
                          src="/dashboard_assets/assets/img/avatars/projects/project-2.jpg"
                          alt="..."
                          class="avatar-img rounded"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Travels & Time</h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span>
                        <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img
                          src="/dashboard_assets/assets/img/avatars/projects/project-3.jpg"
                          alt="..."
                          class="avatar-img rounded"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Safari Exploration</h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span>
                        <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="profile-posts.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-1.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Dianna Smiley</h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
                <a href="profile-posts.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <!-- Avatar -->
                      <div class="avatar">
                        <img
                          src="/dashboard_assets/assets/img/avatars/profiles/avatar-2.jpg"
                          alt="..."
                          class="avatar-img rounded-circle"
                        >
                      </div>
                    </div>
                    <div class="col ml--2">
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">Ab Hadley</h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>
                    </div>
                  </div>
                  <!-- / .row -->
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Activity -->
    <div
      class="modal fade"
      id="sidebarModalActivity"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <!-- Title -->
            <h4 class="modal-title">Notifications</h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- List group -->
            <div class="list-group list-group-flush my--3">
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-1.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Dianna Smiley</strong> shared your post with
                      <strong class="text-body">Ab Hadley</strong>,
                      <strong class="text-body">Adolfo Hess</strong>, and
                      <strong class="text-body">3 others</strong>.
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-2.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-3.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Adolfo Hess</strong> commented
                      <blockquote
                        class="text-body"
                      >“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...”</blockquote>
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-4.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Daniela Dewitt</strong> subscribed to you.
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-5.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Miyah Myles</strong> shared your post with
                      <strong class="text-body">Ryu Duke</strong>,
                      <strong class="text-body">Glen Rouse</strong>, and
                      <strong class="text-body">3 others</strong>.
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-6.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Ryu Duke</strong> reacted to your post with a 😍
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-7.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Glen Rouse</strong> commented
                      <blockquote
                        class="text-body"
                      >“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...”</blockquote>
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
              <a class="list-group-item px-0" href="#!">
                <div class="row">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img
                        src="/dashboard_assets/assets/img/avatars/profiles/avatar-8.jpg"
                        alt="..."
                        class="avatar-img rounded-circle"
                      >
                    </div>
                  </div>
                  <div class="col ml--2">
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Grace Gross</strong> subscribed to you.
                    </div>
                  </div>
                  <div class="col-auto">
                    <small class="text-muted">2m</small>
                  </div>
                </div>
                <!-- / .row -->
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <app-navbar></app-navbar>

    <app-sidebar></app-sidebar>
    <div class="main-content">
      <!-- HEADER -->
      <div class="header">
        <div class="container-fluid">
          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-center">
              <div class="col-auto">
                <!-- Avatar -->
                <div class="avatar avatar-lg avatar-4by3">
                  <img
                    src="/dashboard_assets/assets/img/avatars/projects/project-1.jpg"
                    alt="..."
                    class="avatar-img rounded"
                  >
                </div>
              </div>
              <div class="col ml--3 ml-md--2">
                <!-- Pretitle -->
                <h6 class="header-pretitle">Projects</h6>

                <!-- Title -->
                <h1 class="header-title">Homepage Redesign</h1>
              </div>
              <div class="col-12 col-md-auto mt-3 mt-md-0">
                <!-- Avatar group -->
                <div class="avatar-group">
                  <a
                    href="profile-posts.html"
                    class="avatar"
                    data-toggle="tooltip"
                    title
                    data-original-title="Dianna Smiley"
                  >
                    <img
                      src="/dashboard_assets/assets/img/avatars/profiles/avatar-1.jpg"
                      alt="..."
                      class="avatar-img rounded-circle"
                    >
                  </a>
                  <a
                    href="profile-posts.html"
                    class="avatar"
                    data-toggle="tooltip"
                    title
                    data-original-title="Ab Hadley"
                  >
                    <img
                      src="/dashboard_assets/assets/img/avatars/profiles/avatar-2.jpg"
                      alt="..."
                      class="avatar-img rounded-circle"
                    >
                  </a>
                  <a
                    href="profile-posts.html"
                    class="avatar"
                    data-toggle="tooltip"
                    title
                    data-original-title="Adolfo Hess"
                  >
                    <img
                      src="/dashboard_assets/assets/img/avatars/profiles/avatar-3.jpg"
                      alt="..."
                      class="avatar-img rounded-circle"
                    >
                  </a>
                  <a
                    href="profile-posts.html"
                    class="avatar"
                    data-toggle="tooltip"
                    title
                    data-original-title="Daniela Dewitt"
                  >
                    <img
                      src="/dashboard_assets/assets/img/avatars/profiles/avatar-4.jpg"
                      alt="..."
                      class="avatar-img rounded-circle"
                    >
                  </a>
                </div>

                <!-- Button -->
                <a
                  href="#modalMembers"
                  class="btn btn-lg btn-rounded-circle btn-white"
                  data-toggle="modal"
                >+</a>
              </div>
            </div>
            <!-- / .row -->
            <div class="row align-items-center">
              <div class="col">
                <!-- Nav -->
                <ul class="nav nav-tabs nav-overflow header-tabs">
                  <li class="nav-item">
                    <a href="project-overview.html" class="nav-link active">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a href="project-files.html" class="nav-link">Files</a>
                  </li>
                  <li class="nav-item">
                    <a href="project-reports.html" class="nav-link">Reports</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / .header -->
      <!-- CONTENT -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Alert -->
            <div class="alert alert-primary">This project is forecasted to complete below budget!
              <!-- Close -->
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>

            <!-- Card -->
            <div class="card">
              <div class="card-header">
                <!-- Tabs -->
                <ul class="nav nav-tabs card-header-tabs">
                  <li
                    class="nav-item"
                    data-toggle="chart"
                    href="#"performanceChart"
                    data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[0,10,5,15,10,20,15,25,20,30,25,40]}]}}"
                    data-prefix="$"
                    data-suffix="k"
                  >
                    <a class="nav-link active" href="#!" data-toggle="tab">Earned</a>
                  </li>
                  <li
                    class="nav-item"
                    data-toggle="chart"
                    href="#"performanceChart"
                    data-update="{&quot;data&quot;:{&quot;datasets&quot;:[{&quot;data&quot;:[7,35,12,27,34,17,19,30,28,32,24,39]}]}}"
                    data-prefix
                    data-suffix="hr"
                  >
                    <a class="nav-link" href="#!" data-toggle="tab">Hours Worked</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <!-- Chart -->
                <div class="chart">
                  <div
                    class="chartjs-size-monitor"
                    style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"
                  >
                    <div
                      class="chartjs-size-monitor-expand"
                      style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"
                    >
                      <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div
                      class="chartjs-size-monitor-shrink"
                      style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"
                    >
                      <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                  </div>
                  <canvas
                    id="performanceChart"
                    class="chart-canvas chartjs-render-monitor"
                    width="1344"
                    height="600"
                    style="display: block; width: 672px; height: 300px;"
                  ></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- / .row -->
        <div class="row">
          <div class="col-12 col-lg-6 col-xl">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">Budget</h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">$24,500</span>

                    <!-- Badge -->
                    <span class="badge badge-soft-success mt--1">+3.5%</span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-dollar-sign text-muted mb-0"></span>
                  </div>
                </div>
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">Total Hours</h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">763.5</span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-briefcase text-muted mb-0"></span>
                  </div>
                </div>
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">Progress</h6>

                    <div class="row align-items-center no-gutters">
                      <div class="col-auto">
                        <!-- Heading -->
                        <span class="h2 mr-2 mb-0">84.5%</span>
                      </div>
                      <div class="col">
                        <!-- Progress -->
                        <div class="progress progress-sm">
                          <div
                            class="progress-bar"
                            role="progressbar"
                            style="width: 85%"
                            aria-valuenow="85"
                            aria-valuemin="0"
                            aria-valuemax="100"
                          ></div>
                        </div>
                      </div>
                    </div>
                    <!-- / .row -->
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-clipboard text-muted mb-0"></span>
                  </div>
                </div>
                <!-- / .row -->
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl">
            <!-- Card -->
            <div class="card">
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h6 class="card-title text-uppercase text-muted mb-2">Effective Hourly</h6>

                    <!-- Heading -->
                    <span class="h2 mb-0">$85.50</span>
                  </div>
                  <div class="col-auto">
                    <!-- Icon -->
                    <span class="h2 fe fe-clock text-muted mb-0"></span>
                  </div>
                </div>
                <!-- / .row -->
              </div>
            </div>
          </div>
        </div>
        <!-- / .row -->
        <div class="row">
          <div class="col-12 col-xl-8">
            <!-- Performance -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h4 class="card-header-title">Performance</h4>
                  </div>
                  <div class="col-auto">
                    <!-- Button -->
                    <a href="#!" class="btn btn-sm btn-white">Export</a>
                  </div>
                </div>
                <!-- / .row -->
              </div>
              <div class="table-responsive mb-0">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>Member</th>
                      <th>Schedule</th>
                      <th>Hours Billed</th>
                      <th>Completion</th>
                      <th>Effective Rate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <!-- Avatar -->
                        <a href="profile-posts-2.html" class="avatar avatar-xs d-inline-block mr-2">
                          <img
                            src="/dashboard_assets/assets/img/avatars/profiles/avatar-1.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </a>

                        <!-- Title -->
                        <span>Dianna Smiley</span>
                      </td>
                      <td>
                        <span class="text-success">●</span> On Schedule
                      </td>
                      <td>271</td>
                      <td>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="mr-2">55%</span>
                          </div>
                          <div class="col">
                            <!-- Progress -->
                            <div class="progress progress-sm">
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                style="width: 55%"
                                aria-valuenow="55"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <!-- / .row -->
                      </td>
                      <td>$55.25%</td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Avatar -->
                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                          <img
                            src="/dashboard_assets/assets/img/avatars/profiles/avatar-2.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </a>

                        <!-- Title -->
                        <span>Ab Hadley</span>
                      </td>
                      <td>
                        <span class="text-warning">●</span> Delayed
                      </td>
                      <td>44</td>
                      <td>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="mr-2">25%</span>
                          </div>
                          <div class="col">
                            <!-- Progress -->
                            <div class="progress progress-sm">
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <!-- / .row -->
                      </td>
                      <td>$122.52%</td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Avatar -->
                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                          <img
                            src="/dashboard_assets/assets/img/avatars/profiles/avatar-3.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </a>

                        <!-- Title -->
                        <span>Adolfo Hess</span>
                      </td>
                      <td>
                        <span class="text-success">●</span> On Schedule
                      </td>
                      <td>271</td>
                      <td>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="mr-2">55%</span>
                          </div>
                          <div class="col">
                            <!-- Progress -->
                            <div class="progress progress-sm">
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                style="width: 55%"
                                aria-valuenow="55"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <!-- / .row -->
                      </td>
                      <td>$55.25%</td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Avatar -->
                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                          <img
                            src="/dashboard_assets/assets/img/avatars/profiles/avatar-4.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </a>

                        <!-- Title -->
                        <span>Daniela Dewitt</span>
                      </td>
                      <td>
                        <span class="text-warning">●</span> Delayed
                      </td>
                      <td>44</td>
                      <td>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="mr-2">25%</span>
                          </div>
                          <div class="col">
                            <!-- Progress -->
                            <div class="progress progress-sm">
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                style="width: 25%"
                                aria-valuenow="25"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <!-- / .row -->
                      </td>
                      <td>$122.52%</td>
                    </tr>
                    <tr>
                      <td>
                        <!-- Avatar -->
                        <a href="profile-posts.html" class="avatar avatar-xs d-inline-block mr-2">
                          <img
                            src="/dashboard_assets/assets/img/avatars/profiles/avatar-5.jpg"
                            alt="..."
                            class="avatar-img rounded-circle"
                          >
                        </a>

                        <!-- Title -->
                        <span>Miyah Myles</span>
                      </td>
                      <td>
                        <span class="text-success">●</span> On Schedule
                      </td>
                      <td>271</td>
                      <td>
                        <div class="row align-items-center no-gutters">
                          <div class="col-auto">
                            <span class="mr-2">55%</span>
                          </div>
                          <div class="col">
                            <!-- Progress -->
                            <div class="progress progress-sm">
                              <div
                                class="progress-bar bg-secondary"
                                role="progressbar"
                                style="width: 55%"
                                aria-valuenow="55"
                                aria-valuemin="0"
                                aria-valuemax="100"
                              ></div>
                            </div>
                          </div>
                        </div>
                        <!-- / .row -->
                      </td>
                      <td>$55.25%</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-4">
            <!-- Latest Files -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    <!-- Title -->
                    <h4 class="card-header-title">Latest Files</h4>
                  </div>
                  <div class="col-auto">
                    <!-- Link -->
                    <a href="#!" class="small">View all</a>
                  </div>
                </div>
                <!-- / .row -->
              </div>
              <div class="card-body">
                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img
                        src="/dashboard_assets/assets/img/files/file-1.jpg"
                        alt="..."
                        class="avatar-img rounded"
                      >
                    </a>
                  </div>
                  <div class="col ml--2">
                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="#!">Launchday Logo</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">2.5kb SVG</p>
                  </div>
                  <div class="col-auto">
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a
                        href="#!"
                        class="dropdown-ellipses dropdown-toggle"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">Action</a>
                        <a href="#!" class="dropdown-item">Another action</a>
                        <a href="#!" class="dropdown-item">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / .row -->
                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img
                        src="/dashboard_assets/assets/img/files/file-2.jpg"
                        alt="..."
                        class="avatar-img rounded"
                      >
                    </a>
                  </div>
                  <div class="col ml--2">
                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="#!">Example Grid</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">1.5mb PNG</p>
                  </div>
                  <div class="col-auto">
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a
                        href="#!"
                        class="dropdown-ellipses dropdown-toggle"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">Action</a>
                        <a href="#!" class="dropdown-item">Another action</a>
                        <a href="#!" class="dropdown-item">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / .row -->
                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <div class="avatar-title rounded bg-white text-secondary">
                        <span class="fe fe-folder"></span>
                      </div>
                    </a>
                  </div>
                  <div class="col ml--2">
                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="#!">Screenshot Collection</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">6.9mb directory</p>
                  </div>
                  <div class="col-auto">
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a
                        href="#!"
                        class="dropdown-ellipses dropdown-toggle"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">Action</a>
                        <a href="#!" class="dropdown-item">Another action</a>
                        <a href="#!" class="dropdown-item">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / .row -->
                <!-- Divider -->
                <hr>

                <div class="row align-items-center">
                  <div class="col-auto">
                    <!-- Avatar -->
                    <a href="#!" class="avatar">
                      <img
                        src="/dashboard_assets/assets/img/files/file-3.jpg"
                        alt="..."
                        class="avatar-img rounded"
                      >
                    </a>
                  </div>
                  <div class="col ml--2">
                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      <a href="#!">Launchday Cover</a>
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">750kb JPG</p>
                  </div>
                  <div class="col-auto">
                    <!-- Dropdown -->
                    <div class="dropdown">
                      <a
                        href="#!"
                        class="dropdown-ellipses dropdown-toggle"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="fe fe-more-vertical"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <a href="#!" class="dropdown-item">Action</a>
                        <a href="#!" class="dropdown-item">Another action</a>
                        <a href="#!" class="dropdown-item">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- / .row -->
              </div>
              <!-- / .card-body -->
            </div>
            <!-- / .card -->
          </div>
        </div>
        <!-- / .row -->
      </div>
    </div>
  </div>
</template>
<script>
import Sidebar from "@/js/components/includes/Sidebar";
import Navbar from "@/js/components/includes/Navbar";
export default {
  components: {
    "app-sidebar": Sidebar,
    "app-navbar": Navbar
  }
};
</script>
