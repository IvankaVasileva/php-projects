 <html>
 <body>

<?php
	function getPageItem($item) {
		return $_GET[$item]; 
	}
?>

<?php if($_GET['index'] && $_GET['index'] == "index") { ?>
	Hello, <?php echo getPageItem("fname") . " " . getPageItem("lname"); ?>!<br>
	Your Email is
	<?php echo getPageItem('emailaddress')?>!<br>
	And your message is: <b><?php echo getPageItem('comment'); ?>.</b>
<?php return; } ?>

 </body>
 </html> 