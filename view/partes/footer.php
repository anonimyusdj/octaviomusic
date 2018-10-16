

<footer class="page-footer <?php echo $color; ?> darken-2">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text titulo">CONTÁCTENOS</h5>
        <div class="row">
          <form class="col s12 card">
            <div class="row">
              <div class="input-field col s11">
                <i class="material-icons prefix <?php echo $color; ?>-text darken-4">email</i>
                <input id="email" type="email" class="validate">
                <label for="email">Correo</label>
              </div>
              <div class="input-field col s11">
                <i class="material-icons prefix <?php echo $color; ?>-text darken-4">chat</i>
                <textarea id="textarea2" class="materialize-textarea" data-length="120"></textarea>
                <label for="textarea2">Mensaje</label>
              </div>
            </div>
            <center><button type="button" name="button" class="btn <?php echo $color; ?> darken-1" style="margin-bottom:10px;">Enviar</button></center>
          </form>
        </div>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">REDES SOCIALES</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Twiter</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Gmail</a></li>
          <li><a class="grey-text text-lighten-3" href="#!">Telefono</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="row">
        <div class="col s12 m4 left">
            <a class="grey-text text-lighten-4 left" href="#!">© 2018 Copyright Octavio Vasquez<a>
        </div>
        <div class="col s12 m2">
        </div>
        <div class="col s12 m5">
          <a class="grey-text text-lighten-4 right" href="#!">Patrocinadores:
                  <img src="<?php echo $imagenes;?>patrocinador1.jpg" class="responsive-img circle tooltipped" data-position="bottom" data-delay="50" data-tooltip="Eventos Especiales"  width="30px">
                  <img src="<?php echo $imagenes;?>patrocinador2.png" class="responsive-img circle tooltipped" data-position="bottom" data-delay="50" data-tooltip="Innovation Systems"  width="30px">
            </div>
          </a>
        </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="<?php echo $js;?>jquery.audioControls.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.4/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script src="<?php echo $js;?>css.js"></script>
<script src="<?php echo $js;?>reproductor.js"></script>

</body>
</html>
