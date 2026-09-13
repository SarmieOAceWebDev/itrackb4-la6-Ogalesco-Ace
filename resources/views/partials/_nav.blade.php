<nav class="mb-4">
    <a href="{{ route('subjects.index') }}" class="btn btn-primary">Subjects</a>
    {{-- <a href="{{ route('subjects.featured') }}" class="btn btn-success">Featured</a> --}}
    <a href="{{ route('subjects.filter') }}" class="btn btn-secondary">All Subjects</a>
    <a href="{{ route('subjects.filter', 'Major') }}" class="btn btn-warning">Major Subjects</a>
</nav>