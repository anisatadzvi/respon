<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LeafletJS GeoJSON Polyline</title>
    <link href="https://unsorry.net/assets-date/images/favicon.png" rel="shortcut icon" type="image/png" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" />
    <style>
        html,
        body,
        #map {
            height: 100%;
            width: 100%;
            margin: 0px;
            overflow: hidden;
        }
    </style>
</head>

<body>
  <!-- Bootstrap -->
  <nav class="navbar" style="background-color: #F0A500;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PETA PERSEBARAN RESTORAN DI KOTA PONTIANAK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">RESPON</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('berandacontroller') ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url('leafletdraw') ?>">Peta</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Edit & Delete
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('leafletdraw/simpan_edit_point') ?>">Point</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('leafletdraw/simpan_edit_polyline') ?>">Polyline</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('leafletdraw/simpan_edit_polygon') ?>">Polygon</a></li>
                            </ul>
                            <form class="d-flex mt-3" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                </div>
            </div>
        </div>
    </nav>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet-draw@1.0.4/dist/leaflet.draw.min.js"></script>
    <!-- Terraformer -->
    <script src="https://cdn.jsdelivr.net/npm/terraformer@1.0.12/terraformer.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/terraformer-wkt-parser@1.2.1/terraformer-wkt-parser.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- MAP -->
    <!-- <p id="eventStatus">eventStatus</p> -->
    <div id="map"></div>
     
    <!-- Modal Point -->
    <div class="modal fade" id="polylineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="fas fa-info-circle"></i> Polyline </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('leafletdraw/simpan_edit_polyline') ?>" method="POST">
                        <?= csrf_field() ?>
                        <input type="hidden" id="id_polyline" name="id_point">
                        <label for="edit_polyline_name">Nama</label>
                        <input type="text" class="form-control" id="edit_polyline_name" name="edit_polyline_name">
                        <label for="edit_polyline_geometry">Geometry</label>
                        <textarea class="form-control" name="edit_polyline_geometry" id="edit_polyline_geometry" rows="2"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary" id="btn_save_polyline">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        /* Initial Map */
        var map = L.map("map").setView([-0.028941848276273226, 109.35090896154162], 13);
        /* Tile Basemap */
        var basemap = L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: '<a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> | <a href="https://www.unsorry.net" target="_blank">unsorry@2022</a>',
        });
        basemap.addTo(map);
        
        
        /* GeoJSON Point */
        var polyline = L.geoJson(null, {
            onEachFeature: function(feature, layer) {
                var popupContent = "Nama: " + feature.properties.nama;
                layer.on({
                    click: function(e) {
                        var eventStatus = document.getElementById("eventStatus").innerHTML;
                        console.log("DEBUG: "+eventStatus);
                        if (eventStatus == "editstart"){
                            editPolyline(layer);
                        }
                    },
                    mouseover: function(e) {
                        polyline.bindTooltip(feature.properties.nama);
                    },
                });
            },
        });
        $.getJSON("<?= base_url('api/polyline') ?>", function(data) {
            polyline.addData(data);
            map.addLayer(polyline);
        });

        /* Draw Control */
        var drawControl = new L.Control.Draw({
            draw: false,
            edit: {
                featureGroup: polyline,
                edit: true,
                remove: true,
            }
        });
        map.addControl(drawControl);
        

        /* EDITED Event  */
        map.on('draw:editstart', function (e) {
            document.getElementById("eventStatus").innerHTML = "editstart";
        });

        map.on(L.Draw.Event.EDITED, function(e) {
            var type = e.layerType;
            var layers = e.layers;

            layers.eachLayer(function(layer) { 
                editPolyline(layer);
            }); 
            
        });

        function editPolyline(layer){
            // Convert geometry to GeoJSON 
            var drawnItemJson = layer.toGeoJSON().geometry; 
            // Convert GeoJSON to WKT 
            var drawnItemWKT = Terraformer.WKT.convert(drawnItemJson);
            var id = layer.feature.properties.id;
            var nama = layer.feature.properties.nama;

            // Set value to edit
            $('#id_polyline').val(id);
            $('#edit_polyline_name').val(nama);
            $('#edit_polyline_geometry').html(drawnItemWKT);
            
            // Open Modal 
            $('#pointModal').modal('show'); 
        }

        /* DELETED Event  */
        map.on('draw:deletestart', function (e) {
            document.getElementById("eventStatus").innerHTML = "deletestart";
        });

        map.on(L.Draw.Event.DELETED, function(e) {
            var type = e.layerType;
            var layers = e.layers;

            layers.eachLayer(function(layer) { 
                var id = layer.feature.properties.id;
                var nama = layer.feature.properties.nama;
                var confirm = window.confirm("Apakah anda yakin ingin menghapus garis: "+nama+"?");
                if(confirm){
                    // redirect to delete  
                    window.location.href = "<?= base_url('/deletepolyline/') ?>" + "/" + id;
                } else {
                    window.location.href = "<?= base_url('/editpolyline') ?>";
                }
            }); 
            
        });

    </script>
</body>

</html>