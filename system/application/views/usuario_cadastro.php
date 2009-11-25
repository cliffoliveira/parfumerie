<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
echo form_open("usuarios/insert");
echo form_label("Nome", "tx_nome");
echo form_input("tx_nome",set_value('tx_nome')).br();
echo form_label("Login", "tx_login");
echo form_input("tx_login",set_value('tx_login')).br();
echo form_label("Email", "tx_email");
echo form_input("tx_email", set_value('tx_email')).br();
echo form_label("Número de Celular", "tx_celular");
echo form_input("tx_celular", set_value('tx_celular')).br();
echo form_label("Data de Nascimento", "dt_nascimento");
echo form_input("dt_nascimento", set_value('dt_nascimento')).br();
echo form_submit("Cadastrar", "Cadastrar");
echo form_close();
?>
