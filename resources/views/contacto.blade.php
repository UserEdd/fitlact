@extends('layouts.app')
@section('title', 'FitLact - Contacto')

<!-- Estilos únicos -->
  <!-- Load map styles -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <style>
    h2{
        text-align: center;
        text-transform: capitalize;
        margin-bottom: 5rem !important;
    }
  </style>
@section('content')
    <!-- Start Content Page -->
    <div class="container-fluid bg-light py-5">
        <div class="col-md-6 m-auto text-center">
            <h1 class="h1">Contáctanos</h1>
            <p>
               Envia un mensaje sobre tus dudas o sugerencias a nuestro grupo de telegram. Proporciona tu correo electrónico para responderte mas tarde.
            </p>
        </div>
    </div>

    <!-- Start Map -->
    <div id="mapid" style="width: 100%; height: 300px;"></div>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Zay Telmplte | Template Design by <a href="https://templatemo.com/">Templatemo</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1
        }).addTo(mymap);

        L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
            .bindPopup("<b>FitLact</b> Empresa<br />.").openPopup();

        mymap.scrollWheelZoom.disable();
        mymap.touchZoom.disable();
    </script>
    <!-- Ena Map -->

    <!-- Start Contact -->
    <div class="container py-5">

        <div class="row py-5">
        <h2>Envía un mensaje a nuestro grupo de telegram:</h2>
            <form class="col-md-9 m-auto" id="form" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputname" class="col-form-label">Tu Nombre</label>
                        <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Ejemplo: Hidalgo Costilla" required>
                    </div>
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail" class="col-form-label">Tu Correo Electrónico</label>
                        <input type="email" class="form-control mt-1" id="correo" name="correo" placeholder="Ejemplo: correo@gmail.com" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12 mb-3">
                        <label for="inputemail" class="col-form-label">Tu Mensaje:</label>
                        <textarea class="form-control mt-2" id="msg" name="msg" rows="10" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-end mt-2">
                        <button type="submit" class="btn bg-blue c-white px-3">ENVIAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- End Contact -->

    <script>
        const form = document.querySelector("#form");

        form.addEventListener("submit", (e) => {
            e.preventDefault();

            var text1 = document.getElementById("name").value;
            var text2 = document.getElementById("correo").value;
            var text3 = document.getElementById("msg").value;

            var my_text = `Tienes un nuevo mensaje:%0A - <b>Nombre:</b> <i>${text1}</i> %0A - <b>Correo:</b> <i>${text2}</i>  %0A - <b>Mensaje:</b> <i>${text3}</i>`;

            var token = "6310566460:AAG_YW22nGZw2AaHOtukT-D9jCj-PUKpMVE";
            var chat_id = -4168058280;
            var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${my_text}&parse_mode=html`;

            let api = new XMLHttpRequest();
            api.open("GET", url, true);
            api.send();

            console.log("Enviado");

            // Recargar la página después de enviar el formulario
            location.reload();
        })
    </script>

@endsection
