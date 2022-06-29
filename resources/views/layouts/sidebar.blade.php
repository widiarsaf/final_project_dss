<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
	<div class="app-brand demo">
		<a href="#" class="app-brand-link">
			<span class="app-brand-text demo menu-text fw-bolder ms-2">U-Rank</span>
		</a>

		<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			<i class="bx bx-chevron-left bx-sm align-middle"></i>
		</a>
	</div>

	<div class="menu-inner-shadow"></div>

	<ul class="menu-inner py-1">
		@if (Auth::user()->level == 1)
		<!-- Alternatives-->
			<li class="menu-item">
				<a href="{{route('alternative.index')}}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-food-menu"></i>
					<div data-i18n="Analytics">Alternatives</div>
				</a>
			</li>
			<!-- Criteria -->
			<li class="menu-item">
				<a href="{{route('criteria.index')}}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-label"></i>
					<div data-i18n="Analytics">Criteria</div>
				</a>
			</li>
			<!-- Criteria -->
			<li class="menu-item">
				<a href="{{route('location.index')}}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-location-plus"></i>
					<div data-i18n="Analytics">Locations</div>
				</a>
			</li>
			<!-- Admin User-->
			<li class="menu-item">
				<a href="{{route('user.index')}}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-user"></i>
					<div data-i18n="Analytics">Admin User</div>
				</a>
			</li>

		@elseif (Auth::user()->level == 2)
		<!-- Calculation User-->
			<li class="menu-item">
				<a href="{{route('dataAnalyst')}}" class="menu-link">
					<i class="menu-icon tf-icons bx bx-user"></i>
					<div data-i18n="Analytics">Calculation</div>
				</a>
			</li>

		@endif
	
	</ul>
</aside>