<?php
	function getPageItem($item) {
		return $_GET[$item]; 
	}
?>

Hello, <?php echo getPageItem("fullname"); ?>!<br>
Your Email is
<?php echo getPageItem('emailaddress')?>!<br>
And your message is: <b><?php echo getPageItem('comment'); ?>.</b>
