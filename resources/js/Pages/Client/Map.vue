<template>
    <div class="w-full h-5/6 mt-1 absolute left-0 top-28">

  <GoogleMap
        api-key="AIzaSyAEU_oku2XWD_aTo8Ebd4QKT9wWYUz4_oU"
        style="margin-top: 4vh; width: 75%; height: 85vh;"
        :center="center"
        :zoom="5.85"
        :options="mapStyle"
        :draggable="false"
>
        <Marker :id="index" :key="index" v-for="(m, index) in markers" :options="{position: m.position}" :clickable="true" :draggable="true"
                :icon="m.icon"    @click="center = m.position" >
            <GMapInfoWindow
                :opened="true"
            >
                <div>I am in info window
                </div>
            </GMapInfoWindow>
        </Marker>
    </GoogleMap>



    </div>
</template>

<script>
 import { GoogleMap, Marker } from 'vue3-google-map'
 let mapStyle = [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 40
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#a78ad5"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 21
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "weight": "10.00"
            },
            {
                "invert_lightness": true
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.government",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "100"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 29
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 18
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 19
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "invert_lightness": true
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#0f252e"
            },
            {
                "lightness": 17
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#b495dc"
            }
        ]
    }
];


export default{
    name:"Map",
  /*  components: { GoogleMap, Marker
            //VueGoogleMaps
        },
        */
    components:{
        GoogleMap, Marker
    },

    methods:{
      cityData(city){
          let value = city.currentTarget;
          console.log(value)
        this.isSelected != this.isSelected
      }
    },
    data(){
        return{
            isSelected:true,
            api_key:"AIzaSyAEU_oku2XWD_aTo8Ebd4QKT9wWYUz4_oU",
            markers: [
                // Along list of clusters
                {
                    //Paris
                    position: {
                        lng: 2.333333,
                        lat: 48.866667,

                    },
                    name : "Paris",
                    icon:'none'


                },
                {
                    position: {
                        lng: -1.09,
                        lat: 46.1591126,
                    }
                },
                {
                    position: {
                        lng: -1.33,
                        lat: 47.2186371,
                    }
                },{
                    position: {
                        lng: 3.03,
                        lat: 50.6365654,
                    }
                },{
                    position: {
                        lng: 2.0833,
                        lat: 48.9356047,
                    }
                },{
                    position: {
                        lng: 1.15,
                        lat: 45.8354243,
                    }
                },{
                    position: {
                        lng: 4.80559,
                        lat: 43.9492493,
                    }
                },{
                    position: {
                        lng: 2.448451,
                        lat: 50.4638918,
                    }
                },{
                    position: {
                        lng: 5.724524,
                        lat: 45.1875602,
                    }
                },{
                    position: {
                        lng: 5.724524,
                        lat: 47.2186371,
                    }
                },


            ],
            cities: {

                0: {
                    lng: 2.20,
                    lat: 48.866667,
                },
                1: {
                    name: "La Rochelle",
                    lng: -1.09,
                    lat: 46.1591126,
                },
                2: {
                    name: "Nantes",
                    lng: -1.33,
                    lat: 47.2186371,
                },
                3: {
                    name: "Lille",
                    lng: 3.03,
                    lat: 50.6365654,
                },
                4: {
                    name: "Nevers",
                    lng: 3.09,
                    lat: 46.9876601,
                },
                5: {
                    name: "Bourges",
                    lng: "2.25",
                    lat: "47.0805693",
                },
                6: {
                    name: "Limoges",
                    lng: 1.15,
                    lat: 45.8354243,
                },
                7: {
                    name: "St-Germain En Laye",
                    lng: 2.0833,
                    lat: 48.9356047,
                },
                8: {
                    name: "Montreuil",
                    lng: 2.448451,
                    lat: 50.4638918,
                },
                9: {
                    name: "Rennes",
                    lng: -1.6777926,
                    lat: 48.1113387,
                },
                10: {
                    name: "Avignon",
                    lng: 4.80559,
                    lat: 43.9492493,
                },
                11: {
                    name: "Grenoble",
                    lng: "5.724524",
                    lat: "45.1875602",
                },
                12: {
                    name: "Nantes",
                    lng: 5.724524,
                    lat: 47.2186371,
                },

            },
          //  mapStyle: {styles: mapStyle}

        }
    },
    setup() {
        const center = { lat: 46, lng: 2 }
       // const cities = [data.cities];

        return { center }
    },
}
</script>
<style lang="scss" scoped>

a[href^="http://maps.google.com/maps"],a[href^="https://maps.google.com/maps"] {
    display: none !important;
}
.gmnoprint a,.gmnoprint span,.gm-style-cc {
    display: none;
}
</style>
