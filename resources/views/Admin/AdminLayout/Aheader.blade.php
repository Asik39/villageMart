<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">

         <form class="d-flex align-item-center search01">
          <input class="form-control me-2 col-sm-4" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Search</button>
        </form>

        <ul class="navbar-nav ms-auto mb-2 mt-4  mb-lg-0">
          <li class="nav-item fa-solid fa-bell icon me-4">
            <a class="nav-link active" aria-current="page" href="#"></a>
          </li>
          <li class="nav-item fa-solid fa-message icon me-4">
            <a class="nav-link" href="#"></a>
          </li>
          
        </ul>

        <div class="profile d-flex align-items-center">
          <img src="{{asset('assets/images/img1.png')}}" class="user_icon">
        </div>

       
      </div>
    </div>
  </nav>
