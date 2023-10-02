 <!-- App Header -->
 <div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="#" class="headerButton" data-bs-toggle="modal" data-bs-target="#sidebarPanel">
            <ion-icon name="menu-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">
        <img src="assets/img/logo.png" alt="logo" class="logo">
    </div>
    <div class="right">
        <a href="app-notifications.html" class="headerButton">
            <ion-icon class="icon" name="notifications-outline"></ion-icon>
            <span class="badge badge-danger">4</span>
        </a>
        <a href="app-settings.html" class="headerButton">
            {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}

            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="imaged w32">
            <span class="badge badge-danger">6</span>
        </a>
    </div>
</div>
<!-- * App Header -->
