<!DOCTYPE html>
<html>
<head>
	<title><?=$title?></title>
    <link rel="stylesheet"  type="text/css" href="<?=base_url()?>styles/mis.css">
</head>
<body>
<?="<h1>$title</h1>"?>
<table>
    <tr>
        <th>ID</th>
        <th>FNAME</th>
        <th>LNAME</th>
        <th>GENDER</th>
    </tr>
    <?php
foreach($students->result() as $student){
    ?>
  <tr>
    <td><?=$student->id?></td>
    <td><?=$student->lname?></td>
    <td><?=$student->fname?></td>
    <td><?=$student->gender?></td>
  </tr>
<?php
}
?>
</table>
</body>
</html>
