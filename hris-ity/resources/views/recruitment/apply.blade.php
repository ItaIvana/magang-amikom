<!-- resources/views/apply.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Apply Now</h2>
        
        <!-- Formulir untuk Apply -->
        <form action="{{ route('apply.submit') }}" method="POST">
            @csrf
            <!-- Input data yang diperlukan, misalnya nama dan email -->
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <!-- Tombol Apply untuk submit form -->
            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
</body>
</html>
