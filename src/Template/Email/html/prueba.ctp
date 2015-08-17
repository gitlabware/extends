
<?php foreach ($l_boletines as $da): ?>
  <table class="noticiass">
      <tr>
          <td style="width: 30%;border-top: 1px solid #3b3f4f;" align="center">
              <img src="http://www.comunicaextend.cl/wp-content/themes/arthemia/images/extend.jpg" alt="Smiley face" height="130" width="180">
          </td>
          <td style="padding: 1px;border-top: 1px solid #3b3f4f;font-family: 'Open Sans', Helvetica, Arial, sans-serif;font-size: 13px;font-weight: 400;line-height: 1.49;color: #666666;">
              <h4 style="color: #3b3f4f;font-size: 15px;"><?= $da->noticia->titulo ?> <small>::<?= $da->created ?></small></h4>
              <p>
                  <?= $da->noticia->descripcion ?>
              </p>
          </td>
      </tr>
  </table>
<?php endforeach; ?>