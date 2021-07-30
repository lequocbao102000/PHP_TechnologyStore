</br>
<h2 class="text-center">List Cart</h2>
<div class="panel-body">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th width="50px">STT</th>
							<th>Product</th>
                            <th>Image</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Total</th>
                            <th width="50px"></th>
							<th width="50px"></th>
							
						</tr>
					</thead>
					<tbody>
                    <?php
                        $row=[];
                        $row = $data["products"]; 
                        $i = 0;
                        $stt = 1;                   
                        foreach ($row as $product){                     
                            echo '<tr>
                                    <td>'.($stt++).'</td>
                                    <td>'.$product[$i]['name'].'</td>
                                    <td><img src="'.BASE_URL.'/uploads/'.$product[$i]['image'].'" style="width:100px;height:60px"/></td>
                                    <td>'.$product[$i]['price'].'$</td>
                                    <td><input type="number" value='.$product['qty'].' min="1" max="'.$product[$i]['stock'].'"></td>
                                    <td>'.$product[$i]['price']*$product['qty'].'$</td>
                                    <td>
                                    <a href="'.BASE_URL.'/CartController/DeleteItemCart?xoacart='.$product[$i]['id'].'"
                                    <button class="btn btn-danger">Delete</button>
                                    </td>
                                    </a>   
                                    
                                </tr>';
                                                    
                        }
				?>
                    </tbody>
                </table>
                <div class="text-center">
                <a href="<?php echo BASE_URL?>/CartController/DeleteAllCart"><button class="btn btn-danger">Delele Cart</button></a>
                <a href="<?php echo BASE_URL?>/ProductController/Products?brand=1"><button class="btn btn-primary" style="width:200px">Shipping</button></a>
                
                </div>
                
</div>