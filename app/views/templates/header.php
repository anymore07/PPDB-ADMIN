<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href=""/>
		<title>PPDB</title>
		<meta charset="utf-8" />
		<meta name="description" content="Axel admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Axel theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Oswald HTML Free - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/products/oswald-html-pro" />
		<meta property="og:site_name" content="Keenthemes | Oswald HTML Free" />
		<link rel="canonical" href="https://preview.keenthemes.com/axel-html-free" />
		<link rel="shortcut icon" href="#" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />

		<style>
			.logo {
				max-height: 80px;
			  }
			  
			  @media (max-width: 768px) {
				.logo {
				  max-height: 50px;
				}}
			  
			  @media (min-width: 963px) {
				.logo {
				  max-height: 80px;
				}}
		</style>
		<style>
			/* ukuran peta */
			#mapid {
				height: 500px;
			}
		</style>
	</head>
		<!--Theme mode setup on page load-->
		<script>
			var defaultThemeMode = "light"; var themeMode; if (document.documentElement) { if (document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if (localStorage.getItem("data-bs-theme") !== null) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); } 
		</script>
	</head>

	<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				
				<!--Header-->
				<div id="kt_app_header" class="app-header">
					<!--Header Primary-->
					<div class="app-header-primary" data-kt-sticky="true" data-kt-sticky-name="app-header-primary-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
						<div class="app-container container-xxl d-flex align-items-stretch justify-content-between">
							<!--Logo-->
							<div class="d-flex flex-grow-1 flex-lg-grow-0">
								<div class="d-flex align-items-center" id="kt_app_header_logo_wrapper">
									<button class="d-lg-none btn btn-icon btn-color-white btn-active-color-primary ms-n4 me-sm-2" id="kt_app_header_menu_toggle">
										<i class="ki-duotone ki-abstract-14 fs-1">
											<span class="path1"></span>
											<span class="path2"></span>
										</i>
									</button>
									<a href="/index.html" class="d-flex align-items-center mb-1 mb-lg-0 pt-lg-1">
										<img alt="Logo" src="/public/assets/media/logos/kota_malang.png" class="logo d-block d-sm-none" />
										<img alt="Logo" src="/public/assets/media/logos/kota_malang_banner.png" class="logo d-none d-sm-block" />
									</a>
								</div>
							</div>
							<!--User account-->
							<div class="app-navbar">
								<div class="app-navbar-item ms-3 me-6" id="kt_header_user_menu_toggle">
									<!--User avatar-->
									<div class="cursor-pointer symbol symbol-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img class="symbol symbol-35px" src="/public/assets/media/avatars/blank.png" alt="user" />
									</div>
									<!--User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--User avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="/public/assets/media/avatars/blank.png" />
												</div>
												<!--Username-->
												<div class="d-flex flex-column">
													<div class="fw-bold d-flex align-items-center fs-5">Tyas</div>
													<a href="#" class="fw-semibold text-muted text-hover-primary fs-7">antyassari@gmail.com</a>
												</div>
											</div>
										</div>
										<!--User account menu item-->
										<div class="separator my-2"></div>
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Mode
													<span class="ms-5 position-absolute translate-middle-y top-50 end-0">
														<i class="ki-duotone ki-night-day theme-light-show fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
														<i class="ki-duotone ki-moon theme-dark-show fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span></span>
											</a>
											<!--User account menu sub item-->
											<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-night-day fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
																<span class="path3"></span>
																<span class="path4"></span>
																<span class="path5"></span>
																<span class="path6"></span>
																<span class="path7"></span>
																<span class="path8"></span>
																<span class="path9"></span>
																<span class="path10"></span>
															</i>
														</span>
														<span class="menu-title">Terang</span>
													</a>
												</div>
												<div class="menu-item px-3 my-0">
													<a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
														<span class="menu-icon" data-kt-element="icon">
															<i class="ki-duotone ki-moon fs-2">
																<span class="path1"></span>
																<span class="path2"></span>
															</i>
														</span>
														<span class="menu-title">Gelap</span>
													</a>
												</div>
											</div>
											<!--end User account menu sub item-->
										</div>
										<div class="menu-item px-5">
											<a href="../dist/authentication/layouts/corporate/sign-in.html"
												class="menu-link px-5">Keluar</a>
										</div>
										<!--end User account menu item-->
									</div>
									<!--end User account menu-->
								</div>
							</div>
							<!--end User account-->
						</div>
					</div>
					<!--end Header primary-->

					<!--Header secondary-->
					<div class="app-header-secondary">
						<div class="app-container container-xxl d-flex align-items-stretch">
							<!--Menu wrapper-->
							<div class="app-header-menu app-header-mobile-drawer align-items-stretch flex-grow-1" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
								<!--Menu-->
								<div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-700 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
									<!--Menu item-->
									<div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
										<span class="menu-link">
											<span class="menu-title">Data Master</span>
											<span class="menu-arrow d-lg-none"></span>
										</span>
										<!--Menu sub-->
										<div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px">
											<div class="menu-item">
												<a class="menu-link" href="<?= BASEURL ?>/sekolah">Sekolah
													<span class="menu-link active">Sekolah</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="#">
													<span class="menu-link">Jalur Pendaftaran</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="#">
													<span class="menu-link">Nilai Rapor</span>
												</a>
											</div>
										</div>
										<!--end Menu sub-->
									</div>
									<div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<a class="menu-link" href="account/daftarpeserta.html" >
											<span class="menu-title">Daftar Peserta</span>
										</a>
									</div>
									<div class="menu-item menu-lg-down-accordion me-0 me-lg-2">
										<a class="menu-link" href="account/generatehasil.html">
											<span class="menu-title">Generate Hasil</span>
										</a>
									</div>
									<div class="menu-item menu-lg-down-accordion me-lg-1">
										<a class="menu-link" href="account/hasilsementara.html">
											<span class="menu-title">Hasil Sementara</span>
										</a>
									</div>
									<div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
										<a class="menu-link" href="account/riwayatklasemen.html">
											<span class="menu-title">Riwayat Klasemen</span>
										</a>
									</div>
									<div class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2">
										<a class="menu-link" href="account/hasilseleksi.html">
											<span class="menu-title">Hasil Seleksi</span>
										</a>
									</div>
									<!--end Menu item-->
								</div>
								<!--end Menu-->
							</div>
							<!--end Menu wrapper-->
						</div>
					</div>
					<!--end Header secondary-->
				</div>
				<!--end Header-->

				<!--Main wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
						<!--Main-->
						<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
							<!--Content wrapper-->
							<div class="d-flex flex-column flex-column-fluid">
								<!--Toolbar-->
								<div id="kt_app_toolbar" class="app-toolbar pt-lg-9 pt-6">
									<div id="kt_app_toolbar_container"
										class="app-container container-fluid d-flex flex-stack flex-wrap">
										<!--Toolbar wrapper-->
										<div class="d-flex flex-stack flex-wrap gap-4 w-100">
											<!--Page title-->
											<div class="page-title d-flex flex-column gap-3 me-3">
												<h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-2 my-0">
													Sekolah
												</h1>
												<!--Breadcrumb-->
												<ul class="breadcrumb breadcrumb-separatorless fw-semibold">
													<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
														<a href="../dist/index.html" class="text-gray-500">
															<i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
														</a>
													</li>
													<li class="breadcrumb-item">
														<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
													</li>
													<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
														<a href="#" class="text-gray-500">Data Master</a>
													</li>
													<li class="breadcrumb-item">
														<i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
													</li>
													<li class="breadcrumb-item text-gray-700 fw-bold lh-1">
														<a href="#" class="text-primary">Sekolah</a>
													</li>
												</ul>
												<!--end Breadcrumb-->
											</div>
										</div>
										<!--end Toolbar wrapper-->
									</div>
									<!--end Toolbar container-->
								</div>
								<!--end Toolbar-->

								<!--Content-->
								<!--end Content-->

								<!--Footer-->
								<div id="kt_app_footer" class="app-footer align-items-center justify-content-center justify-content-md-between flex-column flex-md-row py-3 py-lg-6">
									<div class="text-dark order-2 order-md-1">
										<span class="text-muted fw-semibold me-1">2023&copy;</span>
										<span class="text-gray-800 text-hover-primary">PT. Tiga Pilar Garuda</span>
									</div>
								</div>
								<!--end Footer-->
							</div>
							<!--end Content wrapper-->
						</div>
						<!--end Main-->
					</div>
				</div>
				<!--end Main wrapper-->
			</div>
		</div>
		<!--end App-->

		<!--Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--Global Javascript Bundle(mandatory for all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>

		<!--Vendors Javascript(used for this page only)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>

		<!--Custom Javascript(used for this page only)
		<script src="assets/js/custom/pages/user-profile/general.js"></script>
		<script src="assets/js/widgets.bundle.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/type.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/budget.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/settings.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/team.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/targets.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/files.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/complete.js"></script>
		<script src="assets/js/custom/utilities/modals/create-project/main.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
		<script src="assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
		<script src="assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="assets/js/custom/utilities/modals/users-search.js"></script>
		<script>
						"use strict";
						// Class definition
						var KTLeaflet = function () {

							// Private functions
							var gmap = function (lattitude, longitude) {
								let latLng = {
									lat: -7.966620,
									lng: 112.632629
								}

								if (lattitude != "" && longitude != "") {
									latLng = {
										lat: parseFloat(lattitude),
										lng: parseFloat(longitude)
									}
								}

								// define leaflet
								var leaflet = L.map('kt_leaflet_1', {
									center: [latLng.lat, latLng.lng],
									zoom: 16
								});

								// set leaflet tile layer
								L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
									// attribution: '&amp;copy; &lt;a href="https://www.openstreetmap.org/copyright"&gt;OpenStreetMap&lt;/a&gt;'
								}).addTo(leaflet);

								function initMarker(latLng) {
									// set custom SVG icon marker
									var leafletIcon = L.divIcon({
										html: `<i class="fa fa-map-marker-alt fa-2x text-danger"></i>`,
										bgPos: [10, 10],
										iconAnchor: [20, 37],
										popupAnchor: [0, -37],
										className: 'leaflet-marker'
									});

									// bind marker with popup
									var marker = L.marker([latLng.lat, latLng.lng], {
										icon: leafletIcon
									}).addTo(leaflet);
									marker.bindPopup($('#address_maps').text()).openPopup();
								}

								initMarker(latLng);
							}

							return {
								init: function (lattitude, longitude) {
									gmap(lattitude, longitude)
								}
							};
						}();

						jQuery(document).ready(function () {
							KTLeaflet.init("-8.035960", "112.641528");
						});
		</script>

		Datatable -->
		<script>
			new DataTable('#example', {
				responsive: true
			});
		</script>
	</body>
</html>