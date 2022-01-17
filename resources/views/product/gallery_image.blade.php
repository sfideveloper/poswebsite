@extends('layout.main') @section('content')

<div class="row">
    <div class="col-md-6 offset-3">
        <form action="{{route('product.galleryImage')}}"  id="imageUploadForm">
            @csrf
            <label>Name:</label>
            <input type="text" name="name" class="form-control" required>
            <label class="mt-2">Mobile:</label>
            <input type="text" name="mobile" class="form-control" required>
            <span style="color: red;" id="mobile-error"></span>
            <label class="mt-2">Upload Image:</label>
            <div id="imageUpload" class="dropzone mt-2"></div>
            <button id="uploaderBtn" type="button" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
        
<script type="text/javascript">
    Dropzone.autoDiscover = false;

    MSG = {
        name: "Please enter name",
        email: "Please enter email",
        mobile: "Please enter mobile number"
    };

    function validate() {
        $("#imageUploadForm").validate({
            submitHandler: function (form) {
                return false;
            },
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                mobile: {
                    required: true,
                    minlength: 7
                },
            },
            messages: {
                name: {
                    required: MSG.name
                },
                email: {
                    required: MSG.email
                },
                mobile: {
                    required: MSG.mobile
                },
            }
        });
    }

    $(".dropzone").sortable({
        items:'.dz-preview',
        cursor: 'grab',
        opacity: 0.5,
        containment: '.dropzone',
        distance: 20,
        tolerance: 'pointer',
        stop: function () {
          var queue = myDropzone.getAcceptedFiles();
          newQueue = [];
          $('#imageUpload .dz-preview .dz-filename [data-dz-name]').each(function (count, el) {           
                var name = el.innerHTML;
                queue.forEach(function(file) {
                    if (file.name === name) {
                        newQueue.push(file);
                    }
                });
          });
          myDropzone.files = newQueue;
        }
    });

    myDropzone = new Dropzone('div#imageUpload', {
        addRemoveLinks: true,
        autoProcessQueue: false,
        uploadMultiple: true,
        parallelUploads: 100,
        maxFiles: 3,
        paramName: 'file',
        clickable: true,
        type: 'POST',
        url: '{{route('product.galleryImage')}}',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
            return time + file.name;
        },
        init: function () {
            var myDropzone = this;
            // Update selector to match your button
            $('#uploaderBtn').on("click", function (e) {
                //alert(myDropzone.getAcceptedFiles());
                e.preventDefault();
                if ( $("#imageUploadForm").valid() && myDropzone.getAcceptedFiles().length ) {
                    myDropzone.processQueue();
                }
                else {
                    $.ajax({
                        type:'POST',
                        url:'{{route('product.galleryImage')}}',
                        data: $("#imageUploadForm").serialize(),
                        success:function(){
                            location.href='../products';
                        },
                        error:function(response) {
                          if(response.responseJSON.errors.mobile) {
                              $("#mobile-error").text(response.responseJSON.errors.mobile);
                          }
                        },
                    });
                }
                //return false;
            });

            this.on('sending', function (file, xhr, formData) {
                // Append all form inputs to the formData Dropzone will POST
                var data = $("#imageUploadForm").serializeArray();
                $.each(data, function (key, el) {
                    formData.append(el.name, el.value);
                });
                //console.log(formData);
            });
        },
        error: function (file, response) {
            if(response.errors.mobile) {
              $("#mobile-error").text(response.errors.mobile);
              this.removeAllFiles(true);
            }
            //console.log(response.errors.mobile);
            else {
              try {
                  var res = JSON.parse(response);
                  if (typeof res.message !== 'undefined' && !$modal.hasClass('in')) {
                      $("#success-icon").attr("class", "fas fa-thumbs-down");
                      $("#success-text").html(res.message);
                      $modal.modal("show");
                  } else {
                      if ($.type(response) === "string")
                          var message = response; //dropzone sends it's own error messages in string
                      else
                          var message = response.message;
                      file.previewElement.classList.add("dz-error");
                      _ref = file.previewElement.querySelectorAll("[data-dz-errormessage]");
                      _results = [];
                      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                          node = _ref[_i];
                          _results.push(node.textContent = message);
                      }
                      return _results;
                  }
              } catch (error) {
                  console.log(error);
              }
            }
        },
        successmultiple: function (file, response) {
            location.href='../products';
            console.log(file, response);
        },
        completemultiple: function (file, response) {
            console.log(file, response, "completemultiple");
        },
        reset: function () {
            console.log("resetFiles");
            this.removeAllFiles(true);
        }
    });
</script>
@endsection