@extends('layouts.app')
@section('title') Login @endsection

@push('styles')
@endpush

@section('content')
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- BEGIN: Header -->
			<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
				<div class="m-container m-container--fluid m-container--full-height">
					<div class="m-stack m-stack--ver m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
							<div class="m-header__title">
								<h3 class="m-header__title-text">
									Applications
								</h3>
							</div>
							<!-- BEGIN: Horizontal Menu -->
							<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
								<i class="la la-close"></i>
							</button>
							<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
								<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
									<li class="m-menu__item  m-menu__item--active m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
										<a  href="#" class="m-menu__link m-menu__toggle">
											<span class="m-menu__item-here"></span>
											<span class="m-menu__link-text">
												Dashboard
											</span>
											<i class="m-menu__hor-arrow la la-angle-down"></i>
											<i class="m-menu__ver-arrow la la-angle-right"></i>
										</a>
										<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
											<span class="m-menu__arrow m-menu__arrow--adjust"></span>
											<ul class="m-menu__subnav">
												<li class="m-menu__item"  aria-haspopup="true">
													<a  href="/blockManager" class="m-menu__link ">
														<i class="m-menu__link-icon"></i>
														<span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	Block management
																</span>
															</span>
														</span>
													</a>
												</li>
												<li class="m-menu__item"  aria-haspopup="true">
													<a  href="/blockEdit" class="m-menu__link ">
														<i class="m-menu__link-icon"></i>
														<span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	Block edit
																</span>
															</span>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
							<!-- END: Horizontal Menu -->				
				<!-- BEGIN: Topbar -->
							<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
								<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch" data-search-type="default">

	<!--BEGIN: Search Results -->
									<div class="m-dropdown__wrapper">
										<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
										<div class="m-dropdown__inner">
											<div class="m-dropdown__body">
												<div class="m-dropdown__scrollable m-scrollable" data-max-height="300" data-mobile-max-height="200">
													<div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
												</div>
											</div>
										</div>
									</div>
									<!--BEGIN: END Results -->
								</div>
								<div class="m-stack__item m-topbar__nav-wrapper">
									<ul class="m-topbar__nav m-nav m-nav--inline">
										<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
											<a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic m--hide">
													<img src="{{ asset('app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
												<span class="m-nav__link-icon m-topbar__usericon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
												<span class="m-topbar__username m--hide">
													Nick
												</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__header m--align-center">
														<div class="m-card-user m-card-user--skin-light">
															<div class="m-card-user__pic">
																<img src="{{ asset('app/media/img/users/user4.jpg') }}" class="m--img-rounded m--marginless" alt=""/>
															</div>
															<div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	Mark Andre
																</span>
																<a href="" class="m-card-user__email m--font-weight-300 m-link">
																	mark.andre@gmail.com
																</a>
															</div>
														</div>
													</div>
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav m-nav--skin-light">
																<li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-profile-1"></i>
																		<span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Activity
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">
																			FAQ
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="profile.html" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">
																			Support
																		</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit"></li>
																<li class="m-nav__item">
																	<a href="/logout" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																		Logout
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END: Topbar -->
						</div>
					</div>
				</div>
			</header>
			<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<div class="m-content" id="mainBlock">
						<div class="m-content">
							<div class="row">
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Welcome Block
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_2" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Steps Wizard
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_2" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Quick Links
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_2" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Site Traffic Report
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet m-portlet--tab">
											<div class="m-portlet__body">
												<div id="m_morris_1" style="height:400px;"></div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-lg-6">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Task Manager
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div class="m-section" style="height:360px;">
												<div class="m-section__content">
													<div class="m-demo" data-code-preview="true" data-code-html="true" data-code-js="false">
														<div class="m-demo__preview">
															<!--begin::Form-->
															<form class="m-form">
																<div class="m-form__group form-group">
																	<label>
																		Tasks
																	</label>
																	<div class="m-checkbox-list">
																		<label class="m-checkbox">
																			<input type="checkbox">
																			Write a post
																			<span></span>
																		</label>
																		<label class="m-checkbox">
																			<input type="checkbox">
																			Fill your profile
																			<span></span>
																		</label>
																		<label class="m-checkbox">
																			<input type="checkbox">
																			Invite your friends
																			<span></span>
																		</label>
																	</div>
																</div>
															</form>
															<!--end::Form-->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Support Section
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_3" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Payment Upgrades
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_3" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
								<div class="col-lg-4">
									<!--begin::Portlet-->
									<div class="m-portlet m-portlet--tab">
										<div class="m-portlet__head">
											<div class="m-portlet__head-caption">
												<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
													<h3 class="m-portlet__head-text">
														Recent News
													</h3>
												</div>
											</div>
										</div>
										<div class="m-portlet__body">
											<div id="m_gchart_4" style="height:400px;"></div>
										</div>
									</div>
									<!--end::Portlet-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- end:: Body -->
			<!-- begin::Footer -->
				<footer class="m-grid__item	m-footer"></footer>
			<!-- end::Footer -->
		</div>
@endsection
@push('scripts')
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script src="{{ asset('js/dashboard/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/dashboard/scripts.bundle.js') }}" type="text/javascript"></script>
	{{--<script src="{{ asset('js/dashboard/fullcalendar.bundle.js') }}" type="text/javascript"></script>--}}
	<script src="{{ asset('js/theme/morris-charts.js') }}" type="text/javascript"></script>
	<script src="{{ asset('js/dashboard/dashboard.js') }}" type="text/javascript"></script>
@endpush
