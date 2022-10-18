{include file="header.tpl"}

<section class="jugadores">

        <div class="primero">
            <div>
                <img src="img/jugadores/{$jugador->img}" alt="{$jugador->nombre}">
            </div>
            <h3>NOMBRE:</h3>{$jugador->nombre}<br>
            <h3>NUMERO: </h3>{$jugador->numero}<br>
            <h3>EQUIPO ACTUAL: </h3>{$jugador->equipo}<br>
            <h3>PESO: </h3>{$jugador->peso}<br>
            <h3>ALTURA: </h3>{$jugador->altura}<br>
        </div>

</section>