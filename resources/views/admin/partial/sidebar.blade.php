<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>

                
                <a class="nav-link collapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Desktop Component
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('processor')}}">Processor</a>
                        <a class="nav-link" href="{{route('motherboard')}}">Motherboard</a>
                        <a class="nav-link" href="{{route('ram')}}">Desktop RAM</a>
                        <a class="nav-link" href="">Optical Device</a>
                        <a class="nav-link" href="">Graphics Card</a>
                        <a class="nav-link" href="">Power Supply</a>
                        <a class="nav-link" href="">Casing</a>
                        <a class="nav-link" href="">Casing Fan</a>
                        <a class="nav-link" href="">CPU Cooler</a>
                        <a class="nav-link" href="">Keyboard</a>
                        <a class="nav-link" href="">Mouse</a>
                        <a class="nav-link" href="">UPS</a>
                   </nav>
                </div>
            </div>
        </div>
    </nav>
</div>