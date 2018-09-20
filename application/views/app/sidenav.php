<div class="row affix-row">
	<div class="col-sm-3 col-md-2 affix-sidebar">
		<div class="sidebar-nav">
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="visible-xs navbar-brand">Administration</span>
				</div>
				<div class="navbar-collapse collapse sidebar-navbar-collapse">
					<ul class="nav navbar-nav" id="sidenav01">
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed"> 
							<span class="glyphicon glyphicon-shopping-cart"></span>  Produits<span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_produit'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_produit'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-inbox"></span>  Articles <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo2" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_article');?>">Ajouter</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_article');?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-book"></span>  Fournisseurs <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo3" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_fournisseur'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_fournisseur'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo4" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-th-large"></span>  Magasins <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo4" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_magasin'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_magasin'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo7" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-list-alt"></span>  Demandes <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo7" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_demande'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_demande'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo6" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-th-list"></span>  Clients <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo6" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_client'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_client'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a data-toggle="collapse" data-target="#toggleDemo5" data-parent="#sidenav01" class="collapsed">
							<span class="glyphicon glyphicon-user"></span>  Utilisateurs <span class="caret pull-right"></span></a>
							<div class="collapse" id="toggleDemo5" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="<?php echo site_url('paoma/new_user'); ?>">Nouveau</a>
									</li>
									<li>
										<a href="<?php echo site_url('paoma/fetch_user'); ?>">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="<?php echo site_url('paoma/logout'); ?>">
							<span class="glyphicon glyphicon-off"></span>  Déconnexion</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
