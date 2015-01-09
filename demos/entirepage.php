<?php
if ($_POST['mk'] == 1) {
	setcookie('generatedcount', $_COOKIE['generatedcount'] + 1, time()+3600);
	$locationurl = $_SERVER['HTTP_HOST'] . dirname($_SERVER["REQUEST_URI"]);
		$final = file_get_contents('http://' . dirname($locationurl) . '/generate.php?gm=' . $_POST['gm'] . '&prefix=' . $_POST['prefix'] . '&suffix=' . $_POST['suffix'] . '&importantnouns=' . $_POST['importantnouns']);
}
$usernamecount = $_COOKIE['generatedcount'] + 1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Username Generator</title>
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/narrow_jumbotron.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js does not work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="modal fade" id="usernameSettings" tabindex="-1" role="dialog" aria-labelledby="usernameSettingsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="usernameSettingsLabel">Options</h4>
      </div>
      <div class="modal-body">
<form class="form-horizontal" action="" method="POST" role="form">
<div class="row">
<div class="col-md-7">
  <div class="form-group">
    <label class="col-sm-2 control-label">Method</label>
    <div class="col-sm-10">
    <input type="hidden" name="mk" value="1" />
  <select name="gm" class="form-control">
  <option value="1">1 (Adjective Noun Number)</option>
  <option value="2">2 (Adjective Noun)</option>
  </select>
    </div>
  </div>
  </div>
<div class="col-md-5">
  <div class="form-group">
    <div class="col-sm-12">
		<input type="text" class="form-control" placeholder="Important noun" name="importantnouns" value="<?php echo $_POST['importantnouns']; ?>">
    </div>
  </div>
  </div>
  </div>
<div class="row">
<div class="col-md-6">
  <div class="form-group">
    <label class="col-sm-2 control-label">Prefix</label>
    <div class="col-sm-10">
		<input type="text" placeholder="_xxX" class="form-control" name="prefix" value="<?php echo $_POST['prefix']; ?>">
    </div>
  </div>
  </div>
<div class="col-md-6">
  <div class="form-group">
    <label class="col-sm-2 control-label">Suffix</label>
    <div class="col-sm-10">
		<input type="text" placeholder="Xxx_" class="form-control" name="suffix" value="<?php echo $_POST['suffix']; ?>">
    </div>
  </div>
  </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Generate</button>
        </form>
      </div>
    </div>
  </div>
</div><br /><br /><br />
    <div class="container">
    <div class="jumbotron" style="text-align:center;">
    <form method="POST">
    <input type="hidden" name="mk" value="1" />
    <?php
    if ($_POST['gm']) {
		echo '<input type="hidden" name="gm" value="'. $_POST['gm'] .'" />';
    }
	else {
		echo '<input type="hidden" name="gm" value="1" />';
	}
    if ($_POST['suffix']) {
		echo '<input type="hidden" name="suffix" value="'. $_POST['suffix'] .'" />';
    }
	else {
		echo '<input type="hidden" name="suffix" value="" />';
	}
    if ($_POST['prefix']) {
		echo '<input type="hidden" name="prefix" value="'. $_POST['prefix'] .'" />';
    }
	else {
		echo '<input type="hidden" name="prefix" value="" />';
	}
    if ($_POST['importantnouns']) {
		echo '<input type="hidden" name="importantnouns" value="'. $_POST['importantnouns'] .'" />';
    }
	else {
		echo '<input type="hidden" name="importantnouns" value="" />';
	}
    ?>
    <h1 style="font-size: 50px;">Username Generator</h1>
    <?php
    if ($_POST['mk'] == '1') {
    echo "<p>Your username is...</p>";
    echo '<div style="font-size: 20px;" class="well well-sm">';
    echo $final;
    echo '</div>';
    echo '<p>Make another?</p>';
    }
    else {
    echo '<p>Would you like to randomly generate a username?</p>';
    }
    ?>
<div class="btn-group">
  <button type="submit" class="btn btn-success">Yes please</a>
  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="modal" data-target="#usernameSettings">
    <span class="glyphicon glyphicon-cog"></span>
  </button>
</div> <a href="index.php" type="button" class="btn btn-danger">No thanks</a>
  </form>
    </div>
	<div class="row">
	<?php if ($_POST['mk'] == 1) { ?>
		<div class="col-md-4"><p>
		<?php
		if ($usernamecount == 1) {
			echo "You have generated one username.";
		}
		elseif ($usernamecount < 10) {
			echo "You have generated $usernamecount usernames.";
		}
		elseif ($usernamecount < 20) {
			echo "Nice, you have made $usernamecount usernames.";
		}
		elseif ($usernamecount < 50) {
			echo "Yowza! $usernamecount usernames. Do you like any of them?";
		}
		elseif ($usernamecount < 100) {
			echo "Wow. You've made $usernamecount usernames and you're not gonna stop.";
		}
		elseif ($usernamecount < 500) {
			echo "$usernamecount. I'm pretty sure its not a competition to see who can make the most usernames.";
		}
		elseif ($usernamecount < 1000) {
			echo "Don't you have a job?! You've made $usernamecount usernames... I think there are better things to do.";
		}
		elseif ($usernamecount < 2000) {
			echo "Well, I think you may like these messages. $usernamecount and you're still going. Tell <a href='http://speedysnail6.com'>Speedysnail6</a> any suggestions to make it better.";
		}
		elseif ($usernamecount >= 2000) {
			echo "Due to the owner wanting to code an actual feature, there will be no new messages saying that you have $usernamecount usernames made. I hope you are having fun. Maybe more later.";
		}
		?>
		</p></div>
		<div class="col-md-4">
		<p>If you <a href="http://codecanyon.com/#">buy</a> this, you can configure your own words that randomly mix and match.</p>
		</div>
		<div><p>Incase you care, your IP Address is <?php echo $_SERVER['REMOTE_ADDR']; ?> and a random number is <?php echo rand(1,10); ?>. You're welcome
	<?php } else {?>
		<div class="col-md-4"><p>Copyright &copy; <?php echo $_SERVER['HTTP_HOST']; ?>. All rights reserved.</p></div>
		<div class="col-md-4"><p>This PHP script was developed by <a href="http://speedysnail6.com" title="Speedysnail6">Speedysnail6</a>.</div>
		<div class="col-md-4">Want to POST this app for your website? <a href="https://github.com/Speedysnail6/username-generator">Download it</a></div>
	<?php } ?>
	</div>
    </div>

    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>