<?php
/* Smarty version 4.2.0, created on 2022-10-18 04:02:43
  from 'C:\xampp\htdocs\web2\web2-tpe\templates\jugadores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e094367acb7_86475352',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ac8b72cc69caf23eeafd32ec4cf9086d81363cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\web2-tpe\\templates\\jugadores.tpl',
      1 => 1666058534,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634e094367acb7_86475352 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="primeroTOP">
    <form method="post" action="filtrar/" class="select">
        <select name="filtrar" class="filtroPosiciones">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posiciones']->value, 'posicion');
$_smarty_tpl->tpl_vars['posicion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['posicion']->value) {
$_smarty_tpl->tpl_vars['posicion']->do_else = false;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['posicion']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['posicion']->value->posicion;?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
        <button type="submit" class="myButtonFiltrar">FILTRAR</button>
    </form>
</div>

<section class="jugadores">

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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</section><?php }
}
