<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">


                <li>
                    <a href="/departements">
                        <span class="badge badge-success badge-pill float-right">{{ Auth::user()->departement->personnels->count() }}</span>
                        <span> Departement </span>
                    </a>
                </li>
                @if (Auth::user()->priorite == 0)
                    <li>
                        <a href="/matieres">
                            <span class="badge badge-success badge-pill float-right">{{ $mat }}</span>
                            <span> Matiere </span>
                        </a>
                    </li>

                     <li>
                        <a href="/annees">
                            <span class="badge badge-success badge-pill float-right">{{ $an }}</span>
                            <span> Annee Scolaire </span>
                        </a>
                    </li>
                @endif

                @if (Auth::user()->priorite > 0)
                    <li>
                        <a href="/etudiants">
                            <span class="badge badge-success badge-pill float-right">{{ Auth::user()->departement->inscrires->count() }}</span>
                            <span> Etudiants </span>
                        </a>
                    </li>
                    <li>
                       <a href="/salles">
                           <span class="badge badge-success badge-pill float-right">{{ $sal }}</span>
                           <span> Salle de classe </span>
                       </a>
                   </li>
                    <li>
                        <a href="/emplois">
                            <span> Emplois du temps </span>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="/mon-compte">
                        <span> Mon compte </span>
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
