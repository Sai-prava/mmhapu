@extends('admin.layout.index')

@section('title')
    Application Online Certificate
@endsection

@section('content')
<div class="main-body">
    <div class="page-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Application Online Certificate</h5>
                        <div class="header-elements d-flex flex-wrap">
                            <div class="me-3">
                                <label for="from_date">Date From:</label>
                                <input type="date" class="form-control" id="from_date" name="from_date">
                            </div>
                            <div class="me-3">
                                <label for="to_date">Date To:</label>
                                <input type="date" class="form-control" id="to_date" name="to_date">
                            </div>
                            <div class="me-3 align-self-end">
                                <button class="btn btn-primary" id="filter_button">Filter</button>
                            </div>
                        </div>
                        <div class="header-elements ms-3">
                            <label for="payment_type">Payment Status:</label>
                            <select class="form-control" id="payment_type">
                                <option value="">Choose</option>
                                <option value="completed">Completed</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-block pdng">
                        <div class="table-responsive">
                            <table id="payment_table" class="display table table-bordered nowrap table-striped table-hover" style="width:100%">
                                <thead class="bg-primary text-white sticky-top">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Registration No.</th>
                                        <th>Roll No.</th>
                                        <th>Course.</th>
                                        <th>Session</th>
                                        <th>Request No.</th>
                                        <th>Request for</th>
                                        <th>Applied Certificate</th>
                                        <th>Date of Application</th>
                                        <th>Payment Status</th>
                                        <th>Transaction Number</th>
                                        <th>Transaction Date</th>
                                        <th>Payment Method</th>
                                        <th>Certificate Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function() {
    const table = $('#payment_table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        dom: 'Bfrtip',
        buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
        ajax: {
            url: "{{ route('admin.getCertificatesData') }}",
            data: function(d) {
                d.from_date = $('#from_date').val();
                d.to_date = $('#to_date').val();
                d.payment_type = $('#payment_type').val();
            }
        },
        order: [[9, 'desc']],
        columns: [
            { data: 'DT_RowIndex', orderable: false, searchable: false },
            { data: 'name', name: 'name' },
            { data: 'reg_no', name: 'reg_no' },
            { data: 'roll_no', name: 'roll_no' },
            { data: 'course', name: 'course' },
            { data: 'session', name: 'session' },
            { data: 'request_id', name: 'request_id' },
            { data: 'change_type', name: 'change_type' },
            { data: 'certificate', name: 'certificate' },
            { data: 'created_at_formatted', name: 'created_at' },
            { data: 'payment_status', orderable: false, searchable: false },
            { data: 'transaction_number', orderable: false, searchable: false },
            { data: 'transaction_date', orderable: false, searchable: false },
            { data: 'payment_method', orderable: false, searchable: false },
            { data: 'certificate_status_text', name: 'certificate_status' },
            { data: 'action', orderable: false, searchable: false }
        ]
    });

    $('#filter_button').on('click', function() {
        table.ajax.reload();
    });

    $('#payment_type').on('change', function() {
        table.ajax.reload();
    });

    // Delete action
    $(document).on('click', '.delete-btn', function () {
        let url = $(this).data('url');
        if (confirm('Are you sure you want to delete this certificate?')) {
            $.ajax({
                url: url,
                type: 'GET', // keep GET to match your backend route
                success: function () {
                    $('#payment_table').DataTable().ajax.reload(null, false);
                    alert('Deleted successfully');
                },
                error: function () {
                    alert('Something went wrong.');
                }
            });
        }
    });
});
</script>
@endsection
