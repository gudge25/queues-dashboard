<?php require 'inc/config.php'; ?>
<?php require 'inc/views/template_head_start.php'; ?>
<?php
if (!isset($_SESSION['uid'])) {
	header('Location:base_pages_login.php');
}
?>
<!-- Page JS Plugins CSS -->
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>js/plugins/slick/slick.min.css">
<link rel="stylesheet" href="<?php echo $one->assets_folder; ?>js/plugins/slick/slick-theme.min.css">

<?php require 'inc/views/template_head_end.php'; ?>
<?php require 'inc/views/base_head.php'; ?>

<!-- Page Header -->


<div class="content">

	<div class="btn-toolbar">


	</div>


	<div class="block">

		<div class="block-content">

			<table class="table table-bordered table-striped js-dataTable-full">
				<thead>
					<tr>
						<th>
							<h4>Avg Hold Time</h4>
						</th>
						<th>
							<h4>Avg Talk Time</h4>
						</th>
						<th>
							<h4>Answer Calls</h4>
						</th>
						<th>
							<h4>UnAnswer Calls</h4>
						</th>
						<th>
							<h4>SL</h4>
						</th>
						<th>
							<h4>SL2</h4>
						</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<td id='holdtime'></td>
						<td id='talktime'></td>
						<td id='aanswer'></td>
						<td id='unanwser'></td>
						<td id='SL'></td>
						<td id='SL2'></td>
					</tr>
				</tbody>
			</table>

		</div>
		<div class="block-content">

			<table class="table table-bordered table-striped js-dataTable-full">
			<caption>Caller Count</caption>
				<thead>
					<tr>
						<th>
							<h4>Caller Count</h4>
						</th>


					</tr>
				</thead>
				<tbody>
					<tr>
						<td id='callercount'></td>
					</tr>
				</tbody>
			</table>

		</div>

	</div>



</div>
<!-- END Page Header -->


<!-- Page Content -->

<!-- END Page Content -->

<?php require 'inc/views/base_footer.php'; ?>
<?php require 'inc/views/template_footer_start.php'; ?>


<!-- Page Plugins -->
<!-- Page JS Code -->
<script src="<?php echo $one->assets_folder; ?>/js/pages/base_pages_dashboard.js"></script>



<script>
	setInterval(function() {

		var holdtime = 0;
		var talktime = 0;
		var answercall = 0;
		var unanswercall = 0;
		var ServiceLevel = 0.0;
		var ServiceLevel2 = 0.0;
		var callercount = 0;

		var loopcount = 0;

		// Get the current URL
		var currentURL = window.location.href;

		// Extract the domain and protocol from the current URL
		var domainAndProtocol = currentURL.split('/').slice(0, 3).join('/');

		// Construct the URL for the AJAX request
		var ajaxURL = domainAndProtocol + "/Lookup/stats.php?cmd=queue%20show";


		// Make the AJAX request using the constructed URL
		$.get(ajaxURL, function(data) {
			a1 = data.split("\n");


			let values = ["prio"]; //Get Callers from Queues
			// let myString = "Nathan is a doctor and he leaves nearby my house 1.";
			// let values = ['1.','2.', "3.","4.","5.","6.","7.","8.","9."];
			for (let i = 0; i < a1.length; i++) {
				let position = a1[i].search("strategy");
				let position1 = a1[i].search("default");
				let callerfound = values.every((item) => a1[i].includes(item));
				if (callerfound) {
					callercount = callercount + 1;
				}
				if (position != -1) {


					if (position1 == -1) {
						loopcount = loopcount + 1;
						let substr = a1[i].substring(position);
						var stringArray = substr.split(/(\s+)/);
						console.log(stringArray);
						//for hold
						console.log(stringArray[2]);
						holdtime = holdtime + parseInt(stringArray[2].substring(1, stringArray[2].length - 1));
						console.log(holdtime);

						//for talk
						console.log(stringArray[6]);
						talktime = talktime + parseInt(stringArray[6].substring(0, stringArray[6].length - 1));
						console.log(talktime);


						//for answercall
						console.log(stringArray[12]);
						answercall = answercall + parseInt(stringArray[12].substring(2, stringArray[12].length - 1));
						console.log("answer");
						console.log(answercall);

						//for unanswercall
						console.log(stringArray[14]);
						unanswercall = unanswercall + parseInt(stringArray[14].substring(2, stringArray[14].length - 1));
						console.log(unanswercall);

						//for Service Level
						console.log(stringArray[16]);
						ServiceLevel = ServiceLevel + parseFloat(stringArray[16].substring(3, stringArray[16].length - 2));
						console.log(ServiceLevel);

						//for Service Level 2
						console.log(stringArray[16]);
						ServiceLevel2 = ServiceLevel2 + parseFloat(stringArray[18].substring(4, stringArray[18].length - 2));
						console.log(ServiceLevel2);


						console.log("loop" + loopcount);
						$('#holdtime').html(Number(holdtime / (loopcount)).toFixed(2));
						$('#talktime').html(Number(talktime / (loopcount)).toFixed(2));
						$('#aanswer').html(answercall);
						$('#unanwser').html(unanswercall);
						$('#SL').html(Number(ServiceLevel / (loopcount)).toFixed(2));
						$('#SL2').html(Number(ServiceLevel2 / (loopcount)).toFixed(2));
					}
				}


				console.log(a1[i]);

			}
			$('#callercount').html(callercount);

		});


	}, 2000);

	$(function() {


		// Init page helpers (Slick Slider plugin)
		App.initHelpers('slick');
	});
</script>
<?php require 'inc/views/template_footer_end.php'; ?>