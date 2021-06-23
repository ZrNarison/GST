<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading"><a href="person.php" id="electricite"  class="form-inline my-2 my-sm-0" type="submit">Nouveau Client</a>
            <div class="panel-body">
              <form class="body-panel-body">
                <table class="table rounded border border-primary" id="info">
                  <thead class="rounded">
                    <tr>
                      <th>Box</th>
                      <th>Responsable</th>
                      <th>Photo</th>
                      <th>Activité</th>
                      <th>Du</th>
                      <th>Caution</th>
                      <th>Adress</th>
                      <th>Contact</th>
                    </tr>
                  </thead>
                  <tbody class="body-table" id="rqt">
                  <?php require("list_client.php");while ($row=$log->fetch()){;?>
                    <tr>
                      <td><?php echo($row['num_box']); ?></td>
                      <td><?php echo($row['Nom']." ".$row["Prenom"]); ?></td>
                      <td><img src="img/Client/<?php $im=($row['photo']);echo($im) ;?>" width="70px" height="50px" alt="Photo Client"></td>
                      <td><?php echo($row['Profession']); ?></td>
                      <td><?php echo(date("d-m-Y",strtotime($row['date_vente']))); ?></td>
                      <td><?php echo($row['cuation']); ?></td>
                      <td><?php echo($row['adress_client']); ?></td>
                      <td><?php echo($row['telephone']); ?></td>
                      <td><a href="Mod_client.php?code=<?php echo($row['idclient']); ?>">Edit</a> </td>
                      <td><a onclick="return confirm('Etes vous sur?');" href="SupprimeClient.php?code=<?php echo($row['idclient']) ?>"><img src="Img/annuler.bmp" alt="Supprimer"/></a></td>
                      <td><a onclick="return confirm('Voulez vous imprimer?');" href="contrat.php?code=<?php echo($row['idclient']) ?>"><img src="Img/print.jpg" alt="Imprimer"/></a></td>
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </form>
            </div>
        </div>
    </div>