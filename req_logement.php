<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-body">
              <form class="body-panel-body">
                <table class="table rounded border border-primary" id="info">
                  <thead>
                    <tr>
                      <th>Box</th>
                      <th>Date</th>
                      <th>Responsable de paye</th>
                      <th>Somme versé</th>
                      <th>Caution</th>
                      <th>Notfication</th>
                    </tr>
                  </thead>
                  <tbody class="body-table" id="rqt">
                  <?php require("list_log.php");while ($row=$log->fetch()){;?>
                    <tr>
                      <td><?php echo($row['N_box']); ?></td>
                      <td><?php $da_pay=date("d-m-Y",strtotime($row['date_pay']));echo (/*date_format*/($da_pay/*,'d /m /Y'*/)); ?></td>
                      <td><?php echo($row['pers_pay']); ?></td>
                      <td><?php echo($row['somme_pay']); ?></td>
                      <td><?php echo($row['cuation']); ?></td>
                      <td><?php echo($row['somme_vers']); ?></td>
                      <td><a href="Mod.php?code=<?php echo($et['c_etu']) ?>">Edit</a> </td>
                      <td><a onclick="return confirm('Etes vous sur?');" href="SupprimeEtudiant.php?code=<?php echo($et['CODE']) ?>">Supprimer</a></td>
                    </tr>
                    <?php } ;?>
                  </tbody>
                </table>
              </form>
            </div>
        </div>
    </div>