<!doctype html>
<html lang="en">


<!-- Mirrored from finapp.bragherstudio.com/view22/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 12:24:10 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Finapp</title>
    <meta name="description" content="Finapp HTML Mobile Template">
    <meta name="keywords"
        content="bootstrap, wallet, banking, fintech mobile template, cordova, phonegap, mobile, html, responsive" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icon/192x192.png">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body>

    {{-- <x-dashboard.app-header /> --}}

     <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">


            <a href="{{ route('account') }}" class="headerButton">

            <img src="https://crownagent.org/img/core-img/logo.svg" alt="{{ Auth::user()->name }}" class="imaged w-64">
            </a>

        </div>
        <div class="pageTitle">
            {{ $header }}
        </div>
        <div class="right">
            <a href="{{ route('notification') }}" class="headerButton">
                <ion-icon class="icon" name="notifications-outline"></ion-icon>
                {{-- <span class="badge badge-danger">4</span> --}}
            </a>
            <a href="{{ route('profile.show') }}" class="headerButton">
                {{-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --}}

                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" class="imaged w32">
            </a>
        </div>
    </div>
    <!-- * App Header -->




    <!-- App Capsule -->
    <div id="appCapsule">

        {{ $slot }}

    </div>

    <x-dashboard.app-bottom-menu />

    <x-dashboard.app-sidebar />



    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="/assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="/assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="/assets/js/base.js"></script>

    <script>
        // Add to Home with 2 seconds delay.
        AddtoHome("2000", "once");
    </script>

</body>


<!-- Mirrored from finapp.bragherstudio.com/view22/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Feb 2023 12:24:10 GMT -->
</html>




