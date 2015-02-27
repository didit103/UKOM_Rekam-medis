<header>
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			 <a href="/" class="element">Rekam Medis</sup></a>
             <span class="element-divider"></span>
			 <a class="pull-menu" href="#"></a>
                    <ul class="element-menu">
                        <li><a href="{{URL::to("home")}}">Home</a></li>
                        <li><a href="{{URL::to("about")}}">About</a></li> 
						<li><a href="{{ URL::to("help") }}">Help</a></li>
                        
					</ul>
                 
					<div class="no-tablet-portrait">
					<div class="element place-right">
                            <a class="dropdown-toggle" href="#">
                                <span class="icon-cog"></span>
                            </a>
                            <ul class="dropdown-menu place-right" data-role="dropdown">
                                <li><a href="{{URL::to("profil")}}">Ubah profil</a></li>
                                <li><a href="{{URL::to("login")}}">Keluar</a></li>
                            </ul>
                        </div>
                        <span class="element-divider place-right"></span>
					</div>
		</nav>
	</nav>
	</header>