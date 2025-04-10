
<!DOCTYPE html>
<html>
<head>
    <title>Laravel PDF Example</title>
    <link rel="stylesheet" href="{{ public_path('css/stylesPDF.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/stylesPDF.css') }}" type="text/css">
    
    <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
</head>
<body>
    <div class="">
        
        <div class="logo-wrapper">
            <img id="logo" src="{{ public_path('images/LogoEP.png') }}" onerror="logoError()"  alt="Logo EP">
        </div>
        <header>
            <div class="box">
                <div>Razón Social:</div>
                <div>Roberto Pérez</div>
            </div>
            <div class="box">
                <div>C.U.I.T:</div>
                <div>20 1234567 3</div>
            </div>
            <div class="box">
                <div>Dirección:</div>
                <div>Mendoza Sur 200</div>
            </div>
            <div class="box">
                <div>Localidad:</div>
                <div>Capital</div>
            </div>
        </header>
        <section>
            <div class="details">
                <div class="place">Lugar: Empresa 1</div>
                <div class="date">Fecha: 01/04/25</div>
            </div>
            <div class="reason">
                <p class="reason-text">MOTIVO DE LA VISITA</p>
                <div class="options">
                    <div class="option">
                        <div class="check">X</div>
                        <div class="option-text">Visita de rutina</div>
                    </div>
                    <div class="option">
                        <div class="check"></div>
                        <div class="option-text">Capacitación</div>
                    </div>
                    <div class="option">
                        <div class="check"></div>
                        <div class="option-text">Medio Ambiente</div>
                    </div>
                    <div class="option">
                        <div class="check"></div>
                        <div class="option-text">Otros</div>
                    </div>
                </div>
            </div>
            <div class="observations">
                <div class="obs-title">OBSERVACIONES</div>
                <div class="obs-box">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit, purus aenean praesent condimentum cubilia mus, libero auctor et parturient varius ultrices. Elementum etiam fames aliquet scelerisque netus fermentum nascetur convallis tempus pretium, arcu maecenas ac blandit class phasellus facilisis commodo tellus vestibulum hac, dapibus quisque pulvinar nostra euismod cras bibendum lacus purus. Non ac tellus eget platea potenti eros sapien odio cras, nostra dis ornare risus imperdiet sollicitudin etiam torquent ridiculus, arcu diam mauris dignissim litora turpis velit convallis.
                    <br>
                    Otio class tincidunt primis magna tempor sem etiam mattis et nullam non hendrerit tellus, posuere sociosqu at cubilia maecenas euismod eu nec molestie egestas malesuada. Leo dui donec justo lacinia egestas inceptos auctor, mattis turpis nostra vehicula iaculis. Montes facilisi potenti leo suspendisse semper neque, etiam inceptos viverra feugiat rutrum cubilia, cursus hendrerit urna mi massa.
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipiscing elit, purus aenean praesent condimentum cubilia mus, libero auctor et parturient varius ultrices. Elementum etiam fames aliquet scelerisque netus fermentum nascetur convallis tempus pretium, arcu maecenas ac blandit class phasellus facilisis commodo tellus vestibulum hac, dapibus quisque pulvinar nostra euismod cras bibendum lacus purus. Non ac tellus eget platea potenti eros sapien odio cras, nostra dis ornare risus imperdiet sollicitudin etiam torquent ridiculus, arcu diam mauris dignissim litora turpis velit convallis.
                </div>
            </div>
            <div class="signatures">
                <div class="signature">Responsable
                    <div class="signature-wrapper">
                        <img class="signature-image" id="signature" src="{{ public_path('images/firma.png') }}" onerror="signatureError(this)" alt="Firma responsable">
                    </div>
                </div>
                <div class="signature">Firma
                    <div class="signature-wrapper">
                        <img class="signature-image" id="signature2" src="{{ public_path('images/firma.png') }}" onerror="signatureError(this)" alt="Firma">
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
