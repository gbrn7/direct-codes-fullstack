<aside class="sidebar offcanvas-lg offcanvas-start">
      <div class="d-flex justify-content-end m4 d-block d-lg-block">
        <!-- Button Hiden -->
        <button  
        data-bs-toggle="offcanvas"
        data-bs-target=".sidebar"
        class="btn p-0 border-0 fs-4"
        aria-label="Button Close">
        <i class="fas fa-close"></i>
        </button> 
        <!-- Button Hiden end -->
      </div>
      <div class="logo-brand mt-lg-5">
        <img src="{{ asset('directCodes/assets/img/Directcodes..svg') }}" class="img-fluid">
      </div>
      <hr>
      <nav class="menu flex-fill">
        <div class="section-menu d-flex flex-column align-items-center">
          <div class="item-wrap">
            <a href="{{ route('member.dashboard') }}" class="item-menu active text-decoration-none" onclick="handClickMenu(this)">
            <i class='bx bx-home'></i>
            <p class="">Dashboard</p>
            </a>
          </div>
          <div class="item-wrap">
            <a href="#" class="item-menu  text-decoration-none" onclick="handClickMenu(this)">
              <i class='bx bx-heart-circle'></i>
            <p class="">Favorite</p>
            </a>
          </div>
          <div class="item-wrap">
            <a href="#" class="item-menu  text-decoration-none" onclick="handClickMenu(this)">
            <i class='bx bx-camera-movie' ></i>
            <p class="">My Playlist</p>
            </a>
          </div>
          <div class="item-wrap">
            <a href="{{ route('member.subcription') }}" class="item-menu text-decoration-none" onclick="handClickMenu(this)">
            <i class='bx bxs-credit-card'></i>
            <p class="">Subscription</p>
            </a>
          </div>
          <div class="item-wrap">
            <a href="#" class="item-menu  text-decoration-none" onclick="handClickMenu(this)">
              <i class='bx bx-cog' ></i>
            <p class="">Account</p>
            </a>
          </div>
          <div class="item-wrap">
            <a href="{{route('member.logout')}}" class="item-menu  text-decoration-none" onclick="handClickMenu(this)">
            <i class='bx bx-log-out' ></i>
            <p class="">Logout</p>
            </a>
          </div>
        </div>
      </nav>
    </aside>