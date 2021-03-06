<div class="eventBlacklist form">
<?php echo $this->Form->create('EventBlacklist');?>
    <fieldset>
        <legend><?php echo __('Edit Event Blacklist Entries');?></legend>
        <p><?php echo __('List of all the event UUIDs that you wish to block from being entered.');?></p>
    <?php
        echo $this->Form->input('uuids', array(
                'type' => 'textarea',
                'label' => __('UUIDs'),
                'div' => 'input clear',
                'class' => 'input-xxlarge',
                'disabled' => 'disabled',
                'default' => $blockEntry['EventBlacklist']['event_uuid']
        ));
        echo $this->Form->input('event_orgc', array(
                'div' => 'input clear',
                'class' => 'input-xxlarge',
                'label' => __('Creating organisation'),
                'default' => $blockEntry['EventBlacklist']['event_orgc'],
        ));
        echo $this->Form->input('event_info', array(
                'type' => 'textarea',
                'div' => 'input clear',
                'class' => 'input-xxlarge',
                'label' => __('Event info'),
                'default' => $blockEntry['EventBlacklist']['event_info'],
        ));
        echo $this->Form->input('comment', array(
                'type' => 'textarea',
                'div' => 'input clear',
                'class' => 'input-xxlarge',
                'default' => $blockEntry['EventBlacklist']['comment'],
        ));
    ?>
    </fieldset>
<?php
echo $this->Form->button(__('Edit'), array('class' => 'btn btn-primary'));
echo $this->Form->end();
?>
</div>
<?php
    if ($isSiteAdmin) {
        echo $this->element('/genericElements/SideMenu/side_menu', array('menuList' => 'admin', 'menuItem' => 'eventBlacklistsAdd'));
    } else {
        echo $this->element('/genericElements/SideMenu/side_menu', array('menuList' => 'event-collection', 'menuItem' => 'eventBlacklistsAdd'));
    }
?>
