<div style="padding-left:50px;padding-right:50px">
<div class="panel-heading">
				<h2 class="text-center">Invoices List</h2>
			</div>
            <?php
                $row=[];
                $row = $data["historyreceipt"];
                for ($i=0;$i<count($row);$i++){
                    echo '<div>
                    <h3 style="padding:10px">ID receipt : '.$row[$i]['id'].'&nbsp;&nbsp;&nbsp;&nbsp; Total: '.$row[$i]['total'].'$</h3>
                    <h4 style="padding:10px">Ship address: '.$row[$i]['address'].'</h4>
                    </div>';
                    echo'<div class="panel-body">
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
                            </thead>';
                            $details = new Account();
                            $row_details = $details->userreceipt_details($row[$i]['id']);
                            echo '<tbody>';
                                for ($j=0;$j<count($row_details);$j++){
                                echo '<tr>
                                        <td>'.($j+1).'</td>
                                        <td>'.$row_details[$j]['name'].'</td> 
                                        <td><img src="'.BASE_URL.'/uploads/'.$row_details[$j]['image'].'" style="width:100px;height:60px"></td>
                                        <td>'.$row_details[$j]['price'].'</td>
                                        <td>'.$row_details[$j]['amount'].'</td>
                                        <td>'.$row_details[$j]['money'].'</td> 
                                       
                                    </tr>';	
                                }
                            echo '</tbody>
                        </table>
                        
                        </div>';
                }
            ?>
</div>
			