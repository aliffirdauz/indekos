<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Dashboard for SIIDI - Biro Kemahasiswaan & Alumni" />
    <link rel="icon" href="/assets/img/Logo-Itenas.jpg">

    <title>SIIDI - ADMIN</title>

    <link rel="stylesheet" href="/css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css"/>
    <script
      src="https://kit.fontawesome.com/32f82e1dca.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
   
    <script type="text/javascript" src="/js/trix.js"></script>
  </head>
  <body>
    
    @include('admin.partials.navbar')

    @yield('content')

    <script src="/js/index.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable({
          scrollX: true,
        });
      });

      const navbar = document.querySelector('.col-navbar')
      const cover = document.querySelector('.screen-cover')

      const sidebar_items = document.querySelectorAll('.sidebar-item')

      function toggleNavbar() {
        navbar.classList.toggle('d-none')
        cover.classList.toggle('d-none')
      }

      function toggleActive(e) {
        sidebar_items.forEach(function(v, k) {
          v.classList.remove('active')
        })
        e.closest('.sidebar-item').classList.add('active')
      }

      document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault()
      })

      function previewImage() {
        const image = document.querySelector('#foto')
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader()
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
          imgPreview.src = oFREvent.target.result
        }
      }
    </script>
  </body>
</html>
