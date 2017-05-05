<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Village'), ['action' => 'edit', $village->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Village'), ['action' => 'delete', $village->id], ['confirm' => __('Are you sure you want to delete # {0}?', $village->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Villages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Village'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Districts'), ['controller' => 'Districts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New District'), ['controller' => 'Districts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blocks'), ['controller' => 'Blocks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Block'), ['controller' => 'Blocks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Records'), ['controller' => 'Records', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Record'), ['controller' => 'Records', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="villages view large-9 medium-8 columns content">
    <h3><?= h($village->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= $village->has('district') ? $this->Html->link($village->district->id, ['controller' => 'Districts', 'action' => 'view', $village->district->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Block') ?></th>
            <td><?= $village->has('block') ? $this->Html->link($village->block->id, ['controller' => 'Blocks', 'action' => 'view', $village->block->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Village Name') ?></th>
            <td><?= h($village->village_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= h($village->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= h($village->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Executive Engineer') ?></th>
            <td><?= h($village->executive_engineer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assistant Engineer') ?></th>
            <td><?= h($village->assistant_engineer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Junior Engineer') ?></th>
            <td><?= h($village->junior_engineer) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operator') ?></th>
            <td><?= h($village->operator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Care No') ?></th>
            <td><?= h($village->customer_care_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Land Allocation') ?></th>
            <td><?= h($village->land_allocation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mla Costituency') ?></th>
            <td><?= h($village->mla_costituency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gram Panchayat') ?></th>
            <td><?= h($village->gram_panchayat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Population') ?></th>
            <td><?= h($village->population) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sim Number') ?></th>
            <td><?= h($village->sim_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ifr') ?></th>
            <td><?= h($village->ifr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($village->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('No Houses') ?></th>
            <td><?= $this->Number->format($village->no_houses) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Village Flag') ?></th>
            <td><?= $this->Number->format($village->village_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Of Work') ?></th>
            <td><?= h($village->start_of_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complete Of Work') ?></th>
            <td><?= h($village->complete_of_work) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water Connection') ?></th>
            <td><?= h($village->water_connection) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Electrical Connection') ?></th>
            <td><?= h($village->electrical_connection) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Foundation') ?></th>
            <td><?= h($village->foundation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Flooring') ?></th>
            <td><?= h($village->flooring) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shelter Erection') ?></th>
            <td><?= h($village->shelter_erection) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Water Tank') ?></th>
            <td><?= h($village->water_tank) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Plant Installation') ?></th>
            <td><?= h($village->plant_installation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Commissioning') ?></th>
            <td><?= h($village->commissioning) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Department Site Serveyor') ?></h4>
        <?= $this->Text->autoParagraph(h($village->department_site_serveyor)); ?>
    </div>
    <div class="row">
        <h4><?= __('Watermate Site Serveyor') ?></h4>
        <?= $this->Text->autoParagraph(h($village->watermate_site_serveyor)); ?>
    </div>
    <div class="row">
        <h4><?= __('Monitoring Format') ?></h4>
        <?= $this->Text->autoParagraph(h($village->monitoring_format)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Records') ?></h4>
        <?php if (!empty($village->records)): ?>
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
            <?php foreach ($village->records as $records): ?>
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
</div>
