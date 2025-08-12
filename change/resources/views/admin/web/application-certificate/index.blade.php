@extends('admin.layout.index')

@section('title')
    Application Online Certificate
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Application Online Certificate</h5>
                            <div class="header-elements">
                                {{-- <h5>Payment Status</h5> --}}
                                <label for="">Payment Status:</label>
                                <select class="form-control" name="" id="payment_type">
                                    <option value="">Choose</option>
                                    <option value="completed">Completed</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-block pdng">
                            <div class="table-responsive">
                                <table class=" display table nowrap table-striped table-hover"
                                    style="overflow-x: auto; display: block; max-width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Roll No.</th>
                                            <th>Request No.</th>
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
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($certificates as $data)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->roll_no }}</td>
                                                <td>{{ $data->request_id }}</td>
                                                <td>{{ $data->certificate }}</td>
                                                <td>{{ $data->created_at->format('d/m/Y') }}</td>

                                                <td>
                                                    @if ($data->payment == 'completed')
                                                        <span class="badge bg-success">Completed</span>
                                                    @else
                                                        <span class="badge bg-danger">Pending</span>
                                                    @endif
                                                </td>
                                                <td>{{ optional($data->getPayment)->transaction_number ?? 'N/A' }}</td>
                                                <td>{{ optional($data->getPayment)->transation_date ?? 'N/A' }}</td>
                                                <td>{{ optional($data->getPayment)->method ?? 'N/A' }}</td>
                                                <td>
                                                    @if ($data->certificate_status == 0)
                                                        Pending
                                                    @else
                                                        Issued
                                                    @endif
                                                </td>
                                                <td><a class="btn btn-primary btn-sm"
                                                        href="{{ route('admin.certificateEdit', $data->id) }}">Edit</a>
                                                        <a class="btn btn-danger btn-sm" onclick="confirmDelete('{{ route('admin.applicationDelete', $data->id) }}')">delete</a>
                                                </td>
                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(document).on('change', '#payment_type', function() {
                var payment_type = $(this).val();
                $.ajax({
                    type: "POST",
                    url: '{{ route('admin.getPayment') }}',
                    data: {
                        'payment_type': payment_type,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        let tableBody = $('#export-table tbody');
                        tableBody.empty();

                        $.each(response, function(index, data) {
                            let paymentBadge = data.payment === 'completed' ?
                                '<span class="badge bg-success">Completed</span>' :
                                '<span class="badge bg-danger">Pending</span>';

                            let certificateStatus = data.certificate_status == 0 ?
                                'Pending' :
                                'Issued';

                            tableBody.append(`
                                <tr>
                                    <td>${index + 1}</td>
                                    <td>${data.name}</td>
                                    <td>${data.roll_no}</td>
                                    <td>${data.request_id}</td>
                                    <td>${data.certificate}</td>
                                    <td>${data.recive_degree}</td>
                                    <td>${paymentBadge}</td>
                                    <td>${data.get_payment?.transaction_number ?? 'N/A'}</td>
                                    <td>${data.get_payment?.transation_date ?? 'N/A'}</td>
                                    <td>${data.get_payment?.method ?? 'N/A'}</td>
                                    <td>${certificateStatus}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{ route('admin.certificateEdit', '') }}/${data.id}">Edit</a>
                                    </td>
                                </tr>
                            `);
                        });
                    },
                });
            });
        });
    </script>
@endsection
