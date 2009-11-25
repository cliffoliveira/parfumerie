<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

?>
<div id="box2">
    
 <p>
   
    <?
   $email = '';
foreach ( $autentica->result() as $row ){
    $email =  $this->session->userdata('tx_email');
    $login =  $row->tx_login;
}
if($email <> ''){

    echo '<h1>Seja Bem vindo '.$login .'</h1>';
}else{
    
    echo '<br><br>';
    echo '<h1>Senha ou login incorretos<br>Tente de novo por favor !</h1>';
}
    ?>
 </p>
</div>