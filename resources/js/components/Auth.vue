<template>

    <!-- CONTENT
    ================================================== -->
    <div class="container-fluid">
      <div class="row align-items-center justify-content-center">

        <div  class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5 mt-4">

          <!-- Heading -->
          <h1 class="display-4 text-center mb-3 mt-4">
              <img src="landing/assets/img/logo-white.png"  class="img-fluid img-white" style="width: 50%;" alt="">
          </h1>

            <div v-show="showSignUp">
             <transition name="component-fade" mode="out-in">

                 <div>
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
                        Already have an account? <a href="#" @click="showSignIn = true; showSignUp = false; showForgot = false;" >Log in</a>.
                    </small>



                    </div>

                </form>

                 </div>

            </transition>

          </div>

          <div v-show="showSignIn">

          <transition name="component-fade" mode="out-in">

              <div>
                  <!-- Subheading -->
          <p class="text-center mb-5">
            Log in to your account
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


            <!-- Password -->
            <div class="form-group">

              <!-- Label -->
              <label>
                Password
              </label>

              <!-- Input -->
              <input type="password" class="form-control" placeholder="password">

            </div>

             <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Sign In
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Dont have an account? <a href="#" @click="showSignUp = true; showForgot = false; showSignIn = false;" >Sign Up</a>.
              </small>
              <small class="text-muted text-center">
                Forgot Password? <a href="#" @click="showForgot = true; showSignUp = false; showSignIn = false;" >Forgot</a>.
              </small>
            </div>




          </form>
              </div>

          </transition>

          </div>


          <div v-show="showForgot">

        <transition name="component-fade" mode="out-in">

            <div>

                                        <!-- Subheading -->
                <p class="text-center mb-5">
                    Recover Password
                </p>
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


             <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
                Recover Password
            </button>

            <!-- Link -->
            <div class="text-center">
              <small class="text-muted text-center">
                Back to Login?<a href="#" @click="showSignUp = false; showForgot = false; showSignIn = true;" >Sign In</a>.
              </small>
            </div>




          </form>
            </div>

        </transition>

          </div>

        </div>

    </div>
    </div>
</template>
<script>
export default {
    data: function () {
        return {
            showSignUp: false,
            showForgot: false,
            showSignIn: true,
            userSignUp: {
                'email': '',
                'firstname': '',
                'lastname': '',
                'phone': '',
                'password': '',
                'password_confirmation': ''
            },
            userSignIn: {
                'email': '',
                'password': ''
            }
        }
    },
    methods: {
        validateRegister () {

        }
    }

}
</script>
<style>
.component-fade-enter-active, .component-fade-leave-active {
  transition: opacity .3s ease;
}
.component-fade-enter, .component-fade-leave-to
/* .component-fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
</style>


