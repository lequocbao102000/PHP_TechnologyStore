
<?php
    $row = $data['detail'];
?>
<div class="panel-heading">
</br>
            <a href="<?php echo BASE_URL;?>/AdminController/ReceiptManage"><button class="btn btn-secondary btn-sm">Back to manage receipt</button></a>
			<h2 class="text-center">Detail Receipt ID: <?php echo $row[0]['id_receipt'];?></h2>
			<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
                        <th width="50px">STT</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Amount</th>
                        <th>Money</th>							
						</tr>
					</thead>
					<tbody>
                        <?php
                        for ($i=0;$i<count($row);$i++){
                            echo '<tr>
                                    <td>'.($i+1).'</td>
                                    <td>'.$row[$i]['name'].'</td> 
                                    <td><img src="'.BASE_URL.'/uploads/'.$row[$i]['image'].'" style="width:100px;height:60px"/></td>
                                    <td>'.$row[$i]['price'].'</td> 
                                    <td>'.$row[$i]['amount'].'</td> 
                                    <td>'.$row[$i]['money'].'</td> 
                                   
                                </tr>';	
                        }
				?>
                    </tbody>
                </table>
                
            </div>