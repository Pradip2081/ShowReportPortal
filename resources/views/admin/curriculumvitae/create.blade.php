<x-app-layout>
    {{-- Curriculum Details crate  --}}
<div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-gradient-primary text-white py-3 rounded-top-4"
             style="background: linear-gradient(135deg, #007bff, #00b4d8); ">
            <h4 class="mb-0 fw-bold text-white"><i class="fa-solid fa-file-pen me-2"></i>Add New CV Section</h4>
        </div>

        <div class="card-body p-4">
            <form action="{{ route('admin.curriculumvitae.store') }}" method="POST">
                @csrf

                {{-- Section Title --}}
                <div class="row">
                <div class="col-md-10 mb-2">
                    <label class="form-label fw-semibold">Section Title</label>
                    <input type="text" name="title" class="form-control form-control-lg rounded-3 shadow-sm"
                           placeholder="Personal Details">
                </div>
                </div>

                {{-- Dynamic Fields --}}
                <div id="fields-wrapper">
                    <div class="row align-items-center mb-3 field-row">
                        <div class="col-md-5">
                            <input type="text" name="fields[0][field_name]"
                                   class="form-control rounded-3 shadow-sm"
                                   placeholder="Field name (e.g. Name)">
                        </div>

                        <div class="col-md-5 mt-2 mt-md-0">
                            <input type="text" name="fields[0][field_value]"
                                   class="form-control rounded-3 shadow-sm"
                                   placeholder="Field value (e.g. Pradip)">
                        </div>



                        <div class="col-md-2 text-center mt-2 mt-md-0">
                            <button type="button" class="btn btn-outline-danger btn-sm rounded-circle remove-field" style="display:none;">
                                <i class="fa-solid fa-minus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="d-flex flex-wrap gap-2 mt-4">
                    <button type="button" class="btn btn-outline-success rounded-pill px-4" id="add-field-btn">
                        <i class="fa-solid fa-plus me-2"></i>Add More Field
                    </button>
                    <button class="btn btn-primary rounded-pill px-4 shadow-sm">
                        <i class="fa-solid fa-save me-2"></i>Save Section
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Optional: FontAwesome for icons --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script>
let i = 1;
document.getElementById('add-field-btn').addEventListener('click', function() {
    const wrapper = document.getElementById('fields-wrapper');
    const row = document.createElement('div');
    row.classList.add('row', 'align-items-center', 'mb-3', 'field-row');
    row.innerHTML = `
        <div class="col-md-5">
            <input type="text" name="fields[${i}][field_name]"
                   class="form-control rounded-3 shadow-sm" placeholder="Field name (e.g. Age)">
        </div>
        <div class="col-md-5 mt-2 mt-md-0">
            <input type="text" name="fields[${i}][field_value]"
                   class="form-control rounded-3 shadow-sm" placeholder="Field value (e.g. 25)">
        </div>
        <div class="col-md-2 text-center mt-2 mt-md-0">
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
</x-app-layout>
