@extends('backend.master')

@section('title')
  About Us
@endsection

@section('content')

<!--app-content open-->
<div class="app-content main-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">About Us</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">About Us</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row row-sm">
                <div class="col-lg-12">
                    <div class="card custom-card">
                        <div class="card-header border-bottom">
                            <h3 class="card-title">Content Table</h3>
                        </div>
                        <div class="card-body">

                            <div class="mb-3">
                                @if($aboutUs)
                                    <button class="m-1 btn btn-warning" data-bs-toggle="modal" data-bs-target="#editContent"><i class="fa-solid fa-pen-to-square"></i> Edit Content</button>
                                    <form action="{{ route('admin.delete.about-us') }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this content?');">
                                        @csrf
                                        <button type="submit" class="m-1 btn btn-danger"><i class="fa-solid fa-trash"></i> Delete Content</button>
                                    </form>
                                @else
                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addContent" href="javascript:void(0)"> <i class="fa-solid fa-plus"></i> Add Content</a>
                                @endif
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered mx-auto">
                                    <tbody>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Mission</th>
                                            <td>{{ $aboutUs->mission ?? 'N/A' }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-light text-end">Vision</th>
                                            <td>{{ $aboutUs->vision ?? 'N/A' }}</td>
                                        </tr>
                                        
                                       @php
                                            $icons = $aboutUs->card_icon ?? [];
                                            $headings = $aboutUs->card_heading ?? [];
                                            $texts = $aboutUs->card_text ?? [];
                                        @endphp

                                        <tr>
                                            <th scope="row" class="bg-light text-end">Why Choose Us</th>
                                            <td>
                                                @if(is_array($headings) && count($headings) > 0)
                                                    <table class="table table-bordered mb-0">
                                                        <thead class="table-light">
                                                            <tr>
                                                                <th>Icon</th>
                                                                <th>Heading</th>
                                                                <th>Text</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($headings as $index => $heading)
                                                                <tr>
                                                                    <td>
                                                                        @if(isset($icons[$index]))
                                                                            {!! $icons[$index] !!}
                                                                        @else
                                                                            N/A
                                                                        @endif
                                                                    </td>
                                                                    <td>{{ $heading ?? 'N/A' }}</td>
                                                                    <td>{{ $texts[$index] ?? 'N/A' }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                @else
                                                    <span>No cards added yet</span>
                                                @endif
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row" class="bg-light text-end">Story</th>
                                            <td>{{ $aboutUs->story ?? 'N/A' }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- main content end -->

            <!-- ADD CONTENT MODAL -->
            <div class="modal fade" id="addContent">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <form action="{{ route('admin.store.about-us') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h6 class="modal-title">Add about us</h6>
                                <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <!-- mission  -->
                                <div class="form-group">
                                    <label for="mission" class="form-label">Mission</label>
                                    <textarea class="form-control @error('mission') is-invalid @enderror" name="mission" maxlength="2000" id="mission" rows="2">{{ old('mission') }}</textarea>
                                    @error('mission')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <!-- mission  -->
                                <div class="form-group">
                                    <label for="vision" class="form-label">Vision</label>
                                    <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" maxlength="2000" id="vision" rows="2">{{ old('vision') }}</textarea>
                                    @error('vision')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div style="margin-top: 9vh; margin-bottom: 9vh;">
                                    <h4>Card section</h4>

                                    <div id="add-cards-wrapper">
                                        @php
                                            $oldCards = old('card_icon', []); // Count how many cards exist
                                        @endphp

                                        @if(count($oldCards) > 0)
                                            @foreach($oldCards as $index => $icon)
                                                <div class="about-card-item my-4 p-3" style="border: 1px solid rgb(68, 68, 68); position: relative;">
                                                    <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 remove-card-btn" style="display: {{ $index == 0 ? 'none' : 'block' }};">&times;</button>

                                                    <!-- card logo -->
                                                    <div class="form-group mb-3">
                                                        <label class="form-label fw-semibold">Card logo</label>
                                                        <input type="text" name="card_icon[]" class="form-control @error("card_icon.$index") is-invalid @enderror" value="{{ old("card_icon.$index") }}" maxlength="250">
                                                        @error("card_icon.$index")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- card heading -->
                                                    <div class="form-group mb-3">
                                                        <label class="form-label fw-semibold">Card heading</label>
                                                        <input type="text" name="card_heading[]" class="form-control @error("card_heading.$index") is-invalid @enderror" value="{{ old("card_heading.$index") }}" maxlength="250">
                                                        @error("card_heading.$index")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                    <!-- card text -->
                                                    <div class="form-group mb-2">
                                                        <label class="form-label fw-semibold">Card text</label>
                                                        <textarea class="form-control @error("card_text.$index") is-invalid @enderror" name="card_text[]" maxlength="500" rows="2">{{ old("card_text.$index") }}</textarea>
                                                        @error("card_text.$index")
                                                            <span class="text-danger">{{ $message }}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            {{-- First blank card when no old input --}}
                                            <div class="about-card-item my-4 p-3" style="border: 1px solid rgb(68, 68, 68); position: relative;">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 remove-card-btn" style="display: none;">&times;</button>

                                                <div class="form-group mb-3">
                                                    <label class="form-label fw-semibold">Card logo</label>
                                                    <input type="text" name="card_icon[]" class="form-control" maxlength="250">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label class="form-label fw-semibold">Card heading</label>
                                                    <input type="text" name="card_heading[]" class="form-control" maxlength="250">
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label class="form-label fw-semibold">Card text</label>
                                                    <textarea class="form-control" name="card_text[]" maxlength="500" rows="2"></textarea>
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Add More Button -->
                                    <button type="button" id="add-card-btn-create" class="btn btn-primary">+ Add More Card</button>
                                </div>


                                <!-- story  -->
                                <div class="form-group">
                                    <label for="story" class="form-label">Story</label>
                                    <textarea class="form-control @error('story') is-invalid @enderror" name="story" maxlength="2000" id="story" rows="5">{{ old('story') }}</textarea>
                                    @error('story')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-target="#modalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- EDIT CONTENT MODAL -->
            @if($aboutUs)
                <div class="modal fade" id="editContent">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <form action="{{ route('admin.update.about-us') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h6 class="modal-title">Edit About Us</h6>
                                    <button aria-label="Close" type="button" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">

                                    <!-- Mission -->
                                    <div class="form-group">
                                        <label class="form-label">Mission</label>
                                        <textarea class="form-control @error('mission') is-invalid @enderror" name="mission" maxlength="500" rows="2">{{ old('mission', $aboutUs->mission) }}</textarea>
                                        @error('mission')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Vision -->
                                    <div class="form-group">
                                        <label class="form-label">Vision</label>
                                        <textarea class="form-control @error('vision') is-invalid @enderror" name="vision" maxlength="500" rows="2">{{ old('vision', $aboutUs->vision) }}</textarea>
                                        @error('vision')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <!-- Now loop cards dynamically -->
                                    <div id="edit-cards-wrapper" class="mt-4">
                                        @foreach($aboutUs->card_heading ?? [] as $index => $heading)
                                            <div class="about-card-item my-4 p-3" style="border:1px solid #444; position:relative;">
                                                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 remove-card-btn">&times;</button>

                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Icon</label>
                                                    <input type="text" name="card_icon[]" class="form-control @error('card_icon.'.$index) is-invalid @enderror" value="{{ old('card_icon.'.$index, $aboutUs->card_icon[$index] ?? '') }}">
                                                    @error('card_icon.'.$index)
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label class="form-label">Card Heading</label>
                                                    <input type="text" name="card_heading[]" class="form-control @error('card_heading.'.$index) is-invalid @enderror" value="{{ old('card_heading.'.$index, $aboutUs->card_heading[$index] ?? '') }}">
                                                    @error('card_heading.'.$index)
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label class="form-label">Card Text</label>
                                                    <textarea name="card_text[]" class="form-control @error('card_text.'.$index) is-invalid @enderror" rows="2">{{ old('card_text.'.$index, $aboutUs->card_heading[$index] ?? '') }}</textarea>
                                                    @error('card_text.'.$index)
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" id="add-card-btn-edit" class="btn btn-primary mt-2">+ Add More Card</button>

                                    <!-- Story -->
                                    <div class="form-group mt-4">
                                        <label class="form-label">Story</label>
                                        <textarea class="form-control @error('story') is-invalid @enderror" name="story" maxlength="2000" rows="5">{{ old('story', $aboutUs->story) }}</textarea>
                                        @error('story')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<!-- CONTAINER CLOSED -->
@endsection


@if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            @if(! $aboutUs) 
                var myModal = new bootstrap.Modal(document.getElementById('addContent'));
                myModal.show();
            @else
                var myModal = new bootstrap.Modal(document.getElementById('editContent'));
                myModal.show();
            @endif
        });
    </script>
@endif


@push('scripts')
    <!-- ABOUT US PAGE ER MULTIPLE CARD ADD ER JONNO  -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

    function initCardManager(wrapperId, buttonId) {
        const wrapper = document.getElementById(wrapperId);
        const addBtn = document.getElementById(buttonId);

        if (!wrapper || !addBtn) return; // prevents error if element not found

        addBtn.addEventListener('click', function () {
            const index = wrapper.querySelectorAll('.about-card-item').length + 1;

            const card = document.createElement('div');
            card.classList.add('about-card-item', 'my-4', 'p-3');
            card.style.border = '1px solid rgb(68, 68, 68)';
            card.style.position = 'relative';

            card.innerHTML = `
                <button type="button" class="btn btn-sm btn-danger position-absolute top-0 end-0 m-2 remove-card-btn">&times;</button>
                <div class="form-group mb-3">
                    <label class="form-label">Card Icon</label>
                    <input type="text" name="card_icon[]" class="form-control">
                </div>
                <div class="form-group mb-3">
                    <label class="form-label">Card Heading</label>
                    <input type="text" name="card_heading[]" class="form-control">
                </div>
                <div class="form-group mb-2">
                    <label class="form-label">Card Text</label>
                    <textarea class="form-control" name="card_text[]" rows="2"></textarea>
                </div>
            `;
            wrapper.appendChild(card);
            updateRemoveButtons(wrapper);
        });

        wrapper.addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-card-btn')) {
                e.target.closest('.about-card-item').remove();
                updateRemoveButtons(wrapper);
            }
        });

        updateRemoveButtons(wrapper);
    }

    function updateRemoveButtons(wrapper) {
        const cards = wrapper.querySelectorAll('.about-card-item');
        cards.forEach(card => {
            card.querySelector('.remove-card-btn').style.display = cards.length > 1 ? 'block' : 'none';
        });
    }

    /// ✅ INIT FOR BOTH MODALS
    initCardManager('add-cards-wrapper', 'add-card-btn-create');
    initCardManager('edit-cards-wrapper', 'add-card-btn-edit');
});

    </script>
@endpush