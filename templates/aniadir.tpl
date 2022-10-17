{if isset($smarty.session.USER_ID)}
    <p> Hola Admin! Agrega un Vinilo </p>
    <form method="POST" action="agregar">
    <input type="text" name="nombre_vinilo" placeholder="Nombre Vinilo" required>
    <input type="text" name="artista" placeholder="Artista" required>
    <input type="text" name="precio" placeholder="Precio" required>
    <input type="text" name="lanzamiento" placeholder="Lanzamiento" required>
    <select name="genero">
    <label>Generos</label>
    {foreach from=$generos item=$genero}
        <option value="{$genero->id_g}"> {$genero->genero}</option>
   {/foreach}
    </select>
    <input type="submit">      
    </form>
    {{/if}}