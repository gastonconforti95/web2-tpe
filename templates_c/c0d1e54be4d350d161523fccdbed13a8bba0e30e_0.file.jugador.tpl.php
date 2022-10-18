<?php
/* Smarty version 4.2.0, created on 2022-10-18 04:02:41
  from 'C:\xampp\htdocs\web2\web2-tpe\templates\jugador.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e0941beb8d1_49264024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0d1e54be4d350d161523fccdbed13a8bba0e30e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2-tpe\\templates\\jugador.tpl',
      1 => 1666058532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e0941beb8d1_49264024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="jugadores">

        <div class="primero">
            <div>
                <img src="img/jugadores/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->img;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
            </div>
            <h3>NOMBRE:</h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
<br>
            <h3>NUMERO: </h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->numero;?>
<br>
            <h3>EQUIPO ACTUAL: </h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->equipo;?>
<br>
            <h3>PESO: </h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->peso;?>
<br>
            <h3>ALTURA: </h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->altura;?>
<br>
        </div>

</section><?php }
}
