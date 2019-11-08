<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href="/departements">
                        <i class="fe-airplay"></i>
                        <span class="badge badge-success badge-pill float-right">{{ $dep }}</span>
                        <span> Departement </span>
                    </a>
                </li>
                @if (Auth::user()->priorite == 0)
                    <li>
                        <a href="/matieres">
                            <i class="fe-airplay"></i>
                            <span class="badge badge-success badge-pill float-right">{{ $mat }}</span>
                            <span> Matiere </span>
                        </a>
                    </li>

                     <li>
                        <a href="/annees">
                            <i class="fe-airplay"></i>
                            <span class="badge badge-success badge-pill float-right">{{ $an }}</span>
                            <span> Annee Scolaire </span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->priorite > 0)
                    <li>
                        <a href="/etudiants">
                            <i class="fe-airplay"></i>
                            <span class="badge badge-success badge-pill float-right">{{ $etu }}</span>
                            <span> Etudiants </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);">
                            <i class="fe-airplay"></i>
                            <span> Emplois du temps </span>
                        </a>
                    </li>
                @endif
                    
                <li>
                    <a href="/mon-compte">
                        <i class="fe-airplay"></i>
                        <span> Mon compte </span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-airplay"></i>
                        <span> Deconnexion </span>
                    </a>
                </li>


            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->