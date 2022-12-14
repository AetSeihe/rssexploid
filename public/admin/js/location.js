(function() {
  "use strict";
  mapboxgl.accessToken =
    "pk.eyJ1Ijoibnlhc2hhIiwiYSI6ImNpaTc4ZjhpeTAwN3p2Y20yMGVmazYxMzQifQ.HVg5XCVjs_uRVYz-lgJ7OA";

  var monument = [-77.0353, 38.8895];
  var map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/satellite-v9",
    latitude: 37.785164,
    longitude: -100,
    zoom: 3.5,
    bearing: 0,
    pitch: 0
  });

  var el = document.createElement("div");
  el.id = "marker";

  new mapboxgl.Marker(el)
    .setLngLat(monument)
    .addTo(map);
})();
