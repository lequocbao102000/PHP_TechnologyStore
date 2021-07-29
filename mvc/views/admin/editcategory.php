<?php
    $name_edit = $idcate_edit =  '';
  
    if (isset($_GET['id'])){
        
        $arr_edit=[];
        $arr_edit = $data["idedit"];
        $name_edit = $arr_edit[0]['name'];
        $idcate_edit = $arr_edit[0]['id_cate'];
    }
   
?>
<div class="panel panel-primary">
<div class="panel-heading">
		<h2 class="text-center">Edit Category</h2>
	</div>

    <div>
        <form method="POST" action="">
             <div style="margin:auto;width:40%" class="panel panel-body">
                    <div class="form-group">
                        <label>Name Category</label>
                        <input style="width:500px" required="true" type="text" class="form-control" id="cate" value="<?php echo $name_edit;?>"  name="name_category_edit">
                    </div>
                    </br>
                    <div class="form-group">
                        <label>Type</label>
                        <select style="width:500px" class="form-select" name="type_category_edit">
                            <option value="<?php $idcate_edit?>" selected>Choose type of Category</option>
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
                    <button type="submit" name="btneditcate" class="btn btn-info">Save</button>
            </div>
        </form>
    </div>
    </br>
            <div class="panel-heading">
				<h2 class="text-center">Category Management</h2>
                <a href="?#"><li class="fa fa-sync-alt">Reload</li></a>
			</div>
			
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Category Name</th>
                            <th>Type</th>
                            <th width="50px"></th>
							<th width="50px"></th>
							
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
                                    <td>
                                    <a onClick="Del()" href="?xoacate='.$row[$i]['id'].'"
                                    <button class="btn btn-danger">Delete</button>
                                    </td>
                                    </a>   
                                    <td>
                                    <a href="?id='.$row[$i]['id'].'">
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
