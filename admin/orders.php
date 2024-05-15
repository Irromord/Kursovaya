<?php
session_start();
if(!isset($_SESSION["login"])):
	header("location:loggg.php");
  else:
?>
<?php
				include('bd.php');
			   $q="Select * from Orders";
			   $res=mysqli_query($conn,$q) or die( mysqli_error($conn));
				 echo'	<script type="text/javascript" src="js/main.js"></script>
				 <header><h3>Заказы</h3></header>
				 <div class="module_content">';
					   while($row=mysqli_fetch_array($res))
					   {
						   echo'<h4 class="alert_info"><div class="delete" id="tabs">
						    <button class="btn-del" id='.$row['ID'].';>Выполнено/Удалить</button></div>
						   <div class="show_order">
						   <div class="header1">
						   <p>Заказ номер: '.$row['ID'].'</p></div>
						   <ul>
						  <li> Имя: </li>
						  <li><input type="text" id="id" value="'.$row['Name'].'" disabled></li>
						   <li>Телефон:</li>
						   <li><input type="text" value="'.$row['Phone'].'" disabled></li>
						   <li>Кофе:</li>
						   <li><input type="text" value="'.$row['Coffee'].'" disabled></li>
						   <li>Булочка:</li>
						   <li><input type="text" value="'.$row['Bun'].'" disabled></li>
						   <li>Закуска:</li>
						   <li><input type="text" value="'.$row['Snack'].'" disabled></li>
						   </ul>
						   </div>
						   </h4> ';
					   }
?>
<?php endif; ?>
