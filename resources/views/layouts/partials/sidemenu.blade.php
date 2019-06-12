<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('home')}}" class="nav-link {{ Route::getCurrentRoute()->getName() == 'home'?'active':''}} ">
                    <i class="fa fa-tachometer-alt red nav-icon"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link {{ Route::getCurrentRoute()->getName() == 'admin.clients.index'?'active':''}}">
                    <i class="fas fa-cogs blue nav-icon"></i>
                    <p>
                        Cadastros
                        <i class="right fa fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                        <li class="nav-item">
                                <a href="{{ route('admin.clients.index') }}" class="nav-link {{ Route::getCurrentRoute()->getName() == 'admin.clients.index'?'active':''}}">
                                    <i class="fas fa-user-alt green nav-icon"></i>
                                    <p>Cadastro de  Clientes</p>
                                </a>
                        </li>

                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('admin.tickets.index') }}" class="nav-link {{ Route::getCurrentRoute()->getName() == 'admin.tickets.index'?'active':''}}">
                    <i class="fas fa-cogs blue nav-icon"></i>
                    <p>
                        Chamados
                    </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                    <i class="fas fa-cogs blue nav-icon"></i>
                    <p>
                        Contas a Pagar
                    </p>
              </a>
            </li>


            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cogs blue nav-icon"></i>
                    <p>
                        Contas a Receber
                    </p>
                </a>
            </li>



            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-toolbox orange"></i>
                <p>
                    Configurações
                    <i class="right fa fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-address-card green nav-icon"></i>
                            <p>Geral</p>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                class="nav-link">
                <i class="fas fa-sign-out-alt red nav-icon"></i>
                <p>
                    Logout
                </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
            </li>

        </ul>
      </nav>
