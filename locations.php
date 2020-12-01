<html>
<head>
    
    <?php
    include "header.php";
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script type="text/javascript" src=""></script>
    <script type="text/javascript">
        var locations = [
            ['Frozen Foods', 43.683333, -79.766667, 'Kabankalan City, Negros Occidental, ON L6X 1V8'],
            ['Frozen Foods', 42.283333, -83.000000, 'Himamaylan City, Negros Occidental, ON N8X 3J2'],
            ['Frozen Foods', 42.9870, -81.2432, 'Cadiz City, Negros Occidental, ON N6B 2P4'],
            ['Frozen Foods', 43.3616, -80.3144, 'Kanlaon City, Negros Occidental, ON N1R 2L8'],
            ['Frozen Foods', 42.052841, -82.599683, 'Dumaguete City, Negros Occidental, ON N8H 3A7'],
            ['Frozen Foods', 42.382224, -82.195090, 'Talisay City, Negros Occidental, ON N7M 6J5'],
            ['Frozen Foods', 42.278869, -83.053150, 'Victorias City, Negros Occidental, ON N9C 2L6'],
            ['Frozen Foods', 42.309643, -83.064421, 'Sagay City, Negros Occidental, ON N9B 1E6']
        ];
        function initialize() {
            var myOptions = {
                center: {lat: 42.986950, lng: -81.243177},
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("default"),myOptions);
            setMarkers(map,locations)
        }
        function setMarkers(map,locations){
            var marker, i
            for (i = 0; i < locations.length; i++)
            {
                var loan = locations[i][0]
                var lat = locations[i][1]
                var long = locations[i][2]
                var add =  locations[i][3]

                latlngset = new google.maps.LatLng(lat, long);

                var marker = new google.maps.Marker({
                    map: map, title: loan , position: latlngset
                });
                map.setCenter(marker.getPosition())
                var content = "<h3>" + loan +  '</h3>'+add
                var infowindow = new google.maps.InfoWindow()

                google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){
                    return function() {
                        infowindow.setContent(content);
                        infowindow.open(map,marker);
                    };
                })(marker,content,infowindow));
            }
        }
    </script>
    <style>
        #heading{
            font-size: 50px;
            font-family: "Goudy Old Style";

        }
        .text{
            font-size: 20px;

        }
    </style>
</head>
<body onload="initialize()">
<div class="form-group col-md-4">
    <div class="well">
        <p id="heading">Visit our locations</p>
        <div ng-app="myApp" ng-controller="namesCtrl">
            <input type="text" class="form-control" ng-model="test" placeholder="Enter your address here">
            <br><br>
            <ol>
                <li class="text" ng-repeat="x in names | filter:test">
                    {{x}}
                </li>
                <p class="text" ng-show="(names | filter:test).length == 0">Sorry, we are not present at your location</p>
            </ol>
        </div>
        <!-- Script for angular JS -->
        <script>
            angular.module('myApp', []).controller('namesCtrl', function($scope) {
                $scope.names = [
                    'Kabankalan City, Negros Occidental, ON',
                    'Himamaylan City, Negros Occidental, ON',
                    'Cadiz City, Negros Occidental, ON',
                    'Kanlaon City, Negros Occidental, ON',
                    'Dumaguete City, Negros Occidental, ON',
                    'Talisay City, Negros Occidental, ON',
                    'Victorias City, Negros Occidental, ON',
                    'Sagay City, Negros Occidental, ON'
                ];
            });
        </script>
    </div>
</div>
<div class="form-group col-md-8">
    <div id="default" style="width:100%; height:550px"></div>
</div>
</body>
</html>

