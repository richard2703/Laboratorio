<html>

<head>
    <style>
        /**
Establezca los márgenes de la página en 0, por lo que el pie de página y el encabezado
puede ser de altura y anchura completas.
**/
        @page {
            margin: 0cm 0cm;
        }

        /** Defina ahora los márgenes reales de cada página en el PDF **/
        body {
            font-family: 'Helvetica';
            margin-top: 2cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        main {
            margin-top: 120px;
            margin-bottom: 120px;
            padding: 30px;
        }

        div .card {
            border: solid 2px cornflowerblue;
        }

        .wlogo {
            height: 100px;
        }

        .hlogo {
            height: 80px;
        }

        table {
            width: 100%;
        }

        li {
            list-style: none;
        }

        /*********************************************************/
        .test2 {
            text-align: center;
        }

        .test3 {
            display: flex;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Envuelva el contenido de su PDF dentro de una etiqueta principal -->
    <main>
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th class="col1"><img class="wlogo" src="img\header2.png" alt=""></th>
                                <th class="col2"><img class="hlogo" src="img\matriz2.png" alt=""></th>
                                <th class="col3">Fecha: <br> 14/12/10 </th>
                                <th class="col4">Folio:<br>12545</b></th>

                            </tr>
                        </thead>
                    </table>

                    <table>
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pru1"><strong>Nombre del medico:</strong></td>
                                <td class="col2">Ricardo Rios</td>
                                <td class="col3"></td>
                                <td class="col4"></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Paciente :</strong></td>
                                <td class="">Ricardo santos navarro sanchez hernandez</td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class=""><strong>Telefono:</strong></td>
                                <td class="">3310242355</td>
                                <td class=""><strong>Email:</strong></td>
                                <td class="">richard.2703.rr@gmail.com111
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <ul style="font-size: larger; padding-top: 15px;">
                        <li>
                            <strong>Diagnostico: </strong>
                        </li>
                        <li>
                            N/A
                        </li>
                        <li>
                            <strong>Estudios: </strong>
                        </li>
                        <li>
                            BH, QSG, R.Febriles
                        </li>
                    </ul>

                    <table>
                        <thead>
                            <tr>
                                <th class="col1">Entrega de estudios</th>
                                <th class="col2">Total $</th>
                                <th class="col3">Anticipo $</th>
                                <th class="">Resta $</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="pru1">15/12/10</td>
                                <td class="col2">150 $</td>
                                <td class="col3">100 $</td>
                                <td class="col4">50 $</td>
                            </tr>
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
        <br>
        <div class="col ">
            <div class="card ">
                <div class="card-body">
                    <div class="row card-title test3">
                        {{--  <div class="col-2">
                            <img class="test" src="img\matriz.png" alt="">
                        </div>  --}}
                        <div class="test4">
                            <img class="hlogo" src="img\matriz.png" alt="">
                            <strong>
                                test de folio
                            </strong>
                            <br>

                        </div>
                        {{--  <div class="col-2">
                            sdgfsgeds

                        </div>  --}}
                        <div class="col-12">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>1244</h6>
                                <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                    class="text-muted small pt-2 ps-1">decrease</span>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script type="text/php">
	if ( isset($pdf) ) {
		$pdf->page_script('
			$font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
			$pdf->text(270, 730, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
		');
	}
</script>
</body>

</html>
