@extends('admin.layout.index')

@section('title')
Gateway
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Gateway</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.gateway.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="user_id" class="form-label">Select College<span style="color: red">*</span></label>
                        <select  name="user_id"  id="user_id" class="form-control">
                            <option selected value="">Select College</option>
                            @foreach(App\Models\User::where('role_id',2)->get() as $college)
                            <option value="{{$college->id}}">{{$college->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="type" class="form-label">Select Type<span style="color: red">*</span></label>
                        <select  name="type"  id="type" class="form-control">
                            <option  value="">Select Type</option>
                            <option selected value="Normal">Normal</option>
                            <option value="IOB">IOB</option>
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="merchant_name" class="form-label">Merchant Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="merchant_name" placeholder="Enter Name" value="MADHUSUDAN LAW UNIVERSITY" required>
                    </div>
                    <div class="col-lg-6 mb-3 normal_fields">
                        <label for="key_id" class="form-label">Key ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control normal_field" name="key_id" placeholder="Enter Key ID#" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 normal_fields">
                        <label for="key_secret" class="form-label">Key Secret<span style="color: red">*</span></label>
                        <input type="text" class="form-control normal_field" name="key_secret" placeholder="Enter Key Secret" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="merchant_id" class="form-label">Merchant ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="merchant_id" id="merchant_id" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="merchant_sub_id" class="form-label">Merchant Sub ID<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="merchant_sub_id" id="merchant_sub_id" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="encryption_key" class="form-label">Encryption Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="encryption_key" id="encryption_key" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="encryption_iv" class="form-label">Encryption iv<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="encryption_iv" id="encryption_iv" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="sign_key" class="form-label">Sign Key<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="sign_key" id="sign_key" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="secret_password_hash" class="form-label">Secret Password Hash<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="secret_password_hash" id="secret_password_hash" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="token_generate_url" class="form-label">Token Generate Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="token_generate_url" id="token_generate_url" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="txn_initiation_url" class="form-label">Txn Initiation Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="txn_initiation_url" id="txn_initiation_url" value="" required>
                    </div>
                    <div class="col-lg-6 mb-3 iob_fields" style="display:none;">
                        <label for="tnx_status_url" class="form-label">Txn Status Url<span style="color: red">*</span></label>
                        <input type="text" class="form-control iob_field" name="tnx_status_url" id="tnx_status_url" value="" required>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
<script>
    $(document).on('change', '#type', function() {
        var type = $(this).val();
        if(type == 'IOB')
        {
            $(".normal_fields").hide();
            $(".normal_field").attr('required',false);
            $(".iob_fields").show();
            $(".iob_field").attr('required',true);
        }else{
            $(".iob_fields").hide();
            $(".normal_fields").show();
            $(".iob_field").attr('required',false);
            $(".normal_field").attr('required',true);
        }
    });
</script>
@endsection
