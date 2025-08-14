@extends('admin.layout.index')

@section('title')
    Application Online Certificate
@endsection

<style>
    .urgent-row {
        background-color: #fff3cd !important;
        border-left: 4px solid #ffc107 !important;
    }
    
    .urgent-row:hover {
        background-color: #ffeaa7 !important;
    }
    
    .badge.bg-warning {
        color: #000 !important;
        font-weight: bold;
    }
    
    .badge.bg-secondary {
        color: #fff !important;
    }
</style>

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
                            <div class="me-3">
                                <label for="urgent_mode">Urgent Mode:</label>
                                <select class="form-control" id="urgent_mode">
                                    <option value="">All</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
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
                        {{-- <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    <strong>Filter Summary:</strong>
                                    <span id="total-count">0</span> total applications
                                    <span id="urgent-count" class="ms-3">0</span> urgent
                                    <span id="normal-count" class="ms-3">0</span> normal
                                </div>
                            </div>
                        </div> --}}
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
                                        <th>Urgent Mode</th>
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
            type: 'POST',
            data: function(d) {
                d.from_date = $('#from_date').val();
                d.to_date = $('#to_date').val();
                d.payment_type = $('#payment_type').val();
                d.urgent_mode = $('#urgent_mode').val();
                d._token = "{{ csrf_token() }}";
            },
            error: function(xhr, error, thrown) {
                console.error('DataTables Ajax error:', {
                    xhr: xhr,
                    error: error,
                    thrown: thrown,
                    responseText: xhr.responseText
                });
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
            { data: 'degree_name', name: 'degree_name' }, // Changed from 'certificate' to 'degree_name'
            { data: 'urgent_mode_status', name: 'urgent_mode_status', orderable: false, searchable: false },
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

    $('#urgent_mode').on('change', function() {
        table.ajax.reload();
    });

    // Update summary counts when table data changes
    table.on('xhr.dt', function() {
        let data = table.ajax.json();
        if (data && data.recordsTotal !== undefined) {
            $('#total-count').text(data.recordsTotal);
            
            // Count urgent and normal applications from current data
            let urgentCount = 0;
            let normalCount = 0;
            
            table.rows({search: 'applied'}).data().each(function(row) {
                if (row.urgent_mode_status && row.urgent_mode_status.includes('Urgent')) {
                    urgentCount++;
                } else {
                    normalCount++;
                }
            });
            
            $('#urgent-count').text(urgentCount);
            $('#normal-count').text(normalCount);
        }
    });

    // Highlight urgent rows
    table.on('draw.dt', function() {
        table.rows().every(function() {
            let data = this.data();
            if (data.urgent_mode_status && data.urgent_mode_status.includes('Urgent')) {
                $(this.node()).addClass('urgent-row');
            } else {
                $(this.node()).removeClass('urgent-row');
            }
        });
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
