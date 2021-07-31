<?php
    $name_edit = $description_edit = $img_edit = $price_edit = $stock_edit = $id_brand =  '';
  
    if (isset($_GET['editproduct'])){
        
        $arr_edit=[];
        $arr_edit = $data["editproduct"];
        $name_edit = $arr_edit[0]['name'];
        $description_edit = $arr_edit[0]['description'];
        $img_edit = $arr_edit[0]['image'];
        $price_edit = $arr_edit[0]['price'];
        $stock_edit = $arr_edit[0]['stock'];
        $id_brand = $arr_edit[0]['id_brand'];
    }
   
?>
<div class="panel panel-primary">
    <div class="panel-heading">
		<h2 class="text-center">Edit Product</h2>
	</div>

    <div>
        <form method="POST" action="">
             <div style="margin:auto;width:40%" class="panel panel-body">
                    <div class="form-group">
                        <label>Name Product</label>
                        <input style="width:500px" required="true" type="text" class="form-control" value="<?php echo $name_edit;?>"   name="edit_name_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Description Product</label>
                        <textarea name="edit_des_product" cols="67" rows="5">
                            <?php echo $description_edit;?>
                        </textarea>
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Image Product</label>
                        <input style="width:500px" required="true" type="file" value="<?php echo BASE_URL."/uploads/".$img_edit;?>" class="form-control"   name="edit_img_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Price Product</label>
                        <input style="width:500px" required="true" type="number" value="<?php echo $price_edit;?>" class="form-control" min="0"  name="edit_price_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Add more amount Product</label>
                        <input style="width:500px" required="true" type="number" value="<?php echo $stock_edit;?>" class="form-control" min="0"   name="edit_amount_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Type</label>
                        <select style="width:500px" class="form-select" value="<?php echo $id_brand;?>" name="edit_type_brand_product">
                            <option selected>Choose type of Category</option>
                            <?php
                            $type = [];
                            $type = $data["listbrand"];
                            for ($i=0;$i<count($type);$i++){
                                echo '<option value="'.$type[$i]['id'].'">'.$type[$i]['name'].'</option>';	
                            }
                            ?>
                           
                        </select>
                        
                    </div>
                    </br>
                    <button type="submit" name="btneditproduct" class="btn btn-info">Save</button>
            </div>
        </form>
    </div>
    </br>
    <div class="panel-heading">
				<h2 class="text-center">Product Management</h2>
                <a href="?#"><li class="fa fa-sync-alt">Reload</li></a>
			</div>
            
			
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Product Name</th>
                            <th>Product Image</th>
                            <th>Product Description</th>
                            <th>Product Price</th>
                            <th>Stock</th>
                            <th>Brand</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th width="50px"></th>
							<th width="50px"></th>
							
						</tr>
					</thead>
					<tbody>
                        <?php
                        $row=[];
                        $row = $data["listproduct"];
                        for ($i=0;$i<count($row);$i++){
                            echo '<tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$row[$i]['1'].'</td> 
                                    <td><img src="'.BASE_URL.'/uploads/'.$row[$i]['image'].'" style="width:100px;height:60px"/></td>
                                    <td>'.$row[$i]['description'].'</td>
                                    <td>'.$row[$i]['price'].'</td>
                                    <td>'.$row[$i]['stock'].'</td>
                                    <td>'.$row[$i]['6'].'</td>
                                    <td>'.$row[$i]['created_at'].'</td>
                                    <td>'.$row[$i]['updated_at'].'</td>
                                    <td>
                                    <a onClick="Del()" href="?xoaproduct='.$row[$i]['id'].'"
                                    <button class="btn btn-danger">Delete</button>
                                    </td>
                                    </a>   
                                    <td>
                                    <a href="?editproduct='.$row[$i]['id'].'">
                                    <button class="btn btn-warning">Edit</button>
                                    </td>   
                                    </a>
                                   
                                </tr>';	
                        }
				?>
                    </tbody>
                </table>
                
            </div>
            
                    
            
</div>   
<script>
    function Del(){
        return confirm("Are u sure delete ?");
    }
</script>