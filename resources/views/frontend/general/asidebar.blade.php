<aside class="wrap-sidebar js-sidebar">
	<div class="s-full js-hide-sidebar"></div>
	<div class="sidebar flex-col-l p-t-22 p-b-25">
		<div class="flex-r w-full p-b-30 p-r-27">
			<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-sidebar">
				<i class="zmdi zmdi-close"></i>
			</div>
		</div>
		<div class="sidebar-content flex-w w-full p-lr-65 js-pscroll">
			<ul class="sidebar-link w-full">
				<li class="p-b-13">
					<a href="{{ route('fronthomeIndex') }}" class="stext-102 cl2 hov-cl1 trans-04">
						Home
					</a>
				</li>
				@if(Auth::User() != null && Auth::User()->kode_jabatan == 'member')
				<li class="p-b-13">
					<a href="{{ route('trackorderIndex') }}" class="stext-102 cl2 hov-cl1 trans-04">
						My Wishlist
					</a>
				</li>
				<li class="p-b-13">
					<a href="{{ route('profileIndex') }}" class="stext-102 cl2 hov-cl1 trans-04">
						My Account
					</a>
				</li>
				<li class="p-b-13">
					<a href="{{ route('mypurchaseIndex') }}" class="stext-102 cl2 hov-cl1 trans-04">
						My Purchase
					</a>
				</li>
				@endif
				<li class="p-b-13">
					<a href="{{ route('trackorderIndex') }}" class="stext-102 cl2 hov-cl1 trans-04">
						Track Oder
					</a>
				</li>
			</ul>
		</div>
	</div>
</aside>