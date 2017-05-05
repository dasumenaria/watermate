
<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Table
							</div>
							 
						</div>
						<div class="portlet-body" >
							<div class="table-toolbar">
							 
							</div>
							 <?php foreach ($villages as $village):?>
							 <div style="overflow-x:scroll">
							<table class="table table-striped table-bordered table-hover" id="sample_1" border="1">
							<thead>
							<tr style="background:#FFE735;">
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable"  data-set="#sample_1 .checkboxes" disabled />
								</th>
								<th>District</th>
								<th>Block</th>
								<th>Village Name</th>
								<th>Latitude</th>
								<th>Longitude</th>
								<th>Executive Engineer</th>
								<th>Assistant Engineer</th>
								<th>Junior Engineer</th>
								<th>Operator</th>
								<th>Department Site Serveyor</th>
								<th>Watermate Site Serveyor</th>
								<th>Monitoring Format</th>
								<th>Customer Care No</th>
								<th>Start Of Work</th>
								<th>Complete Of Work</th>
								<th>Land Allocation</th>
								<th>Water Connection</th>
								<th>Electrical Connection</th>
								<th>Foundation</th>
								<th>Flooring</th>
								<th>Shelter Erection</th>
								<th>Water Tank</th>
								<th>Plant Installation</th>
								<th>Commissioning</th>
								<th>M L A Costituency</th>
								<th>Gram Panchayat</th>
								<th>Population</th>
								<th>Houses No.</th>
								<th>Sim Number</th>
								<th>IFR</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
           
			
			
            <tr class="odd gradeX">
				<td><input type="checkbox" class="checkboxes" value="1" disabled /></td>
				<td><?php if(!empty($village->district)){ echo $village->district->district_name; }?></td>
                <td><?php if(!empty($village->block)){ echo $village->block->block_name; }?>
				 </td>
				<td><?= h($village->village_name) ?></td>
                <td><?= h($village->latitude) ?></td>
                <td><?= h($village->longitude) ?></td>
                <td><?= h($village->executive_engineer) ?></td>
                <td><?= h($village->assistant_engineer) ?></td>
                <td><?= h($village->junior_engineer) ?></td>
                <td><?= h($village->operator) ?></td>
				<td><?= h($village->department_site_serveyor) ?></td>
				<td><?= h($village->watermate_site_serveyor) ?></td>
				<td><?= h($village->monitoring_format) ?></td>
                <td><?= h($village->customer_care_no) ?></td>
                <td><?= h($village->start_of_work) ?></td>
                <td><?= h($village->complete_of_work) ?></td>
                <td><?= h($village->land_allocation) ?></td>
                <td><?= h($village->water_connection) ?></td>
                <td><?= h($village->electrical_connection) ?></td>
                <td><?= h($village->foundation) ?></td>
                <td><?= h($village->flooring) ?></td>
                <td><?= h($village->shelter_erection) ?></td>
                <td><?= h($village->water_tank) ?></td>
                <td><?= h($village->plant_installation) ?></td>
                <td><?= h($village->commissioning) ?></td>
                <td><?= h($village->mla_costituency) ?></td>
                <td><?= h($village->gram_panchayat) ?></td>
                <td><?= h($village->population) ?></td>
                <td><?= $this->Number->format($village->no_houses) ?></td>
                <td><?= h($village->sim_number) ?></td>
                 <td><?= h($village->ifr) ?></td>
                <td class="actions">
                  <?= $this->Html->link(__(''), ['action' => 'edit', $village->id],['style'=>'color:blue;','class'=>'fa fa-edit']) ?> 
				  &nbsp;&nbsp;
					<?= $this->Form->postLink(__(''), ['action' => 'delete', $village->id], ['class'=>'fa fa-trash-o','style'=>'color:red;','confirm' => __('Are you sure you want to delete # {0}?', $village->id)]) ?>	
					
                </td>
            </tr>
          
        </tbody>
							</table>
							</div>
							</br>
							  <?php endforeach; ?>
						</div>
						
					</div>
					