<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/3.3/favicon.ico">

    <title>Soap - Service</title>

    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/3.3/examples/cover/cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="https://getbootstrap.com/docs/3.3/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">
            <div>
                <strong>
                    ¿Qué es XML?
                </strong>
                <p>
                    Especificación para diseñar lenguajes de marcado, que permite definir etiquetas personalizadas
                    para descripción y organización de datos.
                </p>

                <strong>
                    ¿Qué es WSDL?
                </strong>
                <p>
                    WSDL es una notación XML para describir un servicio web. Una definición WSDL indica a un cliente
                    cómo componer una solicitud de servicio web y describe la interfaz que proporciona el proveedor del servicio web.
                </p>

                <strong>¿Qué es SOAP?</strong>
                <p>
                    Básicamente SOAP es un paradigma de mensajería de una dirección sin estado, que puede ser utilizado
                    para formar protocolos más complejos y completos según las necesidades de las aplicaciones que lo
                    implementan.
                </p>
            </div>
            <section class="inner cover">
                <p>
                    <a href="http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl" target="_blank">
                        servicio wsdl
                    </a>
                     |
                    <a href="http://docs.guzzlephp.org/en/latest/index.html" target="_blank">guzzle</a>
                     |
                    <a href="https://www.w3.org/TR/2007/REC-wsdl20-20070626/" target="_blank">wsdl</a>
                     |
                    <a href="http://php.net/manual/en/soapclient.getfunctions.php" target="_blank">soap client php</a>
                </p>
                <hr>
                <small>
                    <strong>¿Qué hace el servicio?</strong>
                    El objetivo de este web service es permitir que las personas involucradas en el suministro
                    intracomunitario de bienes o servicios obtengan la confirmación de la validez del número de
                    identificación del IVA de cualquier persona especificada, de conformidad con el
                    artículo 31 del Reglamento (CE).
                </small>
            </section>
            <hr>
            <section>
                <div class="panel panel-default">
                    <div class="panel-heading">Respuesta WSDL</div>
                    <div class="panel-body" style="color: #000 !important;">
                        
                    </div>
                </div>

                <div>
                    <form action="" method="get">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Código del país</label>
                            <input type="text" class="form-control" name="countryCode" placeholder="DK" value="DK">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Número de IVA</label>
                            <input type="text" class="form-control" name="vatNumber" placeholder="47458714" value="47458714">
                        </div>
                        <button type="submit" class="btn btn-default">Obtener</button>
                    </form>
                </div>
            </section>
        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
<script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
