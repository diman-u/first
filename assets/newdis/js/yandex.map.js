$(document).ready(function() {

    var myMap;
    var myPolyline;
	var mapZoom = 17;
    var bigMap;
    var triggerBigMap;

    if ($(window).width() <= 650) {
        mapZoom = 16;
    }
    else {
        mapZoom = 17;
    }

    if(document.querySelector('#map'))
        ymaps.ready(init);
    else
        return;

    function init(){    

			  $(window).on('resize load', function() {
			      if ($(window).width() <= 650) {
			          bigMap = false;
			      }
			      else {
			          bigMap = true;
			      }
			      destroyMap(bigMap);
			  });

			  function destroyMap(bigMap) {

			  	if(triggerBigMap == bigMap) {

			  		return;

			  	} else if(triggerBigMap != bigMap && bigMap) {

			  		mapZoom = 17;
			  		myMap.destroy();
			  		ymaps.ready(init);
			  		triggerBigMap = bigMap;

			  	} else if(triggerBigMap != bigMap && !bigMap){
			  		
			  		mapZoom = 16;
			  		myMap.destroy();
			  		ymaps.ready(init);
			  		triggerBigMap = bigMap;
			  	}
			  }

        myMap = new ymaps.Map("map", {
            center: [55.74234548, 37.63150701], 
            zoom: mapZoom,
            controls: ["zoomControl"]
        });

        myPlacemark = new ymaps.Placemark([55.74233906, 37.63408078], { 
            hintContent: 'Float', 
            balloonContent: 'Float студия',
        },
        {   
            preset: 'islands#icon',
            iconColor: '#0095B6'
        });

        myPolyline = new ymaps.Polyline([
            [55.74230275, 37.62930583],
            [55.74228000, 37.63034424],
            [55.74262498, 37.63095042],
            [55.74257353, 37.63125351],
            [55.74226819, 37.63136509],
            [55.74254508, 37.63382468],
            [55.74233906, 37.63408078]
        ], {}, 
        {
            strokeColor: "#65C0EB",
            strokeWidth: 3,
            strokeOpacity: 1
        });

        myMap.behaviors
            .disable(['drag', 'scrollZoom'])
            .enable('multiTouch');

        myMap.geoObjects
            .add(myPlacemark)
            .add(myPolyline);

    }


});