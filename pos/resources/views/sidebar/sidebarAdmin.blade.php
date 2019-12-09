<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-text mx-3">Sistema POS</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li @click="menu=0" class="nav-item active">
    <a class="nav-link" >
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Ventas
  </div>

  <li @click="menu=1" class="nav-item active">
    <a class="nav-link" >
      <i class="fas fa-fw fa-money-bill-alt"></i>
      <span>Sistema de Ventas</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Administración
  </div>
  
  <li @click="menu=2" class="nav-item active">
    <a class="nav-link" >
      <i class="fas fa-fw fa-cart-plus"></i>
      <span>Artículos</span></a>
  </li>

  <li @click="menu=3" class="nav-item active">
    <a class="nav-link" >
      <i class="fas fa-fw fa-user"></i>
      <span>Clientes</span></a>
  </li>

  <li @click="menu=4" class="nav-item active">
    <a class="nav-link" >
      <i class="fas fa-fw fa-parachute-box"></i>
      <span>Proveedores</span></a>
  </li>
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>