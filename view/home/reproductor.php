<br><br>
<div class="row">
    <div class="col s12 m3">

    </div>

    <div class="col s12 m1"></div>

    <div class="col s12 m4">  
        <audio controls id="player">
            <source src="<?php echo $music;?>horse.ogg"  type="audio/ogg">
        </audio>
        <div>
            <button onclick="document.getElementById('player').play()">Play</button>
            <button onclick="document.getElementById('player').pause()">Pausa</button>
            <button onclick="document.getElementById('player').load()">Stop</button>
            <button onclick="document.getElementById('player').volume += .1">Subir volumen</button>
            <button onclick="document.getElementById('player').volume -= .1">Bajar volumen</button>
        </div> 
    </div>

    <div class="col s12 m1"></div>

    <div class="col s12 m3">
    
    </div>
</div>