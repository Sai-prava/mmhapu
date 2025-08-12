<div class="row">
    <div class="col-md-12">
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Document</th>
                </tr>
            </thead>
            <tbody>
                @foreach (App\Models\DocumentCategory::where('is_ex_service_man',0)->where('is_disabled_person',0)->get()  as $key => $category)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        @if($category->document($prospect->id))                 
                            <a href="{{route('prospect.dashboard.download_document',$category->document($prospect->id)->id)}}" target="_blank" class="nav-link">
                                <i class="icon-download"></i>
                                Download Document
                            </a>
                        @else 
                            <span class="badge badge-danger">Pending</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>