<?php
  include './php/database_connect.php';
  include './php/event_config_data.php';
  include './php/event_config_get_data.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Configuration</title>
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
    <link rel="stylesheet" href="./css/event-config.css">
    
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
                  <a href="list_of_events.php">
                    <i class="bx bxs-circle sub-icon color-red"></i>
                    <span class="sub_link_name">List of Events</span>
                  </a>
                </li>
                <li class="sub-item">
                  <a href="#event_config" class="sub-active">
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
      <div class="header">Event Configuration</div>
      <div class="container-fluid d-flex flex-column flex-md-row">
        <div class="d-flex flex-md-column col-md-6 justify-content-center align-items-center">
          <div class="event-name-config-container row flex-column d-flex justify-content-center content-box-shadow align-self-end me-3">
            <div class="d-flex justify-content-center position-relative h-config">
              <div class="container position-absolute h-100 pt-4">
                <div class="h3 text-center">Event</div>
                <form class="d-flex flex-column" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                    <label for="inputEventName" class="fs-6">Event</label>
                    <input type="text" class="form-control" id="inputEventName" onkeydown="return alphaOnly(event);" placeholder="Enter Event Name" name="inputEventName" maxlength="25" required>       
                    <div class="text-danger d-flex w-100 justify-content-center" id="checkEventName"><?php if(isset($error['eventName'])) echo $error['eventName']?></div>  
                  </div>
                  <button type="submit" class="btn btn-danger justify-self-end align-self-end rounded-pill px-4" id="eventSaveBtn" name="eventSaveBtn">Save</button>
                </form>
              </div>
            </div>
            <div class="d-flex justify-content-center position-relative h-data">
              <div class="d-flex container position-absolute h-100 flex-column">
                <i class='bx bx-search icon'></i>
                <input type="text" id="eventNameData" class="form-control my-2" placeholder="Search..." onkeyUp="eventNameSearch()">
                <div class="event-name-data-container">
                  <table id="eventNameTable">
                    <?php
                      $row = mysqli_num_rows($eventName);
                      if ($row > 0) {
                        while($result = mysqli_fetch_array($eventName)):;
                    ?>
                    <tr id="eventNameDataTable">
                      <td class="d-flex justify-content-between px-4">
                        <?php echo $result[1]; ?> 
                        <a href="event_configuration.php?eventNameId=<?php echo $result[0]?>" class="d-flex">
                          <i class='bx bx-x align-self-center color-red' name="eventNameDataDeleteBtn"></i>
                        </a>
                      </td>
                    </tr>
                    <?php endwhile; 
                      }
                      else{
                    ?>
                    <div id="noDataCat">
                      <div class="d-flex px-4">
                        There is NO Event Data...
                      </div>
                    </div>
                    <?php
                      }
                    ?>
                    <div id="noResultEve">
                      <div class="d-flex justify-content-center px-4">
                        No results found...
                      </div>
                    </div>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex flex-md-column col-md-6 justify-content-center align-items-center">
          <div class="category-name-config-container row flex-column d-flex justify-content-start content-box-shadow align-self-start ms-3">
            <div class="d-flex justify-content-center position-relative h-config">
              <div class="container position-absolute h-100 pt-4">
                <div class="h3 text-center">Category</div>
                <form class="d-flex flex-column" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                    <label for="selectEventName" class="fs-6">Event</label>
                    <select name="selectEventName" id="selectEventName" title="Select Event Name" class="form-control selectpicker" data-live-search="true" required>
                      <?php 
                      $row = mysqli_num_rows($eventName);
                      if ($row > 0) {
                      while($row = mysqli_fetch_array($selectEventName)):;?>
                      <option value="<?php echo $row[0]; ?>">
                        <?php echo $row[1]; ?>
                      </option>
                      <?php endwhile; 
                      }
                      else{
                    ?>
                      <option disabled class="noEventNameData">
                        
                      </option>
                    <?php
                      }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="selectEventType" class="fs-6">Event Type</label>
                    <select name="selectEventType" id="selectEventType" title="Select Event Type" class="form-control selectpicker" required>
                      <?php 
                      $row = mysqli_num_rows($eventType);
                      if ($row > 0) {
                      while($row = mysqli_fetch_array($eventType)):;?>
                      <option value="<?php echo $row[0]; ?>">
                        <?php echo $row[1]; ?>
                      </option>
                      <?php endwhile; 
                      }
                      else{
                    ?>
                      <option disabled class="noEventTypeData">
                        No event type found...
                      </option>
                    <?php
                      }
                    ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="inputCategoryName" class="fs-6">Category</label>
                    <input type="text" class="form-control" id="inputCategoryName" onkeydown="return alphaOnly(event);" placeholder="Enter Category Name" name="inputCategoryName" maxlength="25" required>
                    <div class="text-danger d-flex w-100 justify-content-center" id="checkCategoryName"><?php if(isset($error['categoryName'])) echo $error['categoryName']?></div>
                  </div>
                  <button type="submit" class="btn btn-danger justify-self-end align-self-end rounded-pill px-4" id="categorySaveBtn" name="categorySaveBtn">Save</button>
                </form>
              </div>
            </div>
            <div class="d-flex justify-content-center position-relative h-data">
                <div class="container position-absolute h-100 flex-column">
                  <i class='bx bx-search icon'></i>
                  <input type="text" id="categoryNameData" class="form-control my-2" placeholder="Search..." onkeyUp="categoryNameSearch()">
                  <div class="category-name-data-container">
                    <table id="categoryNameTable" data-name="categoryNameTable">
                      <?php
                        $row = mysqli_num_rows($categoryName);
                        if ($row > 0) {
                          while($result = mysqli_fetch_array($categoryName)):;
                          $categoryEventName_query = "SELECT * FROM eventnametb WHERE event_name_id = $result[1]";
                          $categoryEventNameResult = mysqli_query($dbname,$categoryEventName_query);
                          $categoryEventNameFetch = mysqli_fetch_array($categoryEventNameResult);
                          $categoryEventName = $categoryEventNameFetch[1];

                          $categoryEventType_query = "SELECT * FROM eventtypetb WHERE event_type_id = $result[2]";
                          $categoryEventTypeResult = mysqli_query($dbname,$categoryEventType_query);
                          $categoryEventTypeFetch = mysqli_fetch_array($categoryEventTypeResult);
                          $categoryEventType = $categoryEventTypeFetch[1];
                      ?>
                      <tr id="categoryNameDataTable">
                          <td><?php echo "$result[3] </td><td class='category-details'>($categoryEventName)($categoryEventType)</td>"; ?> 
                          <td>
                          <a href="event_configuration.php?categoryNameId=<?php echo $result[0]?>" class="d-flex justify-content-end">
                            <i class='bx bx-x align-self-center color-red' name="categoryNameDataDeleteBtn"></i>
                          </a>
                        </td>
                      </tr>
                      <?php endwhile; 
                        }
                        else{
                      ?>
                      <div id="noDataCat">
                        <div class="d-flex px-4">
                          There is NO Category Data...
                        </div>
                      </div>
                      <?php
                        }
                      ?>
                      <div id="noResultCat">
                        <div class="d-flex justify-content-center px-4">
                          No results found...
                        </div>
                      </div>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Scripts -->
    <script type="text/javascript" src="./js/script.js"></script>
    <script type="text/javascript" src="./js/jquery-3.6.4.js"></script>
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
    <script type="text/javascript" src="./js/event-config.js"></script>
  </body>
</html>