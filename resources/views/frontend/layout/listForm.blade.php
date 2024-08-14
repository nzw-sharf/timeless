<div class="formCont">
    <form action="{{route('listingForm')}}" method="post" class="listingForm">
        @csrf
        <div class="row ">
            <div class="col-12 col-lg-12 col-md-12">
                <label for="">Information</label>
                <div class="row">
                    {{-- <div class="col-12">
                        <input type="text" class="form-control" placeholder="I'm a..." name="purpose"
                            required>
                    </div> --}}
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="First name" name="fname"
                            required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Last name" name="lname">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="email" class="form-control" placeholder="Email Address"
                            name="email" required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input id="fullNumber" type="hidden" name="fullNumber">
                                            <input type="tel" onkeyup="numbersOnly(this)" class="form-control contField" id="telephone" name="phone" placeholder="Mobile"
                                                 required>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 col-lg-6 col-md-6">
                <label for="">Property</label>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <select name="property_type" id="property_type" class="form-control" required>
                            <option value="" hidden>Property Type</option>
                            <option value="Apartment">Apartment</option>
                            <option value="Villa">Villa</option>
                            <option value="Townhouse">Townhouse</option>
                            <option value="Office">Office</option>
                            <option value="Retail">Retail</option>
                            <option value="Building">Building</option>
                            <option value="Other (Residential)">Other (Residential)</option>
                            <option value="Other (Commercial)">Other (Commercial)</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Location" name="location"
                            required>
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Asking Price" name="price">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Property Size(sq.ft.)"
                            name="area">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Number of Beds"
                            name="beds">
                    </div>
                    <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Number of Baths"
                            name="baths">
                    </div>

                </div>
            </div> --}}
            <div class="col-12 col-lg-12 col-md-12">
                <label for="">Additional Message or Requests</label>
                <textarea name="message" id="message" rows="3" class="form-control"
                    placeholder=""></textarea>
            </div>
            <div class="col-12 col-lg-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary my-3">SUBMIT</button>
                <div class="text-center pt-2 fs-11">By submitting this form, you consent to the collection and use of your personal information as outlined in our Privacy Policy.</div>
            </div>

        </div>
    </form>
</div>