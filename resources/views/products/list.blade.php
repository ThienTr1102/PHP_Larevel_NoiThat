
<div class="row isotope-grid">
    @foreach($products as $key => $product)
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-pic hov-img0">
                    <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html">
                        <img src="{{ $product->thumb }}" alt="{{ $product->name }}">
                    </a>
                </div>

                <div class="block2-txt flex-w flex-t p-t-14">
                    <div class="block2-txt-child1 flex-col-l ">
                        <a href="/san-pham/{{ $product->id }}-{{ Str::slug($product->name, '-') }}.html"
                           class=" cl4 hov-cl1 trans-04 js-name-b2 p-b-6" style="color: #7e2e17; font-size: 18px;font-family: 'Raleway SemiBold';" >
                            <strong style="color: #7e2e17; font-size: 18px;font-family: 'Raleway SemiBold';">{{ $product->name }}</strong>
                        </a>

                        <span class="stext-105 cl3" style="color: #e57b5c">
							{!!  \App\Helpers\Helper::price($product->price, $product->price_sale)  !!}đ
                        </span>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
