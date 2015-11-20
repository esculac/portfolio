<?php
/**
 * Template Name: Contact Me
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

		<div id="mail-content" class="site-content" role="main">
			<?php
			//if "email" variable is filled out, send email
			  if (isset($_REQUEST['email']))  {
			  
			  //Email information
			  $admin_email = "esculac@gmail.com";
			  $email = $_REQUEST['email'];
			  $subject = $_REQUEST['subject'];
			  $comment = $_REQUEST['comment'];
			  
			  //send email
			  mail($admin_email, "$subject", $comment, "From:" . $email);
			  
			  //Email response
			  echo '<div id="response-wrapper"> Thank you for contacting me! </div>';
			  }
			  
			  //if "email" variable is not filled out, display the form
			  else  {
			?>

			 <form method="post" id="mailing-form">
			  <input name="email" type="text" placeholder="Your email"/><br />
			   <input name="subject" type="text" placeholder="Subject"/><br />
			  Message:<br />
			  <textarea name="comment" rows="15" cols="40"></textarea><br />
			  <input id="submit-mail-button" type="submit" value="Submit" />
			  </form>
			  
			<?php
			  }
			?>
		</div><!-- #content -->

</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
?>
