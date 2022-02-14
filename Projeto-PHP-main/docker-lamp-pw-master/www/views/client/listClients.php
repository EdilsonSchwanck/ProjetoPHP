<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>id Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>
    <?php
        foreach($arrayClient as $Client){
    ?>

        <tr>
            <td>
                <?=$Client['idClient'];?>
            </td>
            <td>
                <?=$Client['name'];?>
            </td>
            <td>
            <?=$Client['email'];?>
            </td>
            <td>
            <?=$Client['phone'];?>
            </td>
            <td>
            <?=$Client['address'];?>
            </td>

        </tr>

    <?php
        }   
    ?>
      
</table>
