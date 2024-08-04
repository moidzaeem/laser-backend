@extends('layouts.dashboard')

@section('content')
    <!-- Row starts -->
    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <div class="row gx-3">
        <div class=" col-lg-12">
            <div class="mb-3">
                    <h5 class="card-title">LaserAddict Practictioners</h5>
                <a data-bs-toggle="modal" data-bs-target="#addDoctorForm" class="btn btn-primary ms-auto mt-3" style="background: white;color: #21A282;">+ Add a Practictioner</a>

            </div>
        </div>


        @if (!empty($practictioners))
            <table id="basicExample" class="table truncate m-0 align-middle">
                <thead>
                    <tr>

                        <th>Name</th>
                        <th>email</th>
                        <th class="text-center">Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($practictioners as $practictioner)
                        <tr>

                            <td>
                                {{ $practictioner->name }}
                            </td>
                            <td>{{ $practictioner->email }}</td>
                            <td class="text-center">{{ $practictioner->phone_no }}</td>


                            <td>
                                <div class="d-inline-flex gap-1">

                                    <a href="tel:{{$practictioner->phone_no}}" class="">
                                        <img src="{{ asset('assets/images/award/phone.png') }}" alt=""
                                            style="width: 37px;padding-top: 10px;">
                                    </a>
                                    <a href="#" class="btn-edit"
                                    data-id="{{ $practictioner->id }}"
                                    data-name="{{ $practictioner->name }}"
                                    data-email="{{ $practictioner->email }}"
                                    data-phone_no="{{ $practictioner->phone_no }}"
                                    data-image="{{ $practictioner->image_url }}"> <!-- Assuming image_url holds the image URL -->
                                    <img src="{{ asset('assets/images/award/edit.png') }}" alt="Edit" style="width: 30px; padding-top: 10px;">
                                 </a>
                                    {{-- <a href="doctors-profile.html" class="">
                                        <img src="{{ asset('assets/images/award/profile.png') }}" alt=""
                                            style="width: 30px;padding-top: 10px;">
                                    </a>
                                    <a href="doctors-profile.html" class="">
                                        <img src="{{ asset('assets/images/award/modify.png') }}" alt=""
                                            style="width: 37px;padding-top: 10px;">
                                    </a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif

    </div>


    <!-- Modal -->
    <div class="modal fade" id="addDoctorForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="exampleForm" action="{{ route('practicioners.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter email">
                        </div>
                        <div class="mb-3">
                            <label for="phone_no" class="form-label">Phone No</label>
                            <input type="text" class="form-control" id="phone_no" name="phone_no"
                                placeholder="Enter phone number">
                        </div>
                        <div class="mb-3">
                            <label for="center_id" class="form-label">Center</label>
                           <select name="center_id" id="" class="form-control" required>
                            <option value="" disabled selected>--- Select Center</option>
                            @foreach ($centers as $center)
                                <option value="{{$center->id}}">{{$center->center_name}}</option>
                            @endforeach
                           </select>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" class="form-control" id="image" name="image">
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


    {{-- Edit Modal --}}

    <!-- Modal -->
<div class="modal fade" id="editPractitionerForm" tabindex="-1" aria-labelledby="editPractitionerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPractitionerLabel">Edit Practitioner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{route('practicioners.update', 0)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_id" name="id">
                    <div class="mb-3">
                        <label for="edit_name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="edit_name" name="name" placeholder="Enter name" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="edit_email" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_phone_no" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="edit_phone_no" name="phone_no" placeholder="Enter phone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="edit_image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="edit_image" name="image" accept="image/*">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Use jQuery to make it easier to work with data attributes
        $('.btn-edit').on('click', function() {
            // Get the data from the button
            var id = $(this).data('id');
            var name = $(this).data('name');
            var email = $(this).data('email');
            var phone_no = $(this).data('phone_no');
            var image = $(this).data('image');

            // Populate the form fields in the modal
            $('#edit_id').val(id);
            $('#edit_name').val(name);
            $('#edit_email').val(email);
            $('#edit_phone_no').val(phone_no);

            // Optionally handle image preview if needed
            // If you have a URL for the image
            if (image) {
                // For example, set an image preview if your form has an image preview
                $('#edit_image').data('image', image);
            }

            $('#editForm').attr('action', '{{ url('practicioners') }}/' + id);


            // Show the modal
            $('#editPractitionerForm').modal('show');
        });
    });
</script>
