<?php

$body = "
              <p style='margin:34px 0'>Se ha enviado un reaclamo/queja, la información es la siguiente:</p>
              <table style=''>
              <tbody>
                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Nombre Completo</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['nombre'] . ' ' . $_POST['apellido_paterno'] . ' ' . $_POST['apellido_materno'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Persona natural o Empresa</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['tipo_reclamante'] . "</i></td>

                </tr>


                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Tipo de Documento</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['tipo_documento'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>RUC</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['ruc'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Número de documento</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['numero_documento'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Celular o Telf.</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['telf_cel'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Correo</th>
                  <td style='color:#7f9431!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['email'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Dirección</th>
                  <td style='color:#7f9431!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['direccion'] . "</i></td>

                </tr>


                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Reclamo / Queja</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['tipo'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Descripción del producto o servicio</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['descripcion'] . "</i></td>

                </tr>

                <tr>
                  <th scope='row' style='text-align:left;border-bottom:1px solid #cccdce;padding:5px 0'>Detalle</th>
                  <td style='color:#7a7a7a!important;padding-left:10px;border-bottom:1px solid #cccdce'><i>" . $_POST['detalle'] . "</i></td>

                </tr>

              </tbody>
              </table>
             ";
