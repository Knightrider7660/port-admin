<!-- Left side column. contains the logo and sidebar -->
<aside style="background-color: #064630;" class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class=""><a href="{{action('MainController@index')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="navigation-divider"></li>

            <li class="{{ (Request::is('inner/about') ? 'active' : '') }}"><a href="{{action('Portfolio\AboutController@index')}}"><i class="fa fa-info"></i> <span>About</span></a></li>
            <li class="navigation-divider"></li>

            <li class="{{ (Request::is('inner/education') ? 'active' : '') }}"><a href="{{action('Education\EducationController@index')}}"><i class="fa fa-graduation-cap"></i> <span>Education</span></a></li>
            <li class="navigation-divider"></li>

            <li class="{{ (Request::is('inner/experience') ? 'active' : '') }}"><a href="{{action('Experience\ExperienceController@index')}}"><i class="fa fa-code-fork"></i> <span>Experience</span></a></li>
            <li class="navigation-divider"></li>

            <li class="{{ (Request::is('inner/skill') ? 'active' : '') }}"><a href="{{action('Skill\SkillController@index')}}"><i class="fa fa-line-chart"></i> <span>Skills</span></a></li>
            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-product-hunt"></i> <span>Services</span></a></li>
            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-cubes"></i> <span>Portfolio</span></a></li>
            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-user-circle"></i> <span>Testimonial</span></a></li>
            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-users"></i> <span>Clients</span></a></li>
            <li class="navigation-divider"></li>

            <li class=""><a href="#"><i class="fa fa-question"></i> <span>Blogs</span></a></li>
            <li class="navigation-divider"></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>