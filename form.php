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
            <h1 class="fs-5 fw-600 lh-1">Form</h1>
            <ul class="breadcrumbs mt-1">
              <li>
                <a href="index.php">Dashboard</a>
              </li>
              <li class="active">Form</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="px-5 mb-5">
        <div class="card">
          <div class="card-body p-5">
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Input</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">First Name*</label>
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <label class="form-label">Phone*</label>
                  <div class="form-group-combine">
                    <div class="columns is-gapless is-is-flex-wrap-nowrap">
                      <div class="column select-sm">
                        <div class="form-group select-country custom-select select-sm">
                          <select name="" class="form-control select">
                            <option value="">Code*</option>
                            <option selected value="+91">+91</option>
                          </select>
                        </div>
                      </div>
                      <div class="column">
                        <div class="form-group">
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="is-flex is-align-items-center is-gap-5">
                    <div class="form-group mb-0 is-flex-grow-1">
                      <label class="form-label">Email Address</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="is-flex-shrink-0">
                      <label class="form-label form-label-blank"></label>
                      <a class="btn btn-primary" href="#">Add More</a>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="is-flex is-align-items-center is-gap-5">
                    <div class="is-flex-grow-1">
                      <label class="form-label">Phone*</label>
                      <div class="form-group-combine">
                        <div class="columns is-gapless is-is-flex-wrap-nowrap">
                          <div class="column select-sm">
                            <div class="form-group select-country custom-select select-sm">
                              <select name="" class="form-control select">
                                <option value="">Code*</option>
                                <option selected value="+91">+91</option>
                              </select>
                            </div>
                          </div>
                          <div class="column">
                            <div class="form-group">
                              <input type="text" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="is-flex-shrink-0">
                      <label class="form-label form-label-blank"></label>
                      <a class="btn btn-primary" href="#">Add More</a>
                    </div>
                  </div>
                </div>


                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group">
                      <input type="password" class="form-control password-field">
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
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Amount</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-rupee">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M18 5h-11h3a4 4 0 0 1 0 8h-3l6 6" />
                          <path d="M7 9l11 0" />
                        </svg>
                      </span>
                      <input type="text" class="form-control">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-user">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                      </span>
                      <input type="text" class="form-control">
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-merge">
                      <input type="password" class="form-control password-field">
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
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Amount</label>
                    <div class="input-group input-group-merge">
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-currency-rupee">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M18 5h-11h3a4 4 0 0 1 0 8h-3l6 6" />
                          <path d="M7 9l11 0" />
                        </svg>
                      </span>
                      <input type="text" class="form-control">
                      <span class="input-group-text">.00</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Textarea</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Message</label>
                    <textarea class="form-control" name="" rows="3"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Input File</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label for="custom-file-upload-1" class="input-group file-upload">
                      <span class="form-control file-upload-name">Upload</span>
                      <input type="file" name="attachment-file-1" id="custom-file-upload-1" />
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-upload">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                          <path d="M12 11v6" />
                          <path d="M9.5 13.5l2.5 -2.5l2.5 2.5" />
                        </svg>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label for="custom-file-upload-2" class="input-group input-group-merge file-upload">
                      <span class="form-control file-upload-name">Upload</span>
                      <input type="file" name="attachment-file-2" id="custom-file-upload-2" />
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-upload">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                          <path d="M12 11v6" />
                          <path d="M9.5 13.5l2.5 -2.5l2.5 2.5" />
                        </svg>
                      </span>
                    </label>
                  </div>
                </div>

                <!-- <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label for="custom-file-upload" class="input-group file-upload">
                      <span class="form-control file-upload-name">Upload</span>
                      <input type="file" name="attachment-file" value="1" id="custom-file-upload" />
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-upload">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                          <path d="M12 11v6" />
                          <path d="M9.5 13.5l2.5 -2.5l2.5 2.5" />
                        </svg>
                      </span>
                    </label>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label for="custom-file-upload-2" class="input-group file-upload">
                      <span class="form-control file-upload-name">Upload</span>
                      <input type="file" name="attachment-file-2" value="1" id="custom-file-upload-2" />
                      <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-upload">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                          <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                          <path d="M12 11v6" />
                          <path d="M9.5 13.5l2.5 -2.5l2.5 2.5" />
                        </svg>
                      </span>
                    </label>
                  </div>
                </div> -->
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Select & Multiple Select</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group custom-select">
                    <label class="form-label">Select</label>
                    <select name="" class="form-control select">
                      <option value="">Select</option>
                      <option value="Option 1">Option 1</option>
                      <option value="Option 2">Option 2</option>
                      <option value="Option 3">Option 3</option>
                    </select>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group custom-select">
                    <label class="form-label">Multi Select</label>
                    <select name="" class="form-control select" multiple>
                      <option value="">Multi Select</option>
                      <option value="Option 1">Option 1</option>
                      <option value="Option 2">Option 2</option>
                      <option value="Option 3">Option 3</option>
                      <option value="Option 4">Option 4</option>
                      <option value="Option 5">Option 5</option>
                      <option value="Option 6">Option 6</option>
                      <option value="Option 7">Option 7</option>
                      <option value="Option 8">Option 8</option>
                      <option value="Option 9">Option 9</option>
                      <option value="Option 10">Option 10</option>
                    </select>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-12-desktop is-12-widescreen col-form">
                  <div class="form-group custom-select">
                    <label class="form-label">Multi Select Automatic tags</label>
                    <select name="" class="form-control select-multiple-automatic-tag" multiple>
                      <option value="Option 1">Option 1</option>
                      <option value="Option 2">Option 2</option>
                      <option value="Option 3">Option 3</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Checkbox & Radio</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="checkbox-group">
                    <div class="checkbox-item">
                      <input id="checkbox-1" class="form-check-input" name="checkbox-1" type="checkbox" />
                      <label for="checkbox-1" class="form-check-label"><span>Checkbox 1</span></label>
                    </div>
                    <div class="checkbox-item">
                      <input id="checkbox-2" class="form-check-input" name="checkbox-2" type="checkbox" />
                      <label for="checkbox-2" class="form-check-label"><span>Checkbox 2</span></label>
                    </div>
                    <div class="checkbox-item">
                      <input id="checkbox-3" class="form-check-input" name="checkbox-3" type="checkbox" />
                      <label for="checkbox-3" class="form-check-label"><span>Checkbox 3</span></label>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="radio-group">
                    <div class="radio-item">
                      <input id="radio-1" class="form-radio-input" name="radio" type="radio" />
                      <label for="radio-1" class="form-radio-label"><span>Radio 1</span></label>
                    </div>
                    <div class="radio-item">
                      <input id="radio-2" class="form-radio-input" name="radio" type="radio" />
                      <label for="radio-2" class="form-radio-label"><span>Radio 2</span></label>
                    </div>
                    <div class="radio-item">
                      <input id="radio-3" class="form-radio-input" name="radio" type="radio" />
                      <label for="radio-3" class="form-radio-label"><span>Radio 3</span></label>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="checkbox-group is-flex-direction-column">
                    <div class="checkbox-item">
                      <input id="checkbox-4" class="form-check-input" name="checkbox-4" type="checkbox" />
                      <label for="checkbox-4" class="form-check-label"><span>Checkbox 1</span></label>
                    </div>
                    <div class="checkbox-item">
                      <input id="checkbox-5" class="form-check-input" name="checkbox-5" type="checkbox" />
                      <label for="checkbox-5" class="form-check-label"><span>Checkbox 2</span></label>
                    </div>
                    <div class="checkbox-item">
                      <input id="checkbox-6" class="form-check-input" name="checkbox-6" type="checkbox" />
                      <label for="checkbox-6" class="form-check-label"><span>Checkbox 3</span></label>
                    </div>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="radio-group is-flex-direction-column">
                    <div class="radio-item">
                      <input id="radio-4" class="form-radio-input" name="radio-1" type="radio" />
                      <label for="radio-4" class="form-radio-label"><span>Radio 1</span></label>
                    </div>
                    <div class="radio-item">
                      <input id="radio-5" class="form-radio-input" name="radio-1" type="radio" />
                      <label for="radio-5" class="form-radio-label"><span>Radio 2</span></label>
                    </div>
                    <div class="radio-item">
                      <input id="radio-6" class="form-radio-input" name="radio-1" type="radio" />
                      <label for="radio-6" class="form-radio-label"><span>Radio 3</span></label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Switch toggle</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-form">
                  <h5 class="fs-7 fw-500 mb-2">Basic Style</h5>
                  <div class="switch-item switch-style-1">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-md switch-style-1">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-sm switch-style-1">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-form">
                  <h5 class="fs-7 fw-500 mb-2">Flat Style</h5>
                  <div class="switch-item switch-style-2">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-md switch-style-2">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-sm switch-style-2">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-4-desktop is-4-widescreen col-form">
                  <h5 class="fs-7 fw-500 mb-2">Skewed Style</h5>
                  <div class="switch-item switch-style-3">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-md switch-style-3">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                  <div class="switch-item switch-item-sm switch-style-3">
                    <label class="switch-label">
                      <input type="checkbox" name="checkbox" class="switch-input">
                      <span class="switch-mark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Flatpickr</h4>
              <div class="columns is-multiline">
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Date Picker</label>
                    <input type="text" class="form-control flatpickr-date" placeholder="DD-MM-YYYY" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Time Picker</label>
                    <input type="text" class="form-control flatpickr-time" placeholder="HH:MM" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Datetime Picker</label>
                    <input type="text" class="form-control flatpickr-datetime" placeholder="DD-MM-YYYY HH:MM" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Multiple Dates Picker</label>
                    <input type="text" class="form-control flatpickr-multi" placeholder="YYYY-MM-DD HH:MM" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Range Picker</label>
                    <input type="text" class="form-control flatpickr-range" placeholder="YYYY-MM-DD to YYYY-MM-DD" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Human Friendly Date Picker</label>
                    <input type="text" class="form-control flatpickr-human-friendly" placeholder="Month DD, YYYY" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Disabled Range</label>
                    <input type="text" class="form-control flatpickr-disabled-range" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
                <div class="column is-12-mobile is-12-tablet is-6-desktop is-6-widescreen col-form">
                  <div class="form-group">
                    <label class="form-label">Inline Picker</label>
                    <input type="text" class="form-control flatpickr-inline" placeholder="YYYY-MM-DD" />
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Basic</h4>
              <form action="/upload" class="dropzone needsclick" id="dropzone-basic">
                <div class="dz-message needsclick">
                  Drop files here or click to upload
                  <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                    uploaded.)</span>
                </div>
                <div class="fallback">
                  <input name="file" type="file" />
                </div>
              </form>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Multiple</h4>
              <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
                <div class="dz-message needsclick">
                  Drop files here or click to upload
                  <span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually
                    uploaded.)</span>
                </div>
                <div class="fallback">
                  <input name="file" type="file" />
                </div>
              </form>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Snow Theme</h4>
              <div id="snow-toolbar">
                <span class="ql-formats">
                  <select class="ql-font"></select>
                  <select class="ql-size"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-strike"></button>
                </span>
                <span class="ql-formats">
                  <select class="ql-color"></select>
                  <select class="ql-background"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-script" value="sub"></button>
                  <button class="ql-script" value="super"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-header" value="1"></button>
                  <button class="ql-header" value="2"></button>
                  <button class="ql-blockquote"></button>
                  <button class="ql-code-block"></button>
                </span>
              </div>
              <div id="snow-editor">
                <h6>Quill Rich Text Editor</h6>
                <p>
                  Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie
                  macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.
                </p>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Bubble Theme</h4>
              <div id="bubble-toolbar">
                <span class="ql-formats">
                  <select class="ql-font"></select>
                  <select class="ql-size"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-strike"></button>
                </span>
                <span class="ql-formats">
                  <select class="ql-color"></select>
                  <select class="ql-background"></select>
                </span>
                <span class="ql-formats">
                  <button class="ql-script" value="sub"></button>
                  <button class="ql-script" value="super"></button>
                </span>
                <span class="ql-formats">
                  <button class="ql-header" value="1"></button>
                  <button class="ql-header" value="2"></button>
                  <button class="ql-blockquote"></button>
                  <button class="ql-code-block"></button>
                </span>
              </div>
              <div id="bubble-editor">
                <h6>Quill Rich Text Editor</h6>
                <p>
                  Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie
                  macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.
                </p>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Full Editor</h4>
              <div id="full-editor">
                <h6>Quill Rich Text Editor</h6>
                <p>
                  Cupcake ipsum dolor sit amet. Halvah cheesecake chocolate bar gummi bears cupcake. Pie
                  macaroon bear claw. Soufflé I love candy canes I love cotton candy I love.
                </p>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Dropdown</h4>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <div class="dropdown">
                  <button class="btn btn-icon bg-transparent border-0" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-dots-vertical">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                      <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                      <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-primary" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-secondary" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-success" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-danger" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-warning" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-icon btn-info" type="button" data-toggle="dropdown">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-primary" type="button" data-toggle="dropdown">
                    <span>Primary</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-secondary" type="button" data-toggle="dropdown">
                    <span>Secondary</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-success" type="button" data-toggle="dropdown">
                    <span>Success</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-danger" type="button" data-toggle="dropdown">
                    <span>Danger</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-warning" type="button" data-toggle="dropdown">
                    <span>Warning</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
                <div class="dropdown">
                  <button class="btn btn-info" type="button" data-toggle="dropdown">
                    <span>Info</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-down">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>
                  <div class="dropdown-menu pt-1 pb-1">
                    <a class="dropdown-item" href="javascript:void(0);">Today</a>
                    <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                    <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                    <a class="dropdown-item" href="javascript:void(0);">Custom</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Basic Buttons</h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-primary" href="#">Primary</a>
                <a class="btn btn-secondary" href="#">Secondary</a>
                <a class="btn btn-success" href="#">Success</a>
                <a class="btn btn-danger" href="#">Danger</a>
                <a class="btn btn-warning" href="#">Warning</a>
                <a class="btn btn-info" href="#">Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3">
                <a class="btn rounded-pill btn-primary" href="#">Primary</a>
                <a class="btn rounded-pill btn-secondary" href="#">Secondary</a>
                <a class="btn rounded-pill btn-success" href="#">Success</a>
                <a class="btn rounded-pill btn-danger" href="#">Danger</a>
                <a class="btn rounded-pill btn-warning" href="#">Warning</a>
                <a class="btn rounded-pill btn-info" href="#">Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Label Buttons</h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-label-primary" href="#">Primary</a>
                <a class="btn btn-label-secondary" href="#">Secondary</a>
                <a class="btn btn-label-success" href="#">Success</a>
                <a class="btn btn-label-danger" href="#">Danger</a>
                <a class="btn btn-label-warning" href="#">Warning</a>
                <a class="btn btn-label-info" href="#">Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn rounded-pill btn-label-primary" href="#">Primary</a>
                <a class="btn rounded-pill btn-label-secondary" href="#">Secondary</a>
                <a class="btn rounded-pill btn-label-success" href="#">Success</a>
                <a class="btn rounded-pill btn-label-danger" href="#">Danger</a>
                <a class="btn rounded-pill btn-label-warning" href="#">Warning</a>
                <a class="btn rounded-pill btn-label-info" href="#">Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Outline Buttons</h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-outline-primary" href="#">Primary</a>
                <a class="btn btn-outline-secondary" href="#">Secondary</a>
                <a class="btn btn-outline-success" href="#">Success</a>
                <a class="btn btn-outline-danger" href="#">Danger</a>
                <a class="btn btn-outline-warning" href="#">Warning</a>
                <a class="btn btn-outline-info" href="#">Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn rounded-pill btn-outline-primary" href="#">Primary</a>
                <a class="btn rounded-pill btn-outline-secondary" href="#">Secondary</a>
                <a class="btn rounded-pill btn-outline-success" href="#">Success</a>
                <a class="btn rounded-pill btn-outline-danger" href="#">Danger</a>
                <a class="btn rounded-pill btn-outline-warning" href="#">Warning</a>
                <a class="btn rounded-pill btn-outline-info" href="#">Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Basic Buttons with Icons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn btn-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn btn-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn btn-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn btn-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn btn-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn rounded-pill btn-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn rounded-pill btn-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn rounded-pill btn-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn rounded-pill btn-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn rounded-pill btn-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn rounded-pill btn-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Label Buttons with Icons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-label-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn btn-label-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn btn-label-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn btn-label-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn btn-label-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn btn-label-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn rounded-pill btn-label-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn rounded-pill btn-label-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn rounded-pill btn-label-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn rounded-pill btn-label-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn rounded-pill btn-label-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn rounded-pill btn-label-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Outline Buttons with Icons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-outline-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn btn-outline-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn btn-outline-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn btn-outline-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn btn-outline-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn btn-outline-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn rounded-pill btn-outline-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Primary</a>
                <a class="btn rounded-pill btn-outline-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Secondary</a>
                <a class="btn rounded-pill btn-outline-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Success</a>
                <a class="btn rounded-pill btn-outline-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Danger</a>
                <a class="btn rounded-pill btn-outline-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Warning</a>
                <a class="btn rounded-pill btn-outline-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg>
                  Info</a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Icon Buttons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon btn-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon rounded-pill btn-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Label Icon Buttons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon btn-label-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-label-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-label-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-label-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-label-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-label-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon rounded-pill btn-label-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-label-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-label-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-label-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-label-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-label-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
            </div>
            <div class="mb-4">
              <h4 class="fs-5 fw-600 mb-2">Outline Icon Buttons
              </h4>
              <h5 class="fs-7 fw-500 mb-2">Default</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon btn-outline-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-outline-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-outline-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-outline-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-outline-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon btn-outline-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
              <h5 class="fs-7 fw-500 mb-2">Rounded</h5>
              <div class="is-flex is-flex-wrap-wrap is-gap-3 mb-4">
                <a class="btn btn-icon rounded-pill btn-outline-primary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-outline-secondary" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-outline-success" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-outline-danger" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-outline-warning" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
                <a class="btn btn-icon rounded-pill btn-outline-info" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-star">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" />
                  </svg></a>
              </div>
            </div>
          </div>
        </div>
        <div class="card mt-5">
          <div class="card-body p-5">
            <h4>For Viewing all Icons <a class="fw-700" href="https://tabler.io/icons" target="_blank">View</a></h4>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("include/inc-footer.php"); ?>
  </div>
  </div>
  <?php require_once("include/inc-foot-scripts.php"); ?>
</body>

</html>