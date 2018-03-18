<?php 
	session_start();
	include 'connection.php';
	 if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
		 header('Location:http://localhost:1234/admin/login.php');
	 }
else{
	if(isset($_GET["cid"])){
		$id =$_GET["cid"];
	}
	$error1 ="";
$error2 ="";
if(isset($_POST["name"])&& isset($_POST["contact"] )&& isset($_POST['status']) && isset($_POST['priority']))
{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$contact = $_POST["contact"];
	$status = $_POST["status"];
	$priority = $_POST["priority"];
	$assign = $_POST["assign"];

	$manager = $_POST["manager"];
	$email = $_POST["email"];
	$typeb = $_POST["typeb"];
	$website = $_POST["website"];
	$comments = $_POST["comments"];
	$address = $_POST["address"];
	$landmark = $_POST["landmark"];
	$mono = $_POST["mono"];
	$monc = $_POST["monc"];
	$tueo = $_POST["tueo"];
	$tuec = $_POST["tuec"];
	$wedo = $_POST["wedo"];
	$wedc = $_POST["wedc"];
	$thurso = $_POST["thurso"];
	$thursc = $_POST["thursc"];
	$frio = $_POST["frio"];
	$fric = $_POST["fric"];
	$sato = $_POST["sato"];
	$satc = $_POST["satc"];
	$suno = $_POST["suno"];
	$sunc = $_POST["sunc"];
	$gallery = $_POST["gallery"];
	$rating = $_POST["rating"];
	$verification = $_POST["verification"];
	if(1)
	{
		$query = "UPDATE client SET name='{$name}',contact='{$contact}',status='{$status}',priority='{$priority}',assigned_to='{$assign}',
			manager ='{$manager}',
			email ='{$email}',
			typeb ='{$typeb}',
			website ='{$website}',
			comments ='{$comments}',
			address ='{$address}',
			landmark ='{$landmark}',
			mono ='{$mono}',
			monc ='{$monc}',
			tueo ='{$tueo}',
			tuec ='{$tuec}',
			wedo ='{$wedo}',
			wedc ='{$wedc}',
			thurso ='{$thurso}',
			thursc ='{$thursc}',
			frio ='{$frio}',
			fric ='{$fric}',
			sato ='{$sato}',
			satc ='{$satc}',
			suno ='{$suno}',
			sunc ='{$sunc}',
			gallery ='{$gallery}',
			rating ='{$rating}',
			verification ='{$verification}'

		WHERE cid='{$id}'";
		if(mysqli_query($link, $query)){
			$name2=$_SESSION['id'];
			$date = date("Y-m-d");
			$table = 'client';
			date_default_timezone_set('Asia/Kolkata');
			$time = date('H:i');
			$query_type = 'update';
			$rowid = $id;
			$query1 = "INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP)";
			//INSERT INTO `change_by` (`uid`, `tablename`, `query_type`, `rowid`, `date`, `time`) VALUES ('{$name2}', '{$table}', '{$query_type}', '{$rowid}', '{$date}', CURRENT_TIMESTAMP);
			if(mysqli_query($link, $query1)){
				header('Location:http://localhost:1234/admin/companytrial.php');
			}
			else{
				die("not done");
			}
			//header('Location:http://localhost:1234/admin/companytrial.php');
		}
		else{
			die('Invalid query: ' . mysql_error());
		}
	}

}
else{
	$query = "SELECT * FROM client WHERE cid='{$id}'";
		if($result = mysqli_query($link,$query)){
			while ($row = mysqli_fetch_array($result)) {
				$name = $row[1];
				$contact = $row[2];
				$status = $row[3];
				$priority = $row[5];
				$assign = $row[6];
				$manager = $row["manager"];
				$email = $row["email"];
				$typeb = $row["typeb"];
				$website = $row["website"];
				$comments = $row["comments"];
				$address = $row["address"];
				$landmark = $row["landmark"];
				$mono = $row["mono"];
				$monc = $row["monc"];
				$tueo = $row["tueo"];
				$tuec = $row["tuec"];
				$wedo = $row["wedo"];
				$wedc = $row["wedc"];
				$thurso = $row["thurso"];
				$thursc = $row["thursc"];
				$frio = $row["frio"];
				$fric = $row["fric"];
				$sato = $row["sato"];
				$satc = $row["satc"];
				$suno = $row["suno"];
				$sunc = $row["sunc"];
				$gallery = $row["gallery"];
				$rating = $row["rating"];
				$verification = $row["verification"];
			}
}
else{
	die('Invalid select query: ' . mysql_error());
}
}	
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Toastr &middot; Elephant Template &middot; The fastest way to build modern admin site for any platform, browser, or device</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:url" content="http://demo.naksoid.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta property="og:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta property="og:image" content="../img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@naksoid">
    <meta name="twitter:creator" content="@naksoid">
    <meta name="twitter:title" content="The fastest way to build modern admin site for any platform, browser, or device">
    <meta name="twitter:description" content="Elephant is a front-end template created to help you build modern web applications, fast and in a professional manner.">
    <meta name="twitter:image" content="../img/ae165ef33d137d3f18b7707466aa774d.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#d9230f">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/application.min.css">
    <link rel="stylesheet" href="css/demo.min.css">
  </head>
  <body class="layout layout-header-fixed">
    <div class="layout-header">
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <a class="navbar-brand navbar-brand-center" href="index-2.html">
            <img class="navbar-brand-logo" src="img/logo-inverse.svg" alt="Elephant">
          </a>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#sidenav">
            <span class="sr-only">Toggle navigation</span>
            <span class="bars">
              <span class="bar-line bar-line-1 out"></span>
              <span class="bar-line bar-line-2 out"></span>
              <span class="bar-line bar-line-3 out"></span>
            </span>
            <span class="bars bars-x">
              <span class="bar-line bar-line-4"></span>
              <span class="bar-line bar-line-5"></span>
            </span>
          </button>
          <button class="navbar-toggler visible-xs-block collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="arrow-up"></span>
            <span class="ellipsis ellipsis-vertical">
              <img class="ellipsis-object" width="32" height="32" src="img/0180441436.jpg" alt="Teddy Wilson">
            </span>
          </button>
        </div>
        <div class="navbar-toggleable">
          <nav id="navbar" class="navbar-collapse collapse">
            <button class="sidenav-toggler hidden-xs" title="Collapse sidenav ( [ )" aria-expanded="true" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="bars">
                <span class="bar-line bar-line-1 out"></span>
                <span class="bar-line bar-line-2 out"></span>
                <span class="bar-line bar-line-3 out"></span>
                <span class="bar-line bar-line-4 in"></span>
                <span class="bar-line bar-line-5 in"></span>
                <span class="bar-line bar-line-6 in"></span>
              </span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li class="visible-xs-block">
                <h4 class="navbar-text text-center">Hi, Teddy Wilson</h4>
              </li>
              <li class="hidden-xs hidden-sm">
                <form class="navbar-search navbar-search-collapsed">
                  <div class="navbar-search-group">
                    <input class="navbar-search-input" type="text" placeholder="Search for people, companies, and more&hellip;">
                    <button class="navbar-search-toggler" title="Expand search form ( S )" aria-expanded="false" type="submit">
                      <span class="icon icon-search icon-lg"></span>
                    </button>
                    <button class="navbar-search-adv-btn" type="button">Advanced</button>
                  </div>
                </form>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-envelope-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">8</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-envelope icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">8</span>
                    Messages
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="compose.html">New Message</a>
                    <h5 class="dropdown-heading">Recent messages</h5>
                  </div>
                  <div class="dropdown-body">
                    <div class="list-group list-group-divided custom-scrollbar">
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0299419341.jpg" alt="Harry Jones">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">16 min</small>
                            <h5 class="notification-heading">Harry Jones</h5>
                            <p class="notification-text">
                              <small class="truncate">Hi Teddy, Just wanted to let you know we got the project! We should be starting the planning next week. Harry</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">2 hr</small>
                            <h5 class="notification-heading">Daniel Taylor</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy Boyyyy, label text isn't vertically aligned with value text in grid forms when using .form-control... DT</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0460697039.jpg" alt="Charlotte Harrison">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 20</small>
                            <h5 class="notification-heading">Charlotte Harrison</h5>
                            <p class="notification-text">
                              <small class="truncate">Dear Teddy, Can we discuss the benefits of this approach during our Monday meeting? Best regards Charlotte Harrison</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0531871454.jpg" alt="Ethan Walker">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 19</small>
                            <h5 class="notification-heading">Ethan Walker</h5>
                            <p class="notification-text">
                              <small class="truncate">If you need any further assistance, please feel free to contact us. We are always happy to assist you. Regards, Ethan</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 18</small>
                            <h5 class="notification-heading">Sophia Evans</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy, Please call me when you finish your work! I have many things to discuss. Don't forget call me !! Sophia</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0777931269.jpg" alt="Harry Walker">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 17</small>
                            <h5 class="notification-heading">Harry Walker</h5>
                            <p class="notification-text">
                              <small class="truncate">Thank you for your message. I am currently out of the office, with no email access. I will be returning on 20 Jun.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 15</small>
                            <h5 class="notification-heading">Emma Lewis</h5>
                            <p class="notification-text">
                              <small class="truncate">Teddy, Please find the attached report. I am truly sorry and very embarrassed about not finishing the report by the deadline.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0980726243.jpg" alt="Eliot Morgan">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">Sep 15</small>
                            <h5 class="notification-heading">Eliot Morgan</h5>
                            <p class="notification-text">
                              <small class="truncate">Dear Teddy, Please accept this message as notification that I was unable to work yesterday, due to personal illness.m</small>
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
                  <span class="icon-with-child hidden-xs">
                    <span class="icon icon-bell-o icon-lg"></span>
                    <span class="badge badge-danger badge-above right">7</span>
                  </span>
                  <span class="visible-xs-block">
                    <span class="icon icon-bell icon-lg icon-fw"></span>
                    <span class="badge badge-danger pull-right">7</span>
                    Notifications
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
                  <div class="dropdown-header">
                    <a class="dropdown-link" href="#">Mark all as read</a>
                    <h5 class="dropdown-heading">Recent Notifications</h5>
                  </div>
                  <div class="dropdown-body">
                    <div class="list-group list-group-divided custom-scrollbar">
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">35 min</small>
                            <h5 class="notification-heading">Update Status</h5>
                            <p class="notification-text">
                              <small class="truncate">Failed to get available update data. To ensure the proper functioning of your application, update now.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-flag bg-success rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">43 min</small>
                            <h5 class="notification-heading">Account Contact Change</h5>
                            <p class="notification-text">
                              <small class="truncate">A contact detail associated with your account teddy.wilson, has recently changed.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <span class="icon icon-exclamation-triangle bg-warning rounded sq-40"></span>
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">1 hr</small>
                            <h5 class="notification-heading">Failed Login Warning</h5>
                            <p class="notification-text">
                              <small class="truncate">There was a failed login attempt from "192.98.19.164" into the account teddy.wilson.</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0310728269.jpg" alt="Daniel Taylor">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">4 hr</small>
                            <h5 class="notification-heading">Daniel Taylor</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0872116906.jpg" alt="Emma Lewis">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">8 hr</small>
                            <h5 class="notification-heading">Emma Lewis</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0601274412.jpg" alt="Sophia Evans">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">8 hr</small>
                            <h5 class="notification-heading">Sophia Evans</h5>
                            <p class="notification-text">
                              <small class="truncate">Like your post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                      <a class="list-group-item" href="#">
                        <div class="notification">
                          <div class="notification-media">
                            <img class="rounded" width="40" height="40" src="img/0180441436.jpg" alt="Teddy Wilson">
                          </div>
                          <div class="notification-content">
                            <small class="notification-timestamp">9 hr</small>
                            <h5 class="notification-heading">Teddy Wilson</h5>
                            <p class="notification-text">
                              <small class="truncate">Published a new post: "Everything you know about Bootstrap is wrong".</small>
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="dropdown-footer">
                    <a class="dropdown-btn" href="#">See All</a>
                  </div>
                </div>
              </li>
              <li class="dropdown hidden-xs">
                <button class="navbar-account-btn" data-toggle="dropdown" aria-haspopup="true">
                  <img class="rounded" width="36" height="36" src="img/0180441436.jpg" alt="Teddy Wilson"> Teddy Wilson
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right">
                  <li>
                    <a href="upgrade.html">
                      <h5 class="navbar-upgrade-heading">
                        Upgrade Now
                        <small class="navbar-upgrade-notification">You have 15 days left in your trial.</small>
                      </h5>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li class="navbar-upgrade-version">Version: 1.0.0</li>
                  <li class="divider"></li>
                  <li><a href="contacts.html">Contacts</a></li>
                  <li><a href="profile.html">Profile</a></li>
                  <li><a href="login-1.html">Sign out</a></li>
                </ul>
              </li>
              <li class="visible-xs-block">
                <a href="contacts.html">
                  <span class="icon icon-users icon-lg icon-fw"></span>
                  Contacts
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="profile.html">
                  <span class="icon icon-user icon-lg icon-fw"></span>
                  Profile
                </a>
              </li>
              <li class="visible-xs-block">
                <a href="login-1.html">
                  <span class="icon icon-power-off icon-lg icon-fw"></span>
                  Sign out
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    <div class="layout-main">
      <div class="layout-sidebar">
        <div class="layout-sidebar-backdrop"></div>
        <div class="layout-sidebar-body">
          <div class="custom-scrollbar">
            <nav id="sidenav" class="sidenav-collapse collapse">
              <ul class="sidenav">
                <li class="sidenav-search hidden-md hidden-lg">
                  <form class="sidenav-form" action="http://demo.naksoid.com/">
                    <div class="form-group form-group-sm">
                      <div class="input-with-icon">
                        <input class="form-control" type="text" placeholder="Search…">
                        <span class="icon icon-search input-icon"></span>
                      </div>
                    </div>
                  </form>
                </li>
                <li class="sidenav-heading">Navigation</li>
                <li class="sidenav-item has-subnav">
                  <a href="dashboard-1.html" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-home"></span>
                    <span class="sidenav-label">Dashboards</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Dashboards</li>
                    <li><a href="dashboard-1.html">Dashboard 1</a></li>
                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                    <li><a href="dashboard-3.html">Dashboard 3</a></li>
                  </ul>
                </li>
                <li class="sidenav-item">
                  <a href="widgets.html">
                    <span class="badge badge-success">26</span>
                    <span class="sidenav-icon icon icon-th"></span>
                    <span class="sidenav-label">Widgets</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="page-layouts.html">
                    <span class="sidenav-icon icon icon-columns"></span>
                    <span class="sidenav-label">Page layouts</span>
                  </a>
                </li>
                <li class="sidenav-heading">Components</li>
                <li class="sidenav-item has-subnav active">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-briefcase"></span>
                    <span class="sidenav-label">UI Elements</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">UI Elements</li>
                    <li><a href="arrows.html">Arrows</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="dividers.html">Dividers</a></li>
                    <li><a href="files.html">Files</a></li>
                    <li><a href="flags.html">Flags</a></li>
                    <li><a href="grid-system.html">Grid system</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="labels.html">Labels</a></li>
                    <li><a href="lists.html">Lists</a></li>
                    <li><a href="pricing-cards.html">Pricing cards</a></li>
                    <li><a href="progress-bars.html">Progress bars</a></li>
                    <li><a href="spinners.html">Spinners</a></li>
                    <li class="active"><a href="toastr.html">Toastr</a></li>
                    <li><a href="typography.html">Typography</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-edit"></span>
                    <span class="sidenav-label">Forms</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Forms</li>
                    <li><a href="cropper.html">Cropper</a></li>
                    <li><a href="form-controls.html">Form controls</a></li>
                    <li><a href="form-layouts.html">Form layouts</a></li>
                    <li><a href="form-validation.html">Form validation</a></li>
                    <li><a href="form-wizard.html">Form wizard</a></li>
                    <li><a href="input-mask.html">Input mask</a></li>
                    <li><a href="md-form-controls.html">Material form controls</a></li>
                    <li><a href="md-form-validation.html">Material form validation</a></li>
                    <li><a href="pickers.html">Pickers</a></li>
                    <li><a href="select2.html">Select2</a></li>
                    <li><a href="sliders.html">Sliders</a></li>
                    <li><a href="toggles.html">Toggles</a></li>
                    <li><a href="uploader.html">Uploader</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-list"></span>
                    <span class="sidenav-label">Tables</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Tables</li>
                    <li><a href="static-tables.html">Static tables</a></li>
                    <li><a href="dynamic-tables.html">Dynamic tables</a></li>
                  </ul>
                </li>
                <li class="sidenav-item">
                  <a href="charts.html">
                    <span class="sidenav-icon icon icon-pie-chart"></span>
                    <span class="sidenav-label">Charts</span>
                  </a>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-map-marker"></span>
                    <span class="sidenav-label">Maps</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Maps</li>
                    <li><a href="vector-maps.html">Vector maps</a></li>
                    <li><a href="google-maps.html">Google maps</a></li>
                  </ul>
                </li>
                <li class="sidenav-heading">Pages</li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-lock"></span>
                    <span class="sidenav-label">Authentication</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Authentication</li>
                    <li><a href="signup-1.html" target="_blank">Sign up 1</a></li>
                    <li><a href="signup-2.html" target="_blank">Sign up 2</a></li>
                    <li><a href="signup-3.html" target="_blank">Sign up 3</a></li>
                    <li><a href="login-1.html" target="_blank">Login 1</a></li>
                    <li><a href="login-2.html" target="_blank">Login 2</a></li>
                    <li><a href="login-3.html" target="_blank">Login 3</a></li>
                    <li><a href="password-1.html" target="_blank">Reset password 1</a></li>
                    <li><a href="password-2.html" target="_blank">Reset password 2</a></li>
                    <li><a href="password-3.html" target="_blank">Reset password 3</a></li>
                  </ul>
                </li>
                <li class="sidenav-item">
                  <a href="contacts.html">
                    <span class="sidenav-icon icon icon-users"></span>
                    <span class="sidenav-label">Contacts</span>
                  </a>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-envelope"></span>
                    <span class="sidenav-label">Mailbox</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Mailbox</li>
                    <li><a href="mail.html">Mail 1</a></li>
                    <li><a href="inbox.html">Mail 2</a></li>
                    <li><a href="compose.html">Compose</a></li>
                  </ul>
                </li>
                <li class="sidenav-item">
                  <a href="messenger.html">
                    <span class="sidenav-icon icon icon-comments"></span>
                    <span class="sidenav-label">Messenger</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="profile.html">
                    <span class="sidenav-icon icon icon-user"></span>
                    <span class="sidenav-label">Profile</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="drive.html">
                    <span class="sidenav-icon icon icon-cloud-upload"></span>
                    <span class="sidenav-label">Drive</span>
                  </a>
                </li>
                <li class="sidenav-item">
                  <a href="landing-page.html" target="_blank">
                    <span class="sidenav-badge badge badge-danger">Hot</span>
                    <span class="sidenav-icon icon icon-star"></span>
                    <span class="sidenav-label">Landing Page</span>
                  </a>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-shopping-cart"></span>
                    <span class="sidenav-label">E-commerce</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">E-commerce</li>
                    <li><a href="store.html">Store</a></li>
                    <li><a href="shopping-cart.html">Shopping cart</a></li>
                    <li><a href="product.html">Product</a></li>
                  </ul>
                </li>
                <li class="sidenav-item has-subnav">
                  <a href="#" aria-haspopup="true">
                    <span class="sidenav-icon icon icon-files-o"></span>
                    <span class="sidenav-label">Other pages</span>
                  </a>
                  <ul class="sidenav-subnav collapse">
                    <li class="sidenav-subheading">Other pages</li>
                    <li><a href="blank-page.html">Blank Page</a></li>
                    <li><a href="404.html" target="_blank">404</a></li>
                    <li><a href="500.html" target="_blank">500</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="us-elections.html">US elections (timeline)</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="layout-content">
        <div class="layout-content-body">
          <div class="title-bar">
            <h1 class="title-bar-title">
              <span class="d-ib">Update company Information</span>

            </h1>
            <p class="title-bar-description">
              <small>This form is concerned for updating information of Olive Kitchen only</small>
            </p>
          </div>
          <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
			
			<form action=<?php echo $_SERVER['PHP_SELF'] ?> method="post" id="updatec">
			<input type="hidden" value= <?php echo "'".$id."'"; ?> name ="id">
              <div class="form-group">
                <label for="name">Company name</label>
                <input name="name" class="form-control" type="text" value=<?php echo "'".$name."'"; ?>>
				<?php echo $error1 ?>
              </div>
              <div class="form-group">
                <label for="contact">Contact</label>
                <input name="contact" class="form-control" type="text" value=<?php echo "'".$contact."'"; ?>>
				<?php echo $error2 ?>
              </div>
             <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
					<input type = "hidden" value=<?php echo "'".$status."'"; ?> id ="status">
                    <label for="status">Status</label>
                    <select name="status" class="custom-select" id="status1">
                      <option value="1">Success</option>
                      <option value="2">Later in future</option>
					  <option value="3">Lack of budget</option>					  
					  <option value="4">Already enrolled</option>
					   <option value="5">Rejected</option>
					  <option value="6">Other</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
					<input type = "hidden" value=<?php echo "'".$priority."'"; ?> id="priority">
                    <label for="priority">Priority</label>
                    <select name="priority" class="custom-select" id="priority1">
                      <option value="Low">Low</option>
                      <option value="High">High</option>
                      <option value="Medium">Medium</option>
                    </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
				  <input type = "hidden" value=<?php echo "'".$assign."'"; ?> id="assign">
                    <label for="assign">Assigned to</label>
                    <select name="assign" class="custom-select" id="assign1">
					<option value="0">None</option>
					<?php $query1 = "Select sid,fname,lname from salesman";
					if($result1 = mysqli_query($link,$query1)){
						while ($row1 = mysqli_fetch_array($result1)) {
							echo '<option value="'.$row1[0].'">'.$row1[1].' '.$row1[2].'</option>';
						}
					}
					else{
						echo '<option>No</option>';
					} ?>
                    </select>
                  </div>
                </div>
              </div>
			  
			  
			  <div class="form-group">
				<a onclick="openfunction()" href="javascript:void(0);" id ="more" class="more">Want to update more details</a>
			  </div>	

			 <div id="moredetails" style="display:none;">
              <div class="form-group">
                <label for="manager">Manager</label>
                <input name="manager" class="form-control" type="text" 	value=<?php echo "'".$manager."'"; ?> id =  "manager">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input name="email" class="form-control" type="text" value=<?php echo "'".$email."'"; ?> id =  "email">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input name="website" class="form-control" type="text" value=<?php echo "'".$website."'"; ?> id =  "website">
              </div>
              <div class="form-group">
                <label for="typeb">Type of Business</label>
                <input name="typeb" class="form-control" type="text" value=<?php echo "'".$typeb."'"; ?> id =  "typeb">
              </div>
              <div class="form-group">
                <label for="address">Address</label>
                <input name="address" class="form-control" type="text" value=<?php echo "'".$address."'"; ?> id =  "address">
              </div>
              <div class="form-group">
                <label for="landmark">Lamdmark</label>
                <input name="landmark" class="form-control" type="text" value=<?php echo "'".$landmark."'"; ?> id =  "landmark">
              </div>

	
	
             <div class="row gutter-xs">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="mono">Mon Opening</label>
					<input name="mono" class="form-control" type="text" value=<?php echo "'".$mono."'"; ?> id =  "mono">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="monc">Mon Closing</label>
					<input name="monc" class="form-control" type="text" value=<?php echo "'".$monc."'"; ?> id =  "monc">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="tueo">Tue Opening</label>
					<input name="tueo" class="form-control" type="text" value=<?php echo "'".$tueo."'"; ?> id =  "tueo">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="tuec">Tue Closing</label>
					<input name="tuec" class="form-control" type="text" value=<?php echo "'".$tuec."'"; ?> id =  "tuec">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="wedo">Wed Opening</label>
					<input name="wedo" class="form-control" type="text" value=<?php echo "'".$wedo."'"; ?> id =  "wedo">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="wedc">Wed Closing</label>
					<input name="wedc" class="form-control" type="text" value=<?php echo "'".$wedc."'"; ?> id =  "wedc">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="thurso">Thurs Opening</label>
					<input name="thurso" class="form-control" type="text" value=<?php echo "'".$thurso."'"; ?> id =  "thurso">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="thursc">Thurs Closing</label>
					<input name="thursc" class="form-control" type="text" 	value=<?php echo "'".$thursc."'"; ?> id =  "thursc">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="frio">Fri Opening</label>
					<input name="frio" class="form-control" type="text" value=<?php echo "'".$frio."'"; ?> id =  "frio">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="fric">Fri Closing</label>
					<input name="fric" class="form-control" type="text" value=<?php echo "'".$fric."'"; ?> id =  "fric">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="sato">Sat Opening</label>
					<input name="sato" class="form-control" type="text" value=<?php echo "'".$sato."'"; ?> id =  "sato">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="satc">Sat Closing</label>
					<input name="satc" class="form-control" type="text" value=<?php echo "'".$satc."'"; ?> id =  "satc">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="suno">Sun Opening</label>
					<input name="suno" class="form-control" type="text" value=<?php echo "'".$suno."'"; ?> id =  "suno">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="sunc">Sun Closing</label>
					<input name="sunc" class="form-control" type="text" value=<?php echo "'".$sunc."'"; ?> id =  "sunc">
                  </div>
                </div>
              </div>
             <div class="form-group">
                <label for="gallery">Gallery</label>
                <input name="gallery" class="form-control" type="text" 	value=<?php echo "'".$gallery."'"; ?> id =  "gallery">
              </div>
              <div class="form-group">
                <label for="rating">Rating</label>
                <input name="rating" class="form-control" type="text" value=<?php echo "'".$rating."'"; ?> id =  "rating">
              </div>
              <div class="form-group">
                <label for="verification">Verification</label>
                <input name="verification" class="form-control" type="text" value=<?php echo "'".$verification."'"; ?> id =  "verification" >
              </div>
             <div class="form-group">
                <label for="comments">Comments</label>
                <input name="comments" class="form-control" type="text" value=<?php echo "'".$comments."'"; ?> id =  "comments">
              </div>
			  </div>
			  
              <div class="form-group">
                <input type="submit" id="addc" class="btn btn-primary" type="button">
                <input type="reset" class="btn btn-default" type="button" value="Clear">
              </div>
			  </form>
            </div>
          </div>
        </div>
      </div>
      <div class="layout-footer">
        <div class="layout-footer-body">
          <small class="version">Version 1.0.0</small>
          <small class="copyright">2016 &copy; Onest Develoers <a href="http://naksoid.com/">Nimesh Khandelwal</a></small>
        </div>
      </div>
    </div>

    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/demo.min.js"></script>
<script>
var temp = document.getElementById('status').value;
var mySelect = document.getElementById('status1');
for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}

var temp = document.getElementById('priority').value;
var mySelect = document.getElementById('priority1');
for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}

var temp = document.getElementById('assign').value;
var mySelect = document.getElementById('assign1');
for(var i, j = 0; i = mySelect.options[j]; j++) {
  if(i.value == temp) {
    mySelect.selectedIndex = j;
    break;
  }
}
</script>
<script>
	function openfunction()
	{
		$("#more").css("display", "none");
		$("#moredetails").css("display", "block");
		//$('#companyadd').attr('action', 'updatec.php');
	}
</script>
  </body>
</html>