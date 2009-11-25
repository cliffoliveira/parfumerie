<html>
    <head>
        <title><?=$titulo?></title>

        <link href="<?=base_url()?>/static/css/estilo.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="<?=base_url()?>/static/js/jquery.js"></script>
        <script type="text/javascript" src="<?=base_url()?>/static/js/jquery.limit-1.0.source.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('textarea').limit('230','#left');
            });
        </script>

    </head>
    <body>

        <div id="contener">
            <div id="superhead">
                <div id="head">

                </div>

            </div>
            <div id="faixa">
                <div id="faixainterna">
                    <img src="<?=base_url()?>/static/image/inv.gif" width="50px" height="90px" align="left" alt="invisivel">
                    <a href="<?=base_url()?>">
                        <img src="<?=base_url()?>/static/image/inv.gif" width="70px" height="90px"  border="0" align="left" alt="invisivel">
                    </a>
                    <img src="<?=base_url()?>/static/image/inv.gif" width="40px" height="90px" align="left" alt="invisivel">
                    <a href="<?=base_url()?>vencedores">
                        <img src="<?=base_url()?>/static/image/inv.gif" border="0" width="95px" height="90px" align="left" alt="invisivel">
                    </a>
                    <img src="<?=base_url()?>/static/image/inv.gif" width="40px" height="90px" align="left" alt="invisivel">
                    <a href="<?=base_url()?>cartoes">
                        <img src="<?=base_url()?>/static/image/inv.gif" border="0" width="145px" height="90px" align="left" alt="invisivel">
                    </a>
                    <img src="<?=base_url()?>/static/image/inv.gif" width="40px" height="90px" align="left" alt="invisivel">
                    <a href="<?=base_url()?>regulamento">
                        <img src="<?=base_url()?>/static/image/inv.gif" border="0" width="130px" height="90px" align="left" alt="invisivel">
                    </a>
                    <img src="<?=base_url()?>/static/image/inv.gif" width="30px" height="90px" align="left" alt="invisivel">
                    <a href="<?=base_url()?>contato">
                        <img src="<?=base_url()?>/static/image/inv.gif"  border="0" width="90px" height="90px" align="left" alt="invisivel">
                    </a>
                    <img src="<?=base_url()?>/static/image/inv.gif" width="30px" height="90px" align="left" alt="invisivel">
                    <a href="http://www.twitter.com">
                        <img src="<?=base_url()?>/static/image/inv.gif" border="0" width="170px" height="90px" align="left" alt="invisivel">
                        <a>
                            </div>
                            </div>
                            <div id="container">
                                <div id="subcontainer">
                                    <div id="margen"><img src="<?=base_url()?>/static/image/inv.gif" alt="invisivel"></div>
                                    <!-- Start Div principal -->
                                    
                                        <?=$box?>
                                    
                                    <!-- End Div principal -->
                                    <div id="separador"><img src="<?=base_url()?>/static/image/inv.gif" alt="invisivel"></div>
                                    <div id="coluna">
                                        <form action="" method="">
                                            <div id="meulogin">
                                                <input style="margin-top:58px; width:150px; height:30px; border:none" name="login" id="login" type="text"/>
                                                <img src="<?=base_url()?>/static/image/inv.gif" width="20px" height="15px" alt="invisivel">
                                                <input style="margin-top:1px; width:150px; height:30px; border:none;" name="senha" id="senha" type="password" />
                                                <a href="<?=base_url()?>cartoes">
                                                    <img src="<?=base_url()?>/static/image/inv.gif" border="0" width="20px" height="15px" alt="invisivel">
                                                </a>
                                                <br>
                                                <a href="<?=base_url()?>cartoes">
                                                    <img src="<?=base_url()?>/static/image/inv.gif" border="0" align="left" width="170px" height="15px" alt="invisivel">
                                                </a>
                                                <br>
                                                <a href="<?=base_url()?>cartoes">
                                                    <img src="<?=base_url()?>/static/image/inv.gif" border="0" align="left" width="170px" height="15px" alt="invisivel">
                                                </a>
                                        </form>
                                        <a id="btn_cadastro" href="#"></a>
                                        <a id="btn_esqueci_senha" href="#"></a>

                                    </div>
                                    <br><br><br><br><br><br><br><br><br><br><br><br>
                                    <div id="promo">
                                        aqui
                                    </div>
                                </div>
                                <div id="fecha"><img src="<?=base_url()?>/static/image/inv.gif" alt="invisivel"></div>
                            </div>

                            </div>
                            </div>

                            </body>
                            </html>