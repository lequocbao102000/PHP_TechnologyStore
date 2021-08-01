<div class="panel panel-primary">
<div class="panel-heading">
            <div class="panel-heading">
				<h2 class="text-center">Receipt Management</h2>
			</div>
			</br>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Customer</th>
                            <th>Order at</th>
                            <th>Ship address</th>
                            <th>Total</th>
                            <th width="100px"></th>
							
							
						</tr>
					</thead>
					<tbody>
                        <?php
                        $row=[];
                        $row = $data["listreceipt"];
                        for ($i=0;$i<count($row);$i++){
                            echo '<tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$row[$i]['fullname'].'</td> 
                                    <td>'.$row[$i]['created_at'].'</td>
                                    <td>'.$row[$i]['address'].'</td>
                                    <td>'.$row[$i]['total'].'</td>
                                    <td>
                                    <a href="'.BASE_URL.'/AdminController/Details?idre='.$row[$i]['id'].'">
                                    <button class="btn btn-primary">Detail</button>
                                    </td>   
                                    </a>
                                   
                                </tr>';	
                        }
                        
				?>
                    </tbody>
                </table>
                
            </div>   
            
</div>  