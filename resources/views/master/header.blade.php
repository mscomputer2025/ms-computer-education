<div class="bg-danger py-1 border-bottom">
    <div class="container-fluid d-flex justify-content-center align-items-center mx-4">
        <div class="text-dark  me-5">
            <i class="bi bi-telephone"></i> +91 8780729978 | +91 7600991605
        </div>
        <div class="text-dark ">
            <i class="bi bi-geo-alt"></i> Ankleshwer|Bharuch,Gujarat
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.jpeg') }}" alt="Institute Logo" width="70" height="100" class="img-fluid">
            <span class="ms-2 fw-bolder" style="color: #0a217e;">MS COMPUTER</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav mb-2 mb-lg-0" >

                <li class="nav-item" >
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('courses') ? 'active' : '' }}" href="#"
                        id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                        <li><a class="dropdown-item" href="{{ route('courses.basic') }}">Basic Computer</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.pgdca') }}">PGDCA</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.adit') }}">ADIT</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.web_design') }}">Web Development & Designing</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.dca') }}">Diploma in Computer Application</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.accounting') }}">Financial Accounting with GST</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.dtp') }}">Desktop Publishing</a></li>
                        <li><a class="dropdown-item" href="{{ route('courses.msoffice') }}">Microsoft Office Courses</a></li>
                    </ul>

                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}" href="{{ url('/aboutus') }}">About
                        Us</a>
                </li>
                  <li class="nav-item">
                    <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                        href="{{ url('/gallery') }}">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}"
                        href="{{ url('/contactus') }}">Contact Us</a>
                </li>

            </ul>
        </div>
    </div>
</nav>