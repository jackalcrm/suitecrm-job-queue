<?php

$module_name = 'job_queue';
$viewdefs [$module_name] =
    [
        'DetailView' =>
            [
                'templateMeta' =>
                    [
                        'form'       =>
                            [
                                'buttons' =>
                                    [
                                        0 => 'EDIT',
                                        1 => 'DUPLICATE',
                                        2 => 'DELETE',
                                        3 => 'FIND_DUPLICATES',
                                    ],
                            ],
                        'maxColumns' => '2',
                        'widths'     =>
                            [
                                0 =>
                                    [
                                        'label' => '10',
                                        'field' => '30',
                                    ],
                                1 =>
                                    [
                                        'label' => '10',
                                        'field' => '30',
                                    ],
                            ],
                        'useTabs'    => false,
                        'tabDefs'    =>
                            [
                                'DEFAULT' =>
                                    [
                                        'newTab'       => false,
                                        'panelDefault' => 'expanded',
                                    ],
                            ],
                    ],
                'panels'       =>
                    [
                        'default' =>
                            [
                                0 =>
                                    [
                                        0 => 'name',
                                        1 => 'assigned_user_name',
                                    ],
                                1 =>
                                    [
                                        0 =>
                                            [
                                                'name'  => 'data',
                                                'label' => 'LBL_DATA',
                                            ],
                                        1 =>
                                            [
                                                'name'  => 'resolution',
                                                'label' => 'LBL_RESOLUTION',
                                            ],
                                    ],
                                2 =>
                                    [
                                        0 =>
                                            [
                                                'name'  => 'execute_time',
                                                'label' => 'LBL_EXECUTE_TIME',
                                            ],
                                        1 =>
                                            [
                                                'name'  => 'target',
                                                'label' => 'LBL_TARGET_ACTION',
                                            ],
                                    ],
                                3 =>
                                    [
                                        0 =>
                                            [
                                                'name'       => 'date_entered',
                                                'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
                                                'label'      => 'LBL_DATE_ENTERED',
                                            ],
                                        1 =>
                                            [
                                                'name'       => 'date_modified',
                                                'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
                                                'label'      => 'LBL_DATE_MODIFIED',
                                            ],
                                    ],
                                4 =>
                                    [
                                        0 =>
                                            [
                                                'name'  => 'message',
                                                'label' => 'LBL_MESSAGE',
                                            ],
                                    ],
                            ],
                    ],
            ],
    ];;
?>
