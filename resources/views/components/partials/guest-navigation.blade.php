
<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
    <a href="{{ route('Home.index') }}" class="navbar-brand p-0">
        <h1 class="m-0">DGital</h1>
        <!-- <img src="{{asset('front_assetes')}}/img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
            <a href="{{ route('Home.index') }}"   @class(['nav-item nav-link','active' => Route::currentRouteName() === "Home.index"  ])>Home</a>
            <a href="{{ route('about.index') }}"  @class(['nav-item nav-link','active' => Route::currentRouteName() === "about.index" ])>About</a>
            <a href="{{ route('services.index') }}" @class(['nav-item nav-link','active' => Route::currentRouteName() === "services.index" ])>Service</a>
            <a href="{{ route('projects.index') }}" @class(['nav-item nav-link','active' => Route::currentRouteName() === "projects.index" ])>Project</a>
            <div class="nav-item dropdown"> 
                <a href="#"  @class(['nav-link dropdown-toggle','active' => Route::currentRouteName() === "team.index"  ||  Route::currentRouteName() === "testimonials.index" ])  class="nav-link " data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('team.index') }}" class="dropdown-item">Our Team</a>
                    <a href="{{ route('testimonials.index') }}" class="dropdown-item">Testimonial</a>
                </div>
            </div>
            <a href="{{ route('contact.index') }}" @class(['nav-item nav-link','active' => Route::currentRouteName() === "contact.index"])>Contact</a>
        </div>
        <a href="" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Get Started</a>
    </div>
</nav>