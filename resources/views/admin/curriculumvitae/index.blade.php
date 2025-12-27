<x-app-layout>
    {{-- Curriculum Vitai index page  --}}
<div class="container py-5">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold"><i class="fa-solid fa-list-check me-2"></i>CV Sections</h3>
        <a href="{{ route('admin.curriculumvitae.create') }}" class="btn btn-primary rounded-pill px-4 shadow-sm">
            <i class="fa-solid fa-plus me-2"></i>Add Section
        </a>
    </div>

    {{-- Success Message --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show rounded-3 shadow-sm" role="alert">
            <i class="fa-solid fa-circle-check me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- CV Sections Table --}}
    <div class="card shadow-sm rounded-4 border-0">
        <div class="card-body p-0">
            <table class="table table-hover mb-0">
                <thead class="table-light text-uppercase small">
                    <tr>
                        <th class="fw-semibold">Title</th>
                        <th class="fw-semibold">Details</th>
                        <th class="fw-semibold text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sections as $section)
                        <tr>
                            <td class="align-middle">{{ $section->title }}</td>
                            <td class="align-middle">
                                <ul class="mb-0 ps-3">
                                    @foreach($section->details as $detail)
                                        <li><b>{{ $detail->field_name }}:</b> {{ $detail->field_value }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="text-center align-middle">
                                <a href="{{ route('admin.curriculumvitae.edit', $section->id) }}"
                                   class="btn btn-sm btn-warning rounded-pill me-1 shadow-sm">
                                    <i class="fa-solid fa-pen-to-square"></i> Edit
                                </a>
                                <form action="{{ route('admin.curriculumvitae.destroy', $section->id) }}" method="POST" class="d-inline">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-sm btn-danger rounded-pill shadow-sm" onclick="return confirm('Delete this section?')">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">No CV Sections found. Add a new section to get started!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- FontAwesome icons --}}
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

{{-- Optional: Bootstrap 5 JS if not already loaded --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

{{-- Optional Custom Styles --}}
<style>
    .table-hover tbody tr:hover {
        background-color: rgba(72, 72, 240, 0.1);
        transition: 0.3s;
    }
    .btn-warning:hover {
        background-color: #ffc107;
        color: #000;
        transition: 0.3s;
    }
    .btn-danger:hover {
        background-color: #dc3545;
        color: #fff;
        transition: 0.3s;
    }
</style>
</x-app-layout>
