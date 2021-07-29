<div class="panel panel-primary">
    <div class="panel-heading">
		<h2 class="text-center">Add new Product</h2>
	</div>

    <div>
        <form method="POST" action="" enctype="multipart/form-data">
             <div style="margin:auto;width:40%" class="panel panel-body">
                    <div class="form-group">
                        <label>Name Product</label>
                        <input style="width:500px" required="true" type="text" class="form-control"   name="name_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Description Product</label>
                        <textarea name="des_product" cols="67" rows="5">
                        </textarea>
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Image Product</label>
                        <input style="width:500px" required="true" type="file" class="form-control"   name="img_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Price Product</label>
                        <input style="width:500px" required="true" type="number" class="form-control" min="0"  name="price_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Amount Product</label>
                        <input style="width:500px" required="true" type="number" class="form-control" min="0"   name="amount_product">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Type</label>
                        <select style="width:500px" class="form-select" name="type_brand_product">
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
                    <button type="submit" name="btncreateproduct" class="btn btn-info">Save</button>
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
                                   
                                </tr>';	
                        }
				?>
                    </tbody>
                </table>
                
            </div>
            
                    
            
</div>   