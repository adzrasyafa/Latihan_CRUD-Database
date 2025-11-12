<!DOCTYPE html> 
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD DealerX</title>

  <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"
  >

  <style>
    /* === Palet Modern & Teknologi === */
    body {
      background: linear-gradient(135deg, #f9f9f9, #e6e6e6);
      color: #333;
      font-family: "Poppins", sans-serif;
      min-height: 100vh;
    }

    h2 {
      font-weight: 600;
      color: #007bff; /* biru elektrik */
      text-shadow: 0 1px 3px rgba(0, 123, 255, 0.2);
    }

    .card, .table {
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
      background-color: #ffffff;
      border: none;
    }

    .table thead {
      background-color: #007bff; /* biru elektrik */
      color: white;
    }

    .btn-primary {
      background-color: #00a8ff;
      border: none;
      transition: 0.3s;
    }

    .btn-primary:hover {
      background-color: #0080c6;
    }

    .btn-secondary {
      background-color: #555;
      border: none;
    }

    .alert-success {
      background-color: #e0f7ff;
      border-left: 6px solid #00a8ff;
      color: #004a75;
      font-weight: 500;
    }

    footer {
      text-align: center;
      padding: 15px 0;
      color: #777;
      font-size: 0.9rem;
      margin-top: 50px;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">CRUD DealerX</h2>

    @if(session('success'))
      <div 
        id="alertMessage" 
        class="alert alert-success alert-dismissible fade show" 
        role="alert"
      >
        {{ session('success') }}
      </div>

      <script>
        // Setelah 3 detik, sembunyikan alert
        setTimeout(() => {
          const alertBox = document.getElementById('alertMessage');
          if (alertBox) {
            alertBox.classList.remove('show');
            alertBox.classList.add('fade');
            setTimeout(() => alertBox.remove(), 500);
          }
        }, 3000);
      </script>
    @endif

    @yield('content')

    <footer>
      &copy; {{ date('Y') }} DealerX — Sistem CRUD Motor Modern
    </footer>
  </div>
</body>
</html>
