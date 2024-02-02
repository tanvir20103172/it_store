<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">IT Store </a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
                <div class="col-md-10 p-0">
                    {{ auth()->guard('admin')->user()->name }}
                </div>
            </form>
            <div class="modal-dialog modal-dialog-centered">
                <div class="container modal-content p-5">
                    <div class="container">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="row">
                            <div class="text-center rounded-5">
                                <img style="border-radius: 10%; margin-left: 110px" height="150" width="150"
                                    src="{{ url('uploads/' .auth()->guard('admin')->user()->image) }}" alt="">
                                <div class="mt-2">
                                    <input type="file" style="display: none;" id="profilePicture" name="file" />
                                </div>
                            </div>
                        </div>
    
                        <div class="modal-header border-primary">
                            <h5 class="modal-title fs-3 fw-bold" id="userModalLabel">
                                {{ auth()->guard('admin')->user()->name }}</h5>
                        </div>
    
                    </div>
    
                    <div class="modal-body">
    
                        <div class="row g-3">
                            <!-- col -->
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">Role</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">{{ auth()->guard('admin')->user()->role }}</div>
                                </div>
                            </div>
    
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-2">Email</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">{{ auth()->guard('admin')->user()->email }}</div>
                                </div>
                            </div>
    
                            <div class="col-12 pb-2">
                                <div class="row">
                                    <div class="col-2">Number</div>
                                    <div class="col-1">:</div>
                                    <div class="col-8">{{ auth()->guard('admin')->user()->phone }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-warning mb-3">
                        <a class="nav-link" href="{{ route('admin.logout') }}">
                            Log out
                        </a>
                    </button>
                    <a href="{{ route('profile.view') }}"><i class="bi bi-people-fill"></i></a>
                </div>
            </div>
        </div>