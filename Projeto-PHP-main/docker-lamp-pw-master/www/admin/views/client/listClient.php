<h1>Lista de Clientes</h1>
<table class="table table-striped">
    <tr>
        <th>id Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Imagem</th>
        <th colspan="2">Ações</th>
    </tr>
    <?php
        foreach($arrayClients as $Client){
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
            <td>
                <?php
                    if(is_file("assets/img/{$Client['idClient']}.jpg")){
                        echo "
                            <img 
                            
                                style='max-width:100px; max-heigth:100px'
                                src='assets/img/{$Client['idClient']}.jpg'
                            
                            >
                        
                        ";
                    }else{
                        echo "Sem Imagem!";
                    }
                ?>
            </td>
            <td>
               <a href="?controller=client&action=updateClient&id=<?=$Client['idClient']?>" class="btn btn-warning">
                   Alterar
               </a>
            </td>
            <td>
            <a href="?controller=client&action=deleteClient&id=<?=$Client['idClient']?>" class="btn btn-danger">
                   Deletar
               </a>
            </td>

        </tr>

    <?php
        }   
    ?>
      
</table>
