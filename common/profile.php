<html>
    <head>
        <title>Profile - JVideos</title>
        <link rel="stylesheet" type="text/css" href="../styles/styles.css">
        <link rel="stylesheet" type="text/css" href="../styles/lightslider.css">
        <link rel="apple-touch-icon" sizes="57x57" href="src/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="src/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="src/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="src/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="src/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="src/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="src/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="src/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="src/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="src/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="src/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="src/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="src/favicon-16x16.png">
        <link rel="manifest" href="src/manifest.json">
        
    </head>
    <body>
        <header>
            <img src="../src/logo.png" id="top_logo" alt="logo">
            <nav>
                <ul class="menu_items">
                    <li class="item_menu"><a class="menu_link" href="../index.html">Home</a></li>
                    <li class="item_menu"><a class="menu_link" href="search.html">Search</a></li>
                    <li class="item_menu"><a class="menu_link" href="login.html">Profile</a></li>
                </ul>
            </nav>
        </header>
        <section class="overview">
            <div class="headState">
                <div class="nameState">
                    <h1 id="username">Hello, <strong><?php echo $_POST["username"];?></strong></h1>
                    <p>Member</p>
                </div>
                <img src="../src/default_pic.png" style="width:200px;">
            </div>
            <hr>
        </section>
        <section>
            <h1 style="color:#ffffff; margin-left: 20px;">Statistics</h1>
            <div class="grid_container">
                <div class="grid_item">
                    <img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>1</h1>
                    <h4>Total Anime Watched</h4>
                </div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>0</h1>
                    <h4>On Watchlist</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>0</h1>
                    <h4>Specials on List</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>0</h1>
                    <h4>Movies on List</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>4</h1>
                    <h4>Episodes Watched</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>4.7</h1>
                    <h4>Mean Score</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>30</h1>
                    <h4>Days of Anime Watched</h4></div>
                <div class="grid_item"><img src="../src/eye_icon.PNG" style="width: 100px;">
                    <h1>400</h1>
                    <h4>Hours of Anime Watched</h4></div>
            </div>
        </section>
    </body>
</html>