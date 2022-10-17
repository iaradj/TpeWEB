<?php
/* Smarty version 4.2.1, created on 2022-10-17 23:15:46
  from 'C:\xampp\htdocs\TPE_WEB\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dc60233e122_41386228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8268c8243db6d01cee4bdba311009245513348' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE_WEB\\templates\\table.tpl',
      1 => 1666041344,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_634dc60233e122_41386228 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
 <?php if (!(isset($_SESSION['USER_EMAIL']))) {?>
    <li>
        <a href="home">Login</a>
    </li>
<?php } else { ?> 
    <li>
        <a href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
    </li>
<?php }?>

<h1 class="titulo">Tienda de vinilos</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Artista</th>
            <th>Precio</th>
            <th>Lanzamiento</th>
            <th>Genero</th>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
            <td>Borrar</td>
            <td>Editar</td>
            <?php }?>

        </tr>
    </thead>
    <tbody>
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['vinilos']->value, 'vinilo');
$_smarty_tpl->tpl_vars['vinilo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['vinilo']->value) {
$_smarty_tpl->tpl_vars['vinilo']->do_else = false;
?>
        <tr>
            <td><a href="vinilo/<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['vinilo']->value->vinilo;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['vinilo']->value->artista;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['vinilo']->value->precio;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['vinilo']->value->lanzamiento;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['vinilo']->value->genero;?>
</td>
            <?php if ((isset($_SESSION['USER_ID']))) {?>
         <td><a href='eliminar/<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->id;?>
'>borrar</a></td>
         <td> <a href= 'showEdit/<?php echo $_smarty_tpl->tpl_vars['vinilo']->value->id;?>
'> Editar </a></td>
            <?php }?>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
    </table>
   

        

 <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
