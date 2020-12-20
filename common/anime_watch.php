<?php $id = $_GET['id'];

echo "<html>";
    echo "<title>$id - JVideos</title>";
    echo "<link rel=stylesheet type='text/css' href='../styles/styles.css'>";
    echo "<header>
            <img src='../src/logo.png' id='top_logo' alt='logo'>
            <nav>
                <ul class='menu_items'>
                    <li class='item_menu'><a class='menu_link' href='../index.html'>Home</a></li>
                    <li class='item_menu'><a class='menu_link' href='search.html'>Search</a></li>
                    <li class='item_menu'><a class='menu_link' href='login.html'>Profile</a></li>
                </ul>
            </nav>
        </header>";
    echo "<div class='no_content' style='height: 100vh';>
            <h1 style='color:#ffffff; font-size: 3em; display:flex; justify-content: center; align-items: center; height: 100vh; text-align: center;'>Sorry, There is no content yet!<br>Due to the recent law in Japan, we are still unavailable!</h1>
        </div>";
    echo "<section id='contact_section' class='footer secondary_color'>
            <hr class='rule big'>
            <img src='../src/logo.png' style='margin:auto; width: inherit; display: block; padding-bottom: 20px'>
            <hr style='margin-left: 40px; margin-right: 40px'>
            <div class='trademark_area'>
                <p id='copyright'>Just add something here like a copyright thing...</p>
                <p id='copyright'>English</p>
            </div>
        </section>"
?>