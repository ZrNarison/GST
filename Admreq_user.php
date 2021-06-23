<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-body">
              <form class="body-panel-body">
                <table class="table rounded border border-primary" id="info">
                  <thead class="rounded">
                    <tr>
                      <th>Critère</th>
                      <th>Utilisateur</th>
                    </tr>
                  </thead>
                  <tbody class="body-table" id="rqt">
                  <?php require("list_client.php");while ($row=$lg->fetch()){;?>
                    <tr>
                      <td><?php echo($row['crt']); ?></td>
                      <td><?php echo($row['user']); ?></td>
                      <td><a onclick="return confirm('Voulez vous imprimer?');" href="suppuser.php?class=<?php echo($row['crt']) ?>"><img src="Img/annuler.jpg" alt="Supprimer"/></a></td>
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </form>
            </div>
        </div>
    </div>