<div style="font-family: Helvetica; font-size: 12px; margin: 0 auto;  width: 830px; height: 830px; background: url(img/mail.png); padding: 15px; border-radius: 20px;">
    <h2 style="color: #000; font-size: 20px; padding: 0 60px 4px 60px; margin-top: 60px;">Solicitud de información</h2>
    <p style="line-height: 13px; margin:0; padding: 0 140px 4px 140px; margin:0; display: block; color: #000;">
        <strong style="color: #444444">Nombre: </strong> {{ $name }}
        &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #444444">Email: </strong> {{ $email }}
        &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #444444">Contacto: </strong> {{ $telefono }}

    </p>
    <p style="line-height: 13px; margin:0; padding: 0 140px 4px 140px; margin:0; display: block; color: #000;">
        <strong style="color: #444444">Clinica: </strong> {{ $clinica }}
        &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #444444">Dirección: </strong> {{ $direccion }}
    </p>
    <p style="line-height: 13px; margin:0; padding: 0 140px 4px 140px; margin:0; display: block; color: #000;">
        <strong style="color: #444444">Población: </strong> {{ $poblacion }}
        &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #444444">Provincia: </strong> {{ $provincia }}
        &nbsp;&nbsp;&nbsp;&nbsp;<strong style="color: #444444">C.P: </strong> {{ $cpostal }}
    </p>
    <br>
    <h2 style="color: #000; font-size: 20px; padding: 0 60px 4px 60px; margin-top: 20px;">Requerimientos adicionales</h2>
    <p style="line-height: 13px; margin:0; padding: 0 140px 4px 140px; display: block; color: #000;">
        Desea visita de un comercial de Sunstar Guidor para recibir más información: <strong style="color: #444444">Si </strong>
    </p>
    <p style="line-height: 13px; margin:0; padding: 0 140px 4px 140px; display: block; color: #000;">
        Desea beneficiarse de un <strong style="color: #444444">15%</strong> de descuento en la compra de los siguientes productos: 
    </p>
    <br>
    <div style="padding:0 60px 4px 60px;">
        <table cellspacing="0" style="background-color: #6580B5; border-radius: 15px; font-family: "Helvetica"; color: #fff; font-size:10px; margin-left: 65px;">
               <tr>
                <th style="height: 53px; background-color: #E0E5F0; color:#00529D; font-size: 14px; width: 113px; background-color: #E0E5F0; border-radius: 16px 0px 0 0; border-right: 3px solid #6580B5;">Número de<br>Referencia</th>
                <th style="height: 53px; background-color: #E0E5F0; color:#00529D; font-size: 14px; width: 332px; background-color: #E0E5F0; border-right: 3px solid #6580B5;">Descripción</th>
                <th style="height: 53px; background-color: #E0E5F0; color:#00529D; font-size: 14px; width: 103px; background-color: #E0E5F0; border-right: 3px solid #6580B5;">Precio<br>Clínica Dental</th>
                <th style="height: 53px; background-color: #E0E5F0; color:#00529D; font-size: 14px; width:  40px; background-color: #E0E5F0; border-right: 3px solid #6580B5;">Dto.</th>
                <th style="height: 53px; background-color: #E0E5F0; color:#00529D; font-size: 14px; width:  87px; background-color: #E0E5F0; border-radius:  0px 16px 0 0 ;">Cantidad</th>
            </tr>
            <tr style="height: 53px; color:#FFF; font-size: 14px; text-align: center;">
                <td colspan="5" style="background: #6580B5;">Easy-Graft™ CLASSIC Sin HA</td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; width:113px; margin-right: 3px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;" >50000BC15075</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 250, 1 jeringa 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;">76,00 €</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;" class="rowspa" rowspan="7">- 15%</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; font-weight: bold; text-align: center;">{{ $p_1 }}</td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11002</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 400, caja de 3 jeringas 0,4 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">282,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_2 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11003</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 400, caja de 6 jeringas 0,4 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">564,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_3 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11072</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 250, caja de 3 jeringas 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">216,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_4 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11073</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 250, caja de 6 jeringas 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">432,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_5 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11012</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 150, caja de 3 jeringas 0,15 ml (450-630um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">196,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_6 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC11013</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 150, caja de 6 jeringas 0,15 ml (450-630um)</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: center; border-right: 3px solid #6580B5;">392,00 €</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; font-weight: bold; text-align: center;"><strong>{{ $p_7 }}</strong></td>
            </tr>



            <tr style="height: 53px; color:#FFF; font-size: 14px; text-align: center;">
                <td colspan="5" style="background: #6580B5;">Easy-Graft™ CRYSTAL Con HA</td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; width:113px; margin-right: 3px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;" >50000BC11075</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ 250, 1 jeringa 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;">78,00 €</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; text-align: center; border-right: 3px solid #6580B5;" class="rowspa" rowspan="7">- 15%</td>
                <td style="font-size:10px; padding: 15px 0 2px 0; font-weight: bold; text-align: center;">{{ $p_8 }}</td>
            </tr>

            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15002</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 400, caja de 3 jeringas 0,4 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">290,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_9 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15003</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 400, caja de 6 jeringas 0,4 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">580,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_10 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15072</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 250, caja de 3 jeringas 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">223,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_11 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15073</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 250, caja de 6 jeringas 0,25 ml (450-1000um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">446,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_12 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15012</td>
                <td style="font-size:10px; padding: 2px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 150, caja de 3 jeringas 0,15 ml (450-630um)</td>
                <td style="font-size:10px; padding: 2px 0; text-align: center; border-right: 3px solid #6580B5;">202,00 €</td>
                <td style="font-size:10px; padding: 2px 0; font-weight: bold; text-align: center;"><strong>{{ $p_13 }}</strong></td>
            </tr>
            <tr style="color: #4D4D4D; background: #fff;">
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: center; border-right: 3px solid #6580B5;">50000BC15013</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: left; padding-left: 10px; border-right: 3px solid #6580B5;">Easy-graft™ Crystal 150, caja de 6 jeringas 0,15 ml (450-630um)</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; text-align: center; border-right: 3px solid #6580B5;">404,00 €</td>
                <td style="font-size:10px; padding: 2px 0 15px 0; font-weight: bold; text-align: center;"><strong>{{ $p_14 }}</strong></td>
            </tr>
        </table>
    </div>
</div>'