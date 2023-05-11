<?php
  include './php/database_connect.php';
  include './php/event_config_get_data.php';
  include './php/edit_event.php';
  include './php/get_event_data.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuration</title>
    <!-- Theme Mode -->
    <link rel="stylesheet" href="./css/theme-mode.css">
    <script src="./js/default-theme.js"></script>
    <!-- Link Styles -->
    <link rel="stylesheet" href="./css/boxicons.css">
    <link rel="stylesheet" href="./css/responsive.css">
    <link rel="stylesheet" href="./css/sidebar-style.css">

    <!-- Event Config Styles -->
    <link rel="stylesheet" href="./css/bootstrap-select.min.css">
    <link rel="stylesheet" href="./css/bootstrap4.min.css">
    <link rel="stylesheet" href="./css/list_of_events.css">
  </head>

  <body>
    <!--Sidebar-->
    <div class="sidebar box-shadow">
      <div class="bottom-design">
        <div class="design1"></div>
        <div class="design2"></div>
      </div>

      <div class="logo_details">
        <img src="./pictures/logo.png" alt="student council logo" class="icon logo">
        <div class="logo_name">Events Tabulation System</div>
        <i class="bx bx-arrow-to-right" id="btn"></i>
      </div>
      <div class="wrapper">
        <li class="nav-item top">
          <a href="index.html">
            <i class="bx bx-home-alt"></i>
            <span class="link_name">Go Back</span>
          </a>
        </li>
        <div class="sidebar-content-container">
          <ul class="nav-list">
            <li class="nav-item">
              <a href="#posts" class="menu_btn ">
                <i class="bx bx-news"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Posts
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#create_posts">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">Create Post</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#manage_posts">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">Manage Posts</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#event_menu" class="menu_btn active">
                <i class="bx bx-calendar-edit"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Events
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#list_of_events" class="sub-active">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">List of Events</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="event_configuration.php">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">Event Configuration</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#criteria_config">
                    <i class="bx bxs-circle sub-icon color-yellow"></i>
                    <span class="sub_link_name">Criteria Configuration</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="menu_btn">
                <i class="bx bx-calendar"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Calendar
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#calendar_overview">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">Overview</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#calendar_logs">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">Logs</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#tournaments" class="menu_btn">
                <i class="bx bx-trophy"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Tournaments
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#live_scoring">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">Live Scoring</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#manage_brackets">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">Manage Brackets</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#brackets">
                    <i class="bx bxs-circle sub-icon color-yellow"></i>
                    <span class="sub_link_name">Brackets</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#competition" class="menu_btn">
                <i class="bx bx-medal"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Competition
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#manage_results">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">Manage Results</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#to_publish">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">To Publish</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#published_results">
                    <i class="bx bxs-circle sub-icon color-yellow"></i>
                    <span class="sub_link_name">Published Results</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#archive">
                    <i class="bx bxs-circle sub-icon color-yellow"></i>
                    <span class="sub_link_name">Archive</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#event_history" class="menu_btn">
                <i class="bx bx-history"><i class="dropdown_icon bx bx-chevron-down"></i></i>
                <span class="link_name">Event History
                  <i class="change-icon dropdown_icon bx bx-chevron-right"></i>
                </span>
              </a>
              <ul class="sub_list">
                <li class="sub-item">
                  <a href="#event_page">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">Event Page</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#highlights_page">
                    <i class="bx bxs-circle sub-icon color-green"></i>
                    <span class="sub_link_name">Highlights Page</span>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#judges_&_participants">
                <i class="bx bx-group"></i>
                <span class="link_name">Judges & <br> Participants</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--Page Content-->
    <section class="home-section">
      <div class="d-flex justify-content-between align-items-center pr-4">
        <div class="header">Events</div>
        <a href="create_event.php?add event">
          <button class="btn btn-danger text-center" id="add-event-btn">
            <i class='bx bx-add-to-queue d-flex justify-content-center align-items-center'>
              <span>Add Event</span>
            </i>
          </button>
        </a>
        <div class="btn btn-warning d-flex justify-content-center align-items-center badge-pill" id="edit-event-btn">
          <i class='bx bx-edit text-white'></i>
        </div>
      </div>
      <div class="container-fluid d-flex row justify-content-center m-0" id="event-wrapper">
        <?php
          $row = mysqli_num_rows($event_result);
          if ($row > 0){
            while ($row = mysqli_fetch_array($event_data)):;?>
            <div class="justify-content-start align-items-start content-box-shadow" id="event-data-container">
              <div class="row flex-column flex-sm-row">
                <div class="data-group col-md-6 col-lg-3">
                  <p class="data-label fw-bold">Event</p>
                  <p class="data-content fw-bold"><?php echo $row[1];?></p>
                </div>
                <div class="data-group col-md-6 col-lg-3">
                  <p class="data-label fw-bold">Event Type</p>
                  <p class="data-content fw-bold"><?php echo $row[2];?></p>
                </div>
                <div class="data-group col-md-6 col-lg-3">
                  <p class="data-label fw-bold">Category</p>
                  <p class="data-content fw-bold"><?php echo $row[3];?></p>
                </div>
                <div class="data-group col-md-6 col-lg-3">
                  <p class="data-label fw-bold">Date and Time</p>
                  <p class="data-content fw-bold"><?php 
                  $time_sql = "SELECT TIME_FORMAT('$row[7]', '%h:%i %p') AS formattedTime FROM listofeventtb;";
                  $time_result = mysqli_query($dbname, $time_sql);
                  $get_time_result = mysqli_fetch_assoc($time_result);
                  $time = $get_time_result['formattedTime'];
                  echo $row[6];?>, <?php echo $time;?></p>
                </div>
              </div>
              <br>
              <div class="row flex-column flex-md-row">
                <div class="data-group col-md-6">
                  <p class="data-label fw-bold">Event Desciption</p>
                  <p class="data-content fw-bold description"><?php echo $row[4];?></p>
                </div>
                <div class="data-group col-md-3">
                  <p class="data-label fw-bold">Code</p>
                  <p class="data-content fw-bold"><?php echo $row[5];?></p>
                </div>
                <div class="data-group col-md-12" id="eventBtn">
                  <button class="btn event-done-btn" id="event-done-btn">Mark as Done</button>
                  <div class="more-btn" id="more-btn">
                    <a href="edit_created_event.php?eec=<?php echo $row[5]?>">
                      <button class="btn btn-warning text-white badge-pill" id="event-edit-btn">Edit Event</button>
                    </a>
                    <a href="list_of_events.php?eed=<?php echo $row[5]?>">
                      <div class="btn btn-danger text-white badge-pill" id="event-delete-btn">
                        <i class='bx bx-trash' name='eventDelete'></i>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
        <?php
          endwhile; 
          }
          else{
            ?>
              <div class="text-center" id="no-event-container">
                <i class='bx bx-calendar-x'></i>
                <h1>No Events</h1>
                <p>Looks like you have no events created. <br> You can do so by clicking the button below.</p>
                <a href="create_event.php?create new event">
                  <button class="btn btn-danger badge-pill text-center" id="create-event-btn">
                    <i class='bx bx-add-to-queue d-flex justify-content-center align-items-center'>
                      <span>Create an Event</span>
                    </i>
                  </button>
                </a>
              </div>
            <?php
          }
        ?>
      </div>
    </section>
    <!-- Scripts -->
    <script src="./js/script.js"></script>
    <script src="./js/jquery-3.6.4.js"></script>
    <script type="text/javascript">
      $('.menu_btn').click(function (e) {
        e.preventDefault();
        var $this = $(this).parent().find('.sub_list');
        $('.sub_list').not($this).slideUp(function () {
          var $icon = $(this).parent().find('.change-icon');
          $icon.removeClass('bx-chevron-down').addClass('bx-chevron-right');
        });

        $this.slideToggle(function () {
          var $icon = $(this).parent().find('.change-icon');
          $icon.toggleClass('bx-chevron-right bx-chevron-down')
        });
      });
    </script>

    <!-- Event Config Scripts -->
    <script type="text/javascript" src="./js/bootstrap4.bundle.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-select-picker.js"></script>
    <script type="text/javascript" src="./js/list_of_events.js"></script>
    <script>

    </script>
  </body>

</html>