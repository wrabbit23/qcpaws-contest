<?

/* if the ID is set */
if(isset($_GET['id'])) {
	$id=$_GET['id'];
} else if(isset($_GET['ID'])) {
	$id=$_GET['ID'];
} else {
	$id='';
}

/* if the 'vote' flag is set */
if(isset($_GET['now'])) {
	if ($_GET['now'] == 'true') { $vote=true; }
	else { $vote=false; }
} else {
	$vote=false;
}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>QC PAWS Photo Contest</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/templates/PawsTheme/favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/custom.css" rel="stylesheet">
		<script>
		function vote(o)
		{
			var id=o.elements['item_number'].value;
			console.log(id)
			//entry number is in range and valid
			if (id>0 && id<200) {
				//submit the form
				return true;
			} else {
				//cancel submission and show help message
				$('.help-block').removeClass('hid');
				return false;
			}
		}

		</script>
	</head>
	<body>

<!-- HEADER
=================================-->

<div class="jumbotron text-center">
    <div class="container">
      <div class="row">
        <div class="col col-lg-12 col-xs-12">
          <h1>QC paws Photo Contest</h1>
        </div>
      </div>
    </div>
</div>
<!-- /header container-->

<!-- CONTENT
=================================-->
<div class="container">

	<div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">

			<div class="block super">
				<h3>Vote early and often!</h3>
				<p>Votes cost $1 and go to support QC Paws <a href="http://qcpaws.org/index.php/about-qcpaws">mission</a>.</p>
				<p>Grand Prize is a 16X20 head and chest acrylic, hand painted portrait by Allen Holloway, Quad Cities animal and wildlife artist.   <a href="http://www.artbyallenholloway.com" target="_blank">http://www.artbyallenholloway.com</a></p>
				<p>The top Dog and Cat will revieve a $100 gift card to Mallard Pointe Kennels</p>
				<p>All proceeds go to QCPAWS to help the homeless animals in our community!</p>
				<p>Entries are welcome until we reach 100 Dogs and 100 Cats.  Email your photo to <a href="mailto:kathytack@sbcglobal.net">kathytack@sbcglobal.net</a> to enter.</p>
				<p>Voting closes at midnight, May 9th.</p>
				<p>Good luck to all participants, and thank you for your support!</p>
			</div>

	<? if (empty($id)) { ?>

			<div class="block galleries">
				<h3>Visit the Galleries</h3>
					<div class="btnHolder">
						<button class="btn" onClick="document.location.href='https://www.facebook.com/media/set/?set=a.905611246163496.1073741864.166762550048373&type=3';">Cats</button>
						<button class="btn" onClick="document.location.href='https://www.facebook.com/media/set/?set=a.905594032831884.1073741859.166762550048373&type=3';">Dogs</button>
					</div>
				</div>

	<? } ?>

		</div>
        <div class="col-lg-6 col-md-6 col-sm-12">

	<? if(empty($id) && !$vote) { ?>

			<div class="block">
				<h3>Vote Now!</h3>
				<p>if you know the entry number you wish to vote for, you may</p>
					<div class="btnHolder">
						<button class="btn btn-primary" onClick="document.location.href='?now=true';">Vote Now!</button>
					</div>
			</div>

	<? } else { ?>


			<div class="block form">
				<h3>Cast Your Vote!</h3>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" onsubmit="return vote(this);">
					<input type="hidden" name="cmd" value="_donations">
					<input type="hidden" name="business" value="2TURSPPAHLMHS">
					<input type="hidden" name="lc" value="US">
					<input type="hidden" name="item_name" value="Cutest Pet Contest 2016">
					<input type="hidden" name="currency_code" value="USD">
					<input type="hidden" name="no_note" value="1">
					<input type="hidden" name="no_shipping" value="1">
					<input type="hidden" name="rm" value="1">
					<input type="hidden" name="return" value="http://qcpaws.org/vote/thankyou.html">
					<input type="hidden" name="cancel_return" value="http://qcpaws.org/vote/">
					<input type="hidden" name="bn" value="PP-DonationsBF:btn_donateCC_LG.gif:NonHosted">


					<div class="input-group">
						<label for="item_number">Entry Number</label>
						<input type="number" id="item_number" name="item_number" size="4" value="<?=$id?>">
						<p class="help-block hid">Sorry, that doesn't look like a valid entry number.  Visit the galleries: <a href="https://www.facebook.com/media/set/?set=a.904907536233867.1073741847.166762550048373&type=3">dogs</a>, <a href="https://www.facebook.com/media/set/?set=a.904889732902314.1073741846.166762550048373&type=3">cats</a></p>
					</div>

					<div class="input-group">
						<label for="amount">Number of Votes</label>
						<select id="amount" name="amount">
							<option value="1.00">1</option>
							<option value="2.00">2</option>
							<option value="3.00">4</option>
							<option value="4.00">4</option>
							<option value="5.00">5</option>
							<option value="6.00">6</option>
							<option value="7.00">7</option>
							<option value="8.00">8</option>
							<option value="9.00">9</option>
							<option value="10.00">10</option>
							<option value="15.00">15</option>
							<option value="20.00">20</option>
							<option value="25.00">25</option>
							<option value="30.00">30</option>
							<option value="35.00">35</option>
							<option value="40.00">40</option>
							<option value="45.00">45</option>
							<option value="50.00">50</option>
						</select>

					</div>

					<div class="btnHolder">
						<button class="btn btn-primary" >Vote</button>
					</div>

					</form>

					<a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark"></a>

			</div>

		<? } ?>

		</div>

	</div>

</div>
<hr>
<!-- /CONTENT ============-->

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
