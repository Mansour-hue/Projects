<form action="" method="post">
    <select name="select1">
        <option value="value1">Value 1</option>
        <option value="value2">Value 2</option>
    </select>
    <input type="submit" name="submit" value="Go"/>
</form>
<?php
  echo $_POST['select1'];
?>