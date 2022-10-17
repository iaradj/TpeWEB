
{include file="header.tpl"}

<h2> Lista Generos </h2>
<table>
    <thead>
<tr>
<th>Generos</th>
{if isset($smarty.session.USER_ID)}
<td>Borrar</td>
<td>Editar</td>
{/if}

</tr>
</thead>
<tbody>
{foreach from=$generos item=$genero}
    <tr> 
    <td> <a href="generos/{$genero->id_g}"> {$genero->genero} </td> 
    {if isset($smarty.session.USER_ID)}
    <td> <a href='eliminarGenero/{$genero->id_g}'>Borrar</a></td>
    <td> <a href= 'showEditGenero/{$genero->id_g}'> Editar </a></td>
{/if}
    </tr>
{/foreach}
</tbody>
</table>
{if isset($smarty.session.USER_ID)}
    <form method="POST" action="agregarGenero">
    <input type="text" name="nuevoGenero" placeholder="Agrega un genero" required>
    <input type="submit">  
{/if}


{include file="footer.tpl"}



