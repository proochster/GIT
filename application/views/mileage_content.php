<div id="container">
    <div class="clearfix">    
        <h1>MILEAGE DATA INPUT</h1>
        <?= form_open('forms/mileage'); ?>

        <div class="grid">
            <div class="grid-24 scroll">
                <table id="table4">
                    <thead>
                        <tr>
                            <td class="date"><h4>Date</h4></td>
                            <td class="reg"><h4>Registration</h4></td>
                            <td class="from"><h4>From</h4></td>
                            <td class="to"><h4>To</h4></td>
                            <td class="client"><h4>Client</h4></td>
                            <td class="return"><h4>Return</h4></td>
                            <td class="mileage"><h4>Milage</h4></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>			 
                            <td>
                                <input type="text" id="datepicker2" name="date" />
                            </td>
                            <td>
                                <select name="reg">
                                        <?php	
                                            foreach($registration as $row){
                                                echo "<option value='".$row->registration."'>".$row->registration."</option>";
                                            } 						 
                                        ?>
                                </select>
                            </td>
                            <td>				
                                <input placeholder="From" type="text" name="from" />
                            </td>
                            <td>				
                                <input placeholder="To" type="text" name="to" />
                            </td>
                            <td>				
                                <input placeholder="Client" type="text" name="client" />
                            </td>			
                            <td>
                                <select name="return">
                                    <option value = "YES">YES</option>
                                    <option value = "NO">NO</option>
                                </select>
                            </td>			
                            <td>
                                <input placeholder="Mileage" type="number" name="mileage" />
                            </td>			
                        </tr>
                    </tbody>
                </table>

                <div class="errormsg">
                    <p><?php echo form_error('date'); ?></p>
                    <p><?php echo form_error('from'); ?></p>
                    <p><?php echo form_error('to'); ?></p>
                    <p><?php echo form_error('client'); ?></p>
                    <p><?php echo form_error('mileage'); ?></p>
                </div>            
            </div>

            <div class="grid-24 center">
                <input type="submit" id="submit1" class="large link_button"/>                 
            </div>
        </div>    

        <?= form_close(); ?>

        <div class="grid">
            <div class="grid-24 scroll">
                <table id="table2">
                    <thead>
                        <tr>
                            <td><h4>Date</h4></td>
                            <td><h4>From</h4></td>
                            <td><h4>To</h4></td>
                            <td><h4>Client</h4></td>
                            <td><h4>Return</h4></td>
                            <td><h4>Registration</h4></td>
                            <td><h4>Fuel Type</h4></td>
                            <td><h4>Engine Capacity</h4></td>
                            <td><h4>Model</h4></td>
                            <td><h4>Fuel</h4></td>
                            <td><h4>Milage</h4></td>
                        </tr>
                    </thead>

                    <?php

                    foreach($results as $row){
                        echo "<tr><td><p>".$row->date."</p></td>";
                        echo "<td><p>".$row->from."</p></td>";
                        echo "<td><p>".$row->to."</p></td>";
                        echo "<td><p>".$row->client."</p></td>";
                        echo "<td><p>".$row->return."</p></td>";		
                        echo "<td><p>".$row->reg."</p></td>";
						echo "<td><p>".$row->fueltype."</p></td>";
						echo "<td><p>".$row->enginecc." cc</p></td>";
                        echo "<td><p>".$row->car."</p></td>";
                        echo "<td><p>".$row->fuel."</p></td>";
                        echo "<td><p>".$row->mileage."</p></td></tr>";
                    } 

                    ?>
                </table>
            </div>
        </div>
    </div>
</div>