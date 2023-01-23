<?php

namespace Tejuino\Admin\Helpers;

class Plugins
{

    public static $plugins = [
        'animate' => [
            'css' => ['animate/animate.min.css'],
            'js' => []
        ],
        'axios' => [
            'css' => [],
            'js' => ['axios/axios.min.js']
        ],
        'bootstrap' => [
            'css' => ['bootstrap/4.0.0/css/bootstrap.min.css'],
            'js' => ['bootstrap/4.0.0/js/bootstrap.bundle.min.js']
        ],
        'calendar' => [
            'css' => ['fullcalendar/fullcalendar.min.css'],
            'js' => [
                'fullcalendar/lib/moment.min.js',
                'fullcalendar/fullcalendar.min.js'
            ]
        ],
        'chartjs' => [
            'css' => [],
            'js' => ['chartjs/chartjs.min.js']
        ],
        'codemirror' => [
            'css' => [
                'codemirror/codemirror.css',
                'codemirror/themes/one-dark.css'
            ],
            'js' => [
                'codemirror/codemirror.js',
                'codemirror/modes/javascript.js',
                'codemirror/modes/css.js',
                //'codemirror/modes/php.js',
                //'codemirror/modes/htmlmixed.js',
                'codemirror/modes/sql.js'
            ]
        ],
        'datatable' => [
            'css' => [
                'DataTables/media/css/dataTables.bootstrap.min.css',
                'DataTables/extensions/Responsive/css/responsive.bootstrap.min.css'
            ],
            'js' => [
                'DataTables/media/js/jquery.dataTables.js',
                'DataTables/media/js/dataTables.bootstrap.min.js',
                'DataTables/extensions/Responsive/js/dataTables.responsive.min.js'
            ]
        ],
        'datatable_excel' => [
            'css' => [
                'DataTables/extensions/Buttons/css/buttons.bootstrap.min.css'
            ],
            'js' => [
                'DataTables/extensions/Buttons/js/dataTables.buttons.min.js',
                'DataTables/extensions/Buttons/js/buttons.bootstrap.min.js',
                'DataTables/extensions/Buttons/js/buttons.flash.min.js',
                'DataTables/extensions/Buttons/js/jszip.min.js',
                'DataTables/extensions/Buttons/js/pdfmake.min.js',
                'DataTables/extensions/Buttons/js/vfs_fonts.min.js',
                'DataTables/extensions/Buttons/js/buttons.html5.min.js',
                'DataTables/extensions/Buttons/js/buttons.print.min.js'
            ]
        ],
        'datatable_reorder' => [
            'css' => [
                'DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css'
            ],
            'js' => [
                'DataTables/extensions/RowReorder/js/dataTables.rowReorder.js'
            ]
        ],
        'datepicker' => [
            'css' => [
                'bootstrap-datepicker/css/bootstrap-datepicker.min.css',
                'bootstrap-datepicker/css/bootstrap-datepicker3.min.css'
            ],
            'js' => ['bootstrap-datepicker/js/bootstrap-datepicker.min.js']
        ],
        'daterangepicker' => [
            'css' => ['bootstrap-daterangepicker/daterangepicker.css'],
            'js' => [
                'bootstrap-daterangepicker/moment.min.js',
                'bootstrap-daterangepicker/daterangepicker.js'
            ]
        ],
        'devicon' => [
            'css' => ['devicon/devicon.css'],
            'js' => []
        ],
        'editor' => [
            'css' => ['bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.min.css'],
            'js' => ['bootstrap-wysihtml5/dist/bootstrap3-wysihtml5.all.min.js']
        ],
        'font-awesome' => [
            'css' => ['font-awesome/5.0/css/fontawesome-all.min.css'],
            'js' => []
        ],
        'gritter' => [
            'css' => ['gritter/css/jquery.gritter.css'],
            'js' => ['gritter/js/jquery.gritter.min.js']
        ],
        'highlight' => [
            'css' => ['highlight/atom-one-dark.css'],
            'js' => ['highlight/highlight.pack.js']
        ],
        'ionicons' => [
            'css' => ['ionicons/css/ionicons.min.css'],
            'js' => []
        ],
        'jquery' => [
            'css' => [],
            'js' => ['jquery/jquery-3.3.1.min.js']
        ],
        'jquery-ui' => [
            'css' => ['jquery-ui/jquery-ui.min.css'],
            'js' => ['jquery-ui/jquery-ui.min.js']
        ],
        'js-cookie' => [
            'css' => [],
            'js' => ['js-cookie/js.cookie.js']
        ],
        'lightbox' => [
            'css' => ['lightbox/css/lightbox.min.css'],
            'js' => ['lightbox/js/lightbox.min.js']
        ],
        'line-icons' => [
            'css' => ['simple-line-icons/css/simple-line-icons.css'],
            'js' => []
        ],
        'moment' => [
            'css' => [],
            'js' => ['moment/moment.min.js']
        ],
        'nvd3' => [
            'css' => ['nvd3/build/nv.d3.css'],
            'js' => ['nvd3/build/nv.d3.js']
        ],
        'parsley' => [
            'css' => [],
            'js' => ['parsley/parsley.min.js']
        ],
        'password' => [
            'css' => ['password-indicator/css/password-indicator.css'],
            'js' => ['password-indicator/js/password-indicator.js']
        ],
        'select2' => [
            'css' => ['select2/css/select2.min.css'],
            'js' => ['select2/js/select2.min.js'],
        ],
        'selectpicker' => [
            'css' => ['bootstrap-select/bootstrap-select.min.css'],
            'js' => ['bootstrap-select/bootstrap-select.min.js']
        ],
        'slim-scroll' => [
            'css' => [],
            'js' => ['slimscroll/jquery.slimscroll.min.js']
        ],
        'superbox' => [
            'css' => ['superbox/css/superbox.min.css'],
            'js' => ['superbox/js/jquery.superbox.min.js']
        ],
        'switchery' => [
            'css' => [],
            'js' => ['switchery/switchery.js']
        ],
        'swal' => [
            'css' => [],
            'js' => ['bootstrap-sweetalert/sweetalert.min.js']
        ],
        'tagit' => [
            'css' => [
                'tagit/tagit.css'
            ],
            'js' => [
                'tagit/tagit.min.js'
            ]
        ],
        'timepicker' => [
            'css' => [
                'bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css',
                'bootstrap-timepicker/css/bootstrap-timepicker.min.css'
            ],
            'js' => [
                'bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js',
                'bootstrap-timepicker/js/bootstrap-timepicker.min.js'
            ]
        ],
        'uploader' => [
            'css' => ['dropzone/dropzone.min.css'],
            'js' => ['dropzone/dropzone.min.js']
        ],
        'vue' => [
            'css' => [],
            'js' => ['vue/vue.js']
        ]
    ];

    public static function css(...$plugins_arrays)
    {
        static::printAssets($plugins_arrays, 'css');
    }

    public static function js(...$plugins_arrays)
    {
        static::printAssets($plugins_arrays, 'js');
    }

    private static function printAssets($plugins_arrays, $type)
    {
        foreach ($plugins_arrays as $plugins_array)
        {
            foreach ($plugins_array as $plugin)
            {
                foreach (self::$plugins[$plugin][$type] as $file)
                {
                    if($type == 'css')
                    {
                        echo '<link href="/admin_assets/plugins/' . $file . '" rel="stylesheet" />';
                    }
                    else
                    {
                        echo '<script src="/admin_assets/plugins/' . $file . '"></script>';
                    }
                }
            }
        }
    }

}
