<x-app  :breadcrumbs="$breadcrumbs">

    <div class="container">
        <h1 class="page-title">Checkout</h1>
        <div class="alert alert-info m-b-30">কারিগরি ত্রুটির কারণে পণ্যের মূল্য অসঙ্গতিপূর্ণ হলে, স্টার টেক কর্তৃপক্ষ
            অর্ডার বাতিলের অধিকার সংরক্ষণ করে। অনুগ্রহ করে কাস্টমার সাপোর্ট এজেন্টের কনফার্মেশন ব্যতীত কোনো ধরনের
            পেমেন্ট প্রোসিড না করার অনুরোধ করা হচ্ছে ।</div>
        <form class="checkout-content" id="checkout-form" action="https://www.startech.com.bd/checkout/onepagecheckout"
            method="post">
            <input type="hidden" name="order_source" id="order-source"
                value="{&quot;referrer&quot;:&quot;google.com&quot;,&quot;referrer_timestamp&quot;:1783519515806,&quot;referrer_landing_url&quot;:&quot;/&quot;}">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 checkout-left">

                    <div class="row row-payment-delivery">
                        <div class="col-md-12 col-sm-12">
                            <div class="page-section ws-box">
                                <div class="section-head">
                                    <h2><i class="material-icons">book</i>Shipping &amp; Billing</h2>
                                </div>
                                <div class="address">
                                    <div class="multiple-form-group">
                                        <div class="form-group">
                                            <label class="control-label" for="input-firstname">First Name</label>
                                            <input class="form-control" name="firstname" type="text"
                                                id="input-firstname" value="" placeholder="First Name*">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="input-lastname">Last Name</label>
                                            <input type="text" id="input-lastname" name="lastname" value=""
                                                class="form-control" placeholder="Last Name*">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="input-address">Address</label>
                                        <input type="text" id="input-address" name="address_1" value=""
                                            class="form-control" placeholder="Address*">
                                    </div>
                                    <div class="multiple-form-group">
                                        <div class="form-group" for="input-city">
                                            <label class="control-label">Upazila/Thana</label>
                                            <input type="text" id="input-city" name="city" value=""
                                                class="form-control" placeholder="Upazila/Thana*">
                                        </div>
                                        <div class="form-group" for="input-zone">
                                            <label class="control-label">District</label>
                                            <select name="zone_id" id="input-zone" class="form-control snap-drpd"
                                                style="display: none;">
                                                <option value="4250">Bagerhat</option>
                                                <option value="4285">Bandarban</option>
                                                <option value="4271">Barguna</option>
                                                <option value="320">Barisal</option>
                                                <option value="4273">Bhola</option>
                                                <option value="4280">Bogura</option>
                                                <option value="4297">Brahmanbaria</option>
                                                <option value="4286">Chandpur</option>
                                                <option value="4277">Chapai Nawabganj</option>
                                                <option value="321">Chattogram - City</option>
                                                <option value="4284">Chattogram - Suburb</option>
                                                <option value="4259">Chuadanga</option>
                                                <option value="4288">Cox's Bazar</option>
                                                <option value="4287">Cumilla</option>
                                                <option value="322" selected="">Dhaka - City</option>
                                                <option value="4237">Dhaka - Suburb</option>
                                                <option value="4272">Dinajpur</option>
                                                <option value="4238">Faridpur</option>
                                                <option value="4289">Feni</option>
                                                <option value="4263">Gaibandha</option>
                                                <option value="4233">Gazipur - City</option>
                                                <option value="4239">Gazipur - Suburb</option>
                                                <option value="4241">Gopalganj</option>
                                                <option value="4242">Habiganj</option>
                                                <option value="4262">Jamalpur</option>
                                                <option value="4253">Jashore</option>
                                                <option value="4276">Jhalokati</option>
                                                <option value="4257">Jhenaidah</option>
                                                <option value="4281">Joypurhat</option>
                                                <option value="4290">Khagrachari</option>
                                                <option value="323">Khulna - City</option>
                                                <option value="4296">Khulna - Suburb</option>
                                                <option value="4243">Kishoreganj</option>
                                                <option value="4265">Kurigram</option>
                                                <option value="4258">Kushtia</option>
                                                <option value="4291">Lakshmipur</option>
                                                <option value="4266">Lalmonirhat</option>
                                                <option value="4244">Madaripur</option>
                                                <option value="4256">Magura</option>
                                                <option value="4246">Manikganj</option>
                                                <option value="4260">Meherpur</option>
                                                <option value="4240">Moulvibazar</option>
                                                <option value="4247">Munshiganj</option>
                                                <option value="4236">Mymensingh</option>
                                                <option value="4274">Naogaon</option>
                                                <option value="4255">Narail</option>
                                                <option value="4248">Narayanganj</option>
                                                <option value="4251">Narsingdi</option>
                                                <option value="4275">Natore</option>
                                                <option value="4264">Netrokona</option>
                                                <option value="4268">Nilphamari</option>
                                                <option value="4292">Noakhali</option>
                                                <option value="4278">Pabna</option>
                                                <option value="4269">Panchagarh</option>
                                                <option value="4282">Patuakhali</option>
                                                <option value="4283">Pirojpur</option>
                                                <option value="4254">Rajbari</option>
                                                <option value="4294">Rajshahi - Suburb</option>
                                                <option value="324">Rajshahi City</option>
                                                <option value="4293">Rangamati</option>
                                                <option value="4295">Rangpur - Suburb</option>
                                                <option value="4231">Rangpur City</option>
                                                <option value="4252">Satkhira</option>
                                                <option value="4261">Shariatpur</option>
                                                <option value="4267">Sherpur</option>
                                                <option value="4279">Sirajganj</option>
                                                <option value="4245">Sunamganj</option>
                                                <option value="325">Sylhet</option>
                                                <option value="4249">Tangail</option>
                                                <option value="4270">Thakurgaon</option>
                                            </select>
                                            <div class="snap-drpd">
                                                <div class="snap-drpd-sel" tabindex="0">Dhaka - City</div>
                                                <div class="snap-drpd-menu" style="display: none;"><input
                                                        placeholder="Search..." type="text"
                                                        class="snap-drpd-search">
                                                    <div class="snap-drpd-inn">
                                                        <div class="snap-drpd-item" data-value="4250">Bagerhat</div>
                                                        <div class="snap-drpd-item" data-value="4285">Bandarban</div>
                                                        <div class="snap-drpd-item" data-value="4271">Barguna</div>
                                                        <div class="snap-drpd-item" data-value="320">Barisal</div>
                                                        <div class="snap-drpd-item" data-value="4273">Bhola</div>
                                                        <div class="snap-drpd-item" data-value="4280">Bogura</div>
                                                        <div class="snap-drpd-item" data-value="4297">Brahmanbaria
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4286">Chandpur</div>
                                                        <div class="snap-drpd-item" data-value="4277">Chapai Nawabganj
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="321">Chattogram - City
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4284">Chattogram -
                                                            Suburb</div>
                                                        <div class="snap-drpd-item" data-value="4259">Chuadanga</div>
                                                        <div class="snap-drpd-item" data-value="4288">Cox's Bazar
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4287">Cumilla</div>
                                                        <div class="snap-drpd-item is-select" data-value="322">Dhaka -
                                                            City</div>
                                                        <div class="snap-drpd-item" data-value="4237">Dhaka - Suburb
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4272">Dinajpur</div>
                                                        <div class="snap-drpd-item" data-value="4238">Faridpur</div>
                                                        <div class="snap-drpd-item" data-value="4289">Feni</div>
                                                        <div class="snap-drpd-item" data-value="4263">Gaibandha</div>
                                                        <div class="snap-drpd-item" data-value="4233">Gazipur - City
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4239">Gazipur - Suburb
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4241">Gopalganj</div>
                                                        <div class="snap-drpd-item" data-value="4242">Habiganj</div>
                                                        <div class="snap-drpd-item" data-value="4262">Jamalpur</div>
                                                        <div class="snap-drpd-item" data-value="4253">Jashore</div>
                                                        <div class="snap-drpd-item" data-value="4276">Jhalokati</div>
                                                        <div class="snap-drpd-item" data-value="4257">Jhenaidah</div>
                                                        <div class="snap-drpd-item" data-value="4281">Joypurhat</div>
                                                        <div class="snap-drpd-item" data-value="4290">Khagrachari
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="323">Khulna - City
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4296">Khulna - Suburb
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4243">Kishoreganj
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4265">Kurigram</div>
                                                        <div class="snap-drpd-item" data-value="4258">Kushtia</div>
                                                        <div class="snap-drpd-item" data-value="4291">Lakshmipur</div>
                                                        <div class="snap-drpd-item" data-value="4266">Lalmonirhat
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4244">Madaripur</div>
                                                        <div class="snap-drpd-item" data-value="4256">Magura</div>
                                                        <div class="snap-drpd-item" data-value="4246">Manikganj</div>
                                                        <div class="snap-drpd-item" data-value="4260">Meherpur</div>
                                                        <div class="snap-drpd-item" data-value="4240">Moulvibazar
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4247">Munshiganj</div>
                                                        <div class="snap-drpd-item" data-value="4236">Mymensingh</div>
                                                        <div class="snap-drpd-item" data-value="4274">Naogaon</div>
                                                        <div class="snap-drpd-item" data-value="4255">Narail</div>
                                                        <div class="snap-drpd-item" data-value="4248">Narayanganj
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4251">Narsingdi</div>
                                                        <div class="snap-drpd-item" data-value="4275">Natore</div>
                                                        <div class="snap-drpd-item" data-value="4264">Netrokona</div>
                                                        <div class="snap-drpd-item" data-value="4268">Nilphamari</div>
                                                        <div class="snap-drpd-item" data-value="4292">Noakhali</div>
                                                        <div class="snap-drpd-item" data-value="4278">Pabna</div>
                                                        <div class="snap-drpd-item" data-value="4269">Panchagarh</div>
                                                        <div class="snap-drpd-item" data-value="4282">Patuakhali</div>
                                                        <div class="snap-drpd-item" data-value="4283">Pirojpur</div>
                                                        <div class="snap-drpd-item" data-value="4254">Rajbari</div>
                                                        <div class="snap-drpd-item" data-value="4294">Rajshahi -
                                                            Suburb</div>
                                                        <div class="snap-drpd-item" data-value="324">Rajshahi City
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4293">Rangamati</div>
                                                        <div class="snap-drpd-item" data-value="4295">Rangpur - Suburb
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4231">Rangpur City
                                                        </div>
                                                        <div class="snap-drpd-item" data-value="4252">Satkhira</div>
                                                        <div class="snap-drpd-item" data-value="4261">Shariatpur</div>
                                                        <div class="snap-drpd-item" data-value="4267">Sherpur</div>
                                                        <div class="snap-drpd-item" data-value="4279">Sirajganj</div>
                                                        <div class="snap-drpd-item" data-value="4245">Sunamganj</div>
                                                        <div class="snap-drpd-item" data-value="325">Sylhet</div>
                                                        <div class="snap-drpd-item" data-value="4249">Tangail</div>
                                                        <div class="snap-drpd-item" data-value="4270">Thakurgaon</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="multiple-form-group">
                                    <div class="form-group">
                                        <label class="control-label" for="input-telephone">Mobile</label>
                                        <input type="tel" id="input-telephone" name="telephone" value=""
                                            class="form-control" placeholder="Telephone*">
                                    </div>
                                    <div class="form-group" for="input-email">
                                        <label class="control-label">Email</label>
                                        <input type="email" id="input-email" name="email" value=""
                                            class="form-control" placeholder="E-Mail*">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label">Comment</label>
                                    <textarea class="form-control" name="comment" value=""
                                        placeholder="Any special requirement/instruction for us?" rows="6"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-12">
                            <div class="row row-payment-delivery">
                                <div class="col-md-6 col-sm-12 payment-methods">
                                    <div class="page-section ws-box">
                                        <div class="section-head">
                                            <h2><i class="material-icons">credit_card</i>Payment Method</h2>
                                        </div>
                                        <p class="fade">Select a payment method</p>
                                        <label class="radio-inline">
                                            <input type="radio" name="payment_method" value="cod"
                                                checked="checked">
                                            Cash on Delivery </label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="payment_method" value="online">
                                            Online Payment </label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="payment_method" value="pod">
                                            POS on Delivery </label><br>
                                        <div class="accepted-logo">
                                            <h5>We Accept : </h5>
                                            <a href="#"><img class="logo logo-visa"
                                                    src="catalog/view/theme/starship/images/payment-methods.png"></a>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12 delivery-methods">
                                    <div class="page-section ws-box">
                                        <div class="section-head">
                                            <h2><i class="material-icons">local_shipping</i>Delivery Method</h2>
                                        </div>
                                        <p class="fade">Select a delivery method</p>
                                        <label class="radio-inline">
                                            <input type="radio" name="shipping_method" value="star_hero.home"
                                                checked="checked">
                                            Home Delivery - 110৳ </label><br>
                                        <input type="hidden" name="star_hero.home.title" value="Home Delivery">


                                        <label class="radio-inline">
                                            <input type="radio" name="shipping_method" value="pickup.pickup">
                                            Store Pickup - 0৳ </label><br>
                                        <input type="hidden" name="pickup.pickup.title" value="Store Pickup">
                                        <div class="m-tb-15" id="pickup.pickup-options" style="display:none">
                                            <select name="pickup.pickup.option" class="form-control">
                                                <option value="Multiplan Branch - (Level-09/2)">
                                                    Multiplan Branch - (Level-09/2) </option>
                                                <option value="RIG House (Multiplan, Level-9)">
                                                    RIG House (Multiplan, Level-9) </option>
                                                <option value="Elephant Road Branch">
                                                    Elephant Road Branch </option>
                                                <option value="Multiplan Branch - (Level-09)">
                                                    Multiplan Branch - (Level-09) </option>
                                                <option value="Banani Branch">
                                                    Banani Branch </option>
                                                <option value="Uttara Sonargaon Janapath Branch">
                                                    Uttara Sonargaon Janapath Branch </option>
                                                <option value="Uttara Syed Grand Center Branch">
                                                    Uttara Syed Grand Center Branch </option>
                                                <option value="IDB Branch">
                                                    IDB Branch </option>
                                                <option value="Pragati Sharani Branch">
                                                    Pragati Sharani Branch </option>
                                                <option value="Multiplan Branch - (Level-01)	">
                                                    Multiplan Branch - (Level-01) </option>
                                                <option value="Multiplan Branch - (Level-03)">
                                                    Multiplan Branch - (Level-03) </option>
                                                <option value="Multiplan Branch - (Level-05)">
                                                    Multiplan Branch - (Level-05) </option>
                                            </select>
                                        </div>


                                        <label class="radio-inline">
                                            <input type="radio" name="shipping_method" value="express.express">
                                            Request Express - 200৳ </label><br>
                                        <input type="hidden" name="express.express.title" value="Request Express">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="details-section-wrap">
                        <div class="page-section ws-box">
                            <div class="section-head">
                                <h2><i class="material-icons">storefront</i>Products</h2>
                            </div>
                            <table class="table-bordered bg-white checkout-product-list">
                                <tbody>
                                    <tr>
                                        <td class="name">
                                            1 X
                                            <a
                                                href="https://www.startech.com.bd/ecoflow-river-3-portable-power-station">EcoFlow
                                                River 3 Portable Power Station</a>

                                        </td>
                                        <td class="price text-right">24,590৳ </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="row row-payment-delivery-order">
                        <div class="col-md-12 col-sm-12 details-section-wrap">
                            <div class="page-section ws-box zig-zag-border">
                                <div class="section-head">
                                    <h2><i class="material-icons">receipt</i>Order Summary</h2>
                                </div>

                                <div class="extra-discount-section">
                                    <h5 class="m-0">Get Some Extra</h5>
                                    <p class="fade">Use coupon/voucher/star points</p>

                                    <div class="discount-tabs">
                                        <div class="tab-btn active" data-target="#discount-coupon"><i
                                                class="material-icons">confirmation_number</i> Coupon</div>
                                        <div class="tab-btn" data-target="#gift-voucher"><i
                                                class="material-icons">card_giftcard</i> Gift Voucher</div>
                                    </div>

                                    <div class="discount-tab-content">
                                        <div id="discount-coupon" class="tab-pane active">
                                            <div class="input-group btn-block checkout-cart">
                                                <input type="text" name="coupon"
                                                    placeholder="Promo / Coupon Code" id="input-coupon"
                                                    class="form-control">
                                                <span class="input-group-btn"><button type="button"
                                                        id="button-coupon" data-loading-text="Loading..."
                                                        class="btn btn-gray">Apply</button></span>
                                            </div>
                                        </div>
                                        <div id="gift-voucher" class="tab-pane">
                                            <div class="input-group btn-block checkout-cart">
                                                <input type="text" name="voucher" placeholder="Gift Voucher"
                                                    id="input-voucher" class="form-control">
                                                <span class="input-group-btn"><button type="button"
                                                        id="button-voucher" data-loading-text="Loading..."
                                                        class="btn btn-gray">Apply</button></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <table class="table table-bordered bg-white cart-total  checkout-total-list">
                                    <tbody>
                                        <tr>
                                            <td class="text-left">Sub-Total:</td>
                                            <td class="text-right amount"> <strong>24,590৳</strong> </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Home Delivery:</td>
                                            <td class="text-right amount"> <strong>110৳</strong> </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left">Total:</td>
                                            <td class="text-right amount"> <strong>24,700৳</strong> </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="checkout-final-action">
                                    <div class="agree-text" style="margin-bottom: 10px">I have read and agree to the
                                        <a href="https://www.startech.com.bd/warranty-policy" target="_blank"><b>Terms
                                                and Conditions</b></a>, <a href="https://www.startech.com.bd/privacy"
                                            target="_blank"><b>Privacy Policy</b></a> and <a
                                            href="https://www.startech.com.bd/refund-policy" target="_blank"><b>Refund
                                                and Return Policy</b></a> <input type="checkbox" name="agree"
                                            value="1" checked="checked">
                                    </div>
                                    <button id="button-confirm" class="btn submit-btn" type="submit">Confirm
                                        Order</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>

    </div>
</x-app>
