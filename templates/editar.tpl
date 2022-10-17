

{include file="header.tpl"}

<p> Editar Vinilo </p>
{foreach from=$vinilos item=$vinilo}
    <form method="POST" action="editar/{$vinilo->id}">
        <input type="text" name="nombre_vinilo" placeholder="Nombre Vinilo" value="{$vinilo->vinilo}" required>
        <input type="text" name="artista" placeholder="artista" value="{$vinilo->artista}" required>
        <input type="text" name="precio" placeholder="Precio" value="{$vinilo->precio}" required>
        <input type="text" name="lanzamiento" placeholder="Lanzamiento" value="{$vinilo->lanzamiento}" required>
    {/foreach}
 


