<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">

        <ul class="list-unstyled components">
            <li>
                <a href=""><i class="fas fa-chart-line"></i> Dashboard</a>
            </li>
            <!-- @can('manage category')
            <li class="{{ trim(request()->is('category*') ? "active" : "") }}">
                <a href="#category_toggle" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-arrows-alt"></i> Category</a>
                <ul class="{{ trim(request()->is('category*') ? "collapse show" : "collapse") }} list-unstyled" id="category_toggle">
                    <li class="{{ trim(request()->is('category') ? "active" : "") }}">
                        <a href="{{ asset("/category/") }}"><i class="fas fa-plus"></i> Add</a>
                    </li>
                    <li class="{{ trim(request()->is('category/list') ? "active" : "") }}">
                        <a href="{{ asset("/category/list") }}"><i class="fas fa-list"></i> List</a>
                    </li>
                </ul>
            </li>
            @endcan -->

            <li>
                <a href=""><i class="fas fa-cog"></i> Settings</a>
            </li>
            
        </ul>

    </nav>
</div>

<script type="text/javascript">
    $(document).ready(function () {

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
