<?php
$module_name = 'job_queue';
$listViewDefs [$module_name] =
    array (
        'NAME' =>
            array (
                'width' => '32%',
                'label' => 'LBL_NAME',
                'default' => true,
                'link' => true,
            ),
        'STATUS' =>
            array (
                'type' => 'enum',
                'label' => 'LBL_STATUS',
                'width' => '10%',
                'default' => true,
            ),
        'RESOLUTION' =>
            array (
                'type' => 'enum',
                'label' => 'LBL_RESOLUTION',
                'width' => '10%',
                'default' => true,
            ),
        'EXECUTE_TIME' =>
            array (
                'type' => 'datetime',
                'label' => 'LBL_EXECUTE_TIME',
                'width' => '10%',
                'default' => true,
            ),
        'TARGET' =>
            array (
                'type' => 'varchar',
                'label' => 'LBL_TARGET_ACTION',
                'width' => '10%',
                'default' => true,
            ),
        'MESSAGE' =>
            array (
                'type' => 'text',
                'label' => 'LBL_MESSAGE',
                'sortable' => false,
                'width' => '10%',
                'default' => true,
            ),
    );
;
?>
