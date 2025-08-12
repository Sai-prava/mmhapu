<form id="stepFourForm" action="{{ route('prospect.dashboard.store_step_4') }}" enctype="multipart/form-data" method="POST">
    @csrf
    <hr>
    <div class="media mb-0">
        <div class="media-body">
            <h4 class="font-weight-semibold mb-0 text-center">
                 STEP 4 - DOCUMENT UPLOADED
            </h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-md-1">
            #
        </div>
        <div class="form-group col-md-4">
            Name
        </div>
        <div class="form-group col-md-3">
            Document Type
        </div>
        <div class="form-group col-md-4">
            Document
        </div>
    </div>      
    <div class="row">
        @php 
        $index= 0;
        @endphp
        @foreach (Auth::user()->getDocumentCategories()  as $category)
        <div class="form-group col-md-1">
            @php 
            $index= $index + 1;
            @endphp
            {{$index}}
        </div>
        <div class="form-group col-md-4">
            {{$category->name}} <span style="color:red;">@if($category->is_required) Required* @endif</span>
            <input type="hidden" name="document_category_id[]" value="{{$category->id}}" class="form-control" required >
            <input type="hidden" name="is_required[]" value="{{$category->is_required}}" class="form-control" required >
            <input type="hidden" name="file_type[]" value="{{$category->file_type}}" class="form-control" required >
        </div>
        <div class="form-group col-md-3">
            {{$category->file_type}}
        </div>
        <div class="form-group col-md-4">
            {{-- <input type="file"  name="{{$category->type}}" class="form-control" @if($category->is_required) required @endif > --}}

            <input type="file"  name="document[{{$category->id}}]" class="form-control" @if($category->is_required) required @endif >
        </div>
        @endforeach
        @if(@request()->session()->get('application_process')->ex_service_man)
        @foreach (App\Models\DocumentCategory::where('is_ex_service_man',1)->get()  as $serviceCategory)
        <div class="form-group col-md-1">
            
            @php 
            $index= $index + 1;
            @endphp
            {{$index}}
        </div>
        <div class="form-group col-md-4">
            {{$serviceCategory->name}} <span style="color:red;">@if($serviceCategory->is_required) Required* @endif</span>
            <input type="hidden" name="document_category_id[]" value="{{$serviceCategory->id}}" class="form-control" required >
            <input type="hidden" name="is_required[]" value="{{$serviceCategory->is_required}}" class="form-control" required >
            <input type="hidden" name="file_type[]" value="{{$serviceCategory->file_type}}" class="form-control" required >
        </div>
        <div class="form-group col-md-3">
            {{$serviceCategory->file_type}}
        </div>
        <div class="form-group col-md-4">
            {{-- <input type="file"  name="{{$category->type}}" class="form-control" @if($category->is_required) required @endif > --}}

            <input type="file"  name="document[{{$serviceCategory->id}}]" class="form-control" @if($serviceCategory->is_required) required @endif >
        </div>
        @endforeach
        @endif
        @if(@request()->session()->get('application_process')->persons_with_disability)
        @foreach (App\Models\DocumentCategory::where('is_disabled_person',1)->get()  as $disabledDocument)
        <div class="form-group col-md-1">
            
            @php 
            $index= $index + 1;
            @endphp
            {{$index}}
        </div>
        <div class="form-group col-md-4">
            {{$disabledDocument->name}} <span style="color:red;">@if($disabledDocument->is_required) Required* @endif</span>
            <input type="hidden" name="document_category_id[]" value="{{$disabledDocument->id}}" class="form-control" required >
            <input type="hidden" name="is_required[]" value="{{$disabledDocument->is_required}}" class="form-control" required >
            <input type="hidden" name="file_type[]" value="{{$disabledDocument->file_type}}" class="form-control" required >
        </div>
        <div class="form-group col-md-3">
            {{$disabledDocument->file_type}}
        </div>
        <div class="form-group col-md-4">
            {{-- <input type="file"  name="{{$category->type}}" class="form-control" @if($category->is_required) required @endif > --}}

            <input type="file"  name="document[{{$disabledDocument->id}}]" class="form-control" @if($disabledDocument->is_required) required @endif >
        </div>
        @endforeach
        @endif
    </div>   
    <p>Click On Submit Button to prcoess your application. Please recheck your application before submission</p>
    <p id="step-response"></p>
    <div class="text-right" style="margin-top:10px;">
        <button type="button" id="back-button" class="btn btn-info">Back <i class="icon-paperplane ml-2"></i></button>
        <button type="submit"  class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
    </div> 
</form>
