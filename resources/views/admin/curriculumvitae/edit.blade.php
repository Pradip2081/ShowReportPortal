<x-app-layout>

    {{-- curriculum vitae edit --}}
<div class="container py-5">
    {{-- Card Container --}}
    <div class="card shadow-lg border-0 rounded-4">
        {{-- Card Header --}}
        <div class="card-header bg-gradient-primary text-white py-3 rounded-top-4 d-flex align-items-center justify-content-between"
             style="background: linear-gradient(135deg, #4a00e0, #8e2de2);">
            <h4 class="mb-0 fw-bold text-white"><i class="fa-solid fa-pen-to-square me-2"></i>Edit CV Section</h4>
            <span class="text-white-50">Update section details below</span>
        </div>

        {{-- Card Body --}}
        <div class="card-body p-4">
            <form action="{{ route('admin.curriculumvitae.update', $section->id) }}" method="POST">
                @csrf
                @method('PUT')

                {{-- Section Title --}}
                <div class=" row">
                    <div class="col-md-10 mb-2">
                    <label class="form-label fw-semibold">Section Title</label>
                    <input type="text" name="title" class="form-control form-control-lg rounded-3 shadow-sm"
                           value="{{ $section->title }}" placeholder="Enter section title">
                </div>
                </div>
                {{-- Dynamic Fields --}}
                <div id="fields-wrapper">
                    @foreach($section->details as $index => $detail)
                        <div class="row align-items-center mb-3 field-row">
                            <div class="col-md-5 mb-2 mb-md-0">
                                <input type="text" name="fields[{{ $index }}][field_name]"
                                       class="form-control rounded-3 shadow-sm" value="{{ $detail->field_name }}" placeholder="Field name">
                            </div>
                            <div class="col-md-5 mb-2 mb-md-0">
                                <input type="text" name="fields[{{ $index }}][field_value]"
                                       class="form-control rounded-3 shadow-sm" value="{{ $detail->field_value }}" placeholder="Field value">
                            </div>
                            <div class="col-md-2 text-center">
                                <button type="button" class="btn btn-outline-danger btn-sm rounded-circle remove-field">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Add Field Button --}}
                <button type="button" class="btn btn-outline-success rounded-pill px-4 mt-2 mb-3" id="add-field-btn">
                    <i class="fa-solid fa-plus me-2"></i>Add Field
                </button>

                {{-- Submit Button --}}
                <button class="btn btn-primary rounded-pill px-5 shadow-sm">
                    <i class="fa-solid fa-floppy-disk me-2"></i>Update Section
                </button>
            </form>
        </div>
    </div>
</div>

{{-- FontAwesome icons --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

{{-- Dynamic Fields JS --}}
<script>
let i = {{ count($section->details) }};
document.getElementById('add-field-btn').addEventListener('click', function() {
    const wrapper = document.getElementById('fields-wrapper');
    const row = document.createElement('div');
    row.classList.add('row', 'align-items-center', 'mb-3', 'field-row');
    row.innerHTML = `
        <div class="col-md-5 mb-2 mb-md-0">
            <input type="text" name="fields[${i}][field_name]" class="form-control rounded-3 shadow-sm" placeholder="Field name">
        </div>
        <div class="col-md-5 mb-2 mb-md-0">
            <input type="text" name="fields[${i}][field_value]" class="form-control rounded-3 shadow-sm" placeholder="Field value">
        </div>
        <div class="col-md-2 text-center">
            <button type="button" class="btn btn-outline-danger btn-sm rounded-circle remove-field">
                <i class="fa-solid fa-minus"></i>
            </button>
        </div>
    `;
    wrapper.appendChild(row);
    i++;
});

document.addEventListener('click', function(e) {
    if (e.target.closest('.remove-field')) {
        e.target.closest('.field-row').remove();
    }
});
</script>

{{-- Optional Custom Styles --}}
<style>
    .form-control:focus {
        box-shadow: 0 0 10px rgba(72, 72, 240, 0.2);
        border-color: #4a00e0;
    }
    .btn-outline-success:hover {
        background-color: #28a745;
        color: #fff;
        border-color: #28a745;
        transition: 0.3s;
    }
    .btn-outline-danger:hover {
        background-color: #dc3545;
        color: #fff;
        border-color: #dc3545;
        transition: 0.3s;
    }
    .btn-primary:hover {
        background-color: #007bff;
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
        transition: 0.3s;
    }
</style>
</x-app-layout>
