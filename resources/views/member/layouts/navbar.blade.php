<section class="header">
      <div class="container-fluid header-wrapper">
        <div class="row">
          <div class="col-lg-12 col-12 header-wrap d-flex justify-content-end">
            <div class="col-xl-10 col-lg-9 col-12 content-wrap d-flex  align-items-center">
              <button aria-controls="sidebar"
              data-bs-toggle="offcanvas" 
              data-bs-target=".sidebar"
              aria-label="Button Hamburger"
              class="sidebarOffCanvas mb-5 btn p-0 d-flex d-lg-none">
              <i class="fa-solid fa-bars"></i>
              </button>
              <div class="nav-content">
                <div class="profile-wrapper d-flex gap-3 align-items-center">
                  <div class="img-wrapper col-lg-1">
                    <img src="{{ asset('directCodes/assets/img/profile.jpg') }}" alt="" class="img-fluid">
                  </div>
                  <div class="desc">
                    <p class="m-0 r-1">Hello {{ auth()->user()->name }}</p>
                    <p class="m-0 r-2">Have a Great Day</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>