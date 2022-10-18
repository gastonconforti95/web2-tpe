<?php
/* Smarty version 4.2.0, created on 2022-10-18 04:02:46
  from 'C:\xampp\htdocs\web2\web2-tpe\templates\filtrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e09463b5698_38631553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1d1ab7c28f6b27cac8811738bd545714e8a3384' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2-tpe\\templates\\filtrado.tpl',
      1 => 1666058560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e09463b5698_38631553 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<section class="jugadores">
<?php if (empty($_smarty_tpl->tpl_vars['jugadores']->value[0])) {?>
    <h3>SIN INFORMACION<br></h3>
<?php } else { ?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['jugadores']->value, 'jugador');
$_smarty_tpl->tpl_vars['jugador']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->do_else = false;
?>
        <div class="primero">
            <a href="jugador/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->id;?>
">
                <div>
                    <img src="img/jugadores/<?php echo $_smarty_tpl->tpl_vars['jugador']->value->img;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
">
                </div>
                <h3><?php echo $_smarty_tpl->tpl_vars['jugador']->value->nombre;?>
<br></h3>
            </a>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</section><?php }
}
