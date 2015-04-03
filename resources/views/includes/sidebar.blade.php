<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <hr/>
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Busca..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">PESSOAS</li>
            <li><a href="#"><i class="fa fa-male"></i>Clientes</a></li>
            <li><a href="#"><i class="fa fa-male"></i>Funcionários</a></li>

            <li class="header">CADASTROS</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Evento</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa"></i> Evento</a></li>
                    <li><a href="#"><i class="fa"></i> Nação</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span>Produtos</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa"></i> Unidades</a></li>
                    <li><a href="#"><i class="fa"></i> Produtos</a></li>
                    <li><a href="#"><i class="fa"></i> Prato</a></li>
                    <li><a href="#"><i class="fa"></i> Cardápio</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>