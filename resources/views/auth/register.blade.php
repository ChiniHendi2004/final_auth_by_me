<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenant Registration</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Register Tenant</h1>
        <form method="POST" action="{{ route('tenant.register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium">Name</label>
                <input type="text" name="name" id="name" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="description" class="block text-sm font-medium">Description</label>
                <textarea name="description" id="description" class="w-full border rounded p-2"></textarea>
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" name="email" id="email" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="client_slug" class="block text-sm font-medium">Client Slug</label>
                <input type="text" name="client_slug" id="client_slug" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="website_url" class="block text-sm font-medium">Website URL</label>
                <input type="text" name="website_url" id="website_url" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="employee_id" class="block text-sm font-medium">Employee ID</label>
                <input type="number" name="employee_id" id="employee_id" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="academic_session" class="block text-sm font-medium">Academic Session</label>
                <input type="date" name="academic_session" id="academic_session" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="expiration_date" class="block text-sm font-medium">Expiration Date</label>
                <input type="date" name="expiration_date" id="expiration_date" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" name="password" id="password" class="w-full border rounded p-2" required>
            </div>
            
            <div>
                <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border rounded p-2" required>
            </div>
            
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                Register
            </button>
        </form>
    </div>
</body>
</html>
