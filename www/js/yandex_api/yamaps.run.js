/**
 * @file
 * Run map!
 */
 var Drupal = {};
	Drupal.t = function (st){ return st;};
(function($) {
  ymaps.ready(function() {
    ////if (Drupal.settings.yamaps) {
      // Initialize layouts
      $.yaMaps.initLayouts();
	  /*	
      for (var mapId in Drupal.settings.yamaps) {
        var options = Drupal.settings.yamaps[mapId];

        // If zoom and center are not set - set it from user's location
        if (!options.init.center || !options.init.zoom) {
          var location = ymaps.geolocation;
          if (!options.init.center) {
            options.init.center = [location.latitude, location.longitude];
          }
          if (!options.init.zoom) {
            options.init.zoom = location.zoom ? location.zoom : 10;
          }
        }
	*/
        // Create new map
		var options = {};
			options.init = {
            center: [55.76, 37.64],
            zoom: 7,
        };
		
        var map = new $.yaMaps.YamapsMap('maps',options);
			map.enableControls();
			 map.enableTools();
	   /* if (options.controls) {
          // Enable controls
          map.enableControls();
        }
        if (options.traffic) {
          // Enable traffic
          map.enableTraffic();
        }
        // Enable plugins
        map.enableTools();
		*/
      ///}
    ////}
  });
})(jQuery);
