<?php
function defaultMenu () {
	echo 
		'<header>
			<a href="/index.php"><span class="fa fa-heartbeat fa-2x"></span><span>StartupFinder</span></a>
			<div id="search-box">
				<form action="/list.php" id="search-form" method="get" target="_top">
					<input id="search-text" name="q" placeholder="Search by title" type="text" autocomplete=off/>
					<button id="search-button" type="submit">                     
						<span class="fa fa-search"></span>
					</button>
				</form>
			</div>
			<div id="account">
				<ul>
					<li><span class="fa fa-bars"></span>Menu</li>
					<li><a href="/register.php"><span class="fa fa-plus"></span>Create an Account</a></li>
					<li><a href="/list.php"><span class="fa fa-search"></span>Browse Start-Ups</a></li>
					<li><a href="/apitest.php"><span class="fa fa-question"></span>Test API</a></li>
					<li><a href="/login.php"><span class="fa fa-sign-in"></span>Login</a></li>
				</ul>
			</div>
		</header>';
}
function userMenu() {
	echo 
		'<header>
			<a href="/index.php"><span class="fa fa-heartbeat fa-2x"></span><span>StartupFinder</span></a>
			<div id="search-box">
				<form action="/list.php" id="search-form" method="get" target="_top">
					<input id="search-text" name="q" placeholder="Search by title" type="text" autocomplete=off/>
					<button id="search-button" type="submit">                     
						<span class="fa fa-search"></span>
					</button>
				</form>
			</div>
			<div id="account">
				<ul>
					<li><span class="fa fa-bars"></span>Menu</li>
					<li><a href="/newstartup.php"><span class="fa fa-plus"></span>New Start-Up</a></li>
					<li><a href="/list.php"><span class="fa fa-search"></span>Browse Start-Ups</a></li>
					<li><a href="/profile.php"><span class="fa fa-cogs"></span>My Account</a></li>
					<li><a href="/apitest.php"><span class="fa fa-question"></span>Test API</a></li>
					<li><a href="/login.php"><span class="fa fa-sign-out"></span>Logout</a></li>
				</ul>
			</div>
		</header>';
}
?>