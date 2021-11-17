<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light navbar-fixed-top">
  <a class="navbar-brand" href="index.php">Arborist</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      </form>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          File
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#" onclick="newFileModal()">New</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" onclick="openFileModal()">Open</a>
        <a class="dropdown-item" href="#" onclick="openFileModal()">Open Recent</a>
        <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Save</a>
          <a class="dropdown-item" href="#">Save As</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Import</a>
          <a class="dropdown-item" href="#">Export</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Edit
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Copy</a>
          <a class="dropdown-item" href="#">Cut</a>
          <a class="dropdown-item" href="#">Paste</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" onclick="settingsModal()">Settings</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          View
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">New Window</a>
          <a class="dropdown-item" href="#">Close Window</a>
        </div>
      </li>

    </ul>
  </div>
</nav>