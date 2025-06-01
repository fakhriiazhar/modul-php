<h1>Cari Rata-rata Bilangan</h1>
<?php
$n = $_POST['n'];
echo "<form method='post' action='kasus3_proses.php'>";
echo "<table>";
for ($i = 0; $i <= $n - 1; $i++)
{
      echo "<tr><td>Bil ke -".($i+1)."</td>
      <td><input type='text' name='data".$i."' /></td></tr>";
}
echo "<tr>
         <td></td>
         <td><input type='submit' name='submit' value='Submit' /></td></tr>";
echo "<tr>
         <td></td>
         <td><input type='hidden' name='n' value='".$n."' /></td></tr>";
echo "</table>";
echo "</form>";
?>