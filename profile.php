<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
  <?php require_once("include/inc-head.php"); ?>
</head>

<body>
  <div class="theme-wrapper">
    <?php require_once("include/inc-menu.php"); ?>
    <div class="theme-content">
      <?php require_once("include/inc-header.php"); ?>
      <div class="px-5 py-4">
        <div class="is-flex is-gap-4 is-align-items-center is-justify-content-space-between">
          <div class="card-title">
            <h1 class="fs-5 fw-600 lh-1">Profile</h1>
            <ul class="breadcrumbs mt-1">
              <li>
                <a href="index.php">Dashboard</a>
              </li>
              <li class="active">Profile</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="px-5 mb-5">
        <div class="columns is-multiline">
          <div class="column is-12-mobile is-12-tablet is-8-desktop is-8-widescreen col-form">
            <div class="card h-100">
              <div class="border-bottom card-header px-5 py-3">
                <h4 class="fs-6 fw-600 mb-0">Edit Profile</h4>
              </div>
              <div class="card-body p-5">
                <form id="update-profile">
                  <div class="columns is-multiline">
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                      <div class="form-group">
                        <label class="form-label">First Name*</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" required>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                      <div class="form-group">
                        <label class="form-label">Last Name*</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" required>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                      <div class="form-group">
                        <label class="form-label">Email*</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                      <label class="form-label">Mobile Number*</label>
                      <div class="form-group-combine">
                        <div class="columns is-gapless is-is-flex-wrap-nowrap">
                          <div class="column select-sm">
                            <div class="form-group select-country custom-select select-sm">
                              <select name="countryCode" class="form-control select" required>
                                <option value="">Code*</option>
                                <option selected value="+91">+91</option>
                              </select>
                            </div>
                          </div>
                          <div class="column">
                            <div class="form-group">
                              <input type="tel" class="form-control" name="mobileNumber" id="mobileNumber" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                      <div class="form-group">
                        <div class="profile-item">
                          <img class="avatar avatar-xl cursor-pointer" id="profile-image" src="media/images/avatars/1.png" alt="Profile Image">
                          <input class="is-hidden" type="file" id="fileInput" accept="image/*">
                          <button class="btn btn-icon btn-sm btn-success rounded-circle" id="upload-profile">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                              <path d="M13.5 6.5l4 4" />
                            </svg>
                          </button>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-form">
            <div class="card h-100">
              <div class="border-bottom card-header px-5 py-3">
                <h4 class="fs-6 fw-600 mb-0">Change Password</h4>
              </div>
              <div class="card-body p-5">
                <form id="change-password">
                  <div class="columns is-multiline">
                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                      <div class="form-group">
                        <label class="form-label">New Password*</label>
                        <div class="input-group">
                          <input type="password" class="form-control password-field" name="newPassword" id="newPassword" required>
                          <span class="input-group-text" onclick="togglePassword(this)">
                            <svg class="icon icon-tabler-eye-off toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path stroke="none" d="M0 0h24v24H0z" />
                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                              <path d="M3 3l18 18" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                      <div class="form-group">
                        <label class="form-label">Confirm Password*</label>
                        <div class="input-group">
                          <input type="password" class="form-control password-field" name="confirmPassword" id="confirmPassword" required>
                          <span class="input-group-text" onclick="togglePassword(this)">
                            <svg class="icon icon-tabler-eye-off toggle-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                              <path stroke="none" d="M0 0h24v24H0z" />
                              <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
                              <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
                              <path d="M3 3l18 18" />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("include/inc-footer.php"); ?>
  </div>
  </div>
  <?php require_once("include/inc-foot-scripts.php"); ?>

  <script>
    document.getElementById('upload-profile').addEventListener('click', function() {
      document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          document.getElementById('profile-image').src = e.target.result;
        }
        reader.readAsDataURL(file);

        // Auto-upload the file
        const formData = new FormData();
        formData.append('file', file);

        fetch('upload.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            alert(data.message);
          })
          .catch(error => {
            console.error('Error:', error);
            alert('Upload failed.');
          });
      }
    });

    /*$(document).ready(function() {
      $('#update-profile').validate({
        rules: {
          firstName: {
            required: true
          },
          lastName: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          countryCode: {
            required: true
          },
          mobileNumber: {
            required: true,
            digits: true
          }
        },
        messages: {
          firstName: {
            required: "Please enter your first name"
          },
          lastName: {
            required: "Please enter your last name"
          },
          email: {
            required: "Please enter your email address",
            email: "Please enter a valid email address"
          },
          countryCode: {
            required: "Please select a country code"
          },
          mobileNumber: {
            required: "Please enter your mobile number",
            digits: "Please enter only digits"
          }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
          error.addClass('invalid-feedback');
          element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
        },
        submitHandler: function(form) {
          // Here you can submit the form via AJAX or perform any other actions
          form.submit();
        }
      });
    });*/

    $(document).ready(function() {
      $('#update-profile').validate({
        rules: {
          firstName: {
            required: true
          },
          lastName: {
            required: true
          },
          email: {
            required: true,
            email: true
          },
          countryCode: {
            required: true
          },
          mobileNumber: {
            required: true,
            digits: true
          }
        },
        messages: {
          firstName: {
            required: "Please enter your first name"
          },
          lastName: {
            required: "Please enter your last name"
          },
          email: {
            required: "Please enter your email address",
            email: "Please enter a valid email address"
          },
          countryCode: {
            required: "Please select a country code"
          },
          mobileNumber: {
            required: "Please enter your mobile number",
            digits: "Please enter only digits"
          }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
          if (element.hasClass('form-control')) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          } else {
            error.insertAfter(element);
          }
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
          $(element).closest('.form-group').addClass('is-error');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
          $(element).closest('.form-group').removeClass('is-error');
        },
        submitHandler: function(form) {
          // Here you can submit the form via AJAX or perform any other actions
          form.submit();
        }
      });
      $('#change-password').validate({
        rules: {
          newPassword: {
            required: true,
            minlength: 6 // Example: Minimum length of 6 characters
          },
          confirmPassword: {
            required: true,
            equalTo: '#newPassword' // Ensure the confirmPassword matches newPassword
          }
        },
        messages: {
          newPassword: {
            required: "Please enter a new password",
            minlength: "Your password must be at least 6 characters long"
          },
          confirmPassword: {
            required: "Please confirm your password",
            equalTo: "Passwords do not match"
          }
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
          if (element.hasClass('password-field')) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
          } else {
            error.insertAfter(element);
          }
        },
        highlight: function(element, errorClass, validClass) {
          $(element).addClass('is-invalid');
          $(element).closest('.form-group').addClass('is-error');
        },
        unhighlight: function(element, errorClass, validClass) {
          $(element).removeClass('is-invalid');
          $(element).closest('.form-group').removeClass('is-error');
        },
        submitHandler: function(form) {
          // Here you can submit the form via AJAX or perform any other actions
          form.submit();
        }
      });
    });
  </script>
</body>

</html>