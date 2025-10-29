@extends('backend.master')

@section('title', 'Edit Service')

@section('content')
<div class="app-content main-content mt-0">
    <div class="side-app">
        <div class="main-container container-fluid">

            <!-- PAGE HEADER -->
            <div class="page-header">
                <h1 class="page-title">Edit Service</h1>
                <div class="ms-auto">
                    <a href="{{ route('admin.all.service') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
            </div>

            <!-- SERVICE FORM -->
            <div class="card">
                <div class="card-header border-bottom d-flex">
                    <h3 class="card-title">Service Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.update.service', $service->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <!-- Service Name -->
                        <div class="form-group mb-3">
                            <label class="form-label">Service Name</label>
                            <input class="form-control @error('service_name') is-invalid @enderror" name="service_name" type="text"
                                value="{{ old('service_name', $service->service_name) }}">
                            @error('service_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        {{-- service logo  --}}
                        <div class="form-group mb-3">
                            <label class="form-label">Service Name</label>
                            <input class="form-control @error('service_logo') is-invalid @enderror" name="service_logo" type="text"
                                value="{{ old('service_logo', $service->service_logo) }}">
                            @error('service_logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Sections -->
                        <div id="section-wrapper-container">
                            @foreach($service->sections as $index => $section)
                                <div class="border p-3 mb-3 section-item">
                                    <p class="text-success">Section {{ $index + 1 }}</p>

                                    <!-- Section Heading -->
                                    <div class="form-group mb-2">
                                        <label>Section Heading</label>
                                        <textarea class="form-control" name="section_heading[]" rows="2">{{ old('section_heading.'.$index, $section['heading']) }}</textarea>
                                    </div>

                                    <!-- Section Content -->
                                    <div class="form-group mb-2">
                                        <label>Section Content</label>
                                        <textarea class="form-control" name="section_content[]" rows="3">{{ old('section_content.'.$index, $section['content']) }}</textarea>
                                    </div>

                                    <!-- Features -->
                                    <div class="form-group features-wrapper mb-2" data-feature-name="feature_list_{{ $index }}">
                                        <label>Feature List</label>
                                        @if(!empty($section['features']))
                                            @foreach($section['features'] as $fIndex => $feature)
                                                <div class="feature-item mb-2 d-flex gap-2 align-items-center">
                                                    <input class="form-control" name="feature_list_{{ $index }}[]" type="text" value="{{ $feature }}">
                                                    @if($fIndex > 0)
                                                        <button type="button" class="btn btn-sm btn-danger remove-feature">×</button>
                                                    @endif
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="feature-item mb-2 d-flex gap-2 align-items-center">
                                                <input class="form-control" name="feature_list_{{ $index }}[]" type="text" placeholder="Enter feature">
                                            </div>
                                        @endif
                                        <button type="button" class="btn btn-sm btn-success add-new-feature-btn mt-1">+ Add Feature</button>
                                    </div>

                                    <!-- Section Image -->
                                    <div class="form-group mb-2">
                                        <label>Section Image</label>
                                        @if(!empty($section['image']))
                                            <div class="mb-2">
                                                <img src="{{ asset($section['image']) }}" alt="Section Image" style="max-width: 200px;">
                                            </div>
                                        @endif
                                        <input type="file" name="section_image[]" class="dropify" data-height="150">
                                    </div>

                                    @if($index > 0)
                                        <button type="button" class="btn btn-sm btn-danger remove-section-btn mt-1">Remove Section</button>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                        <!-- Add Section -->
                        <button type="button" id="add-new-section" class="btn btn-sm btn-secondary mb-3">+ Add New Section</button>

                        <!-- Conclusion -->
                        <div class="form-group mb-3">
                            <label>Conclusion</label>
                            <textarea class="form-control" name="conclusion" rows="3">{{ old('conclusion', $service->conclusion) }}</textarea>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-50">Update Service</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const sectionWrapperContainer = document.getElementById('section-wrapper-container');
    const addSectionBtn = document.getElementById('add-new-section');

    function setupFeatureButtons(section) {
        const featuresWrapper = section.querySelector('.features-wrapper');

        // Add new feature
        featuresWrapper.querySelector('.add-new-feature-btn').addEventListener('click', () => {
            const index = Array.from(sectionWrapperContainer.children).indexOf(section);
            const newFeature = document.createElement('div');
            newFeature.className = 'feature-item mb-2 d-flex gap-2 align-items-center';
            newFeature.innerHTML = `
                <input class="form-control" name="feature_list_${index}[]" type="text" placeholder="Enter feature">
                <button type="button" class="btn btn-sm btn-danger remove-feature">×</button>
            `;
            featuresWrapper.insertBefore(newFeature, featuresWrapper.querySelector('.add-new-feature-btn'));
        });

        // Remove feature (all except first)
        featuresWrapper.addEventListener('click', function(e){
            if(e.target.classList.contains('remove-feature')){
                e.target.parentElement.remove();
            }
        });
    }

    // Initialize existing sections
    document.querySelectorAll('.section-item').forEach(section => {
        setupFeatureButtons(section);

        const removeBtn = section.querySelector('.remove-section-btn');
        if(removeBtn){
            removeBtn.addEventListener('click', () => {
                section.remove();
                updateSectionNumbers();
            });
        }
    });

    // Add new section
    addSectionBtn.addEventListener('click', () => {
        const sectionCount = sectionWrapperContainer.querySelectorAll('.section-item').length;
        const newSection = document.createElement('div');
        newSection.className = 'border p-3 mb-3 section-item';
        newSection.innerHTML = `
            <p class="text-success">Section ${sectionCount + 1}</p>
            <div class="form-group mb-2">
                <label>Section Heading</label>
                <textarea class="form-control" name="section_heading[]" rows="2"></textarea>
            </div>
            <div class="form-group mb-2">
                <label>Section Content</label>
                <textarea class="form-control" name="section_content[]" rows="3"></textarea>
            </div>
            <div class="form-group features-wrapper mb-2" data-feature-name="feature_list_${sectionCount}">
                <label>Feature List</label>
                <div class="feature-item mb-2 d-flex gap-2 align-items-center">
                    <input class="form-control" name="feature_list_${sectionCount}[]" type="text" placeholder="Enter feature">
                </div>
                <button type="button" class="btn btn-sm btn-success add-new-feature-btn mt-1">+ Add Feature</button>
            </div>
            <div class="form-group mb-2">
                <label>Section Image</label>
                <input type="file" name="section_image[]" class="dropify" data-height="150">
            </div>
            <button type="button" class="btn btn-sm btn-danger remove-section-btn mt-1">Remove Section</button>
        `;
        sectionWrapperContainer.appendChild(newSection);

        setupFeatureButtons(newSection);
        const removeBtn = newSection.querySelector('.remove-section-btn');
        removeBtn.addEventListener('click', () => {
            newSection.remove();
            updateSectionNumbers();
        });

        $(newSection).find('.dropify').dropify();
        updateSectionNumbers();
    });

    // Update section numbers
    function updateSectionNumbers() {
        document.querySelectorAll('.section-item').forEach((section, index) => {
            section.querySelector('p.text-success').textContent = `Section ${index + 1}`;
        });
    }

    // Initialize Dropify for existing sections
    $('.dropify').dropify();
</script>
@endpush
