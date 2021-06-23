<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading">
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
                  <?php require("list_fact.php");while ($row=$log->fetch()){;?>
                    <tr>
                      <td><?php echo($row['N_box']); ?></td>
                      <td><?php echo($row['Nom']." ".$row["Prenom"]); ?></td>
                      <td><img src="img/Client/<?php $im=($row['photo']);echo($im) ;?>" width="70px" height="50px" alt="Photo Client"></td>
                      <td><?php echo($row['Profession']); ?></td>
                      <td><?php echo($row['date_vente']); ?></td>
                      <td><?php echo($row['cuation']); ?></td>
                      <td><?php echo($row['adress_client']); ?></td>
                      <td><?php echo($row['telephone']); ?></td>
                      <td><a href="Mod_client.php?code=<?php echo($row['num_box']); ?>">Edit</a> </td>
                      <td><a onclick="return confirm('Etes vous sur?');" href="SupprimeClient.php?code=<?php echo($et['CODE']) ?>"><img src="Img/annuler.bmp" alt="Supprimer"/></a></td>
                      <td><a onclick="return confirm('Voulez vous imprimer?');" href="ficherens.php?code=<?php echo($row['Nom']) ?>"><img src="Img/print.jpg" alt="Imprimer"/></a></td>
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </form>
            </div>
        </div>
    </div>