<footer class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom">
  <div class="container">
    <span class="navbar-text">
      &copy; {{ date('Y') }}. <a href="{{ route('landing') }}">Utalii</a>
    </span>
    <ul class="navbar-nav ml-lg-auto">
      <li class="nav-item">
        <a href="{{ route('terms_of_use') }}" class="nav-link" target="_blank">
          <i class="icon-file-text2 mr-2"></i> Terms of Use
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link font-weight-semibold">
          <span class="text-pink-400"><i class="icon-phone mr-2"></i> Contact Us</span>
        </a>
      </li>
    </ul>
  </div>
</footer>
