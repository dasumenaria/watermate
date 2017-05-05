
 
	<div class="portlet box blue">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-gift"></i>Edit Record
			</div>
			 
		</div>
		<div class="portlet-body form">
			<?= $this->Form->create($record) ?>
			  
			<?php 
			
			?>
			<div class="form-body">

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<!--select class="select2me form-control">-->
							<?= $this->Form->input('village_id',['empty'=>'Select Village','options' => $villages, 'hiddenField' =>false, 'class'=>'select2me form-control']) ?>
							<!--</select-->
						</div>
					</div>
						
					<div class="col-md-2">
						<div class="form-group">
							<label>Status Date Range</label>
							  <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
									<input type="date" class="form-control" name="from">
									<span class="input-group-addon">
									to </span>
									<input type="date" class="form-control" name="to">
								</div>
						</div> 
					</div>
					<div class="col-md-2">
						&nbsp;
					</div>	
					<div class="col-md-2">
						<div class="form-group" >
							<label>Lab Testing Date</label>
							<input class="form-control form-control-inline input-medium date-picker" size="16" type="date" value=""/>
						</div>	
					</div>
					<div class="col-md-1">
						&nbsp;
					</div>
					<div class="col-md-2" >
						<div class="form-group" >
							<label>&nbsp;</label>
							  <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="mm/dd/yyyy">
									<?= $this->Form->button($this->html->tag('i', '') . __(' Submit'),['class'=>'btn blue']); ?> 
								</div>
						</div>	
					</div> 
				</div>
				 </div>
			</div>	
			<?= $this->Form->end() ?>
		</div>
	</div>
 