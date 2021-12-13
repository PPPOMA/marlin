<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        </div>
                    </div>
                    <?php $arrays = [
                                [
                                    "header" => "My Tasks",
                                    "value" => "130 / 500",
                                    "tags_header" => "d-flex mt-2",
                                    "tags_value" => "d-inline-block ml-auto",
                                    "tags_progress" => "progress progress-sm mb-3",
                                    "tags_progress_bar" => "progress-bar bg-fusion-400",
                                    "role" => "progressbar",
                                    "style" => "width: 65%;",
                                    "aria_valuenow" => "65",
                                    "aria_valuemin" => "0",
                                    "aria_valuemax" => "100"
                                ],

                                [
                                    "header" => "Transfered",
                                    "value" => "440 TB",
                                    "tags_header" => "d-flex",
                                    "tags_value" => "d-inline-block ml-auto",
                                    "tags_progress" => "progress progress-sm mb-3",
                                    "tags_progress_bar" => "progress-bar bg-success-500",
                                    "role" => "progressbar",
                                    "style" => "width: 34%;",
                                    "aria_valuenow" => "34",
                                    "aria_valuemin" => "0",
                                    "aria_valuemax" => "100"
                                ],
                                
                                [
                                    "header" => "Bugs Squashed",
                                    "value" => "77%",
                                    "tags_header" => "d-flex",
                                    "tags_value" => "d-inline-block ml-auto",
                                    "tags_progress" => "progress progress-sm mb-3",
                                    "tags_progress_bar" => "progress-bar bg-info-400",
                                    "role" => "progressbar",
                                    "style" => "width: 77%;",
                                    "aria_valuenow" => "77",
                                    "aria_valuemin" => "0",
                                    "aria_valuemax" => "100"
                                ],

                                [
                                    "header" => "User Testing",
                                    "value" => "7 days",
                                    "tags_header" => "d-flex",
                                    "tags_value" => "d-inline-block ml-auto",
                                    "tags_progress" => "progress progress-sm mb-g",
                                    "tags_progress_bar" => "progress-bar bg-primary-300",
                                    "role" => "progressbar",
                                    "style" => "width: 84%;",
                                    "aria_valuenow" => "84",
                                    "aria_valuemin" => "0",
                                    "aria_valuemax" => "100"
                                ]
                    ];?>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <?php foreach ($arrays as $array):?>
                                <div class="<?=$array["tags_header"]?>">
                                    <?=$array["header"]?>
                                    <span class="<?=$array["tags_value"]?>"><?=$array["value"]?></span>
                                </div>
                                <div class="<?=$array["tags_progress"]?>">
                                    <div class="<?=$array["tags_progress_bar"]?>" role="<?=$array["role"]?>" style="<?=$array["style"]?>" aria-valuenow="<?=$array["aria_valuenow"]?>" aria-valuemin="<?=$array["aria_valuemin"]?>" aria-valuemax="<?=$array["aria_valuemax"]?>"></div>
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>
