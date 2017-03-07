<?php
	if(isset($_POST['email']))
	{
		$email_to = "joemarvin95@gmail.com";
		$email_subject = "Bombshells Beauty Contact Form Message";

		function died($error) {
			echo $error;
			die();
		}

		$email_from = $_POST['email'];
		$name = $_POST['name'];
		$message = $_POST['message'];

		$email_message = "Form details below:\n\n";

		function cleanString($string) {
			$bad = array("content-type", "bcc:", "to:", "cc:", "href");
			return str_replace($bad, "", $string);
		}

		$email_message .= "Name: ".cleanString($name)."\n";
		$email_message .= "Email: ".cleanString($email_from)."\n";
		$email_message .= "Message: ".cleanString($message)."\n";

		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n".
		'X-Mailer: PHP/'.phpversion();

		@mail($email_to, $email_subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Contact</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  </head>
  <body>
    <main class="container-fluid">
      <div id="sent">
				<div class="container">
					<p class="sent-msg">
						Message sent
					</p>
					<a href="index.html">Return to homepage</a>
				</div>
			</div>
    </main>
    <footer class="container-fluid">
      <div class="container">
        <div class="row">
          <ul class="col-xs-12" id="social-list">
            <li>
              <a target="_blank" href="https://www.facebook.com/bombshellshorncastle">
                <img src="images/fb-logo.png" alt="Facebook">
              </a>
            </li>
          </ul> 
        </div>
      </div>
    </footer>
  </body>
</html>

<?php
	}
?>