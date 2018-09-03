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
						<li class="active">
							<a href="" data-toggle="collapse" data-target="#toggleDemo0" data-parent="#sidenav01" class="collapsed"> <h4> Administration
							<br>
						</li>
						<li>
							<a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed"> <span class="glyphicon glyphicon-shopping-cart
							"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Produits <span class="caret pull-right"></span> </a>
							<div class="collapse" id="toggleDemo" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="#">Nouveau</a>
									</li>
									<li>
										<a href="#">Sortie</a>
									</li>
									<li>
										<a href="#">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" data-toggle="collapse" data-target="#toggleDemo2" data-parent="#sidenav01" class="collapsed"> <span class="glyphicon glyphicon-inbox"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Articles <span class="caret pull-right"></span> </a>
							<div class="collapse" id="toggleDemo2" style="height: 0px;">
								<ul class="nav nav-list">
									<li>
										<a href="#">Nouveau</a>
									</li>
									<li>
										<a href="#">Sortie</a>
									</li>
									<li>
										<a href="#">Liste</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#" data-toggle="collapse" data-target="#toggleDemo3" data-parent="#sidenav01" class="collapsed"> <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Utilisateurs <span class="caret pull-right"></span> </a>
							<div class="collapse" id="toggleDemo3" style="height: 0px;">
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
							<a href="<?php echo site_url('paoma/logout'); ?>"><span class="glyphicon glyphicon-off"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Déconnexion</a>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
