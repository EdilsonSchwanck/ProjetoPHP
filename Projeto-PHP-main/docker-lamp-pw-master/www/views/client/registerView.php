<h1> Registro de Cliente - visialização</h1>
<table class="table table-striped">
    <tr>
        <th> Nome:</th>
        <td>
            <?php
                echo($arrayClient['name']);
            
            ?>
        </td>
    </tr>
    <tr>
        <th> Email:</th>
        <td>
            <?php
                echo($arrayClient['email']);
            
            ?>
        </td>
    </tr>
    <tr>
        <th> Telefone:</th>
        <td>
            <?php
                echo($arrayClient['phone']);
            
            ?>
        </td>
    </tr>
    <tr>
        <th> Genero:</th>
        <td>
            <?php
                echo($arrayClient['gender']);
            
            ?>
        </td>
    </tr>
    <tr>
        <th> Termo:</th>
        <td>
            <?php
                if($arrayClient['accept']){
                    echo('Termo Aceito');
                }else{
                    echo('Termo não aceito.');
                }
            
            ?>
        </td>
    </tr>
   
   
   
   
   

</table>