<?php
$module_name = 'job_queue';
$searchdefs [$module_name] =
    array (
        'layout' =>
            array (
                'basic_search' =>
                    array (
                        'name' =>
                            array (
                                'name' => 'name',
                                'default' => true,
                                'width' => '10%',
                            ),
                        'status' =>
                            array (
                                'type' => 'enum',
                                'label' => 'LBL_STATUS',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'status',
                            ),
                        'resolution' =>
                            array (
                                'type' => 'enum',
                                'label' => 'LBL_RESOLUTION',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'resolution',
                            ),
                        'target' =>
                            array (
                                'type' => 'varchar',
                                'label' => 'LBL_TARGET_ACTION',
                                'width' => '10%',
                                'default' => true,
                                'name' => 'target',
                            ),
                        'favorites_only' =>
                            array (
                                'name' => 'favorites_only',
                                'label' => 'LBL_FAVORITES_FILTER',
                                'type' => 'bool',
                                'default' => true,
                                'width' => '10%',
                            ),
                    ),
                'advanced_search' =>
                    array (
                        0 => 'name',
                        1 =>
                            array (
                                'name' => 'assigned_user_id',
                                'label' => 'LBL_ASSIGNED_TO',
                                'type' => 'enum',
                                'function' =>
                                    array (
                                        'name' => 'get_user_array',
                                        'params' =>
                                            array (
                                                0 => false,
                                            ),
                                    ),
                            ),
                        2 =>
                            array (
                                'name' => 'favorites_only',
                                'label' => 'LBL_FAVORITES_FILTER',
                                'type' => 'bool',
                            ),
                    ),
            ),
        'templateMeta' =>
            array (
                'maxColumns' => '3',
                'maxColumnsBasic' => '4',
                'widths' =>
                    array (
                        'label' => '10',
                        'field' => '30',
                    ),
            ),
    );
;
?>
