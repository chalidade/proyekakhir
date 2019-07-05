			<?php include "header.php"; ?>
			<!-- Start service Area -->
			<section class="service-area" id="facilities">
				<img src="img/menu.png" class="menu-btn"  data-toggle="modal" data-target="#add" alt="">
				<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title" id="exampleModalLabel"></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<h3 style="text-align:center">Menu</h3>
								<center>Hi <font style="font-weight:600;color:red">Chalid</font> What Will You Do ?</center>
								<iframe src="menu.php" width="100%" height="500px"></iframe>
							</div>
							<div class="modal-footer" style="background: #224;">
								<a href="../index.php" type="button" class="btn btn-danger">Logout</a>
							</div>
						</div>
					</div>
			</div>
				<div id="map" style="position: unset;height: 600px;"></div>
		     <script>
		       // Note: This example requires that you consent to location sharing when
		       // prompted by your browser. If you see the error "The Geolocation service
		       // failed.", it means you probably did not give permission for the browser to
		       // locate you.
		       var map, infoWindow;
		       function initMap() {
						 var a 	 = {lat: -7.343630, lng: 112.727227};
			       var b 	 = {lat: -7.311002, lng: 112.734320};
			       var c 	 = {lat: -7.307053, lng: 112.733838};
			       var d 	 = {lat: -7.283836, lng: 112.740814};
			       var e 	 = {lat: -7.262697, lng: 112.742468};
			       var f 	 = {lat: -7.275694, lng: 112.739975};
			       var g 	 = {lat: -7.263380, lng: 112.744418};
			       var h 	 = {lat: -7.257178, lng: 112.747665};
			       var i 	 = {lat: -7.256933, lng: 112.750487};
			       var j 	 = {lat: -7.266568, lng: 112.754827};
			       var k 	 = {lat: -7.265927, lng: 112.755101};
			       var l 	 = {lat: -7.265018, lng: 112.769076};
						 var bus = {lat: -7.319081, lng: 112.732909};
		         map = new google.maps.Map(document.getElementById('map'), {
		           center: {lat: -7.293156, lng: 112.753550},
		           zoom: 15,
							 disableDefaultUI: true
		         });

		         infoWindow = new google.maps.InfoWindow;

		         // Try HTML5 geolocation.
		         if (navigator.geolocation) {
		           navigator.geolocation.getCurrentPosition(function(position) {
		             var pos = {
		               lat: position.coords.latitude,
		               lng: position.coords.longitude
		             };
								 var posisi = {lat: position.coords.latitude, lng: position.coords.longitude};

		             infoWindow.setPosition(pos);

								 // Dinas Perhubungan
								 var posisi1 = '<div id="content" style="padding:10px">'+
					      '<h5 id="firstHeading" class="firstHeading">My Location</h5>'+
					      '<div>'+
					      '<p style="font-size:12px">Nama : Chalid Ade Rahman <br> ' +
					      'Sekolah : SMKN 5 Surabaya'+
					      '</p>';


								 var infowindow1 = new google.maps.InfoWindow({
								    content: posisi1
								  });

					       var marker1 = new google.maps.Marker({
					         position: posisi,
					         map: map,
					         title: 'My Location',
					         icon: {
					             path: fontawesome.markers.MALE,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'Black',
					             strokeOpacity: 1,
					             fillColor: 'Black',
					             fillOpacity: 0.9,
					         }
					       });
								 marker1.addListener('click', function() {
							    infowindow1.open(map, marker1);
							  });

									// Data Bus
								var posisi2 = '<div id="content" style="padding:10px">'+
 					      '<h5 id="firstHeading" class="firstHeading">Bus Location</h5>'+
 					      '<div>'+
 					      '<br><p style="font-size:12px">Perjalanan :<br> Dinas Perhubungan - SMA Bhayangkara<br><br> ' +
 					      'Kecepatan : 40 km <br>'+
 					      'Estimasi waktu : 3 Menit<br> Perkiraan Sampai : 04.36 AM</p>';


 								 var infowindow2 = new google.maps.InfoWindow({
 								    content: posisi2
 								  });

 					       var marker2 = new google.maps.Marker({
 					         position: bus,
 					         map: map,
 					         title: 'BUS',
 					         icon: {
 					             path: fontawesome.markers.BUS,
 					             scale: 0.4,
 					             strokeWeight: 0.4,
 					             strokeColor: 'black',
 					             strokeOpacity: 1,
 					             fillColor: 'orange',
 					             fillOpacity: 0.9,
 					         }
 					       });

									 marker2.addListener('click', function() {
									 infowindow2.open(map, marker2);
								 });


								 // Dinas Perhubungan
								 var posisi3 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 1</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> Dinas Perhubungan<br> Tujuan : SMA Bhayangkara <br>' +
  					      'Jam Berangkat : 05.30 AM<br>Estimasi Sampai : 05.36 AM<br>'+
  					      '</p>';


  								 var infowindow3 = new google.maps.InfoWindow({
  								    content: posisi3
  								  });
					       var marker3 = new google.maps.Marker({
					         position: a,
					         map: map,
					         title: 'Dinas Perhubungan Kota',
					         icon: {
					             path: fontawesome.markers.BUILDING,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker3.addListener('click', function() {
								 infowindow3.open(map, marker3);
							 });

					       // Sekolah Bhayangkara
								 var posisi4 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 2</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMA Bhayangkara<br> Tujuan : SMPN 32 Surabaya <br>' +
  					      '<br>Jam Tiba : 05.36 AM</br>Jam Berangkat : 05.38 AM<br>'+
  					      '</p>';


  								 var infowindow4 = new google.maps.InfoWindow({
  								    content: posisi4
  								  });
					       var marker4 = new google.maps.Marker({
					         position: b,
					         map: map,
					         title: 'SMA Bhayangkara Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker4.addListener('click', function() {
								infowindow4.open(map, marker4);
								});

					       // SMPN 32 Surabaya
								 var posisi5 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 3</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMPN 32 Surabaya<br> Tujuan : SMP / SMA Santa Maria <br>' +
  					      '<br>Jam Tiba : 05.42 AM</br>Jam Berangkat : 05.44 AM<br>'+
  					      '</p>';

									var infowindow5 = new google.maps.InfoWindow({
										 content: posisi5
									 });

					       var marker5 = new google.maps.Marker({
					         position: c,
					         map: map,
					         title: 'SMPN 32 Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker5.addListener('click', function() {
									infowindow5.open(map, marker5);
								 });

								 // SMP Santa Maria
								 var posisi6 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 4</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMP / SMA Santa Maria<br> Tujuan : SDN Negeri Kaliasin V <br>' +
  					      '<br>Jam Tiba : 05.57 AM</br>Jam Berangkat : 05.59 AM<br>'+
  					      '</p>';

									var infowindow6 = new google.maps.InfoWindow({
										 content: posisi6
									 });

					       var marker6 = new google.maps.Marker({
					         position: d,
					         map: map,
					         title: 'SMP / SMA Santa Maria',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });

								 marker6.addListener('click', function() {
									infowindow6.open(map, marker6);
								 });


								 // Sekolah Bhayangkara
					       // var marker7 = new google.maps.Marker({
					       //   position: e,
					       //   map: map,
					       //   title: 'SMA Trimurti',
					       //   icon: {
					       //       path: fontawesome.markers.STREET_VIEW,
					       //       scale: 0.4,
					       //       strokeWeight: 0.2,
					       //       strokeColor: 'red',
					       //       strokeOpacity: 1,
					       //       fillColor: '#ff0d38',
					       //       fillOpacity: 0.9,
					       // }
					       // });


								 // SMA Kaliasin V
								 var posisi7 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 5</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SD Negeri Kaliasin V<br> Tujuan : SMAN 6 Surabaya <br>' +
  					      '<br>Jam Tiba : 06.24 AM</br>Jam Berangkat : 06.28 AM<br>'+
  					      '</p>';

									var infowindow7 = new google.maps.InfoWindow({
										 content: posisi7
									 });
					       var marker7 = new google.maps.Marker({
					         position: f,
					         map: map,
					         title: 'SD Negeri Kaliasin V',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker7.addListener('click', function() {
									infowindow7.open(map, marker7);
								 });

								 // SMAN 6 Surabaya
								 var posisi8 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 6</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMAN 6 Surabaya<br> Tujuan : SMPN 1 Surabaya <br>' +
  					      '<br>Jam Tiba : 06.36 AM</br>Jam Berangkat : 06.38 AM<br>'+
  					      '</p>';

									var infowindow8 = new google.maps.InfoWindow({
										 content: posisi8
									 });
					       var marker8 = new google.maps.Marker({
					         position: g,
					         map: map,
					         title: 'SMAN 6 Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker8.addListener('click', function() {
									infowindow8.open(map, marker8);
								 });

								 // SMAN 1 Surabaya
								 var posisi9 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 7</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMAN 1 Surabaya<br> Tujuan : SMA Kompleks <br>' +
  					      '<br>Jam Tiba : 06.49 AM</br>Jam Berangkat : 06.51 AM<br>'+
  					      '</p>';

									var infowindow9 = new google.maps.InfoWindow({
										 content: posisi9
									 });
					       var marker9 = new google.maps.Marker({
					         position: h,
					         map: map,
					         title: 'SMPN 1 Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker9.addListener('click', function() {
									infowindow9.open(map, marker9);
								 });

								 // SMAN Kompleks
								 var posisi10 = '<div id="content" style="padding:10px">'+
  					      '<h5 id="firstHeading" class="firstHeading">Node 8</h5>'+
  					      '<div>'+
  					      '<p style="font-size:12px;margin-top:-10px"><br> SMA Kompleks<br> Tujuan : SMAN 4 Surabaya <br>' +
  					      '<br>Jam Tiba : 06.56 AM</br>Jam Berangkat : 06.58 AM<br>'+
  					      '</p>';

									var infowindow10 = new google.maps.InfoWindow({
										 content: posisi10
									 });
					       var marker10 = new google.maps.Marker({
					         position: i,
					         map: map,
					         title: 'SMA Kompleks',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker10.addListener('click', function() {
								 infowindow10.open(map, marker10);
								});


								// SMAN 4 Surabaya
								var posisi11 = '<div id="content" style="padding:10px">'+
								 '<h5 id="firstHeading" class="firstHeading">Node 9</h5>'+
								 '<div>'+
								 '<p style="font-size:12px;margin-top:-10px"><br> SMAN 4 Surabaya<br> Tujuan : SMKN 5 Surabaya <br>' +
								 '<br>Jam Tiba : 07.14 AM</br>Jam Berangkat : 07.16 AM<br>'+
								 '</p>';

								 var infowindow11 = new google.maps.InfoWindow({
										content: posisi11
									});
					       var marker11 = new google.maps.Marker({
					         position: k,
					         map: map,
					         title: 'SMA 4 Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker11.addListener('click', function() {
								 infowindow11.open(map, marker11);
								});

								// SMKN 5 Surabaya
								 var posisi12 = '<div id="content" style="padding:10px">'+
									'<h5 id="firstHeading" class="firstHeading">Node 10</h5>'+
									'<div>'+
									'<p style="font-size:12px;margin-top:-10px"><br> SMKN 5 Surabaya<br>' +
									'<br>Jam Tiba : 07.26 AM<br>'+
									'</p>';

									var infowindow12 = new google.maps.InfoWindow({
										 content: posisi12
									 });
					       var marker12 = new google.maps.Marker({
					         position: l,
					         map: map,
					         title: 'SMKN 5 Surabaya',
					         icon: {
					             path: fontawesome.markers.STREET_VIEW,
					             scale: 0.4,
					             strokeWeight: 0.2,
					             strokeColor: 'red',
					             strokeOpacity: 1,
					             fillColor: '#ff0d38',
					             fillOpacity: 0.9,
					         }
					       });
								 marker12.addListener('click', function() {
								infowindow12.open(map, marker12);
							 	});
		             // infoWindow.setContent('My Location');
		             // infoWindow.open(map);
		             map.setCenter(pos);
		           }, function() {
		             handleLocationError(true, infoWindow, map.getCenter());
		           });
		         } else {
		           // Browser doesn't support Geolocation
		           handleLocationError(false, infoWindow, map.getCenter());
		         }
		       }

		       function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		         infoWindow.setPosition(pos);
		         infoWindow.setContent(browserHasGeolocation ?
		                               'Error: The Geolocation service failed.' :
		                               'Error: Your browser doesn\'t support geolocation.');
		         infoWindow.open(map);
		       }
		     </script>

		    <script async defer
		    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcMHwzH7lPyqs5weYBVwFAQ4d_VcPgZo0&callback=initMap">
		    </script>
			</section>
			<!-- End service Area -->
		<?php include "footer.php"; ?>
