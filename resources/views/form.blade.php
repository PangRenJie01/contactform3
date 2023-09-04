<div class="container">
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact:</label>
            <input type="text" name="contact" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="remark">Remark:</label>
            <textarea name="remark" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    @if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
</div>

