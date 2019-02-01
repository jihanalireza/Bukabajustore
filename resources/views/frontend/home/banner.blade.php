<div class="sec-banner bg0 p-t-95 p-b-55">
	<div class="container">
		<div class="row">
			@php $no=0; @endphp
			@foreach($showcategory as $category)
				@if($no++ == 2 || $no++ == 1 )
				<div class="col-md-6 p-b-30 m-lr-auto">
				@else
				<div class="col-md-4 p-b-30 m-lr-auto">
				@endif
				<!-- Block1 -->
				<div class="block1 wrap-pic-w">
					<img src="{{ asset('storage/imagecategory/'.$category->foto_kategori) }}" alt="IMG-BANNER">

					<a href="{{ route('frontshopIndex',['category'=>$category->nama_kategori]) }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								{{ $category->nama_kategori }}
							</span>

							<span class="block1-info stext-102 trans-04">
								New Trend
							</span>
						</div>

						<div class="block1-txt-child2 p-b-4 trans-05">
							<div class="block1-link stext-101 cl0 trans-09">
								Shop Now
							</div>
						</div>
					</a>
				</div>
			</div>
			@endforeach


		</div>
	</div>
</div>