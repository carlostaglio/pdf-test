
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
                <div>{{$data['razon_social']}}</div>
            </div>
            <div class="box">
                <div>C.U.I.T:</div>
                <div>{{$data['cuit']}}</div>
            </div>
            <div class="box">
                <div>Dirección:</div>
                <div>{{$data['direccion']}}</div>
            </div>
            <div class="box">
                <div>Localidad:</div>
                <div>{{$data['localidad']}}</div>
            </div>
        </header>
        <section>
            <div class="details">
                <div class="place">Lugar: {{$data['empresa']}}</div>
                <div class="date">Fecha: {{date('d/m/Y')}} </div>
            </div>
            <div class="reason">
                <p class="reason-text">MOTIVO DE LA VISITA</p>
                <div class="options">
                    <div class="option">
                        <div class="check">
                            @if ($data['motivo'] == 'rutina')
                                X
                            @endif
                        </div>
                        <div class="option-text">Visita de rutina</div>
                    </div>
                    <div class="option">
                        <div class="check">
                            @if ($data['motivo'] == 'capacitacion')
                                X
                            @endif
                        </div>
                        <div class="option-text">Capacitación</div>
                    </div>
                    <div class="option">
                        <div class="check">
                            @if ($data['motivo'] == 'ambiente')
                                X
                            @endif
                        </div>
                        <div class="option-text">Medio Ambiente</div>
                    </div>
                    <div class="option">
                        <div class="check">
                            @if ($data['motivo'] == 'otros')
                                X
                            @endif
                        </div>
                        <div class="option-text">Otros</div>
                    </div>
                </div>
            </div>
            <div class="observations">
                <div class="obs-title">OBSERVACIONES</div>
                <div class="obs-box">
                    {{$data['observaciones']}}
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
