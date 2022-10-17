
<select name="genero">
<label> Generos</label>
{foreach from=$generos item=$genero}
     <option value="{$genero->id_g}"> {$genero->genero} </option>
{/foreach}
</select>
    <input type="submit">  
        </form>
        {include file="footer.tpl"}