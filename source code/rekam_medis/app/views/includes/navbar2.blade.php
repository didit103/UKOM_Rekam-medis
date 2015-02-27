<header>
	<nav class="navigation-bar default fixed-top">
		<nav class="navigation-bar-content">
			 <a href="/" class="element">Rekam Medis</sup></a>
             <span class="element-divider"></span>
			 <a class="pull-menu element place-right" href="#"></a>
                    <ul class="element-menu place-right">
                        <li><a href="{{ URL::to("pasien/listpasien") }}">Pasien</a></li>
                        <li><a href="{{ URL::to("dokter/index") }}">Dokter</a></li>
                        <li><a href="{{ URL::to("kunjungan/index") }}">Kunjungan</a></li>
                        <li><a href="{{ URL::to("obat") }}">Obat</a></li>
                        <li><a href="{{ URL::to("tindakan/index") }}">Tindakan</a></li>
                        <li><a href="{{ URL::to("laboratorium/index") }}">Laboratorium</a></li>
                        <li><a href="{{ URL::to("medis/index") }}">Rekam Medis</a></li>

					</ul>
                 
					
                        <span class="element-divider place-right"></span>
					</div>
		</nav>
	</nav>
	</header>