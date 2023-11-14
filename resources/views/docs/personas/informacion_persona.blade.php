<style>
    .imagen{
        width: 200px;
        max-height: 200px;
    }
    table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #0C4069;
            color: #fff;
        }
    .salto-pagina{
        page-break-before: always;
    }

</style>

<div style="margin: 0;  font-family: 'Arial', sans-serif;">

    <table border="2">
        <tbody>
            <tr>
                <th colspan="2" style="text-align: center">INFORMACIÓN PERSONAL</th>
            </tr>
            <tr>
                <td>Imagen</td>
                <td><img src="storage/personas/imagenes/{{ $persona->id }}/foto.jpg" alt="" class="imagen"></td>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{ $persona->nombre }}</td>
            </tr>
            <tr>
                <td>Apellido Paterno</td>
                <td>{{ $persona->apellido_1 }}</td>
            </tr>
            <tr>
                <td>Apellido materno</td>
                <td>{{ $persona->apellido_2 == "" || $persona->apellido_2 == null ? "sin datos" : $persona->apellido_2}}</td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>{{ $persona->sexo == "" || $persona->sexo == null ? "sin datos" : $persona->sexo}}</td>
            </tr>
            <tr>
                <td>Fecha de nacimiento</td>
                <td>{{ $fecha_nacimiento == "" || $fecha_nacimiento == null ? "sin datos" : $fecha_nacimiento}}</td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>{{ $persona->edad == "" || $persona->edad == null ? "sin datos" : $persona->edad}}</td>
            </tr>
            <tr>
                <td>Nacionalidad</td>
                <td>{{ $persona->nacionalidad == "" || $persona->nacionalidad == null ? "sin datos" : $persona->nacionalidad}}</td>
            </tr>
            <tr>
                <td>Estado Civil</td>
                <td>{{ $persona->estado_civil == "" || $persona->estado_civil == null ? "sin datos" : $persona->estado_civil}}</td>
            </tr>
            <tr>
                <td>CURP</td>
                <td>{{ $persona->curp == "" || $persona->curp == null ? "sin datos" : $persona->curp}}</td>
            </tr>
            <tr>
                <td>RFC</td>
                <td>{{ $persona->rfc == "" || $persona->rfc == null ? "sin datos" : $persona->rfc}}</td>
            </tr>
            <tr>
                <td>INE</td>
                <td>{{ $persona->ine == "" || $persona->ine == null ? "sin datos" : $persona->ine}}</td>
            </tr>
            <tr>
                <td>Ocupación o Profesión:</td>
                <td>{{ $persona->ocupacion == "" || $persona->ocupacion == null ? "sin datos" : $persona->ocupacion}}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center">LUGAR DE NACIMINETO</th>
            </tr>
            <tr>
                <td>Estado</td>
                <td>{{ $persona->estado == "" || $persona->estado == null ? "sin datos" : $persona->estado}}</td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>{{ $persona->municipio == "" || $persona->municipio == null ? "sin datos" : $persona->municipio}}</td>
            </tr>
            <tr>
                <td>Ciudad</td>
                <td>{{ $persona->ciudad_nac == "" || $persona->ciudad_nac == null ? "sin datos" : $persona->ciudad_nac}}</td>
            </tr>
            <tr>
                <td>País</td>
                <td>{{ $persona->pais == "" || $persona->pais == null ? "sin datos" : $persona->pais}}</td>
            </tr>

        </tbody>
    </table>

    <div class="salto-pagina"></div>

    <table border="2">
        <tbody>
            <tr>
                <th colspan="2" style="text-align: center">DIRECCIÓN</th>
            </tr>
            <tr>
                <td>Calle</td>
                <td>{{ $persona->calle == "" || $persona->calle == null ? "sin datos" : $persona->calle}}</td>
            </tr>
            <tr>
                <td>Número Interior</td>
                <td>{{ $persona->numero_interior == "" || $persona->numero_interior == null ? "sin datos" : $persona->numero_interior}}</td>
            </tr>
            <tr>
                <td>Número Exterior</td>
                <td>{{ $persona->numero_exterior == "" || $persona->numero_exterior == null ? "sin datos" : $persona->numero_exterior}}</td>
            </tr>
            <tr>
                <td>Colonia</td>
                <td>{{ $persona->colonia_direccion == "" || $persona->colonia_direccion == null ? "sin datos" : $persona->colonia_direccion}}</td>
            </tr>
            <tr>
                <td>Código Postal</td>
                <td>{{ $persona->codigo_postal == "" || $persona->codigo_postal == null ? "sin datos" : $persona->codigo_postal}}</td>
            </tr>
            <tr>
                <td>Estado</td>
                <td>{{ $persona->estado_direccion == "" || $persona->estado_direccion == null ? "sin datos" : $persona->estado_direccion}}</td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>{{ $persona->municipio_direccion == "" || $persona->municipio_direccion == null ? "sin datos" : $persona->municipio_direccion}}</td>
            </tr>
            <tr>
                <td>Ciudad o Localidad</td>
                <td>{{ $persona->ciudad == "" || $persona->ciudad == null ? "sin datos" : $persona->ciudad}}</td>
            </tr>
            <tr>
                <td>Pais</td>
                <td>{{ $persona->pais_direccion == "" || $persona->pais_direccion == null ? "sin datos" : $persona->pais_direccion}}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center">CONTACTO</th>
            </tr>
            <tr>
                <td>Celular</td>
                <td>{{ $persona->celular == "" || $persona->celular == null ? "sin datos" : $persona->celular}}</td>
            </tr>
            <tr>
                <td>Teléfono</td>
                <td>{{ $persona->telefono == "" || $persona->telefono == null ? "sin datos" : $persona->telefono}}</td>
            </tr>
            <tr>
                <td>Correo Electrónico</td>
                <td>{{ $persona->correo == "" || $persona->correo == null ? "sin datos" : $persona->correo}}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center">REFERENCIA 1</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{ $persona->referencia1_nombre == "" || $persona->referencia1_nombre == null ? "sin datos" : $persona->referencia1_nombre}}</td>
            </tr>
            <tr>
                <td>Celular</td>
                <td>{{ $persona->referencia1_cel == "" || $persona->referencia1_cel == null ? "sin datos" : $persona->referencia1_cel}}</td>
            </tr>
            <tr>
                <td>Parentesco</td>
                <td>{{ $persona->referencia1_parentesco == "" || $persona->referencia1_parentesco == null ? "sin datos" : $persona->referencia1_parentesco}}</td>
            </tr>
            <tr>
                <th colspan="2" style="text-align: center">REFERENCIA 2</th>
            </tr>
            <tr>
                <td>Nombre</td>
                <td>{{ $persona->referencia2_nombre == "" || $persona->referencia2_nombre == null ? "sin datos" : $persona->referencia2_nombre}}</td>
            </tr>
            <tr>
                <td>Celular</td>
                <td>{{ $persona->referencia2_cel == "" || $persona->referencia2_cel == null ? "sin datos" : $persona->referencia2_cel}}</td>
            </tr>
            <tr>
                <td>Parentesco</td>
                <td>{{ $persona->referencia2_parentesco == "" || $persona->referencia2_parentesco == null ? "sin datos" : $persona->referencia2_parentesco}}</td>
            </tr>
        </tbody>
    </table>

</div>