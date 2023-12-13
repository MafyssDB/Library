<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <ul class=" pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                <a href="{{ route('admin.main.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-home" style="color: #c3c6d1;"></i>
                    <p>
                        Главная
                    </p>
                </a>
                <a href="{{ route('admin.user.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-user" style="color: #c3c6d1;"></i>
                    <p>
                        Пользователи
                    </p>
                </a>
                <a href="{{ route('admin.books.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-book" style="color: #c3c6d1;"></i>
                    <p>
                        Книги
                    </p>
                </a>
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                    <i class="nav-icon fas fa-list" style="color: #c3c6d1;"></i>
                    <p>
                        Категории
                    </p>
                </a>
            </li>
        </ul>
    </div>

</aside>
