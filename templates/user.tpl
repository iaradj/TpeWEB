{include file='header.tpl'}

<div>
<h1>Login</h1>
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" required name="password">
        </div>

        {if $error} 
            <div>
                {$error}
            </div>
        {/if}
        <button type="submit">Entrar</button>
        <p> <a href="tienda"> Invitado </p>
        
    </form>

{include file='footer.tpl'}