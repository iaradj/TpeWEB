<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:19:58
  from 'C:\xampp\htdocs\TPE_WEB\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634db8ee028f60_00911420',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f262f6c1d859338fcb4f7463a4c4615e0ddd8aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\editar.tpl',
      1 => 1666037994,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634db8ee028f60_00911420 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p> Editar Vinilo </p>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vinilos']->value, 'vinilo');
$_smarty_tpl->tpl_vars['vinilo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vinilo']->value) {
$_smarty_tpl->tpl_vars['vinilo']->do_else = false;
?>
    <form method="POST" action="editar/<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->id;?>
">
        <input type="text" name="nombre_vinilo" placeholder="Nombre Vinilo" value="<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->vinilo;?>
" required>
        <input type="text" name="artista" placeholder="artista" value="<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->artista;?>
" required>
        <input type="text" name="precio" placeholder="Precio" value="<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->precio;?>
" required>
        <input type="text" name="lanzamiento" placeholder="Lanzamiento" value="<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->lanzamiento;?>
" required>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 


<?php }
}
