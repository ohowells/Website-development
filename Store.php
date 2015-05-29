<?php
include ("dbinfo.php");
$comm=@mysql_connect(localhost,$username,$password);
$rs=@mysql_select_db($database) or die("Unable to select database");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>Store</title>
		<link rel="stylesheet" type="text/css" href="css/main.css"/>
	</head>
	<body>
		<div id="placeholder">
			<!--Page title-->
			<div id="title">
				<a href="centenary.htm"><img src="images/comm-serv-logo.jpg" title="Celebrating 100 Years!" alt="Title"/></a>
			</div>

			<!--Left box (Navigation)-->
			<div id="nav_left">
				<ul>
					<li>
						<a href="History of Glamorgan.htm">History of Glamorgan</a>
					</li>
					<li>
						<a href="Location.htm">Location</a>
					</li>
					<li>
						<a href="study.htm">Why study with us</a>
					</li>
					<li>
						<a href="Store.php">Store</a>
					</li>
					<li>
						<a href="Contact us.htm">Contact us</a>
					</li>
				</ul>
			</div>

			<!--Main page content-->
			<div id="content">
				<div id="c_spacer">

				</div>

				<h1> Store </h1>
				<h2> Glam Clothing </h2>

				<?php
				$sql="SELECT * FROM storedb WHERE ItemType = 'Glam Clothing' ORDER BY ItemId";
				$result=mysql_query($sql) or die("SELECT Error: ".mysql_error());
				$num_rows=mysql_num_rows($result);
				?>

				<table width=400 border=1>
					<tr>
						<td><strong>ID</strong></td>
						<td><strong>Name</strong></td>
						<td><strong>Type</strong></td>
						<td><strong>Price</strong></td>
					</tr>

					<?php
					while($get_info=mysql_fetch_array($result)) {
					echo("<tr>\n");
					echo("<td>".$get_info["ItemId"]."</td>");
					echo("<td>".$get_info["ItemName"]."</td>");
					echo("<td>".$get_info["ItemType"]."</td>");
					echo("<td>".$get_info["ItemPrice"]."</td>");
					echo("<tr>\n");
					}
					?>
				</table>
				<h2> Glam Home </h2>

				<?php
				$sql="SELECT * FROM storedb WHERE ItemType = 'Glam Home' ORDER BY ItemId";
				$result=mysql_query($sql) or die("SELECT Error: ".mysql_error());
				$num_rows=mysql_num_rows($result);
				?>

				<table width=400 border=1>
					<tr>
						<td><strong>ID</strong></td>
						<td><strong>Name</strong></td>
						<td><strong>Type</strong></td>
						<td><strong>Price</strong></td>
					</tr>

					<?php
					while($get_info=mysql_fetch_array($result)) {
					echo("<tr>\n");
					echo("<td>".$get_info["ItemId"]."</td>");
					echo("<td>".$get_info["ItemName"]."</td>");
					echo("<td>".$get_info["ItemType"]."</td>");
					echo("<td>".$get_info["ItemPrice"]."</td>");
					echo("<tr>\n");
					}
					mysql_close();
					?>
				</table>
			</div>

			<!--Right box (News/Updates)-->
			<div id="right">
				<div id="right_t">
					<!--title right content-->
					Follow us
				</div>

				<div class="img_holder">
					<!--tumbnail facebook logo-->
					<a href="https://www.facebook.com/UniversityOfSouthWales" target=" "><img src="images/facebook.jpg" title="Visit our Facebook page" alt="Facebook_logo"/></a>
					<!--tumbnail twitter logo-->
					<a href="https://twitter.com/unisouthwales" target=" "><img src="images/twitter.jpg" title="Follow us on Twitter" alt="Twitter_logo"/></a>
					<!--tumbnail newsfeed logo-->
					<a href="#" target=" "><img src="images/rss.jpg" title="Subscribe for news" alt="rss_logo"/></a>
					<!--tumbnial youtube logo-->
					<a href="http://www.youtube.com/user/GlamorganUniversity" target=" "><img src="images/youtube.jpg" title="Subscribe to our channel" alt="youtube_logo"/></a>
				</div>
			</div>

			<div id="footer">
				<br />
				<hr />

				<h4>University of Glamorgan</h4>
				<p>
					Pontypridd, CF37 1DL, UK.
				</p>
				<p>
					&copy; University of Glamorgan
				</p>
			</div>

		</div>
	</body>
</html>