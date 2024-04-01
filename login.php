<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Login</title>
    <link rel="stylesheet" href="asset/css/login.css" />
    <!-- Link Bootstrap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    />
    
  </head>

  <body>
    <div class="container vh-100 d-flex flex-column justify-content-center">
      <div class="col-md-6 offset-md-3">
        <div class="card bg-info">
          <div class="card-body">
            <img
              src="asset/gambar/you-code-high-resolution-logo.png"
              class="img img-fluid mx-auto d-block mb-3"
              alt="..."
            />
            <div class="mb-3">
              <label for="username">Username</label>
              <input
                type="text"
                class="form-control bg-info-subtle"
                placeholder="Masukkan Username"
              />
            </div>
            <div class="mb-3">
              <label for="password">Password</label>
              <input
                type="password"
                class="form-control bg-info-subtle"
                placeholder="Masukkan Password"
              />
            </div>
            <div class="button">
              <a href="#">
                <button
                  type="button"
                  class="d-grid gap-2 col-6 mx-auto btn btn-primary"
                >
                  Login
                </button></a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
