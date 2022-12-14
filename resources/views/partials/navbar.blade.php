<!-- head -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">hotelKu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "hotel") ? 'active' : '' }}" href="/hotel">hotel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "room") ? 'active' : '' }}" href="/room">room</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "galery") ? 'active' : '' }}" href="/galery">galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "booking") ? 'active' : '' }}" href="/booking">booking</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "contact") ? 'active' : '' }}" href="/contact">contact</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>

