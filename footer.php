                   
        <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="assets/js/jquery.dmenu.js"></script>
        
        <script>
							$(function() {
								$(window).resize();
							});
							$('#menu').dmenu({
								menu 	: {
									logo			: true,
									align			: 'right'
								},
								item	: {
									bg				: true,
									border 			: false,
									subindicator	: true,

									fit			: [
										{
											items 		: null,
											fitter 		: 'icon-hide',
											order		: 'all'
										},
										{
											items 		: null,
											fitter 		: 'icon-only',
											order		: 'all'
										},
										{
											items 		: ':not(.dm-item_align-right)',
											fitter 		: 'submenu',
											order		: 'rtl'
										},
										{
											items 		: ':not(.dm-item_align-right)',
											fitter 		: 'hide',
											order		: 'rtl'
										}
									]
								},
								submenu	: {
									arrow			: false,
									border			: false,
									shadow			: true
								},
								subitem	: {
									bg				: true,
									border			: false
								}

							});
                        </script>