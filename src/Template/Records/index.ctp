<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-file-excel-o "></i>Upload the CSV Format
							</div>
							 
						</div>
						
								<div class="portlet-body form">
									 <?= $this->Form->create($record,['type'=>'file']) ?>
										<div class="form-body">
										<div class="row">
							<div class="col-md-4">
											<div class="form-group" >
												<label for="exampleInputFile1">Please Insert Your File</label>
												<?php echo $this->Form->input('file',['label'=>false,'class'=>' ','type'=>'file','autocomplete'=>'off']);?>
												<!--<input type="file" id="exampleInputFile1">-->
												<p class="help-block">
													
												</p>
											</div>
								<div>
						<?= $this->Form->button($this->html->tag('i', '') . __('submit'),['class'=>'btn blue','name'=>'submit']); ?>
								
									 
								</div>
						<?= $this->Form->end() ?>	
							</div>
							<div class="col-md-6">
									<div>
										<?php echo $this->Html->link('Download Sample File','/files/watermate.csv',['','class'=> 'btn green' ,'style'=> 'color:#fff;','_full'=>true]); ?>
									</div>									
								</form>
							</div>
							
							</div>
						</div>
				</div>   				
			 