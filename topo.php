<html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="assets/css/demo.css" />
		<link rel="stylesheet" href="assets/css/jquery.dmenu.css" />
		<style>
			.dm-menu
			{
				--dm-bg: #fff;
				--dm-logo-width: 80px;
				--dm-item-hover-bg: #f3f3f3;
				--dm-menu-height: 100px;
			}
			.dm-menu > ul > li
			{
				border-right: 1px solid #eee;
			}
			.dm-menu > ul > li:first-child
			{
				border-left: 1px solid #eee;
			}
		</style>
	</head>
	<body>

		<div class="page">
			<div class="header">
				<div class="header-menu">
					<div class="container">
						<nav id="menu">
							<a href="#" style="background-image: url(assets/img/logo.png)"></a>
							<ul>
								<li class="SubmenuTabs IconHidden">
									<a href="#"><i class="fas fa-home"></i> Tabs</a>
									<ul>
										<li class="SubmenuMega">
											<a href="#">Lorem ipsum dolor</a>
											<ul>
												<li>
													<div style="background-image: url(img/1.jpg)"></div>
													<a href="#">Lorem ipsum dolor</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>	
												</li>
												<li>
													<div style="background-image: url(img/2.jpg)"></div>
													<a href="#">Dolor sit amet</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li class="SubmenuMega">
											<a href="#">Dolor sit</a>
											<ul>
												<li class="Selected">
													<a href="#">Lorem ipsum</a>
													<ul>
														<li><a href="#">Lorem</a></li>
														<li><a href="#">Ipsum dolor dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
														<li><a href="#">Dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>
												</li>
												<li>
													<a href="#">Dolor sit amet</a>
													<ul>
														<li><a href="#">Lorem ipsum</a></li>
														<li><a href="#">Dolor sit</a></li>
													</ul>
												</li>
												<li>
													<a href="#">Lorem ipsum</a>
													<ul>
														<li><a href="#">Lorem</a></li>
														<li><a href="#">Ipsum dolor dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Ipsum dolor</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor sit</a></li>
												<li><a href="#">Dolor sit amet</a></li>
											</ul>
										</li>
										<li>
											<a href="#">Link</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
												<li><a href="#">Lorem ipsum dolor</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li>
									<a href="#"></i> Submenu with flyouts</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Dolor sit amet</a></li>
										<li>
											<a href="#">Ipsum dolor</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
											</ul>
										</li>
										<li class="SubSubmenuAlignRight">
											<a href="#">Link (flyout left)</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
												<li><a href="#">Lorem ipsum dolor</a></li>
											</ul>
										</li>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Dolor sit amet</a></li>
									</ul>
								</li>
								<li>
									<a href="#">Lorem</a>
									<ul>
										<li><a href="#">Lorem ipsum dolor</a></li>
										<li><a href="#">Dolor sit amet</a></li>
										<li class="SubSubmenuInline">
											<a href="#">Link (with inline submenu)</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
												<li>
													<a href="#">Lorem (flyout)</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Lorem ipsum (flyout)</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
											</ul>
										</li>
										<li class="SubSubmenuAlignRight">
											<a href="#">Dolor sit amet (flyout left)</a>
											<ul>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li><a href="#">Dolor sit amet</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="SubmenuMega">
									<a href="#">Mega</a>
									<ul>
										<li>
											<a href="#">Lorem ipsum</a>
											<ul>
												<li><a href="#">Dolor sit amet</a></li>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li>
													<a href="#">Dolor sit amet (flyout)</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Ipsum dolor</a></li>
													</ul>
												</li>
												<li class="SubSubmenuAlignRight">
													<a href="#">Lorem ipsum dolor (flyout left)</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Dolor sit amet</a></li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Dolor sit</a>
											<ul>
												<li><a href="#">Dolor sit amet</a></li>
												<li><a href="#">Lorem ipsum dolor</a></li>
												<li>
													<a href="#">Dolor sit amet (flyout)</a>
													<ul>
														<li><a href="#">Lorem ipsum dolor</a></li>
														<li><a href="#">Ipsum dolor</a></li>
														<li class="SubSubmenuAlignRight">
															<a href="#">Lorem ipsum dolor (flyout left)</a>
															<ul>
																<li><a href="#">Lorem ipsum dolor</a></li>
																<li><a href="#">Dolor sit amet</a></li>
																<li><a href="#">Lorem ipsum dolor</a></li>
																<li><a href="#">Dolor sit amet</a></li>
															</ul>
														</li>
													</ul>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Amet</a>
											<ul>
												<li><a href="#">Link</a></li>
												<li><a href="#">Link</a></li>
											</ul>
										</li>
									</ul>
								</li>
                                <li><a href="#"><i class="fas fa-envelope"></i> Email</a></li>
                                <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
								<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
								<li><a href="#"><i class="fab fa-youtube"></i> Youtube</a></li>
							</ul>
                        </nav>
                        
                        </div> <!-- /container -->
				</div> <