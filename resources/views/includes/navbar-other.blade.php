<nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid" style="padding-left: 50px; padding-right: 50px;" >
            <div class="navbar-translate">
                <a class="navbar-brand" href="/">
                    <img src="/landing/assets/img/logo-white.png"  class="img-fluid img-white" style="width: 50%;" alt="">
                    <img src="/landing/assets/img/logo-white.png"class="img-fluid img-blue" alt="">
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="#" class="nav-link "style="font-size: 14px;">
                           Timeline
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size: 14px;">
                            Rules
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('login')}}" style="font-size: 14px;">
                            FAQ
                        </a>
                    </li>
                    <li class="nav-item">
                            <a  href="{{url('/dashboard')}}">
                        <button class="nav-link btn btn-orange" style="border-radius: 40px;" >

                                <p>Apply Now</p>

                        </button>
                    </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
