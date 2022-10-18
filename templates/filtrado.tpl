{include file="header.tpl"}

<section class="jugadores">
{if empty($jugadores[0])}
    <h3>SIN INFORMACION<br></h3>
{else}
    {foreach from=$jugadores item=jugador}
        <div class="primero">
            <a href="jugador/{$jugador->id}">
                <div>
                    <img src="img/jugadores/{$jugador->img}" alt="{$jugador->nombre}">
                </div>
                <h3>{$jugador->nombre}<br></h3>
            </a>
        </div>
    {/foreach}
{/if}
</section>