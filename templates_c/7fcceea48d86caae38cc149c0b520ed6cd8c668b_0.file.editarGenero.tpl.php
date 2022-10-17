<?php
/* Smarty version 4.2.1, created on 2022-10-17 22:49:34
  from 'C:\xampp\htdocs\TPE_WEB\templates\editarGenero.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dbfde14f8f8_49730270',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fcceea48d86caae38cc149c0b520ed6cd8c668b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\editarGenero.tpl',
      1 => 1666039770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
  ),
),false)) {
function content_634dbfde14f8f8_49730270 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<p> Editar Genero </p>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
        <form method="POST" action="editarGenero/<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_g;?>
">
        <input type="text" name="genero" placeholder="Editar Genero" value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
" required>
        <input type="submit">      
        </form> 
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
        
        

        <?php }
}
