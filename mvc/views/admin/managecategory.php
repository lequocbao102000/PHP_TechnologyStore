<div class="panel panel-primary">
    <div class="panel-heading">
		<h2 class="text-center">Add new Category</h2>
	</div>

    <div>
        <form method="POST" action="">
             <div style="margin:auto;width:40%" class="panel panel-body">
                    <div class="form-group">
                        <label>Name Category</label>
                        <input style="width:500px" required="true" type="text" class="form-control" id="cate"  name="name_category">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Type</label>
                        <select style="width:500px" class="form-select" name="type_category">
                            <option selected>Choose type of Category</option>
                            <?php
                            $type = [];
                            $type = $data["listtype"];
                            for ($i=0;$i<count($type);$i++){
                                echo '<option value="'.$type[$i]['id'].'">'.$type[$i]['name'].'</option>';	
                            }
                            ?>
                           
                        </select>
                        
                    </div>
                    </br>
                    <button type="submit" name="btncreatecate" class="btn btn-info">Save</button>
            </div>
        </form>
    </div>
    </br>
            <div class="panel-heading">
				<h2 class="text-center">Category Management</h2>
			</div>
			
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Category Name</th>
                            <th>Type</th>
							
						</tr>
					</thead>
					<tbody>
                        <?php
                        $row=[];
                        $row = $data["listcate"];
                        for ($i=0;$i<count($row);$i++){
                            echo '<tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$row[$i]['1'].'</td> 
                                    <td>'.$row[$i]['name'].'</td> 
                                   
                                </tr>';	
                        }
				?>
                    </tbody>
                </table>
                
            </div>
                    
            
</div>   