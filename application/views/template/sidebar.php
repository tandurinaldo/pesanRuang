 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-school"></i>
         </div>
         <div class="sidebar-brand-text mx-3">Sewa Ruang</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider">
     <!-- QUERY MENU -->
     <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT `user_menu`.`id`, `menu`
        FROM `user_menu` JOIN `user_acces_menu` 
        ON `user_menu`.`id` = `user_acces_menu`.`menu_id`
        WHERE `user_acces_menu`.`role_id` = '$role_id'
        ORDER BY `user_acces_menu`.`menu_id` ASC
        ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>
     <!-- Heading -->
     <?php foreach ($menu as $m) : ?>
         <div class="sidebar-heading">
             <?= $m['menu']; ?>
         </div>

         <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM `user_sub_menu` JOIN user_menu 
                        ON user_sub_menu.menu_id = user_menu.id 
                        WHERE user_sub_menu.menu_id = $menuId
                       ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

         <?php foreach ($subMenu as $sm) : ?>
             <?php if ($tittle == $sm['tittle']) : ?>
                 <li class="nav-item active">
                 <?php else : ?>
                 <li class="nav-item">
                 <?php endif; ?>
                 <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                     <i class="<?= $sm['icon']; ?>"></i>
                     <span><?= $sm['tittle']; ?></span></a>
                 </li>

             <?php endforeach; ?>
             <hr class="sidebar-divider">
         <?php endforeach; ?>

         <li class="nav-item">
             <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
                 <i class="fas fa-fw fa-sign-out-alt"></i>
                 <span><b> Keluar</b></span></a>
         </li>
         <!-- Divider -->
         <hr class="sidebar-divider d-none d-md-block">

         <!-- Sidebar Toggler (Sidebar) -->
         <div class="text-center d-none d-md-inline">
             <button class="rounded-circle border-0" id="sidebarToggle"></button>
         </div>

 </ul>

 <!-- End of Sidebar -->