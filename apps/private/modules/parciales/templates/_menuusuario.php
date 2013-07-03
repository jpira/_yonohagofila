<div class="header row-fluid">
                    <div class="logo"> <a href="<?php echo url_for('@homepage') ?>"><?php echo image_tag("/img/logo-ynhf-01.png", array('size' => '120x100')) ?></a> </div>
                    <div class="top_right">
                        <ul class="nav nav_menu">
                            <li class="dropdown"> <a class="dropdown-toggle administrator" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
                                    <div class="title"><span class="name">George</span><span class="subtitle">Future Buyer</span></div>
                                    <span class="icon"><?php echo image_tag("/img/thumbnail_george.jpg") ?></span></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                    <li><a href="<?php echo url_for('@logout') ?>"><i class=" icon-lock"></i>Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End top-right --> 
                </div>