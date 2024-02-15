<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
  <meta name="keywords"
    content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="pixelstrap">
  <link rel="icon" href="../assets/images/logo/logoicon.png" type="image/x-icon">
  <link rel="shortcut icon" href="../assets/images/logo/logoicon.png" type="image/x-icon">
  <title>CES CRM</title>
  <!-- Google font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-picker.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/owlcarousel.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/rating.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/vector-map.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
  <link rel="stylesheet" href="../assets/css/topbar.css">
  <link rel="stylesheet" href="../assets/css/dialpad.css">
</head>

<body>
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div class="page-header row">
      <div class="col-4 col-xl-4 page-title">
        <h4 class="f-w-700 mt-2">CES Dashboard</h4>
      </div>
      <!-- Page Header Start-->
      <div class="header-wrapper col m-0">
        <div class="row">
          <div class="nav-right col-xxl-8 col-xl-6 col-md-7 col-8 pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
              <li><span class="header-search">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#search"></use>
                  </svg></span></li>
              <li>
                <div class="form-group w-100">
                  <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative d-flex align-items-center">
                      <svg class="search-bg svg-color">
                        <use href="../assets/svg/icon-sprite.svg#search"></use>
                      </svg>
                      <input class="demo-input py-0 Typeahead-input form-control-plaintext w-100" type="text"
                        placeholder="Search Mofi .." name="q" title="">
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="mode">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                </div>
              </li>
              <li class="profile-nav onhover-dropdown px-0 py-0">
                <div class="d-flex profile-media align-items-center"><img class="img-30"
                    src="../assets/images/dashboard/profile.png" alt="">
                  <div class="flex-grow-1"><span>Alen Miller</span>
                    <p class="mb-0 font-outfit">UI Designer<i class="fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="private-chat.html"><i data-feather="user"></i><span>Account</span></a></li>
                  <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li>
                  <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                  <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li>
                  <li><a href="login.html"><i data-feather="log-in"> </i><span>Log in</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">                        
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName">{{name}}</div>
              </div>
              </div>
            </script>
          <script class="empty-template"
            type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
    </div>
    <!-- Page Body Start-->
    <div class="page-body-wrapper">