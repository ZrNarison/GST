<div class="col-md-12 col-xs-12 spacer">
		<div class="panel panel-info">
			<!--div class="panel-heading">Liste des étudiants</div-->
			<div class="panel-body">
				<table class="table rounded-left border border-primary">
          <thead >
            <tr class="">
              <th>N° box</th>
              <th>Loyer</th>
              <th>Sécurité</th>
              <th>Emplacement</th>
            </tr>
          </thead>
          <tbody class="body-table" id="rqt">
          <?php require("list_box.php");while ($row=$info->fetch()){;?>
            <tr>
              <td><?php echo($row['N_box']); ?></td>
              <td><?php echo($row['hofa']); ?></td>
              <td><?php echo($row['securite']); ?></td>
              <td><?php echo ($row["emplacement"]); ?></td>
              <!--td><a href="modbox.php?num_box=<?php echo($row['N_box']) ?>">Edit</a> </td>
              <td><a onclick="return confirm('Etes vous sur?');" href="Supprimebox.php?num_box=<?php echo($row['N_box']) ?>">Supprimer</a></td-->
            </tr>
          <?php } ;?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>