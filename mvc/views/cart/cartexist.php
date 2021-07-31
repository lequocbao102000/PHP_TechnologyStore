</br>
<h2 class="text-center">List Cart</h2>
    <div class="text-right">
        <a href="<?php echo BASE_URL?>/CartController/DeleteAllCart"><button class="btn btn-danger">Delele Cart</button></a>
        <a href="<?php echo BASE_URL?>/ProductController/Products?brand=1"><button class="btn btn-primary" style="width:200px">Shipping</button></a>
    </div>
<div class="panel-body">
    <form action="<?php echo BASE_URL;?>/CartController/UpdateCart" method="POST">
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
							
							
						</tr>
					</thead>
					<tbody>
                    <?php
                        $row=[];
                        $row = $data["products"]; 
                        $i = 0;
                        $stt = 1;
                        $total = 0;                 
                        foreach ($row as $product){                     
                            echo '<tr>
                                    <td>'.($stt++).'</td>
                                    <td>'.$product[$i]['name'].'</td>
                                    <td><img src="'.BASE_URL.'/uploads/'.$product[$i]['image'].'" style="width:100px;height:60px"/></td>
                                    <td>'.$product[$i]['price'].'$</td>
                                    <td><input type="number" value='.$product['qty'].' min="1" max="'.$product[$i]['stock'].'"
                                    name="qty['.$product[$i]['id'].']"></td>
                                    <td>'.$product[$i]['price']*$product['qty'].'$</td>
                                    <td>
                                    <a href="'.BASE_URL.'/CartController/DeleteItemCart?xoacart='.$product[$i]['id'].'"
                                    <button class="btn btn-danger">Delete</button>
                                    </td>
                                    </a>   
                                    
                                </tr>';
                                $total += $product[$i]['price']*$product['qty'];               
                        }
				?>
                    </tbody>
                </table>
                <div class="text-right">
                    <lable style="color:red"><b>Total Money($) : </b></lable>
                   <input type="text" name="totalmoney" value="<?php echo $total?>" readonly="true">
                    <button type="submit" name="btnupdatecart" class="btn btn-info">UpdateCart</button>
                         
                </div>
                    </form>
                <div class="text-center">
                    <a href="<?php echo BASE_URL;?>/PaymentController/"><button class="btn btn-success btn-lg">Payment</button></a>                   
                </div>
                   
                
                
                
                
</div>