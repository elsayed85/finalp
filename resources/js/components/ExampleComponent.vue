<template>
<div id="realtimemap" style="width:100%; height:600px"></div>
</template>

<script>
export default {
    data() {
        return {
            map: null,
            marker: null,
            center: {
                lat: 31.043084529096628,
                lng: 31.35235957295868
            },
            location: null,
            lineCoordinates: []
        };
    },
    methods: {
        mapinit() {
            this.map = new google.maps.Map(
                document.getElementById("realtimemap"), {
                    center: this.center,
                    zoom: 8,
                }
            );

            this.marker = new google.maps.Marker({
                position: this.center,
                map: this.map,
                animation: "bounce",
            });
        },
        updateMap() {
            let position = {
                lat: parseFloat(this.location.lat),
                lng: parseFloat(this.location.lng)
            }

            this.map.setCenter(position)
            this.marker.setPosition(position)
            this.lineCoordinates.push({
                lat: position.lat,
                lng: position.lng
            })

            const lineCoordinatesPath = new google.maps.Polyline({
                path: this.lineCoordinates,
                geodesic: true,
                strokeColor: "#FF0000",
                strokeOpacity: 1.0,
                strokeWeight: 2,
            });

            lineCoordinatesPath.setMap(this.map)
        }
    },
    mounted() {
        this.mapinit();
    },
    created() {
        Echo.channel("location").listen("sendPositionEvent", (e) => {
            console.log(e, e.location)
            this.location = e.location
            this.updateMap()
        });
    },
};
</script>
