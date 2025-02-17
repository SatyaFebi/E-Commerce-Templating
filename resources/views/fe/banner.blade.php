<!-- Banner -->
<div class="sec-banner bg0 p-t-95 p-b-55">
		<div class="container">
			<div class="row">
				@foreach ($kategories as $data)
				<div class="col-md-6 p-b-30 m-lr-auto">
					<!-- Block1 -->
					<div class="block1 wrap-pic-w">
						@if ($data->kategori == 'Pernikahan')
							<img src="{{asset('fe/images/Pernikahan.jpg')}}" alt="IMG-BANNER">
						@elseif($data->kategori == 'Selamatan')
							<img src="{{asset('fe/images/Selamatan.jpg')}}" alt="IMG-BANNER">
						@elseif($data->kategori == 'Ulang Tahun')
							<img src="{{asset('fe/images/Ulang-Tahun.jpg')}}" alt="IMG-BANNER">
						@elseif($data->kategori == 'Studi Tour')
							<img src="{{asset('fe/images/Study-Tour.jpg')}}" alt="IMG-BANNER">
						@else
							<img src="{{asset('fe/images/Rapat.jpg')}}" alt="IMG-BANNER">
						@endif
						
						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									{{ $data->kategori }}
								</span>
								
								<span class="block1-info stext-102 trans-04">
									{{$data->nama_paket}}
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

				<!-- <div class="col-md-6 p-b-30 m-lr-auto"> -->
					<!-- Block1 -->
					<!-- <div class="block1 wrap-pic-w">
						<img src="fe/images/banner-05.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Men
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
				</div> -->

				<!-- <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto"> -->
					<!-- Block1 -->
					<!-- <div class="block1 wrap-pic-w">
						<img src="fe/images/banner-07.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Watches
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div>
				</div> -->

				<!-- <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto"> -->
					<!-- Block1 -->
					<!-- <div class="block1 wrap-pic-w">
						<img src="fe/images/banner-08.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Bags
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
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

				<div class="col-md-6 col-lg-4 p-b-30 m-lr-auto"> -->
					<!-- Block1 -->
					<!-- <div class="block1 wrap-pic-w">
						<img src="fe/images/banner-09.jpg" alt="IMG-BANNER">

						<a href="product.html" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
							<div class="block1-txt-child1 flex-col-l">
								<span class="block1-name ltext-102 trans-04 p-b-8">
									Accessories
								</span>

								<span class="block1-info stext-102 trans-04">
									Spring 2018
								</span>
							</div>

							<div class="block1-txt-child2 p-b-4 trans-05">
								<div class="block1-link stext-101 cl0 trans-09">
									Shop Now
								</div>
							</div>
						</a>
					</div> -->
				</div>
			</div>
		</div>
	</div>