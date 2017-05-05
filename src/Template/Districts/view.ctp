<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit District'), ['action' => 'edit', $district->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete District'), ['action' => 'delete', $district->id], ['confirm' => __('Are you sure you want to delete # {0}?', $district->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Villages'), ['controller' => 'Villages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Village'), ['controller' => 'Villages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="districts view large-9 medium-8 columns content">
    <h3><?= h($district->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('District Name') ?></th>
            <td><?= h($district->district_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($district->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District Flag') ?></th>
            <td><?= $this->Number->format($district->district_flag) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Blocks') ?></h4>
        <?php if (!empty($district->blocks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Block Name') ?></th>
                <th scope="col"><?= __('Block Flag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($district->blocks as $blocks): ?>
            <tr>
                <td><?= h($blocks->id) ?></td>
                <td><?= h($blocks->district_id) ?></td>
                <td><?= h($blocks->block_name) ?></td>
                <td><?= h($blocks->block_flag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Blocks', 'action' => 'view', $blocks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Blocks', 'action' => 'edit', $blocks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Blocks', 'action' => 'delete', $blocks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blocks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Records') ?></h4>
        <?php if (!empty($district->records)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Village Id') ?></th>
                <th scope="col"><?= __('Atmcard Issues') ?></th>
                <th scope="col"><?= __('Date Lab Testing') ?></th>
                <th scope="col"><?= __('Rwq Tds') ?></th>
                <th scope="col"><?= __('Rwq Fl') ?></th>
                <th scope="col"><?= __('Rwq No') ?></th>
                <th scope="col"><?= __('Twq Tds') ?></th>
                <th scope="col"><?= __('Twq Fl') ?></th>
                <th scope="col"><?= __('Twq No') ?></th>
                <th scope="col"><?= __('Sim Number') ?></th>
                <th scope="col"><?= __('Status Date') ?></th>
                <th scope="col"><?= __('Status Time') ?></th>
                <th scope="col"><?= __('Status Plant') ?></th>
                <th scope="col"><?= __('Last Opr Date') ?></th>
                <th scope="col"><?= __('Reason Nonoperational') ?></th>
                <th scope="col"><?= __('Treated Tds') ?></th>
                <th scope="col"><?= __('Ifr') ?></th>
                <th scope="col"><?= __('Pfr') ?></th>
                <th scope="col"><?= __('Recovery') ?></th>
                <th scope="col"><?= __('Operational Day') ?></th>
                <th scope="col"><?= __('Operational Date') ?></th>
                <th scope="col"><?= __('Dispense Day') ?></th>
                <th scope="col"><?= __('Dispense Date') ?></th>
                <th scope="col"><?= __('Penetration Atm') ?></th>
                <th scope="col"><?= __('Penetration Volume') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Block Id') ?></th>
                <th scope="col"><?= __('Record Flag') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($district->records as $records): ?>
            <tr>
                <td><?= h($records->id) ?></td>
                <td><?= h($records->village_id) ?></td>
                <td><?= h($records->atmcard_issues) ?></td>
                <td><?= h($records->date_lab_testing) ?></td>
                <td><?= h($records->rwq_tds) ?></td>
                <td><?= h($records->rwq_fl) ?></td>
                <td><?= h($records->rwq_no) ?></td>
                <td><?= h($records->twq_tds) ?></td>
                <td><?= h($records->twq_fl) ?></td>
                <td><?= h($records->twq_no) ?></td>
                <td><?= h($records->sim_number) ?></td>
                <td><?= h($records->status_date) ?></td>
                <td><?= h($records->status_time) ?></td>
                <td><?= h($records->status_plant) ?></td>
                <td><?= h($records->last_opr_date) ?></td>
                <td><?= h($records->reason_nonoperational) ?></td>
                <td><?= h($records->treated_tds) ?></td>
                <td><?= h($records->ifr) ?></td>
                <td><?= h($records->pfr) ?></td>
                <td><?= h($records->recovery) ?></td>
                <td><?= h($records->operational_day) ?></td>
                <td><?= h($records->operational_date) ?></td>
                <td><?= h($records->dispense_day) ?></td>
                <td><?= h($records->dispense_date) ?></td>
                <td><?= h($records->penetration_atm) ?></td>
                <td><?= h($records->penetration_volume) ?></td>
                <td><?= h($records->total) ?></td>
                <td><?= h($records->district_id) ?></td>
                <td><?= h($records->block_id) ?></td>
                <td><?= h($records->record_flag) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Records', 'action' => 'view', $records->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Records', 'action' => 'edit', $records->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Records', 'action' => 'delete', $records->id], ['confirm' => __('Are you sure you want to delete # {0}?', $records->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Villages') ?></h4>
        <?php if (!empty($district->villages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('District Id') ?></th>
                <th scope="col"><?= __('Block Id') ?></th>
                <th scope="col"><?= __('Village Name') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Executive Engineer') ?></th>
                <th scope="col"><?= __('Assistant Engineer') ?></th>
                <th scope="col"><?= __('Junior Engineer') ?></th>
                <th scope="col"><?= __('Operator') ?></th>
                <th scope="col"><?= __('Customer Care No') ?></th>
                <th scope="col"><?= __('Department Site Serveyor') ?></th>
                <th scope="col"><?= __('Watermate Site Serveyor') ?></th>
                <th scope="col"><?= __('Start Of Work') ?></th>
                <th scope="col"><?= __('Complete Of Work') ?></th>
                <th scope="col"><?= __('Monitoring Format') ?></th>
                <th scope="col"><?= __('Land Allocation') ?></th>
                <th scope="col"><?= __('Water Connection') ?></th>
                <th scope="col"><?= __('Electrical Connection') ?></th>
                <th scope="col"><?= __('Foundation') ?></th>
                <th scope="col"><?= __('Flooring') ?></th>
                <th scope="col"><?= __('Shelter Erection') ?></th>
                <th scope="col"><?= __('Water Tank') ?></th>
                <th scope="col"><?= __('Plant Installation') ?></th>
                <th scope="col"><?= __('Commissioning') ?></th>
                <th scope="col"><?= __('Mla Costituency') ?></th>
                <th scope="col"><?= __('Gram Panchayat') ?></th>
                <th scope="col"><?= __('Population') ?></th>
                <th scope="col"><?= __('No Houses') ?></th>
                <th scope="col"><?= __('Sim Number') ?></th>
                <th scope="col"><?= __('Village Flag') ?></th>
                <th scope="col"><?= __('Ifr') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($district->villages as $villages): ?>
            <tr>
                <td><?= h($villages->id) ?></td>
                <td><?= h($villages->district_id) ?></td>
                <td><?= h($villages->block_id) ?></td>
                <td><?= h($villages->village_name) ?></td>
                <td><?= h($villages->latitude) ?></td>
                <td><?= h($villages->longitude) ?></td>
                <td><?= h($villages->executive_engineer) ?></td>
                <td><?= h($villages->assistant_engineer) ?></td>
                <td><?= h($villages->junior_engineer) ?></td>
                <td><?= h($villages->operator) ?></td>
                <td><?= h($villages->customer_care_no) ?></td>
                <td><?= h($villages->department_site_serveyor) ?></td>
                <td><?= h($villages->watermate_site_serveyor) ?></td>
                <td><?= h($villages->start_of_work) ?></td>
                <td><?= h($villages->complete_of_work) ?></td>
                <td><?= h($villages->monitoring_format) ?></td>
                <td><?= h($villages->land_allocation) ?></td>
                <td><?= h($villages->water_connection) ?></td>
                <td><?= h($villages->electrical_connection) ?></td>
                <td><?= h($villages->foundation) ?></td>
                <td><?= h($villages->flooring) ?></td>
                <td><?= h($villages->shelter_erection) ?></td>
                <td><?= h($villages->water_tank) ?></td>
                <td><?= h($villages->plant_installation) ?></td>
                <td><?= h($villages->commissioning) ?></td>
                <td><?= h($villages->mla_costituency) ?></td>
                <td><?= h($villages->gram_panchayat) ?></td>
                <td><?= h($villages->population) ?></td>
                <td><?= h($villages->no_houses) ?></td>
                <td><?= h($villages->sim_number) ?></td>
                <td><?= h($villages->village_flag) ?></td>
                <td><?= h($villages->ifr) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Villages', 'action' => 'view', $villages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Villages', 'action' => 'edit', $villages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Villages', 'action' => 'delete', $villages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $villages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
