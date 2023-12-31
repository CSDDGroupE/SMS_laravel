<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
                data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0"
                id="navbar-vertical">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i
                                class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link">Electronics and Gadgets</a>
                    <a href="" class="nav-item nav-link">Home and Kitchen</a>
                    <a href="" class="nav-item nav-link">Fashion and Accessories</a>
                    <a href="" class="nav-item nav-link">Books and Hobbies</a>
                    <a href="" class="nav-item nav-link">Beauty and Personal Care</a>
                    <a href="" class="nav-item nav-link">Sports and Outdoor</a>
                    <a href="" class="nav-item nav-link">Travel and Adventure</a>
                    <a href="" class="nav-item nav-link">DIY and Crafts</a>
                    <a href="" class="nav-item nav-link">Gift Cards and Experiences</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">Grocery</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="/" class="nav-item nav-link">Home</a>
                        <a href="/shop" class="nav-item nav-link ">Shop</a>
                        <a href="/contact" class="nav-item nav-link">Contact</a>
                        <a href="/blogs" class="nav-item nav-link">Blogs</a>
                    </div>
                    @auth
                        <a href="/groups/create" class="nav-item nav-link">Groups</a>
                        <a href="/logout" class="nav-item nav-link">Logout</a>    
                    @else
                        <a href="/login" class="nav-item nav-link">Login</a>
                        <a href="/register" class="nav-item nav-link">Register</a>
                    @endauth
                </div>
            </nav>
            @include('includes.banner')
        </div>
    </div>
</div>
<!-- Navbar End -->
