{include file="header.tpl"}

<p> Editar Genero </p>

    {foreach from=$generos item=$genero}
        <form method="POST" action="editarGenero/{$genero->id_g}">
        <input type="text" name="genero" placeholder="Editar Genero" value="{$genero->genero}" required>
        <input type="submit">      
        </form> 
    {/foreach}
    
        
        

        