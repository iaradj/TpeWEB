
 {include file="header.tpl"}
 
 {if !isset($smarty.session.USER_EMAIL)}
    <li>
        <a href="home">Login</a>
    </li>
{else} 
    <li>
        <a href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
    </li>
{/if}

<h1 class="titulo">Tienda de vinilos</h1>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Artista</th>
            <th>Precio</th>
            <th>Lanzamiento</th>
            <th>Genero</th>
            {if isset($smarty.session.USER_ID)}
            <td>Borrar</td>
            <td>Editar</td>
            {/if}

        </tr>
    </thead>
    <tbody>
    
    {foreach from=$vinilos item=$vinilo }
        <tr>
            <td><a href="vinilo/{$vinilo->id}"> {$vinilo->vinilo}</td>
            <td>{$vinilo->artista}</td>
            <td>{$vinilo->precio}</td>
            <td>{$vinilo->lanzamiento}</td>
            <td>{$vinilo->genero}</td>
            {if isset($smarty.session.USER_ID)}
         <td><a href='eliminar/{$vinilo->id}'>borrar</a></td>
         <td> <a href= 'showEdit/{$vinilo->id}'> Editar </a></td>
            {/if}
        </tr>
    {/foreach}
    </tbody>
    </table>
   

        

 {include file="footer.tpl"}
