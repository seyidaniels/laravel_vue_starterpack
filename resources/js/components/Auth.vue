<template>

    <!-- CONTENT
    ================================================== -->
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
              <img src="landing/assets/img/logo-white.png"  class="img-fluid img-white" style="width: 50%;" alt="">
          </h1>

          <!-- Subheading -->
          <p class="text-center mb-5">
            Create an account
          </p>

          <!-- Form -->
          <form>

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Email Address
              </label>

              <!-- Input -->
              <input type="email" class="form-control" placeholder="name@address.com">

            </div>


                <!-- Email address -->
                <div class="form-group row">

                  <div class="col-md-6">
                     <!-- Label -->
                  <label>Firstname</label>

                  <!-- Input -->
                  <input type="text" class="form-control" placeholder="firstname">
                  </div>

                  <div class="col-md-6">
                    <!-- Label -->
                 <label>Lastname</label>

                 <!-- Input -->
                 <input type="text" class="form-control" placeholder="lastname">
                 </div>

                </div>

            <!-- Password -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Password
              </label>

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" class="form-control form-control-appended" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

             <!-- Password -->
             <div class="form-group">

              <!-- Label -->
              <label>
                Confirm Password
              </label>

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input type="password" class="form-control form-control-appended" placeholder="Enter your password">

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Sign up
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Already have an account? <a href="sign-in-cover.html">Log in</a>.
              </small>
            </div>

          </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">

          <!-- Image -->
          <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url(dashboard_assets/assets/img/covers/aut-size-cover.png); "></div>

        </div>
      </div> <!-- / .row -->
    </div>
</template>
