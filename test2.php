<?php 
include "setting/conf.php";

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * 20; 
$query = mysql_query('SELECT * FROM berita ORDER BY id_berita DESC LIMIT $start_from, 20');

?> 
<table>
<tr><td>Name</td><td>Phone</td></tr>
<?php 
while ($row = mysql_fetch_assoc($query)) { 
?> 
            <tr>
            <td><? echo $row["judul"]; ?></td>
            <td><? echo $row["isi"]; ?></td>
            </tr>
<?php 
}; 
?> 
</table>