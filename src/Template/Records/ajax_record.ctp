 <style>
		 table { border-collapse:separate; border-top: 1px solid black; }
        td, th {
            margin:0;
            border:1px solid black; 
            border-top-width:0px; 
            white-space:nowrap;
			text-align:center;
        }
       .my_tble{ 
            overflow-x:scroll;  
            margin-left:8em; 
            overflow-y:visible;
			padding-bottom:5px;
        }
        .headcol {
			margin:0;
            border:1px solid black;
			background-color:#FFD700;
            border-top-width:1px; 
			padding:7px;
            position:absolute; 
            width:9em; 
            left:0;
            //top:auto; 
			border-top-width:1px; /*only relevant for first row*/
             /*compensate for top border*/
        }
		
</style>
  
						<div class="portlet-body" >
							 
						    <?php foreach ($record_detail as $record_details):?>
							 <div style="overflow-x:scroll">
							<table class="table  table-hover" id="sample_1" border="1">
							<thead>
							<tr style="background:#FFE735;" >

							<th>Status as on Date</th>
							<th>Date of commissioning of plant</th>
							<th>Name of District</th>
							<th>Name of Village/ habitation</th>
							<th>Poulation ( 2011 Census)</th>
							<th>Nos of Household</th>
							<th>Nos. of ATM Card issued </th>
							<th>Date of sample (lab testing)</th>
							<th>Raw water Quality TDS</th>
							<th>Raw water Quality Fl</th>
							<th>Raw water Quality No3</th>
							<th>Treated water Quality TDS</th>
							<th>Treated water Quality Fl</th>
							<th>Treated water Quality No3</th>
							<th>SIM Number</th>
							<th>Status as on Date</th>
							<th>Status as on Time</th>
							<th>Status (operational/Non operational)</th>
							<th>Reason for Non-Operational</th>
							<th>Treated water TDS ppm</th>
							 <th>IFR m3/hr</th>
							<th>PFR m3/hr</th>
							<th>Recovery(PFR/IFR*100)</th>
							<th>Operational Hrs in a day</th>
							<th>Operational Hrs as on date</th>
							<th>Cummulative volume dispensed(m3 in a day)</th>
							<th>Cummulative volume(m3 as on date)</th>
							<th>ATM card based(ATM Card issued/Nos of Household x 100)</th>
							<th>Volume based (Cummulative vol(m3 in a day)/Total nos of HH x 15 liter per day per HH X 100)</th>
							<th>Edit</th>
							<th>Redo/Undo</th>
							<th>Permanent Delete</th>
							</tr>
							</thead>
							<tbody>
							<?php $no_houses=$record_details->village->no_houses; ?>
							 <td><?= h($record_details->status_date) ?></td>
							 <td><?php if(!empty($record_details->village)){ echo $record_details->village->commissioning; }?></td>
							 <td><?php if(!empty($record_details->district)){ echo $record_details->district->district_name; }?></td>
							<td><?php if(!empty($record_details->village)){ echo $record_details->village->village_name; }?></td>
							<td><?php if(!empty($record_details->village)){ echo $record_details->village->population; }?></td>
							<td><?php if(!empty($no_houses)){ echo $no_houses; }?></td>
							 <td><?= h($record_details->atmcard_issues) ?></td>
							 <td><?= h($record_details->date_lab_testing) ?></td>
							 <td><?= h($record_details->rwq_tds) ?></td>
							 <td><?= h($record_details->rwq_fl) ?></td>
							 <td><?= h($record_details->rwq_no) ?></td>
							 <td><?= h($record_details->twq_tds) ?></td>  
							 <td><?= h($record_details->twq_fl) ?></td>  
							 <td><?= h($record_details->twq_no) ?></td>  
							 <td><?= h($record_details->sim_number) ?></td>  
							 <td><?= h($record_details->status_date) ?></td>  
							 <td><?= h($record_details->status_time) ?></td>
							 <td><?= h($record_details->status_plant) ?></td>
							 <td><?= h($record_details->reason_nonoperational) ?></td>  
							 <td><?= h($record_details->treated_tds) ?></td>  
							<td><?= h($record_details->ifr) ?></td>  
							<td><?= h($record_details->pfr) ?></td>   
							<td>
							<?php $recovery_pfr=$record_details->pfr; ?>
							<?php $recovery_ifr=$record_details->ifr; ?>
							<?php $recovery=(($recovery_pfr/$recovery_ifr)*100)?>
							<?= h($recovery) ?></td>
							<td><?= h($record_details->operational_day) ?></td> 	
							<td><?= h($record_details->operational_date) ?></td>
							<td><?= h($record_details->dispense_day) ?></td>
							<td><?= h($record_details->dispense_date) ?></td>
							<td>
							<?php $acb_atm_c=$record_details->atmcard_issues; ?>
							<?php $acb_no_house=$no_houses; ?>
							<?php $acb=round(($acb_atm_c/$acb_no_house)*100)?>
							<?= h($acb) ?></td>
							<td>
							<?php $vb_col_dy=$record_details->dispense_day; ?>
							<?php $vb_no_house=$no_houses; ?>
							<?php $vb=round(($vb_col_dy/$vb_no_house*15)*100)?>
							<?= h($vb) ?></td>
							<td><?= $this->Html->link(__(''), ['action' => 'record_edit', $record_details->id],['style'=>'color:blue;','class'=>'fa fa-edit']) ?> </td>
							<td>Delete/Undo</td>
							<td>Permanent Delete</th>							
							</tbody>
							</table>
							</div>
							</br>
						<?php endforeach; ?>
						</div>
						 
					  