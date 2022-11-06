<?php $this->view('Layout/Header'); ?>
<link rel="stylesheet" href="/resources/styles/gleaner_feed.css">
<!-- For the featurette -->
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<body>
    <?php $this->view('Layout/Navigation'); ?>
    <main class='container-sm'>
        <h1 style="position: relative; left: 45%; top: 30px">Gleaning Events</h1>
        <div class="options">
          <a style="position: relative; left: 30%; margin: 3px">Control Panel</a>
          <form class="example" action="action_page.php">
            <input type="text" placeholder="Search.." name="search" />
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe
                width="370"
                height="258"
                id="gmap_canvas"
                src="https://maps.google.com/maps?q=montreal&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="2px"
                scrolling="no"
                marginheight="0"
                marginwidth="0"
              ></iframe>
              <br />
              </styl>
            </div>
          </div>
        </div>
        <div class="feed">
          <div class="event_card">
            <div id="farmName">Farm Name</div>
            <div id="location">Location: Outremont</div>
            <div id="spots">
              <img id="spots_img" src="/resources/images/card_1.png" />
              Spots Available: 20/40
            </div>
            <div id="harvested">
              <img id="harvested_img" src="/resources/images/card_2.png" />
              Harvested:30/50
            </div>
            <div id="days">
              <img id="days_img" src="/resources/images/card_3.png" />
              Days:MWF
            </div>
            <div id="need">
              <img id="need_img" src="/resources/images/card_4.png" />
              Need: Urgent
            </div>
            <button class="mk_group" id="mk_group">
              Make Group
              <img id="mk_group_img" src="/resources/images/card_6.png" />
            </button>
            <button class="j_group" id="jn_group">
              Join Group
              <img id="jn_group_img" src="/resources/images/card_5.png" />
            </button>
          </div>
          <div class="event_card">
            <div id="farmName">Farm Name</div>
            <div id="location">Location: Outremont</div>
            <div id="spots">
              <img id="spots_img" src="/resources/images/card_1.png" />
              Spots Available: 20/40
            </div>
            <div id="harvested">
              <img id="harvested_img" src="/resources/images/card_2.png" />
              Harvested:30/50
            </div>
            <div id="days">
              <img id="days_img" src="/resources/images/card_3.png" />
              Days:MWF
            </div>
            <div id="need">
              <img id="need_img" src="/resources/images/card_4.png" />
              Need: Urgent
            </div>
            <button class="mk_group" id="mk_group">
              Make Group
              <img id="mk_group_img" src="/resources/images/card_6.png" />
            </button>
            <button class="j_group" id="jn_group">
              Join Group
              <img id="jn_group_img" src="/resources/images/card_5.png" />
            </button>
          </div>
          <div class="event_card">
            <div id="farmName">Farm Name</div>
            <div id="location">Location: Outremont</div>
            <div id="spots">
              <img id="spots_img" src="/resources/images/card_1.png" />
              Spots Available: 20/40
            </div>
            <div id="harvested">
              <img id="harvested_img" src="/resources/images/card_2.png" />
              Harvested:30/50
            </div>
            <div id="days">
              <img id="days_img" src="/resources/images/card_3.png" />
              Days:MWF
            </div>
            <div id="need">
              <img id="need_img" src="/resources/images/card_4.png" />
              Need: Urgent
            </div>
            <button class="mk_group" id="mk_group">
              Make Group
              <img id="mk_group_img" src="/resources/images/card_6.png" />
            </button>
            <button class="j_group" id="jn_group">
              Join Group
              <img id="jn_group_img" src="/resources/images/card_5.png" />
            </button>
          </div>
          <div class="event_card">
            <div id="farmName">Farm Name</div>
            <div id="location">Location: Outremont</div>
            <div id="spots">
              <img id="spots_img" src="/resources/images/card_1.png" />
              Spots Available: 20/40
            </div>
            <div id="harvested">
              <img id="harvested_img" src="/resources/images/card_2.png" />
              Harvested:30/50
            </div>
            <div id="days">
              <img id="days_img" src="/resources/images/card_3.png" />
              Days:MWF
            </div>
            <div id="need">
              <img id="need_img" src="/resources/images/card_4.png" />
              Need: Urgent
            </div>
            <button class="mk_group" id="mk_group">
              Make Group
              <img id="mk_group_img" src="/resources/images/card_6.png" />
            </button>
            <button class="j_group" id="jn_group">
              Join Group
              <img id="jn_group_img" src="/resources/images/card_5.png" />
            </button>
          </div>
        </div>
        <footer id="footer" class="container">
          <p>
            &copy; 2022 Earth Canada. ALL RIGHTS RESERVED &middot;
            <a href="https://earthday.ca/privacy-policy/">Privacy</a> &middot;
            <a href="https://earthday.ca/terms-of-use/">Terms</a>
          </p>
        </footer>
    </main>
  </body>
    <?php $this->view('Layout/Scripts'); ?>
</html>
