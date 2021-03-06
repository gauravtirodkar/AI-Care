<!DOCTYPE html>
<html lang='en'>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
		integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
	<link type="text/css" rel="stylesheet" href="css/styles.css" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<title>VridhhaSeva</title>
</head>

<body>
	<?php
  session_start();
  #$_SESSION['abcd']=1;
  if(array_key_exists('abcd',$_SESSION))
   if($_SESSION['abcd']==1){
  ?>
	<div class="container-fluid fixed-top ">
		<div class=row>
			<div class=" ml-auto col-auto alert alert-warning alert-dismissible fade show" role="alert">
				<strong><b>KEEP CALM!</b></strong> <br> You symptoms have been forwarded to your doctor.
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		</div>
	</div>

	<?php
  $_SESSION['abcd']=0; 
  }
   ?>
	<!-- NAVIGATION -->
	<nav class="blue darken-2">
      <div class="container">
        <div class="nav-wrapper">
          <a class="navbar-brand" href="index.html" style="font-size: 25px;"><img src="./images/logo.png" style ="height: 70px; padding:8px; color: transparent;" alt=""> </a>
          <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
		  <i class="material-icons">menu</i>
          </a>
          <ul class="right hide-on-med-and-down">
            <li class="active">
              <a href="index.html">Home</a>
			</li>
			<li>
              <a href="#map">Emergency Services</a>
            </li>
            <li>
              <a href="#reminder">Reminders</a>
            </li>
            <li>
              <a href="#medic">Prescriptions</a>
            </li>
          </ul>
          </div>
          </div>
          </nav>
				<!-- Side nav -->
				<ul id="side-nav" class="side-nav">
					<li>
						<div class="user-view">
							<div class="background">
								<img src="./images/ocean.jpg" alt="">
							</div>
							<a href="#">
								<img src="./images/old_person.jpeg" alt="" class="circle">
							</a>
							<a href="#">
								<span class="name white-text">Vishandas Mehta</span>
							</a>
							<a href="#">
								<span class="email white-text">vishandas_mehta58@gmail.com</span>
							</a>
						</div>
					</li>
					<li>
						<a href="blood-pressure.html">
							<i class="material-icons small">insert_emoticon</i> Blood Pressure</a>
					</li>
					<li>
						<a href="temperature.html">
							<i class="fa fa-2x fa-thermometer-three-quarters"></i> Temperature</a>
					</li>
					<li>
						<a href="heart-rate.html">
							<i class="fa fa-2x fa-heartbeat"></i> Heart Rate</a>
					</li>
					<li>
						<a href="commments.html">
							<img src="./images/accident.png" class="mr-4"> Fall Detection</a>
					</li>
					<li>
						<a href="sleep.html">
							<i class="fa fa-2x fa-bed"></i> Sleep Pattern</a>
					</li>
					<li>
						<div class="divider"></div>
					</li>
					<li>
						<a class="subheader">Account Controls</a>
					</li>
					<li>
						<a href="#">
							<i class="material-icons">settings</i> Settings</a>
					</li>
					<li>
						<a href="login.html" class="waves-effect">
							<i class="material-icons">power_settings_new</i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- SECTION: STATS -->
	<section class="section section-stats center">
		<div class="container">
  		<div class="jumbotron" style="padding:3px 50px 3px 50px;">
			  <h4 class="">Dashboard</h4>
		  </div>
		  </div>
		<div class="row">
			<a href="blood-pressure.html" style="text-decoration:none;">
			<div class="col s12 m6 l3">
				<div class="card-panel blue lighten-1 white-text center">
					<i class="material-icons medium">insert_emoticon</i>
					<h5>Blood Pressure(in bpm)</h5>
					<h3>162/65</h3>
					<div class="progress grey lighten-1">
						<div class="determinate white" style="width: 70%;"></div>
					</div>
				</div>
</a>
			</div>
			<a href="temperature.html" style="text-decoration:none;hover:none">
			<div class="col s12 m6 l3">
				<div class="card-panel center">
					<i class="fa fa-4x fa-thermometer-three-quarters"></i>
					<h5>Body Temperature(in F)</h5>
					<h3 class="count">99</h3>
					<div class="progress grey lighten-1">
						<div class="determinate blue lighten-1" style="width: 75%;"></div>
					</div>
				</div>
</a>
			</div>
			<div class="col s12 m6 l3">
			<a href="heart-rate.html" style="text-decoration:none;hover:none">
				<div class="card-panel blue lighten-1 white-text center">
					<i class="fa fa-4x fa-heartbeat"></i>
					<h5>Pulse Rate</h5>
					<h3 class="count">75</h3>
					<div class="progress grey lighten-1">
						<div class="determinate white" style="width: 78%;"></div>
					</div>
				</div>
</a>
			</div>
			<div class="col s12 m6 l3">
			<a href="sleep.html" style="text-decoration:none;hover:none">
				<div class="card-panel center">
					<i class="fa fa-4x fa-bed"></i>
					<h5>Average Sleep(in hrs)</h5>
					<h3 class="count">7</h3>
					<div class="progress grey lighten-1">
						<div class="determinate blue lighten-1" style="width: 83%;"></div>
					</div>
				</div>
</a>
			</div>
		</div>
<br><br>
</section>
<section id="contact" style="background-color:">
<div class="container">
  		<div class="jumbotron" style="padding:3px 50px 3px 50px;">
		  <h4 style="text-align:center;">Reach a Doctor</h4>
		  </div>
		  
	
				<div class="card-panel center blue lighten-4">
					<div class="row">
						<div class="col s6 m4 l4">
							<img style="height:300px;width:100%;" src="./images/l.jpg" alt="">
						</div>
						<div class="col s12 m4 l4">
						<br><br>
						<h3>Feeling Unwell?</h3>
						<br>
							<a onClick="document.location.href='DiseasePrediction/symp1.php'"><i class="fa fa-4x fa-paper-plane"></i></a>
							
							<h5>Send Report</h5>
						</div>
				
			</div>
		</div>
	</div>
</section>

	<!-- SECTION: RECENT POSTS & TODOS -->
	<section id="medic" class="section section-recent">
	<div class="container">
  		<div class="jumbotron" style="padding:3px 50px 3px 50px;">
		  <h4 style="text-align:center;">Prescriptions and TODOs</h4>
		  </div>
</div>
<div class="row">
		<div class="col s12 m6 l6">
			<div class="card">
				<div class="card-content">
					<span class="card-title">Medicines Suggested By the Doctor</span>
					<form id="todo-form">

					</form>
					<ul class="collection todos">
						<li class="collection-item">
							<div style="color:green;">Diuretics (twice a day) - Dr Nutan Desai
								<a href="#" class="secondary-content delete">
									<!-- <i class="material-icons">close</i> -->
								</a>
							</div>
						</li>
						<li class="collection-item">
							<div style="color:green;">Beta Blockers (after breakfast)-By Dr Nutan Desai
								<a href="#" class="secondary-content delete">
								</a>
							</div>
						</li>
						<li class="collection-item">
							<div style="color:green;">ACE inhibitors (2 times a day- 
							By Dr Mahesh Bhatia
								<a href="#" class="secondary-content delete">
								
								</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
    <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-content">
              <span class="card-title">Quick Todos</span>
              <form id="todo-form">
                <div class="input-field">
                  <input type="text" id="todo" placeholder="Add Todo">
                </div>
              </form>
              <ul class="collection todos">
                <li class="collection-item">
                  <div>Todo One
                    <a href="#" class="secondary-content delete">
                      <i class="material-icons">close</i>
                    </a>
                  </div>
                </li>
                <li class="collection-item">
                  <div>Todo Two
                    <a href="#" class="secondary-content delete">
                      <i class="material-icons">close</i>
                    </a>
                  </div>
                </li>
                <li class="collection-item">
                  <div>Todo Three
                    <a href="#" class="secondary-content delete">
                      <i class="material-icons">close</i>
                    </a>
                  </div>
                </li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class='card text-center col mx-auto s12 m6 l4 '>


            <div class='card-header'>
              <p>
                <h4>Previous Records</h4>
              </p>
      
            </div>
            <div class='card-body table-responsive '>
              <table class="table  table-bordered">
                <thead class="thead-light">
                  <tr>
                    <th >#</th>
                    <th >Date</th>
                    <th >Symptoms</th>
                    <th >Ailment</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class=>
                    <th >1</th>
                    <td>5 Aug 2019</td>
                    <td>Fever, Chills, Cough</td>
                    <td>Viral Fever</td>
                  </tr>
                  <tr>
                    <th >2</th>
                    <td>19 July 2019</td>
                    <td>Sneezing, nasal congestion</td>
                    <td>Nasal Infection</td>
                  </tr>
                  <tr>
                    <th >3</th>
                    <td>23 June 2019</td>
                    <td>Chest Pain, Difficulty in breathing</td>
                    <td>Pulmonary Edema</td>
                  </tr>
                </tbody>
              </table>
            </div>
      
      
          </div>
	</div>

</section>

      <!-- ADD CATEGORY MODAL -->
      <div id="category-modal" class="modal">
        <div class="modal-content">
          <h4>Add Category</h4>
          <form>
            <div class="input-field">
              <input type="text" id="category-title">
              <label for="category-title">Title</label>
            </div>
          </form>
          <div class="modal-footer">
            <a href="#" class="modal-action modal-close btn blue white-text">Submit</a>
          </div>
        </div>
      </div>
	
	<section id="map">
	<div class="container">
  		<div class="jumbotron" style="padding:3px 50px 3px 50px;">
		  <h4 style="text-align:center;">Emergency Services</h4>
		  </div>
</div>
	<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1jKnLfqQ69D8z7HEHyOdYR4uFS3ITLw3q" width="100%"
		height="480"></iframe>
		</section>

      <!-- FIXED ACTION BUTTON -->
      <div class="fixed-action-btn">
        <a href="#user-modal"class="modal-trigger btn-floating btn-large ">
          Generate Ticket
        </a>
      </div>
      <!-- ADD USER MODAL -->
      <div id="user-modal" class="modal">
        <div class="modal-content">
          <h4>Generate Ticket</h4>
          <form>
            <div class="input-field">
              <input type="text" id="name">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="text" id="name">
              <label for="name">Query</label>
            </div>
          </form> 
          
            <a href="#" style="text-align:center;" class=" modal-action modal-close btn blue white-text">Submit</a>
          </div>

      </div>
    


	<!-- FOOTER -->
	<footer class="section blue darken-2 white-text center">
		<p>Vriddha Seva Panel Copyright &copy; 2019</p>
	</footer>

	<section>

		<!-- PRELOADER -->
		<div class="loader preloader-wrapper big active">
			<div class="spinner-layer spinner-blue-only">
				<div class="circle-clipper left">
					<div class="circle"></div>
				</div>
				<div class="gap-patch">
					<div class="circle"></div>
				</div>
				<div class="circle-clipper right">
					<div class="circle"></div>
				</div>
			</div>
		</div>

		<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
<script src="js/charts.js"></script>
<script src="js/chart.js"></script>

		<script>
			// Custom JS & jQuery here

			// HIDE SECTIONS
			$('section').hide();
			$('footer').hide();
			$('.fixed-action-btn').hide();
			// hiding all the sections initially so we can show the preloader

			setTimeout(function () {
				$(document).ready(function () {
					// SHOW SECTIONS
					$('section').fadeIn();
					$('footer').fadeIn();
					$('.fixed-action-btn').fadeIn();
					// HIDE PRELOADER
					$('.loader').fadeOut();

					// SIDENAV INIT
					$('.button-collapse').sideNav();

					// MODAL INIT
					$('.modal').modal();

					// SELECT INIT
					$('select').material_select();

					// COUNTER
					$('.count').each(function () {
						$(this).prop('Counter', 0).animate({
							Counter: $(this).text()
							// $(this).text() takes the number, so whatever in this text is
						}, {
							duration: 1000,
							// in 1s goes from 0 to the number
							easing: 'swing',
							step: function (now) {
								$(this).text(Math.ceil(now));
							}
						});
					});

					// COMMENTS - APPROVE & DENY
					$('.approve').click(function (e) {
						Materialize.toast('Comment Approved', 3000);
						e.preventDefault();
						// it's a link so we want to stop the default behaviour
					});
					$('.deny').click(function (e) {
						Materialize.toast('Comment Denied', 3000);
						e.preventDefault();
						// it's a link so we want to stop the default behaviour
					});
				});

			
  // QUICK TODOS
  $('#todo-form').submit(function (e) {
    // console.log($('#todo').val());

    const output = `
      <li class="collection-item">
        <div>${$('#todo').val()}
          <a href="#" class="secondary-content delete">
            <i class="material-icons">close</i>
          </a>
        </div>
      </li>
    `;
    // in the output variable we're storing what the user has entered in the input filed

    $('.todos').append(output);
    // appending to our todo list so it shows in the UI

    $('#todo').val('');
    // clear input field

    Materialize.toast('Todo Added', 3000);
    // show a notification that the todo has been added

    e.preventDefault();
    // we want to prevent the form from actually submiting
  });

  // DELETE TODOS
  $('.todos').on('click', '.delete', function (e) {
    // $(this).parent().parent().remove();
    $(this).parent().parent().animate().fadeOut();
    // event delegation

    Materialize.toast('Todo Removed', 3000);
    // show a notification that the todo has been deleted

    e.preventDefault();
  });

  // FOR THE CKEDITOR
  CKEDITOR.replace('body');

}, 1000);

			var config = {
				type: 'line',
				data: {
					labels: ['00', '01', '02', '03', '04', '05', '06', '07', '08', '09'],
					datasets: [{
						label: 'Band Data',
						backgroundColor: 'rgb(23, 125, 255)',
						borderColor: 'rgb(23, 125, 255)',
						data: [120, 118, 119, 115, 120, 116, 117, 118, 119, 115],
						fill: false,
					}]
				},
				options: {
					responsive: true,
					title: {
						display: true,
						text: 'BloodPressure Monitor'
					},
					tooltips: {
						mode: 'index',
						intersect: false,
					},
					hover: {
						mode: 'nearest',
						intersect: true
					},
					scales: {
						xAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Hour'
							},
							ticks: {
								stepSize: 1,
							}
						}],
						yAxes: [{
							display: true,
							scaleLabel: {
								display: true,
								labelString: 'Pressure'
							},
							ticks: {
								// stepSize: 100,
								max: 200,
							}
						}]
					}
				}
			};

			var ctx = document.getElementById('chartContainer').getContext('2d');
			new Chart(ctx, config);
		</script>
		<script
			src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwNRGEmkPdOmFhrGXZdKcZZb4YnwxAUdI&libraries=places&callback=initMap"
			async defer></script>


</body>

</html>