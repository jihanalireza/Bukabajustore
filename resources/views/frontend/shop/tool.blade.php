<div class="flex-w flex-sb-m p-b-52">
	<div class="flex-w flex-c-m m-tb-10">
		<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
			<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
			<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
			Filter
		</div>

		<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search btn-search">
			<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
			<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
			Search
		</div>
	</div>

	<!-- Search product -->
	<div class="dis-none panel-search w-full p-t-10 p-b-15">
		<div class="bor8 dis-flex p-l-15">
			<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
				<i class="zmdi zmdi-search"></i>
			</button>

			<input class="mtext-107 cl2 size-114 plh2 p-r-15 searchProduct" type="text" name="search-product" placeholder="Search">
		</div>
	</div>

	<!-- Filter -->
	<div class="dis-none panel-filter w-full p-t-10">
		<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
			<div class="filter-col1 p-r-15 p-b-27">
				<div class="mtext-102 cl2 p-b-15">
					Sort By
				</div>
				<li class="p-b-6">
					<button class="sortby filter-link stext-106 trans-04" attr-sort="">
						All
					</button>
				</li>
				<li class="p-b-6">
					<button class="sortby filter-link stext-106 trans-04" attr-sort="news">
						News
					</button>
				</li>
				<li class="p-b-6">
					<button href="" class="sortby filter-link stext-106 trans-04" attr-sort="plow">
						Price: Low to High
					</button>
				</li>

				<li class="p-b-6">
					<button href="" class="sortby filter-link stext-106 trans-04" attr-sort="phigh">
						Price: High to Low
					</button>
				</li>
			</ul>
		</div>
		<div class="filter-col2 p-r-15 p-b-27">
			<div class="mtext-102 cl2 p-b-15">
				Price
			</div>

			<ul>
				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="" attr-pmax="">
						All
					</button>
				</li>
				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="1" attr-pmax="50">
						$1.00 - $50.00
					</button>
				</li>

				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="50" attr-pmax="100">
						$50.00 - $100.00
					</button>
				</li>

				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="100" attr-pmax="150">
						$100.00 - $150.00
					</button>
				</li>

				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="150" attr-pmax="200">
						$150.00 - $200.00
					</button>
				</li>

				<li class="p-b-6">
					<button class="filterPrice filter-link stext-106 trans-04" attr-pmin="200" attr-pmax="300">
						$200.00 - $300.00
					</button>
				</li>
			</ul>
		</div>
		<div class="filter-col4 p-b-27">
			<div class="mtext-102 cl2 p-b-15">
				Category
			</div>

			<div class="flex-w p-t-4 m-r--5">
				<a href="{{ Route('frontshopIndex',['category'=>"all"]) }}" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
					All
				</a>
				@foreach($dataCategory as $Category)
				<a href="{{ Route('frontshopIndex',['category'=>$Category->nama_kategori]) }}" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
					{{ $Category->nama_kategori }}
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
</div>
