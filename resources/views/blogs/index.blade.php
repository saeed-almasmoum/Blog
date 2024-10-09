<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blogs</title>

    <!-- إضافة Bootstrap CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <x-app-layout />

    <!-- عنوان Blogs -->
    <div class="container my-4">
        <h1 class="text-center" style="margin: 30px; font-weight: bold;">Blogs</h1>

        <!-- جدول بعرض كامل -->
        <table class="table table-bordered w-100">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>User</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($blogs as $item)
                    <tr>
                        <td>{{$item->title}}</td>
                        <td>{{$item->body}}</td>
                        <td>{{$item->user->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
