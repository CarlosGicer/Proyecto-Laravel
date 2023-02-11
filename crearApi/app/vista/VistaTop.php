<?php
class VistaTop
{
    public static function mostrarSongsTop($token)
    {
        include('cabecera.php');

      
        require_once('vendor/autoload.php');


        $guzzle = new GuzzleHttp\Client(['base_uri' => 'node:3000']);
        $response = $guzzle->get('api/song/top/top10', [
            'headers' => ['Authorization' => $token]
        ])->getBody();

        $data = json_decode($response);
        echo '<a href="enrutador.php?accion=mostrar" class="btn btn-success mt-2 mb-2">Ver Canciones</a><br>';
        
        echo "  <table class='table ms-2'>
        <thead class='table-dark'>
        <tr>
        <th scope='col'>Titulo</th>
        <th scope='col'>Grupo</th>
        <th scope='col'>Duracion</th>
        <th scope='col'>Año</th>
        <th scope='col'>Genero</th>
        <th scope='col'>Puntuacion</th>
        <th scope='col'>Valorar</th>
        <tr>    
        </thead>
        <tbody>";

        foreach ($data as $key) {
            echo '<form action="enrutador.php" method="post"> ';
            echo "<tr>";

            echo " <td>".$key->titulo."</td> ";
            echo " <td>".$key->grupo."</td> ";
            echo " <td>".$key->duracion." minutos</td> ";
            echo " <td>".$key->anio."</td> ";
            echo " <td>".$key->genero."</td> ";
            echo " <td>".$key->puntuacion."
            <button type='submit' class='btn btn-primary ms-5'>Valorar</button></td> ";
            echo '<td>'. '<input type="range" min=1 max=5 name="valoracion">' . '</td>';
           
            echo "<td> <input type='hidden' name='id' value='".$key->_id."'>";
            echo " <input type='hidden' name='accion' value='valorar'>";
            
            echo "<tr>";
            echo "</form>";
        };

       echo" </tbody>
        </table>";

      

        include('pie.php');
    }
}
