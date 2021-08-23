
    
     <tbody>
    <tr id="trTable<?php echo $client2->getId(); ?>">
    <td><input type="checkbox" name="Check<?php echo $client2->getId(); ?>" data-Id="<?php $client2->getId();?>" ></td>
        <td id="tdNom<?php echo $client2->getId(); ?>"> <?php $client2->getNom();  ?> </td>
        <td id="tdApe<?php echo $client2->getId(); ?>"> <?php $client2->getApe();  ?></td>
        <td id="tdDirect<?php echo $client2->getId(); ?>"> <?php $client2->getDirec();  ?></td>
        <td id="tdLoc<?php echo $client2->getId(); ?>"> <?php $client2->getLoc();  ?></td>
        <td id="tdTel<?php echo $client2->getId(); ?>"> <?php $client2->getTel();  ?></td>
        <td id="tdMail<?php echo $client2->getId(); ?>"> <?php $client2->getMail();  ?></td>
    </tr>
</tbody>
