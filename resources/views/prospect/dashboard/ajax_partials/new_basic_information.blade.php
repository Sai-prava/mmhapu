<form id="stepTwoForm" method="POST">
    @csrf
    <hr>
    <div class="media mb-0">
        <div class="media-body">
            <h4 class="font-weight-semibold mb-0 text-center">
                STEP 2 - BASIC INFORMATION 
            </h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Gender</label>
                <br>
                <input type="radio" {{@request()->session()->get('application_process')->gender == 'Male' ? 'checked' : '' }}  @if(!@request()->session()->get('application_process')->gender) checked @endif name="gender"  value="Male" class=""> Male 
                <input type="radio" {{@request()->session()->get('application_process')->gender == 'Female' ? 'checked' : '' }} name="gender" value="Female" class=""> Female 
                <input type="radio" {{@request()->session()->get('application_process')->gender == 'Sehmale' ? 'checked' : '' }} name="gender" value="Sehmale" class=""> Others 
            
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Caste</label>
                <br>
                <input type="radio" name="caste" {{@request()->session()->get('application_process')->caste == 'General' ? 'checked' : '' }}  @if(!@request()->session()->get('application_process')->gender) checked @endif  value="General" class=""> General 
                <input type="radio" name="caste" {{@request()->session()->get('application_process')->caste == 'SC' ? 'checked' : '' }} value="SC" class=""> SC 
                <input type="radio" name="caste" {{@request()->session()->get('application_process')->caste == 'ST' ? 'checked' : '' }} value="ST" class=""> ST 
                <input type="radio" name="caste" {{@request()->session()->get('application_process')->caste == 'OBC' ? 'checked' : '' }} value="OBC" class=""> OBC 
                <input type="radio" name="caste" {{@request()->session()->get('application_process')->caste == 'SEBC' ? 'checked' : '' }} value="SEBC" class=""> SEBC 
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Persons With Disability</label>
                <br>
                <input type="radio" {{@request()->session()->get('application_process')->persons_with_disability ? 'checked' : '' }} name="persons_with_disability" value="1" class=""> Yes 
                <input type="radio" {{!@request()->session()->get('application_process')->persons_with_disability ? 'checked' : '' }} name="persons_with_disability" value="0" class=""> No 
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Ex-service Man</label>
                <br>
                <input type="radio" {{@request()->session()->get('application_process')->ex_service_man ? 'checked' : '' }} name="ex_service_man" value="1" class=""> Yes 
                <input type="radio" {{!@request()->session()->get('application_process')->ex_service_man ? 'checked' : '' }} name="ex_service_man" value="0" class=""> No 
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Religion</label>
                <br>
                <input type="radio" name="religion" {{@request()->session()->get('application_process')->religion == 'Hindu' ? 'checked' : '' }}  @if(!@request()->session()->get('application_process')->religion) checked @endif  value="Hindu" class=""> Hindu  
                <input type="radio" name="religion" {{@request()->session()->get('application_process')->religion == 'Muslim' ? 'checked' : '' }} value="Muslim" class=""> Muslim 
                <input type="radio" name="religion" {{@request()->session()->get('application_process')->religion == 'Christian' ? 'checked' : '' }} value="Christian" class=""> Christian 
                <input type="radio" name="religion" {{@request()->session()->get('application_process')->religion == 'Sikh' ? 'checked' : '' }} value="Sikh" class=""> Sikh 
                <input type="radio" name="religion" {{@request()->session()->get('application_process')->religion == 'Others' ? 'checked' : '' }} value="Others" class=""> Others 
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Nationality</label>
                <select  name="nationality" id="nationality"  class="form-control" >
                    <option disabled>Select Nationality</option>
                    <option {{@request()->session()->get('application_process')->nationality == 'Indian' ? 'selected' : '' }}  @if(!@request()->session()->get('application_process')->nationality) selected @endif value="Indian">Indian</option>
                    <option {{@request()->session()->get('application_process')->nationality == 'Others' ? 'selected' : '' }} value="Others">Others</option>
                </select>
            </div>
        </div>
        <div class="col-md-2 other_nationality" style="display:none;">
            <div class="form-group">
                <label>Other Nationality</label>
                <input type="text" value="{{@request()->session()->get('application_process')->other_nationality_1}}" name="other_nationality_1" class="form-control" placeholder="Other Nationality" class="">  
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label>Mother Tongue</label>
                <input type="text" name="mother_tongue"  value="{{@request()->session()->get('application_process')->mother_tongue}}"class="form-control" placeholder="Mother Tongue" class="">  
            </div>
        </div>
    </div>
    <p>Present Address /  Address For Correspondence</p>
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" name="type[]" value="Temparory">
            <div class="form-group">
                <label>Holding No. / Premise's Name</label>
                <input type="text" value="{{@request()->session()->get('application_process')->premise_name ? @request()->session()->get('application_process')->premise_name[0] : '' }}" name="premise_name[]" id="temparory_premise_name" class="form-control" placeholder="Holding No. / Premise's Name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Plot No.</label>
                <input type="text"  name="plot_no[]" value="{{@request()->session()->get('application_process')->plot_no ? @request()->session()->get('application_process')->plot_no[0] : '' }}" id="temparory_plot_no" class="form-control" placeholder="Plot No.">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Locality <small style="color:red;">*</small></label>
                <input type="text"  name="locality[]" value="{{@request()->session()->get('application_process')->locality ? @request()->session()->get('application_process')->locality[0] : '' }}" id="temparory_locality" class="form-control" placeholder="Locality">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Sub Locality</label>
                <input type="text"  name="sub_locality[]" value="{{@request()->session()->get('application_process')->sub_locality ? @request()->session()->get('application_process')->sub_locality[0] : '' }}" id="temparory_sub_locality" class="form-control" placeholder="Sub Locality">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Land Mark</label>
                <input type="text"  name="landmark[]" value="{{@request()->session()->get('application_process')->landmark ? @request()->session()->get('application_process')->landmark[0] : '' }}" id="temparory_land_mark"  class="form-control" placeholder="Land Mark">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Village</label>
                <input type="text"  name="village[]"  value="{{@request()->session()->get('application_process')->village ? @request()->session()->get('application_process')->village[0] : '' }}" id="temparory_village"  class="form-control" placeholder="Village">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Post Office <small style="color:red;">*</small></label>
                <input type="text"  name="post_office[]" value="{{@request()->session()->get('application_process')->post_office ? @request()->session()->get('application_process')->post_office[0] : '' }}"  id="temparory_post_office"  class="form-control" placeholder="Post Office">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Police Station <small style="color:red;">*</small></label>
                <input type="text" value="{{@request()->session()->get('application_process')->police_station ? @request()->session()->get('application_process')->police_station[0] : '' }}"  name="police_station[]" id="temparory_police_station" class="form-control">
                {{-- <select  name="police_station[]" id="temparory_police_station_id"  class="form-control " data-fouc>
                    <option selected disabled>Select Police Station</option>
                    @foreach(App\Models\PoliceStation::all() as $police_station)
                    <option value="{{$police_station->id}}">{{$police_station->name}}</option>
                    @endforeach
                </select> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Country <small style="color:red;">*</small></label>
                <select  name="country_id[]"  id="temparory_country_id"  class="form-control">
                    <option selected disabled>Select Country</option>
                    @foreach(App\Models\Country::all() as $country)
                    <option {{@request()->session()->get('application_process')->country_id &&  @request()->session()->get('application_process')->country_id[0] == $country->id  ? 'selected' : '' }} value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>State <small style="color:red;">*</small></label>
                <select  name="state_id[]" id="temparory_state_id"  class="form-control" >
                    @if(@request()->session()->get('application_process')->country_id && @request()->session()->get('application_process')->country_id[0])
                        @foreach(App\Models\State::where('country_id',@request()->session()->get('application_process')->country_id[0])->get() as $state)
                            <option {{@request()->session()->get('application_process')->state_id &&  @request()->session()->get('application_process')->state_id[0] == $state->id  ? 'selected' : '' }}  value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>City <small style="color:red;">*</small></label>
                <select  name="city[]" id="temparory_city_id"  class="form-control" >
                    @if(@request()->session()->get('application_process')->state_id && @request()->session()->get('application_process')->state_id[0])
                        @foreach(App\Models\City::where('state_id',@request()->session()->get('application_process')->state_id[0])->get() as $city)
                            <option {{@request()->session()->get('application_process')->city_id &&  @request()->session()->get('application_process')->city_id[0] == $city->id  ? 'selected' : '' }}  value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pin Code<small style="color:red;">*</small></label>
                <input type="text" name="pin[]" value="{{@request()->session()->get('application_process')->pin ? @request()->session()->get('application_process')->pin[0] : '' }}"  id="temparory_pin" class="form-control" placeholder="Pin Code">
            </div>
        </div>
    </div>
    <p><h5>Permenant Address :</h5></p>
    <div class="row col-md-12">
        <input type="checkbox" {{@request()->session()->get('application_process')->same_as_temparory  ? 'checked' : '' }} name="same_as_temparory" id="same_as_temparory"> Same as Temparory
    </div>
    <div class="row permenant_fields" @if(@request()->session()->get('application_process')->same_as_temparory) style="display:none;" @endif>
        <div class="col-md-4">
            <div class="form-group">
                <input type="hidden" name="type[]" value="Permenant">
                <label>Holding No. / Premise's Name</label>
                <input type="text"  name="premise_name[]" value="{{@request()->session()->get('application_process')->premise_name && @request()->session()->get('application_process')->premise_name[1]  ? @request()->session()->get('application_process')->premise_name[1] : '' }}" id="permenant_premise_name" class="form-control" placeholder="Holding No. / Premise's Name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Plot No.</label>
                <input type="text"  name="plot_no[]" value="{{@request()->session()->get('application_process')->plot_no && @request()->session()->get('application_process')->plot_no[1]  ? @request()->session()->get('application_process')->plot_no[1] : '' }}" id="permenant_plot_no" class="form-control" placeholder="Plot No.">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Locality <small style="color:red;">*</small></label>
                <input type="text"  name="locality[]" value="{{@request()->session()->get('application_process')->locality && @request()->session()->get('application_process')->locality[1]  ? @request()->session()->get('application_process')->locality[1] : '' }}" id="permenant_locality" class="form-control" placeholder="Locality">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Sub Locality</label>
                <input type="text"  name="sub_locality[]" value="{{@request()->session()->get('application_process')->sub_locality && @request()->session()->get('application_process')->sub_locality[1]  ? @request()->session()->get('application_process')->sub_locality[1] : '' }}" id="permenant_sub_locality" class="form-control" placeholder="Sub Locality">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Land Mark</label>
                <input type="text"  name="landmark[]"  value="{{@request()->session()->get('application_process')->landmark && @request()->session()->get('application_process')->landmark[1]  ? @request()->session()->get('application_process')->landmark[1] : '' }}" id="permenant_land_mark"  class="form-control" placeholder="Land Mark">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Village</label>
                <input type="text"  name="village[]"  value="{{@request()->session()->get('application_process')->village && @request()->session()->get('application_process')->village[1]  ? @request()->session()->get('application_process')->village[1] : '' }}" id="permenant_village"  class="form-control" placeholder="Village">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Post Office <small style="color:red;">*</small></label>
                <input type="text"  name="post_office[]" value="{{@request()->session()->get('application_process')->post_office && @request()->session()->get('application_process')->post_office[1]  ? @request()->session()->get('application_process')->post_office[1] : '' }}"  id="permenant_post_office"  class="form-control" placeholder="Post Office">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Police Station <small style="color:red;">*</small></label>
                <input type="text" value="{{@request()->session()->get('application_process')->police_station && @request()->session()->get('application_process')->police_station[1]  ? @request()->session()->get('application_process')->police_station[1] : '' }}" name="police_station[]" id="permenant_police_station"  class="form-control" >
                {{-- <select  name="police_station_id[]" id="permenant_police_station_id"  class="form-control " data-fouc>
                    <option selected disabled>Select Police Station</option>
                    @foreach(App\Models\PoliceStation::all() as $police_station)
                    <option value="{{$police_station->id}}">{{$police_station->name}}</option>
                    @endforeach
                </select> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Country <small style="color:red;">*</small></label>
                <select  name="country_id[]"  id="permenant_country_id"  class="form-control" >
                    <option selected value="">Select Country</option>
                    @foreach(App\Models\Country::all() as $country)
                    <option {{@request()->session()->get('application_process')->country_id &&  @request()->session()->get('application_process')->country_id[1] == $country->id  ? 'selected' : '' }} value="{{$country->id}}">{{$country->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>State <small style="color:red;">*</small></label>
                <select  name="state_id[]"  id="permenant_state_id"  class="form-control">
                    <option selected value="" >Select State</option>
                    @if(@request()->session()->get('application_process')->country_id && @request()->session()->get('application_process')->country_id[1])
                        @foreach(App\Models\State::where('country_id',@request()->session()->get('application_process')->country_id[1])->get() as $state)
                            <option {{@request()->session()->get('application_process')->state_id &&  @request()->session()->get('application_process')->state_id[1] == $state->id  ? 'selected' : '' }}  value="{{$state->id}}">{{$state->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>City <small style="color:red;">*</small></label>
                <select  name="city[]"  id="permenant_city_id"  class="form-control">
                    <option selected value="" >Select City</option>
                    @if(@request()->session()->get('application_process')->state_id && @request()->session()->get('application_process')->state_id[1])
                        @foreach(App\Models\City::where('state_id',@request()->session()->get('application_process')->state_id[1])->get() as $city)
                            <option {{@request()->session()->get('application_process')->city_id &&  @request()->session()->get('application_process')->city_id[1] == $city->id  ? 'selected' : '' }}  value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Pin Code<small style="color:red;">*</small></label>
                <input type="text"  name="pin[]" value="{{@request()->session()->get('application_process')->pin && @request()->session()->get('application_process')->pin[1]  ? @request()->session()->get('application_process')->pin[1] : '' }}" id="permenant_pin" class="form-control" placeholder="Pin Code">
            </div>
        </div>
    </div>
    <p id="step-response"></p>
    <div class="text-right" style="margin-top:10px;">
        <button type="button" id="back-button" class="btn btn-info">Back <i class="icon-paperplane ml-2"></i></button>
        <button type="button"  id="step-2-btn" class="btn btn-primary">Next <i class="icon-paperplane ml-2"></i></button>
    </div> 
</form>