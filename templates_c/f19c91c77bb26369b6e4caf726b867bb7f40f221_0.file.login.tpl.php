<?php
/* Smarty version 4.2.0, created on 2022-10-12 02:39:05
  from 'C:\xampp\htdocs\web2\web2-tpe\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63460ca9181172_84730165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f19c91c77bb26369b6e4caf726b867bb7f40f221' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2-tpe\\templates\\login.tpl',
      1 => 1665535141,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_63460ca9181172_84730165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="login">
        <form class="FormContent" method="post" action="verificar">
        
        <h1>INGRESE SUS DATOS</h1>
            <label for="email">Email:</label>
            <input type="text" class="inputLogin" name="email" value="" placeholder="Ingrese su email"/>
            <pre></pre>
            <label for="pass">Contraseña:</label>
            <input type="password" class="inputLogin" name="pass" value="" placeholder="********"/>
            <button class="botonEnviar" type="submit"><h1>INGRESAR</h1></button>
        </form>
    </div>
<?php }
}
