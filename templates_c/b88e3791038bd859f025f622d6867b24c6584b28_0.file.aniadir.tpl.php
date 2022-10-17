<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:16:16
  from 'C:\xampp\htdocs\TPE_WEB\templates\aniadir.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc620300a10_03582006',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88e3791038bd859f025f622d6867b24c6584b28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\aniadir.tpl',
      1 => 1666041374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dc620300a10_03582006 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_SESSION['USER_ID']))) {?>
    <p> Hola Admin! Agrega un Vinilo </p>
    <form method="POST" action="agregar">
    <input type="text" name="nombre_vinilo" placeholder="Nombre Vinilo" required>
    <input type="text" name="artista" placeholder="Artista" required>
    <input type="text" name="precio" placeholder="Precio" required>
    <input type="text" name="lanzamiento" placeholder="Lanzamiento" required>
    <select name="genero">
    <label>Generos</label>
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
    <?php ob_start();
}
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;
}
}
