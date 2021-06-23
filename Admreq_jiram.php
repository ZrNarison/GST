<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-body">
              <form class="body-panel-body"-->
                <table class="table rounded border border-primary"  id="info">
                  <thead>
                    <tr>
                      <th>Box</th>
                      <th>Ancien date</th>
                      <th>Nouvelle date</th>
                      <th>Index</th>                      
                      <th>Somme versé</th>
                      <th>Gardien</th>
                      <th>Consommation</th>
                      <th>Net à Payer</th>
                      <th>A rendre</th>                      
                    </tr>
                  </thead>
                  <tbody class="body-table" id="rqt">
                    <?php require("list_fact.php");while ($row=$log->fetch()){;?>
                    <tr>
                      <td><?php echo($row['N_box']); ?></td>
                      <td><?php $dat=date("d-m-Y",strtotime($row['date_pres']));echo ($dat) ?></td>
                      <td><?php $dt=date("d-m-Y",strtotime($row['date_fact']));echo(($dt)) ;?></td>
                      <td><?php echo($row['val_prs']); ?></td>                      
                      <td><?php echo($row['somme_vers']); ?></td>                      
                      <td><?php echo($row['securite']); ?></td>                      
                      <td><?php echo($row['conso']) ?></td>
                      <td><?php $nap=(($row['somme_vers'])-(doubleval($row['notif']))); echo ($nap) ?></td>
                      <td><?php $rnd=(doubleval($row['notif']));echo($rnd) ?></td>                    
                      <!--td><a href="Mod.php?n_box=<?php echo($row['N_box']) ?> dt=<?php echo($row['date_fact']) ?>">Edit</a> </td>
                      <td><a onclick="return confirm('Etes vous sur?');"href="Supprimefact.php? code_box=<?php echo($row['N_box'])?>" href="Supprimefact.php? fact_dat=<?php echo($row['date_fact']) ?>">Supprimer</a></td-->
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </form>
            </div>
        </div>
    </div>
		<!-- $y =date("d-m-Y",(strtotime($b))); -->
