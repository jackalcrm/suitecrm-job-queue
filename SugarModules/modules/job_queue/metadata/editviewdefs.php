<?php

$module_name = 'job_queue';
$viewdefs [$module_name] =
    [
        'EditView' =>
            [
                'templateMeta' =>
                    [
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
                                                'name'  => 'status',
                                                'label' => 'LBL_STATUS',
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
                                                'name'  => 'data',
                                                'label' => 'LBL_DATA',
                                            ],
                                    ],
                                3 =>
                                    [
                                        0 => 'description',
                                    ],
                            ],
                    ],
            ],
    ];;
?>
