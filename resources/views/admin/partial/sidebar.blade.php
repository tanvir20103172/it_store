<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-desktop"></i></div>
                    Desktop Component
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('processor')}}">Processor</a>
                        <a class="nav-link" href="{{route('motherboard')}}">Motherboard</a>
                        <a class="nav-link" href="{{route('ram')}}">Desktop RAM</a>
                        <a class="nav-link" href="{{route('optical')}}">Optical Device</a>
                        <a class="nav-link" href="{{route('graphics')}}">Graphics Card</a>
                        <a class="nav-link" href="{{route('power_supply')}}">Power Supply</a>
                        <a class="nav-link" href="{{route('casing')}}">Casing</a>
                        <a class="nav-link" href="{{route('casing_fan')}}">Casing Fan</a>
                        <a class="nav-link" href="{{route('cpu_cooler')}}">CPU Cooler</a>
                        <a class="nav-link" href="{{route('keyboard')}}">Keyboard</a>
                        <a class="nav-link" href="{{route('mouse')}}">Mouse</a>
                        <a class="nav-link" href="{{route('ups')}}">UPS</a>
                   </nav>
                </div>

                <a class="nav-link" href="{{route('laptop')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-laptop"></i></div>
                    Laptop
                </a>

                
            </div>
        </div>
    </nav>
</div>