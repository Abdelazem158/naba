<div class="contact-from-section mt-5 mb-5" id="join">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>{{__('contact-us.contact_us')}}</h2>
                    <p>{{__('contact-us.You can join out community and we will contact you')}}</p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form role="form" action="{{url(route('front/contact-us'))}}" method="post">
                        @csrf
                        <div class="m-3 contact_form d-flex justify-content-start">
                            @isset($contact_item_id)
                            <input type="hidden" name="item_id" value="{{$contact_item_id}}">
                            @endisset
                            @isset($contact_section_no)
                            <input type="hidden" name="section_no" value="{{$contact_section_no}}">
                            @endisset
                            @isset($contact_page_name)
                            <input type="hidden" name="page_name" value="{{$contact_page_name}}">
                            @endisset
                            <input type="text" placeholder="{{__('contact-us.Name')}}" name="name" id="name" required>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" placeholder="{{__('contact-us.Company name')}}" name="company_name"
                                id="company_name" required>
                            @error('company_name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="email" placeholder="{{__('contact-us.Email')}}" name="email" id="email"
                                required>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="m-3 contact_form d-flex justify-content-start">
                            <select name="country" id="" required>
                                <option disabled selected hidden style="color:#DDD">
                                    {{__('contact-us.Select your country')}}</option>
                                <option value="Saudi Arabia">{{__('contact-us.Saudi Arabia')}}</option>
                                <option value="Egypt">{{__('contact-us.Egypt')}}</option>
                                <option value="Jordan">{{__('contact-us.Jordan')}}</option>
                                <option value="Oman">{{__('contact-us.Oman')}}</option>
                                <option value="UAE">{{__('contact-us.UAE')}}</option>
                                <option value="Libya">{{__('contact-us.Libya')}}</option>
                                <option value="Bahrain">{{__('contact-us.Bahrain')}}</option>
                                <option value="Tunisia">{{__('contact-us.Tunisia')}}</option>
                                <option value="Morocco">{{__('contact-us.Morocco')}}</option>
                                <option value="Kuwait">{{__('contact-us.Kuwait')}}</option>
                                <option value="Qatar">{{__('contact-us.Qatar')}}</option>
                                <option value="Algeria">{{__('contact-us.Algeria')}}</option>
                                <option value="Somalia">{{__('contact-us.Somalia')}}</option>
                                <option value="Iraq">{{__('contact-us.Iraq')}}</option>
                                <option value="Syrian">{{__('contact-us.Syrian')}}</option>
                                <option value="Palestine">{{__('contact-us.Palestine')}}</option>
                                <option value="Lebanon">{{__('contact-us.Lebanon')}}</option>
                                <option value="Other - Record the international phone number">
                                    {{__('contact-us.Other - Record the international phone number')}}</option>
                            </select>
                            @error('country')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="tel" placeholder="{{__('contact-us.Mobile number')}}" name="phone" id="phone"
                                required>
                            @error('phone')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="m-3  d-flex justify-content-start">
                            <textarea name="notes" id="" cols="30" rows="10"
                                placeholder="{{__('contact-us.Enter your message')}}"></textarea>
                            @error('notes')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="m-3 d-flex justify-content-start">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        <div class="m-3  d-flex justify-content-start">
                            <input type="submit" value="{{__('contact-us.Submit')}}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
