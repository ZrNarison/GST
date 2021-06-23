<div class="col-md-12 col-xs-12 spacer">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="panel-body">
              <form class="body-panel-body">
                <a href="releve.php" id="Logement2"  class="form-inline my-2 my-sm-0" type="submit"><< Recette mensuel</a>
                <label class="control-label" id="filr">FILTRAGE DE RECETTE ELECTRICITE SECURITE :</label>
                <select id="c_mod" name="c_mod" class="form-group control-label text-center" onchange="charge_info()" >
                    <option  value=""  disabled selected>Une module</option>
                        <!--?php while($et=$a->fetch()) {echo "<option value='".$et['c_modu']."'>".utf8_encode($et['c_modu'])."</option>";} ?-->
                </select>
                <input type="submit" name="s" id="filtre_etu" value="filtre" style="visibility: hidden;">
                <a href="relevelog.php" id="electricite"  class="form-inline my-2 my-sm-0" type="submit">Logement >></a>
                <table class="table rounded border border-primary" id="info">
                    <thead>
                        <tr>
                        <th>Box</th>
                        <th>Responsable</th>
                        <th>Photo </th>
                        <th>Date de rentré</th>
                        <th>Logement</th>
                        <th>Eléctricité et Sécurité</th>
                        <th>Valeur antécedant</th>
                        <th>Valeur </th>
                        </tr>
                    </thead>
                    <tbody class="body-table" id="rqt">
                        <tr>
                        <!--?php while ($row=$info->fetch()){;?->
                            <td><!-?php echo($row['code_etu']); ?></td>
                            <td><!-?php echo($row['c_mod']); ?></td>
                            <td><!-?php echo($row['nom_etu']); ?></td>
                            <td><!-?php $dat=$row['date_nais'];echo($dat); ?></td>
                            <td><!-?php echo($row['lieu_nais']); ?></td>
                            <td><!-?php echo($row['sexe']) ;?></td>
                            <td><a href="Mod.php?code=<!-?php echo($et['c_etu']) ?>">Edit</a> </td>
                            <td><a onclick="return confirm('Etes vous sur?');" href="SupprimeEtudiant.php?code=<!-?php echo($et['CODE']) ?>">Supprimer</a></td>
                            </tr>
                        <!-?php } ;?-->
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>