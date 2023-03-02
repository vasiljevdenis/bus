<header>
        <nav class="navbar navbar-expand-md bg-body-tertiary fixed-top" role="navigation" style="background-color: {{ $background }} !important;">
            <div class="container-fluid ps-lg-5 pe-lg-5">
                <a class="navbar-brand order-2 order-md-1" href="/"><img src="/images/logo.svg" alt="Логотип" class="w-100"
                        style="max-width: 250px;"></a>
                <button class="navbar-toggler order-1 order-md-2 border-0" type="button"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start order-md-2" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <button type="button" class="btn-close ps-0" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'board') active @endif text-white me-md-2" href="/board" id="url">On Board</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'itineraries') active @endif text-white mt-2 mt-md-0" href="/itineraries">Itineraries</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if ($active == 'contact') active @endif text-white mt-2 mt-md-0" href="/contact">Сontact Us</a>
                            </li>
                            <li class="nav-item dropdown ms-md-5">
                                <a class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    EN <i class="ai-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">EN</a></li>
                                    <li><a class="dropdown-item" href="#">RU</a></li>                    
                                    <li><a class="dropdown-item" href="#">SP</a></li>
                                    <li><a class="dropdown-item" href="#">FR</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark text-uppercase btn btn-light rounded-0 mt-2 mt-md-0 ms-md-2 ps-4 pe-4" href="/booking">Book a tour</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.1/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.addEventListener('load', function(){
  window.cookieconsent.initialise({
   revokeBtn: "<div class='cc-revoke'></div>",
   type: "opt-in",
   palette: {
       popup: {
           background: "#333333",
           text: "#ffffff"
        },
       button: {
           background: "#ffffff",
           text: "#333333"
        }
    },
   content: {
       message: "This website uses cookies to ensure you get the best experience on it.",
       link: "Find out how we use",
       allow: "ACCEPT",
       deny: "DECLINE",
       href: "https://www.aboutcookies.org/"
    },
    onInitialise: function(status) {
      if(status == cookieconsent.status.allow) myScripts();
    },
    onStatusChange: function(status) {
      if (this.hasConsented()) myScripts();
    }
  })
});

function myScripts() {
}
</script>