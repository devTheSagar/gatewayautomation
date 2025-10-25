@extends('backend.master')

@section('title')
  Add Service
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
                    <h1 class="page-title">Services</h1>
                </div>
                <div class="ms-auto pageheader-btn">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Services</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Service</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- main content start -->
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header border-bottom d-flex">
                            <h3 class="card-title">Service form</h3>
                            <a href="#" class="btn btn-success ms-auto">
                                <i class="fa fa-eye"></i> See All
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="service_name" class="form-label">Service Name</label>
                                    <input class="form-control @error('service_name') is-invalid @enderror" name="service_name" type="text" id="service_name" value="{{ old('service_name') }}">
                                    @error('service_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <!-- Section Container -->
                                <div id="section-wrapper-container">
                                    <!-- Default section (non-removable) -->
                                    <div class="border p-3 mb-3 section-item">
                                        <p class="text-success">Section 1</p>

                                        <!-- Section Heading -->
                                        <div class="form-group">
                                            <label class="form-label">Section heading</label>
                                            <textarea class="form-control" name="section_heading[]" maxlength="2000" rows="3">{{ old('section_heading.0') }}</textarea>
                                        </div>

                                        <!-- Section Content -->
                                        <div class="form-group">
                                            <label class="form-label">Section content</label>
                                            <textarea class="form-control" name="section_content[]" maxlength="2000" rows="3">{{ old('section_content.0') }}</textarea>
                                        </div>

                                        <!-- Features -->
                                        <div class="form-group features-wrapper" data-feature-name="feature_list_0">
                                            <label class="form-label">Feature List</label>
                                            <div class="feature-item mb-2 d-flex align-items-center gap-2">
                                                <input class="form-control" name="feature_list_0[]" type="text" placeholder="Enter feature">
                                            </div>
                                            <button type="button" class="btn btn-sm btn-success mt-1 add-new-feature-btn">+ Add New Feature</button>
                                        </div>

                                        <!-- Section Image -->
                                        <div class="row mb-4">
                                            <label class="form-label">Upload section image <span class="text-danger">*</span></label>
                                            <div class="col-sm-12 col-md-4">
                                                <input name="section_image[]" type="file" class="dropify" data-height="200" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Section Button -->
                                <button type="button" id="add-new-section" class="btn btn-sm btn-secondary mt-0">+ Add New Section Card</button>


                                <div class="form-group">
                                    <label for="carousel_heading" class="form-label">Conclusion</label>
                                    <textarea class="form-control @error('carousel_heading') is-invalid @enderror" name="carousel_heading" maxlength="2000" id="carousel_heading" rows="3">{{ old('carousel_heading') }}</textarea>
                                    @error('carousel_heading')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- submit button -->
                                <button type="submit" class="btn btn-primary w-50 mt-3">Save</button>

                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- main content end -->
            
        </div>
    </div>
</div>
    <!-- CONTAINER CLOSED -->
</div>

@endsection

@push('scripts')
    <script>
        const sectionWrapperContainer = document.getElementById('section-wrapper-container');
        const addSectionBtn = document.getElementById('add-new-section');

        // Function to handle feature buttons inside a section
        function setupFeatureButtons(section) {
            const addFeatureBtn = section.querySelector('.add-new-feature-btn');
            const featuresWrapper = section.querySelector('.features-wrapper');

            addFeatureBtn.addEventListener('click', () => {
                const newFeature = document.createElement('div');
                newFeature.className = 'feature-item mb-2 d-flex align-items-center gap-2';
                newFeature.innerHTML = `
                    <input class="form-control" name="${featuresWrapper.dataset.featureName}[]" type="text" placeholder="Enter feature">
                    <button type="button" class="btn btn-sm btn-danger remove-feature">×</button>
                `;
                featuresWrapper.insertBefore(newFeature, addFeatureBtn);
            });

            // Remove feature button
            featuresWrapper.addEventListener('click', function(e) {
                if(e.target.classList.contains('remove-feature')){
                    e.target.parentElement.remove();
                }
            });
        }

        // Initialize features for existing sections
        document.querySelectorAll('.section-item').forEach((section) => {
            setupFeatureButtons(section);
        });

        // Add new section
        addSectionBtn.addEventListener('click', () => {
            const sectionCount = sectionWrapperContainer.querySelectorAll('.section-item').length;
            const newSection = document.createElement('div');
            newSection.className = 'border p-3 mb-3 section-item';
            newSection.innerHTML = `
                <p class="text-success">Section ${sectionCount + 1}</p>

                <div class="form-group">
                    <label class="form-label">Section heading</label>
                    <textarea class="form-control" name="section_heading[]" maxlength="2000" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Section content</label>
                    <textarea class="form-control" name="section_content[]" maxlength="2000" rows="3"></textarea>
                </div>

                <div class="form-group features-wrapper" data-feature-name="feature_list_${sectionCount}">
                    <label class="form-label">Feature List</label>
                    <div class="feature-item mb-2 d-flex align-items-center gap-2">
                        <input class="form-control" name="feature_list_${sectionCount}[]" type="text" placeholder="Enter feature">
                    </div>
                    <button type="button" class="btn btn-sm btn-success mt-1 add-new-feature-btn">+ Add New Feature</button>
                </div>

                <div class="row mb-3">
                    <label class="form-label">Upload section image <span class="text-danger">*</span></label>
                    <div class="col-sm-12 col-md-4">
                        <input name="section_image[]" type="file" class="dropify" data-height="200" />
                    </div>
                </div>

                <button type="button" class="btn btn-sm btn-danger remove-section-btn mt-1">Remove Section</button>
            `;
            sectionWrapperContainer.appendChild(newSection);

            // Initialize features and Dropify
            setupFeatureButtons(newSection);
            $(newSection).find('.dropify').dropify();

            // Remove section button
            const removeBtn = newSection.querySelector('.remove-section-btn');
            removeBtn.addEventListener('click', () => {
                newSection.remove();
                updateSectionNumbers();
            });

            updateSectionNumbers();
        });

        // Update section numbering after add/remove
        function updateSectionNumbers() {
            document.querySelectorAll('.section-item').forEach((section, index) => {
                section.querySelector('p.text-success').textContent = `Section ${index + 1}`;
            });
        }

        // Initialize Dropify for default section
        $('.dropify').dropify();
    </script>
@endpush