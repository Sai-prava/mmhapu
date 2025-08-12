{{-- <form id="studentDoncumentUpdateForm" enctype="multipart/form-data"  action="{{route('prospect.dashboard.student_document_update')}}" method="POST">
    @csrf --}}
    <div class="row">
        <div class="form-group col-md-1">
            #
        </div>
        <div class="form-group col-md-3">
            Name
        </div>
        <div class="form-group col-md-2">
            Document Type
        </div>
        <div class="form-group col-md-3">
            Status
        </div>
        <div class="form-group col-md-3">
            Document
        </div>
    </div>      
    <div class="row">
        @php 
        $index = 0;
        @endphp
        @foreach (Auth::user()->getDocumentCategories()  as $key => $category)
        <div class="form-group col-md-1">    
            @php 
            $index = $index+1;
            @endphp
            {{$index}}
        </div>
        <div class="form-group col-md-3">
            {{$category->name}} <span style="color:red;">@if($category->is_required) Required* @endif</span>
            <input type="hidden" name="document_category_id[]" value="{{$category->id}}" class="form-control" required >
        </div>
        <div class="form-group col-md-2">
            {{$category->file_type}}
        </div>
        <div class="form-group col-md-3">
            @if($category->document())                 
            <a href="{{route('prospect.dashboard.download_document',$category->document()->id)}}" target="_blank" class="nav-link">
                <i class="icon-download"></i>
                Download Document
            </a>
        @else 
            <span class="badge badge-danger">Pending</span>
        @endif
        </div>
        <div class="form-group col-md-3">

            {{-- <input type="file"  name="document[]" class="form-control" @if($category->is_required) required @endif > --}}
        </div>
        @endforeach
        @if(Auth::user()->studentProfile->persons_with_disability == 1)
        @foreach (App\Models\DocumentCategory::where('is_disabled_person',1)->get()  as $disabledCategory)
            <div class="form-group col-md-1">
                @php 
            $index = $index+1;
            @endphp
            {{$index}}
            </div>
            <div class="form-group col-md-3">
                {{$disabledCategory->name}} <span style="color:red;">@if($disabledCategory->is_required) Required* @endif</span>
                <input type="hidden" name="document_category_id[]" value="{{$disabledCategory->id}}" class="form-control" required >
            </div>
            <div class="form-group col-md-2">
                {{$disabledCategory->file_type}}
            </div>
            <div class="form-group col-md-3">
                @if($disabledCategory->document())                 
                <a href="{{route('prospect.dashboard.download_document',$disabledCategory->document()->id)}}" target="_blank" class="nav-link">
                    <i class="icon-download"></i>
                    Download Document
                </a>
            @else 
                <span class="badge badge-danger">Pending</span>
            @endif
            </div>
            <div class="form-group col-md-3">

                {{-- <input type="file"  name="document[]" class="form-control" @if($category->is_required) required @endif > --}}
            </div>
            @endforeach

        @endif
        @if(Auth::user()->studentProfile->ex_service_man == 1) 
        @foreach (App\Models\DocumentCategory::where('is_ex_service_man',1)->get()  as $key => $serviceCategory)
            <div class="form-group col-md-1">
                @php 
            $index = $index+1;
            @endphp
            {{$index}}
            </div>
            <div class="form-group col-md-3">
                {{$serviceCategory->name}} <span style="color:red;">@if($serviceCategory->is_required) Required* @endif</span>
                <input type="hidden" name="document_category_id[]" value="{{$serviceCategory->id}}" class="form-control" required >
            </div>
            <div class="form-group col-md-2">
                {{$serviceCategory->file_type}}
            </div>
            <div class="form-group col-md-3">
                @if($serviceCategory->document())                 
                <a href="{{route('prospect.dashboard.download_document',$serviceCategory->document()->id)}}" target="_blank" class="nav-link">
                    <i class="icon-download"></i>
                    Download Document
                </a>
            @else 
                <span class="badge badge-danger">Pending</span>
            @endif
            </div>
            <div class="form-group col-md-3">

                {{-- <input type="file"  name="document[]" class="form-control" @if($category->is_required) required @endif > --}}
            </div>
            @endforeach
         @endif
    </div>   
    {{-- <div class="text-right" style="margin-top:10px;">
        <button type="button" id="back-button" class="btn btn-info">Back <i class="icon-paperplane ml-2"></i></button>
        <button type="submit" class="btn btn-primary">Next <i class="icon-paperplane ml-2"></i></button>
    </div> 
</form> --}}
