@extends('layouts.dashboard')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.0/tagify.css">

<!-- Include Tagify JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.3.0/tagify.min.js"></script>



<!-- jQuery Timepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.1/jquery.timepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.14.1/jquery.timepicker.min.js"></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js'></script>

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row gx-3">

        {{-- <div class="field">
            <label for="day-picker">Select Day:</label>
            <input type="text" id="day-picker">
        </div>
        <div class="field">
            <label for="start-time">Start Time:</label>
            <input type="text" id="start-time">
        </div>
        <div class="field">
            <label for="end-time">End Time:</label>
            <input type="text" id="end-time">
        </div> --}}

        <div class="col-xl-9 col-lg-12">
            <div class="mb-3">
                <div class="card-header">
                    <h5 class="card-title">Center overview : {{ $center->center_name }}</h5>
                    <p>Dashboard and center summary : </p>
                </div>
            </div>
        </div>
        <div class=" col-lg-12">
            <div class="mb-3">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <a href="add-doctors.html" class="btn btn-primary ms-auto" style="width: 184px">Statistics</a>
                    <a data-bs-toggle="modal" data-bs-target="#configureCenterModal" class="btn btn-primary ms-auto"
                        style="width: 184px;margin-left: 10px !important;">Configuration</a>

                    <a data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#addPractitionerModal"
                        class="btn btn-primary ms-auto" style="width: 184px;margin-left: 10px !important;">Add
                        Practictioner</a>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="col-sm-12 col-12 d-flex">

                <div class="col-sm-2 col-12">

                    <div class="">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset($center->logo) }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mt-5">

                                </a>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-12" style="    padding: 15px;">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset('assets/icons/id.png') }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mb-3">
                                    <h5>Center ID</h5>

                                    <p>{{ $center->id }}</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-12" style="    padding: 15px;">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset('assets/icons/phone.png') }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mb-3">
                                    <h5>Phone</h5>

                                    <p>{{ $center->centerDetails ? $center->centerDetails->phone_no : 'N/A' }} </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-12" style="    padding: 15px;">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset('assets/icons/mail.png') }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mb-3">
                                    <h5>Mail Address</h5>

                                    <p>{{ $center->centerDetails ? $center->centerDetails->email : 'N/A' }} </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-12" style="    padding: 15px;">

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                    <img src="{{ asset('assets/icons/location.png') }}" alt="Hospitals Admin Template"
                                        class="img-7x rounded-circle mb-3">
                                    <h5>Postal Address</h5>

                                    <p>{{ $center->centerDetails ? $center->centerDetails->postal_address : 'N/A' }} </p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 col-12 d-none">

                    <div class="card-header d-flex">
                        <img src="{{ asset('assets/icons/calander.png') }}" alt=""
                            style="width: 42px;height: 35px;">
                        <h5 style="margin-left: 10px;white-space:nowrap ">
                            Opening hours

                        </h5>
                    </div>
                    <div class="card-body d-flex" style="margin-top: -30px;border-left:1px solid #21A282">
                        <p>MON : 08:00 - 19:00</p>

                    </div>
                    <div class="card-body d-flex" style="margin-top: -30px;border-left:1px solid #21A282">
                        <p>MON : 08:00 - 19:00</p>

                    </div>
                    <div class="card-body d-flex" style="margin-top: -30px;border-left:1px solid #21A282">
                        <p>MON : 08:00 - 19:00</p>

                    </div>
                    <div class="card-body d-flex" style="margin-top: -30px;border-left:1px solid #21A282">
                        <p>MON : 08:00 - 19:00</p>

                    </div>
                    <div class="card-body d-flex" style="margin-top: -30px;border-left:1px solid #21A282">
                        <p>MON : 08:00 - 19:00</p>

                    </div>

                </div>



            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card-body">
                    <h3>Practitioners in this center</h3>
                    <div class="row">
                        {{-- Example for one practitioner, repeat this block for each practitioner --}}
                        @if (isset($center['practictioners']))
                            @foreach ($center['practictioners'] as $practictioner)
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <a href="doctors-profile.html" class="d-flex align-items-center flex-column">
                                                <img src="{{ asset($practictioner['image']) }}" alt="Practitioner Image"
                                                    class="img-7x rounded-circle mb-3">
                                                <h5>{{ $practictioner['name'] }}</h5>
                                            </a>
                                            <div class="mt-3">
                                                <a href="tel:{{ $practictioner['phone_no'] }}" class="me-2">
                                                    <img src="{{ asset('assets/images/award/phone.png') }}"
                                                        alt="Phone" style="width: 37px;">
                                                </a>
                                                {{-- <a href="doctors-profile.html" class="me-2">
                                            <img src="{{ asset('assets/images/award/edit.png') }}" alt="Edit"
                                                style="width: 30px;">
                                        </a>
                                        <a href="doctors-profile.html" class="me-2">
                                            <img src="{{ asset('assets/images/award/profile.png') }}" alt="Profile"
                                                style="width: 30px;">
                                        </a>
                                        <a href="doctors-profile.html">
                                            <img src="{{ asset('assets/images/award/modify.png') }}" alt="Modify"
                                                style="width: 37px;">
                                        </a> --}}
                                            </div>
                                            <p class="mt-2">Practictioner</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{-- End of practitioner block --}}
                        {{-- Repeat above block for other practitioners --}}
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12">
            <div id='calendar'></div>
        </div>


        <div class="col-lg-5 col-sm-12">

            <div class="">
                <div class="d-flex mt-5">
                    <div class="col-xl-4 col-lg-12">
                        <p>Customer</p>
                    </div>
                    {{-- <div class="col-xl-4 col-lg-12">

                        <div class="mb-3">
                            <div class="card-header d-flex align-items-center justify-content-between">

                                <a href="add-doctors.html" class="btn btn-primary ms-auto"
                                    style="width: 100px">customer</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12">

                        <div class="mb-3">
                            <div class="card-header d-flex align-items-center justify-content-between">

                                <a href="add-doctors.html" class="btn btn-primary ms-auto" style="width: 184px">Add an
                                    appointment</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between">

                            <!--<a href="add-doctors.html" class="btn btn-primary ms-auto">Add Doctor</a>-->
                        </div>


                        <div class="card-body">

                            <!-- Table starts -->
                            <div class="table-responsive">
                                <table id="basicExample" class="table truncate m-0 align-middle">
                                    <thead>
                                        <tr>

                                            <th>First Name</th>
                                            <th>Last name</th>
                                            <th class="text-center">Phone</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($center->customersAppointments as $appointment)
                                            <tr>

                                                <td>
                                                    {{ $appointment->first_name }}
                                                </td>
                                                <td>{{ $appointment->last_name }}</td>
                                                <td class="text-center">{{ $appointment->phone_no ?? 'N/A' }}</td>


                                                <td>
                                                    <div class="d-inline-flex gap-1">

                                                        <a href="edit-doctors.html" class="">
                                                            <img src="{{ asset('assets/images/award/phone.png') }}"
                                                                alt="" style="width: 37px;padding-top: 10px;">
                                                        </a>
                                                        {{-- <a href="doctors-profile.html" class="">
                                                            <img src="{{ asset('assets/images/award/edit.png') }}"
                                                                alt="" style="width: 30px;padding-top: 10px;">
                                                        </a>
                                                        <a href="doctors-profile.html" class="">
                                                            <img src="{{ asset('assets/images/award/profile.png') }}"
                                                                alt="" style="width: 30px;padding-top: 10px;">
                                                        </a>
                                                        <a href="doctors-profile.html" class="">
                                                            <img src="{{ asset('assets/images/award/modify.png') }}"
                                                                alt="" style="width: 37px;padding-top: 10px;">
                                                        </a> --}}
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach





                                    </tbody>
                                </table>
                            </div>
                            <!-- Table ends -->

                            <!-- Modal Delete Row -->
                            <div class="modal fade" id="delRow" tabindex="-1" aria-labelledby="delRowLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="delRowLabel">
                                                Confirm
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete the doctor from list?
                                        </div>
                                        <div class="modal-footer">
                                            <div class="d-flex justify-content-end gap-2">
                                                <button class="btn btn-outline-secondary" data-bs-dismiss="modal"
                                                    aria-label="Close">No</button>
                                                <button class="btn btn-danger" data-bs-dismiss="modal"
                                                    aria-label="Close">Yes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>



        <!-- Modal -->
        <div class="modal fade" id="configureCenterModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Center Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="exampleForm" action="{{ route('center.detail.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="center_id" value="{{ $center->id }}">
                            <div class="mb-3">
                                <label for="phone_no" class="form-label">Phone No</label>
                                <input type="text" value="{{ $center->centerDetails->phone_no }}"
                                    class="form-control" id="phone_no" name="phone_no"
                                    placeholder="Enter phone number">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Mail Address</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter Email Address" value="{{ $center->centerDetails->email }}">
                            </div>
                            <div class="mb-3">
                                <label for="postal_address" class="form-label">Postal Address</label>
                                <input type="text" class="form-control" id="postal_address" name="postal_address"
                                    placeholder="Enter Postal Address"
                                    value="{{ $center->centerDetails->postal_address }}">
                            </div>

                            <div class="form-group">
                                <label>{{ __('Services') }}</label><br>
                                <input id="services" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="services">
                            </div>



                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="modal fade" id="addPractitionerModal" tabindex="-1" aria-labelledby="addPractitionerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addPractitionerModalLabel">Add Practitioners</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="practitionerForm" action="{{ route('practictioner.center.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="practitionerSelect" class="form-label">Select Practitioners</label>
                                <select id="practitionerSelect" class="form-select" multiple>
                                    @foreach ($practictioners as $practictioner)
                                        <option value="{{ $practictioner->id }}">{{ $practictioner->name }}</option>
                                    @endforeach

                                    <!-- Add more options as needed -->
                                </select>
                            </div>


                            <button type="button" id="addPractitionersBtn" class="btn btn-primary">Add Selected</button>

                            <!-- Hidden input to hold selected practitioner IDs -->
                            <input type="hidden" id="practitionerIds" name="practitionerIds">
                            <input type="hidden" name="center_id" value="{{ $center->id }}">

                            <!-- Modal footer with submit button -->
                            <div class="modal-footer">
                                <button type="submit" id="submitPractitionersBtn"
                                    class="btn btn-success">Submit</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>

                        <h6 class="mt-4">Selected Practitioners</h6>
                        <ul id="selectedPractitionersList" class="list-group">
                            <!-- Selected practitioners will be listed here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: { right: 'dayGridMonth,timeGridWeek',
                center: 'today prev,next' 
                 }, // buttons for switching between views

                initialView: 'listWeek',
                events: {
                    url: "{{ route('center.calander.appointments') }}",

                },

                eventDidMount: function(info) {
                    console.log(info);
                    // This is required to parse the HTML.
                    const title = $(info.el).find('.fc-list-event-title');
                    title.html(title.text());

                    const titleView = $(info.el).find('.fc-event-title');
                    titleView.html(titleView.text());
                },


            });
            calendar.render();
        });
    </script>
    <script>
        //  $(function() {
        //     // Initialize jQuery UI Datepicker
        //     $('#day-picker').datepicker({
        //         dateFormat: 'yy-mm-dd' // Format for date
        //     });

        //     // Initialize jQuery Timepicker
        //     $('#start-time').timepicker({
        //         timeFormat: 'HH:mm',
        //         interval: 15,
        //         minTime: '00:00',
        //         maxTime: '23:59',
        //         startTime: '00:00',
        //         dynamic: false,
        //         dropdown: true,
        //         scrollbar: true
        //     });

        //     $('#end-time').timepicker({
        //         timeFormat: 'HH:mm',
        //         interval: 15,
        //         minTime: '00:00',
        //         maxTime: '23:59',
        //         startTime: '00:00',
        //         dynamic: false,
        //         dropdown: true,
        //         scrollbar: true
        //     });
        // });
        var services = @json($services);
        var center = @json($center);
        console.log(center.services);
        let ss = services.map(item => ({
            label: item.id,
            value: item.name
        }));

        console.log(ss);
        $(document).ready(function() {
            var input = document.getElementById('services');
            new Tagify(input, {
                whitelist: ss, // Provide initial values from defaultValues array
                dropdown: {
                    maxItems: 5, // Maximum number of items to show in dropdown
                    enabled: 0, // Disable the dropdown
                },
                enforceWhitelist: true

            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#addPractitionersBtn').click(function() {
                var selectedOptions = $('#practitionerSelect option:selected');
                var selectedPractitioners = [];
                var practitionerIds = [];

                selectedOptions.each(function() {
                    var practitionerName = $(this).text();
                    var practitionerValue = $(this).val();

                    if (practitionerValue) {
                        var listItem = `<li class="list-group-item d-flex justify-content-between align-items-center">
                        ${practitionerName}
                        <button type="button" class="btn btn-danger btn-sm remove-btn">Remove</button>
                    </li>`;
                        selectedPractitioners.push(listItem);
                        practitionerIds.push(practitionerValue);
                    }
                });

                if (selectedPractitioners.length > 0) {
                    $('#selectedPractitionersList').empty();
                    $('#selectedPractitionersList').append(selectedPractitioners.join(''));
                    $('#practitionerSelect').val([]);
                    $('#practitionerIds').val(practitionerIds.join(
                        ',')); // Set hidden input with comma-separated IDs
                } else {
                    alert('Please select at least one practitioner.');
                }
            });

            $('#selectedPractitionersList').on('click', '.remove-btn', function() {
                var removedId = $(this).closest('li').text().split(' - Role: ')[0].split(' Remove')[0];
                var currentIds = $('#practitionerIds').val().split(',');
                currentIds = currentIds.filter(id => id !== removedId);
                $('#practitionerIds').val(currentIds.join(','));
                $(this).closest('li').remove();
            });

            // Handle form submission if needed
            $('#practitionerForm').submit(function(event) {
                var practitionerIds = $('#practitionerIds').val();
                if (!practitionerIds) {
                    alert('No practitioners selected.');
                    event.preventDefault(); // Prevent form submission if no practitioners selected
                }
            });
        });
    </script>
@endsection
