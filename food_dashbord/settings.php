
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php echo $message;?>
<form action="" method="POST" >
 	<table class="form-table">
 		<tr>
 			<th>
 			<label for="food id"> ID:</label>
 			 </th>
 			 <td>
 			 	<input type="text" id="food id" required="true"  name="<?php FOOD_CATEGORY_ID_OPTION ?>">
 			 </td>
 		</tr>
 		<tr>
 			<th>
 			<label for="category_id">Category_id </label>
 			 </th>
 			 <td>
 			 	<input type="text" id="category_id" required="true"  name="<?= FOOD_CATEGORY_ID_OPTION ?>">
 			 </td>
 		</tr>
 		<tr>
 			<th>
 			<label for="title">Title </label>
 			 </th>
 			 <td>
 			 	<input type="text" id="title" required="true"  name="<?= FOOD_TITLE ?>">
 			 </td>
 		</tr>
 		<tr>
 			<th>
 			<label for="description">Description </label>
 			 </th>
 			 <td>
 			 	<input type="text" id="description" required="true" value="" name="<?= FOOD_DESCRIPTION ?>">
 			 </td>
 		</tr>
 		<tr>
 			<th>
 			<label for="image_url">Image url </label>
 			 </th>
 			 <td>
 			 	<input type="text" id="image_url" required="true" name="<?= FOOD_IMG_URL ?>">
 			 </td>
 		</tr>
    </table>
    <p><input type="submit" value="Save table" class="button-primary"></p>
 </form>
 </body>
 
 