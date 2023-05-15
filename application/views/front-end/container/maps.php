<script src="http://maps.google.com/maps/api/js"></script>
		<script>

			var mapMarkers = [{
				address: "Jl.Tokala 16 Kota Malang",
				html: "<strong>Jl.Tokala 16 Kota Malang</strong><br>Jawa Timur Indonesia",
				icon: {
					image: "<?=base_url()?>web/img/pin.png",
					iconsize: [46, 66],
					iconanchor: [32, 66]
				},
				popup: true
			}];

			// Map Initial Location
			var initLatitude = -7.965719;
			var initLongitude = 112.637616;

			// Map Extended Settings
			var mapSettings = {
				controls: {
					draggable: (($.browser.mobile) ? false : true),
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: true,
					streetViewControl: true,
					overviewMapControl: true
				},
				scrollwheel: false,
				markers: mapMarkers,
				latitude: initLatitude,
				longitude: initLongitude,
				zoom: 16
			};

			var map = $("#googlemaps").gMap(mapSettings);

			// Map Center At
			var mapCenterAt = function(options, e) {
				e.preventDefault();
				$("#googlemaps").gMap("centerAt", options);
			}

		</script>