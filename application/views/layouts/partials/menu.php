    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
        <!--begin::Header Menu-->
        <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
            <!--begin::Header Nav-->
            <ul class="menu-nav">
                <li class="menu-item menu-item-rel <?php if($active == 'dashboard'): ?> menu-item-here <?php endif; ?>" data-menu-toggle="click" aria-haspopup="true">
                    <a href="<?php echo site_url('/') ?>" class="menu-link">
                        <span class="menu-text">Dashboard</span>
                        <i class="menu-arrow"></i>
                    </a>
                    </li>
                    <li class="menu-item menu-item-submenu menu-item-rel  menu-item-open-dropdown menu-item-hover" data-menu-toggle="click" aria-haspopup="true"><a href="<?php echo site_url('/')?>" class="menu-link">
                                                    <span class="menu-text">Menu</span>
                                                    </a>
                                                    <div class="menu-submenu menu-submenu-classic menu-submenu-left" data-hor-direction="menu-submenu-left">
                                                        <ul class="menu-subnav">
                                                                <li class="menu-item menu-item-submenu <?php if ($active == 'surat'): ?> menu-item-here <?php endif; ?>" data-menu-toggle="hover" aria-haspopup="true">
                                                                <a href="<?php echo site_url('registrasi/register_surat')?>" class="menu-link">
                                                                    <span class="menu-text">Register Surat</span>														
                                                                </a>
                                                                </li>
                                                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                                <a href="<?php echo site_url('registrasi/undangan_surat')?>" class="menu-link">
                                                                    <span class="menu-text">Surat Undangan</span>
                                                                </a>
                                                                </li>
                                                                <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                                                                <a href="<?php echo site_url('registrasi/tembusan_sekda')?>" class="menu-link">
                                                                    <span class="menu-text">Tembusan Sekda</span>
                                                            
                                                                </a>
                                                                </li>
                                                        </ul>
                                                    </div>
                    </li>
            </ul>
        </div>
    </div>
    
