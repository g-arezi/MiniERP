<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini ERP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #23272f;
            color: #e2e8f0;
            min-height: 100vh;
        }
        .navbar, .card, .table, .form-control, .btn, .modal-content {
            border-radius: 0.75rem !important;
        }
        .navbar {
            background: #2d333b !important;
        }
        .navbar-brand, .nav-link, .navbar-nav .nav-link.active {
            color: #e2e8f0 !important;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #a3bffa !important;
        }
        .container, .card, .modal-content {
            background: #2d333b !important;
            color: #e2e8f0;
        }
        .table {
            background: #23272f;
            color: #e2e8f0;
        }
        .table th, .table td {
            border-color: #444c56 !important;
        }
        .form-control {
            background: #23272f;
            color: #e2e8f0;
            border: 1px solid #444c56;
        }
        .form-control:focus {
            background: #23272f;
            color: #a3bffa;
            border-color: #a3bffa;
            box-shadow: 0 0 0 0.2rem rgba(163,191,250,.25);
        }
        .btn-primary {
            background: #3b82f6;
            border: none;
        }
        .btn-primary:hover {
            background: #2563eb;
        }
        .btn-success {
            background: #10b981;
            border: none;
        }
        .btn-success:hover {
            background: #059669;
        }
        .btn-warning {
            background: #f59e42;
            border: none;
            color: #23272f;
        }
        .btn-warning:hover {
            background: #d97706;
            color: #fff;
        }
        .btn-danger {
            background: #ef4444;
            border: none;
        }
        .btn-danger:hover {
            background: #b91c1c;
        }
        .btn-secondary {
            background: #64748b;
            border: none;
        }
        .btn-secondary:hover {
            background: #334155;
        }
        .table-striped > tbody > tr:nth-of-type(odd) {
            background-color: #23272f;
        }
        .table-striped > tbody > tr:nth-of-type(even) {
            background-color: #2d333b;
        }
        .form-label {
            color: #a3bffa;
        }
        .alert {
            background: #23272f;
            color: #f87171;
            border: 1px solid #ef4444;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Mini ERP</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('produtos.index') }}">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('estoque.index') }}">Estoque</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('cupons.index') }}">Cupons</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('pedidos.index') }}">Pedidos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        @yield('content')
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
