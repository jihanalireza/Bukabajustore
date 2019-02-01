<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			@foreach($showslider as $itemslider)
			<div class="item-slick1" style="background-image: url({{asset('storage/imageslider/'.$itemslider->foto)}});">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span class="ltext-101 cl2 respon2">
								{{ $itemslider->deskripsi }}
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a href="{{ route('frontshopIndex',['category'=>'all']) }}" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								Shop Now
							</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>