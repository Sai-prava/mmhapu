@extends('admin.layout.index')

@section('title')
    Degree Certificate
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Degree Certificate</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.certificate.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-6 mb-3">
                       
                        <label class="form-label">Degree<span>*</span></label>
                        <select name="degree_id" id="degree_id" class="form-control">
                            <option value="">-- Select Degree --</option>
                            @foreach ($degree as $deg)
                                <option value="{{ $deg->id }}">{{ $deg->name }}</option>
                            @endforeach
                        </select>
                        @error('degree_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Changes Type<span>*</span></label>
                        <select name="change_type" class="form-control">
                            <option value="">---CHOOSE---</option>
                            <option value="Original">Original</option>
                            <option value="Duplicate">Duplicate</option>
                            <option value="Correction">Correction</option>
                        </select>
                        @error('degree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Request Document<span>*</span></label>
                        <select name="document_id[]" class="form-control" multiple>
                            @foreach ($documents as $document)
                                <option value="{{ $document->id }}">{{ $document->name }}</option>
                            @endforeach
                        </select>
                        @error('degree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Price<span>*</span></label>
                        <input type="number" name="price" class="form-control" placeholder="Enter Price">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="form-label">Urgent Mode</label>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="urgent_mode" name="status"
                                value="1">
                            <label class="form-check-label" for="urgent_mode">Enable urgent processing</label>
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let urgentCheckbox = document.getElementById("urgent_mode");
        let degreeSelect = document.getElementById("degree_id");

        urgentCheckbox.addEventListener("change", function() {
            let degreeOption = degreeSelect.querySelector(
            'option[value="4"]'); // ID of DEGREE CERTIFICATE

            if (this.checked) {
                if (degreeOption) {
                    degreeOption.style.display = "none";
                    if (degreeSelect.value === "4") {
                        degreeSelect.value = ""; // Reset if selected
                    }
                }
            } else {
                if (degreeOption) {
                    degreeOption.style.display = "block";
                }
            }
        });
    });
</script>
