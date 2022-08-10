@extends('admin.layouts.main')

@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">
<style>
      .dropzone {
            background: #e3e6ff;
            border-radius: 13px;
            margin-left: auto;
            margin-right: auto;
            border: 2px dotted #1833FF;
        }
    </style>
    <main class="content flex-fill">
        <section>
            <button
            aria-controls="sidebar"
            data-bs-toggle="offcanvas"
            data-bs-target=".sidebar"
            aria-label="Button Hamburger"
            class="sidebarOffcanvas mb-5 btn p-0 border-0 d-flex d-lg-none"
            >
            <i class="fa-solid fa-bars"></i>
            </button>
            <nav class="nav-content gap-5">
            <div class="d-flex gap-3 align-items-center">
                <img
                src="/assets/images/photo.webp"
                alt="Photo Profile"
                class="photo-profile"
                />
                <div>
                <p class="title-content mb-2">Welcome back, Admin!</p>
                </div>
            </div>
            </nav>
        </section>

        <section class="d-flex flex-column gap-4">
            <div class="d-flex justify-content-between align-items-center gap-3">
                <h4 class="title-section-content">Tambah Kost</h4>
            </div>
                @csrf
                <div class="form-group mb-3">
                <label for="pemilik_id" class="form-label">Unggah Foto</label>
                        <div id="dropzone">
                            <form action="/store_image/{{$kosan_id}}" class="dropzone"
                                id="file-upload" enctype="multipart/form-data">
                                @csrf
                                <div class="dz-message">
                                    Drag and Drop Single/Multiple Photo Here<br>
                                </div>
                            </form>
                        </div>
                </div>
                <div>
                    <a class="btn btn-secondary mt-3 me-2" href="/admin">Kembali</a>
                </div>
        </section>
    </main>

    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
    <script>
        var dropzone = new Dropzone('#file-upload', {
            previewTemplate: document.querySelector('#preview-template').innerHTML,
            parallelUploads: 3,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            maxFilesize: 5,
            filesizeBase: 1500,
            thumbnail: function(file, dataUrl) {
                if (file.previewElement) {
                    file.previewElement.classList.remove("dz-file-preview");
                    var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
                    for (var i = 0; i < images.length; i++) {
                        var thumbnailElement = images[i];
                        thumbnailElement.alt = file.name;
                        thumbnailElement.src = dataUrl;
                    }
                    setTimeout(function() {
                        file.previewElement.classList.add("dz-image-preview");
                    }, 1);
                }
            }
        });

        var minSteps = 6,
            maxSteps = 60,
            timeBetweenSteps = 100,
            bytesPerStep = 100000;

        dropzone.uploadFiles = function(files) {
            var self = this;

            for (var i = 0; i < files.length; i++) {

                var file = files[i];
                totalSteps = Math.round(Math.min(maxSteps, Math.max(minSteps, file.size / bytesPerStep)));

                for (var step = 0; step < totalSteps; step++) {
                    var duration = timeBetweenSteps * (step + 1);
                    setTimeout(function(file, totalSteps, step) {
                        return function() {
                            file.upload = {
                                progress: 100 * (step + 1) / totalSteps,
                                total: file.size,
                                bytesSent: (step + 1) * file.size / totalSteps
                            };

                            self.emit('uploadprogress', file, file.upload.progress, file.upload
                                .bytesSent);
                            if (file.upload.progress == 100) {
                                file.status = Dropzone.SUCCESS;
                                self.emit("success", file, 'success', null);
                                self.emit("complete", file);
                                self.processQueue();
                            }
                        };
                    }(file, totalSteps, step), duration);
                }
            }
        }
    </script>
@endsection