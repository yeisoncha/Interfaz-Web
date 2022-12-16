
                
                <?php
                include "conexion.php";
                include "metodos.php";
                
                    $buscar = $_POST['buscar'];
                    $cnx = mysqli_connect("localhost:3307","root","","database");
                    $sql = "SELECT id, usuario,contraseña,dirección FROM usuarios0 where usuario  like '$buscar' '%' order by id asc";
                    $rta = mysqli_query($cnx,$sql);
                    while ($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['0']?></td>
                        <td><?php echo $mostrar['1']?></td>
                        <td><?php echo $mostrar['2']?></td>
                        <td><?php echo $mostrar['3']?></td>
                        <td>
                            <a href="editar.php?
                            id=<?php echo $mostrar['0']?>
                            usuario=<?php echo $mostrar['1']?>
                            contraseña=<?php echo $mostrar['2']?>
                            direccion=<?php echo $mostrar['3']?>
                            ">Editar</a>
                            <a href="eliminar.php">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
         