{include file="header.tpl"}


<div class="primeroTOP">
    <form method="post" action="filtrar/" class="select">
        <select name="filtrar" class="filtroPosiciones">
            {foreach from=$posiciones item=posicion}
                <option value="{$posicion->id}">{$posicion->posicion}</option>
            {/foreach}
        </select>
        <button type="submit" class="myButtonFiltrar">FILTRAR</button>
    </form>
</div>

<section class="jugadores">

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

</section>