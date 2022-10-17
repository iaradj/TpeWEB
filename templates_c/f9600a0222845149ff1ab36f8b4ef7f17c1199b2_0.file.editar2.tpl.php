<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:17:40
  from 'C:\xampp\htdocs\TPE_WEB\templates\editar2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc674ccfdb7_40967069',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9600a0222845149ff1ab36f8b4ef7f17c1199b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\editar2.tpl',
      1 => 1666041456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc674ccfdb7_40967069 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select name="genero">
<label> Generos</label>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['generos']->value, 'genero');
$_smarty_tpl->tpl_vars['genero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['genero']->value) {
$_smarty_tpl->tpl_vars['genero']->do_else = false;
?>
     <option value="<?php echo $_smarty_tpl->tpl_vars['genero']->value->id_g;?>
"> <?php echo $_smarty_tpl->tpl_vars['genero']->value->genero;?>
 </option>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</select>
    <input type="submit">  
        </form>
        <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
