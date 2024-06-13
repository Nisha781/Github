<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->

    <head>
        <title>Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
</head>

<body class="bg-info">
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center min-vh-100">
            @if (session('status') == 'two-factor-authentication-confirmed')
                <div class="mb-4 font-medium text-sm">
                    Two factor authentication confirmed and enabled successfully.
                </div>
            @endif
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center">verifying Email</h1>
                        
                        <p>"Ensure the security of your identity by verifying your email.
                             Click on the link sent to you. Thank you!"</p>
                        <!-- Logout Button -->
                        <div class="">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                                <!-- Resend Verification Email Button -->
                            </form>
                            @if (Auth::user()->email_verified_at === null)
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary mt-2">Resend Verification Email</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>