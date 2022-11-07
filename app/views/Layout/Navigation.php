
<header>
    <nav>
        <img src="/resources/images/earthday_white.png" style="cursor:pointer" onclick="window.location.href='https:/earthday.ca/'" alt="">

        <img class="uglean-logo" src="/resources/images/uglean-logo.png" alt="">
        <div>
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu">
                    <a href="/Main/index">
                        <li>Home</li>
                    </a>
                    <a href="/Main/eventList">
                        <li>Event</li>
                    </a>
                    <a href="/Main/about_us">
                        <li>About</li>
                    </a>
                    <a href="/Main/contact_us">
                        <li>Contact</li>
                    </a>
                    <?php
                        $linkprofile = "";

                        if (isset($_SESSION['gleaner_id'])){
                           $linkprofile = "<a href='/Profile/gleaner_profile/'> <li>Profile</> ";
                        } else if (isset($_SESSION['farmer_id'])){
                            echo"famer";
                            $linkprofile = "<a href='/Profile/farmer_profile/'> <li>Profile</> ";
                        } else if (isset($_SESSION['foodbank_id'])){
                            echo"famer";
                            $linkprofile = "<a href='/Profile/foodbank_profile/'> <li>Profile</> ";
                        }
                        
                    ?>
                    <?= $linkprofile ?>

                    <?php 
                        if (isset($_SESSION['account_id'])){
                            $link = "href='/Login/logout'";  
                            $li = "Logout";
                        } else {
                            $link = "href='/Login/gleaner'";
                           $li = "Login";
                        }
                    ?>
                    <a <?= $link ?>>
                        <li><?= $li ?></li>
                    </a>
                </ul>
            </div>

        </div>
    </nav>
</header>