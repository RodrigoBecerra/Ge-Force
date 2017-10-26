<div class="colorn">
  <select id="a" onchange="cambnomhor()">
    <?php
    echo "<option value='1' selected>año 1</option>";
    for($i=2;$i<=5;$i++){
      echo "<option value='$i'>año $i</option>";
    }
    ?>
  </select>
  <select id="s" onchange="cambnomhor()">
    <?php
    echo "<option value='1' selected>seccion 1</option>";
    for($i=2;$i<=3;$i++){
      echo "<option value='$i'>seccion $i</option>";
    }
    ?>
  </select>
</div>
