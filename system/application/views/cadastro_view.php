
<div id="box2">
   <?php

if($mybox==1){
    echo '<h1>Sua frase foi cadastrada com sucesso:</h1>';
    echo '<br>';
    echo '<h1>'.$this->session->userdata('frase').'</h1>';

   
}else{
 echo '<h1>N&atilde;o foi poss&iacute;vel cadastrar sua frase.</h1>';
    echo '<br>';
    echo '<h1>Para isso &eacute; necess&aacute;rio ter um cadastro no site e estar logado com o mesmo!.</h1>';
}
?>
</div>
