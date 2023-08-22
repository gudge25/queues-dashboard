<?php
/**
 * base_side_overlay.php
 *
 * Author: pixelcave
 *
 * The side overlay of each page (Backend)
 *
 */
?>
<!-- Side Overlay-->
<aside id="side-overlay">
    <!-- Side Overlay Scroll Container -->
    <div id="side-overlay-scroll">
        <!-- Side Header -->
        <div class="side-header side-content">
            <!-- Layout API, functionality initialized in App() -> uiLayoutApi() -->
            <button class="btn btn-default pull-right" type="button" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-times"></i>
            </button>
            <span>
                <?php $one->get_avatar('10', '', 32); ?>
                <span class="font-w600 push-10-l"><?php $one->get_name('male'); ?></span>
            </span>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="side-content remove-padding-t">
            <!-- Notifications -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Recent Activity</h3>
                </div>
                <div class="block-content">
                    <!-- Activity List -->
                    <ul class="list list-activity">
                       
                    </ul>
                    <div class="text-center">
                        <small><a href="javascript:void(0)">Load More..</a></small>
                    </div>
                    <!-- END Activity List -->
                </div>
            </div>
            <!-- END Notifications -->

            <!-- Online Friends -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                        </li>
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Online Friends</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- Users Navigation -->
                    <ul class="nav-users">
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'female'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Copywriter</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'male'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Web Developer</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'female'); ?>
                                <i class="fa fa-circle text-success"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Web Designer</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'female'); ?>
                                <i class="fa fa-circle text-warning"></i> <?php $one->get_name('female'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Photographer</small></div>
                            </a>
                        </li>
                        <li>
                            <a href="base_pages_profile.php">
                                <?php $one->get_avatar('', 'male'); ?>
                                <i class="fa fa-circle text-warning"></i> <?php $one->get_name('male'); echo "\n"; ?>
                                <div class="font-w400 text-muted"><small>Graphic Designer</small></div>
                            </a>
                        </li>
                    </ul>
                    <!-- END Users Navigation -->
                </div>
            </div>
            <!-- END Online Friends -->

            <!-- Quick Settings -->
            <div class="block pull-r-l">
                <div class="block-header bg-gray-lighter">
                    <ul class="block-options">
                        <li>
                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                        </li>
                    </ul>
                    <h3 class="block-title">Quick Settings</h3>
                </div>
                <div class="block-content">
                    <!-- Quick Settings Form -->
                    <form class="form-bordered" action="index.php" method="post" onsubmit="return false;">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Online Status</div>
                                    <div class="font-s13 font-w400 text-muted">Show your status to all</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Auto Updates</div>
                                    <div class="font-s13 font-w400 text-muted">Keep up to date</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox"><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">Notifications</div>
                                    <div class="font-s13 font-w400 text-muted">Do you need them?</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-8">
                                    <div class="font-s13 font-w600">API Access</div>
                                    <div class="font-s13 font-w400 text-muted">Enable/Disable access</div>
                                </div>
                                <div class="col-xs-4 text-right">
                                    <label class="css-input switch switch-sm switch-primary push-10-t">
                                        <input type="checkbox" checked><span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Quick Settings Form -->
                </div>
            </div>
            <!-- END Quick Settings -->
        </div>
        <!-- END Side Content -->
    </div>
    <!-- END Side Overlay Scroll Container -->
</aside>
<!-- END Side Overlay -->
