@extends('admin.layout.index')

@section('title')
    Degree Certificate
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Degree Certificate</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.degree.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit_degree->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Degree<span>*</span></label>
                        <select name="degree_id" id="degree_id" class="form-control">
                            <option value="">-- Select Degree --</option>
                            @foreach ($degree as $deg)
                                <option value="{{ $deg->id }}"
                                    {{ old('degree_id', $edit_degree->degree_id) == $deg->id ? 'selected' : '' }}>
                                    {{ $deg->name }}
                                </option>
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
                            <option value="Original" {{ $edit_degree->change_type === 'Original' ? 'selected' : '' }}>
                                Original</option>
                            <option value="Duplicate" {{ $edit_degree->change_type === 'Duplicate' ? 'selected' : '' }}>
                                Duplicate</option>
                            <option value="Correction" {{ $edit_degree->change_type === 'Correction' ? 'selected' : '' }}>
                                Correction</option>
                        </select>
                        @error('degree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Request Document<span>*</span></label>
                        <select name="document_id[]" class="form-control" multiple>
                            @foreach ($documents as $document)
                                <option value="{{ $document->id }}"
                                    {{ in_array($document->id, json_decode($edit_degree->document_id, true) ?? []) ? 'selected' : '' }}>
                                    {{ $document->name }}</option>
                            @endforeach
                        </select>
                        @error('degree')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Price<span>*</span></label>
                        <input type="number" name="price" class="form-control" placeholder="Enter Price"
                            value="{{ $edit_degree->price }}">
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label">Urgent Mode</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="urgent_mode" name="status"
                                    value="1" {{ $edit_degree->status == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="urgent_mode">Enable urgent processing</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
<script>
    document.getElementById('urgent_mode').addEventListener('change', function() {
        document.querySelector('.urgent-mode-amount').style.display = this.checked ? 'block' : 'none';
    });
</script>
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
