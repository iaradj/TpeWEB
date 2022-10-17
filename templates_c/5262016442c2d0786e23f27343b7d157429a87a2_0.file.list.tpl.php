<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:33:18
  from 'C:\xampp\htdocs\TPE_WEB\templates\list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dbc0ec62318_48505968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5262016442c2d0786e23f27343b7d157429a87a2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\list.tpl',
      1 => 1666038791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dbc0ec62318_48505968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h2> Lista Generos </h2>
<table>
    <thead>
<tr>
<th>Generos</th>
<?php if ((isset($_SESSION['USER_ID']))) {?>
<td>Borrar</td>
<td>Editar</td>
<?php }?>

</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
    <tr> 
    <td> <a href="generos/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_g;?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
 </td> 
    <?php if ((isset($_SESSION['USER_ID']))) {?>
    <td> <a href='eliminarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_g;?>
'>Borrar</a></td>
    <td> <a href= 'showEditGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_g;?>
'> Editar </a></td>
<?php }?>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>
<?php if ((isset($_SESSION['USER_ID']))) {?>
    <form method="POST" action="agregarGenero">
    <input type="text" name="nuevoGenero" placeholder="Agrega un genero" required>
    <input type="submit">  
<?php }?>


<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php }
}
