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
            <h1 class="fs-4 fw-600">User List</h1>
          </div>
          <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
            <a class="btn btn-icon btn-outline btn-outline-primary" href="#" open-sidebar="filter-sidebar">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-filter" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M4 4h16v2.172a2 2 0 0 1 -.586 1.414l-4.414 4.414v7l-6 2v-8.5l-4.48 -4.928a2 2 0 0 1 -.52 -1.345v-2.227z"></path>
              </svg>
            </a>
            <a class="btn btn-primary" open-sidebar="add-users-sidebar" href="#">Add</a>
          </div>
        </div>
      </div>
      <div class="px-5 mb-5">
        <div class="card">
          <div class="card-body p-5">
            <div class="text-nowrap theme-scrollbar-horizontal">
              <table class="theme-table">
                <thead>
                  <tr>
                    <th class="th-with-dropdown">No
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">User
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Contact No
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Role
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Department
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Designation
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Date Range
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrows-sort">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 9l4 -4l4 4m-4 -4v14" />
                            <path d="M21 15l-4 4l-4 -4m4 4v-14" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>
                      <div class="tag-rounded-wrapper">
                        <div class="tag-rounded tag-rounded-gray">
                          <span class="avatar avatar-md">
                            <span class="user-name-latter latter-j">J</span>
                          </span>
                          <div>
                            <b>John Doe</b>
                            <span class="fs-8 fw-semibold">AP001</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="tag-list">
                        <span class="tag tag-with-icon tag-gray">
                          <div class="tag-icon mr-2 pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                            </svg>
                          </div>(+91) 8460133131
                        </span>
                      </div>
                    </td>
                    <td><span class="tag tag-primary">Master HR</span></td>
                    <td><span class="tag tag-primary">Management</span></td>
                    <td><span class="tag tag-primary">Director</span></td>
                    <td>
                      <div class="theme-date-list">
                        <div class="theme-date" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Create : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                        <div class="theme-date" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Update : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                      </div>
                    </td>
                    <td class="table-actions-wrapper">
                      <div class="table-actions">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                          </svg>
                        </a>
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7l16 0"></path>
                            <path d="M10 11l0 6"></path>
                            <path d="M14 11l0 6"></path>
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                          </svg>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>
                      <div class="tag-rounded-wrapper">
                        <div class="tag-rounded tag-rounded-gray">
                          <img class="avatar avatar-md" src="media/images/avatars/2.png" alt="Avatars" />
                          <div>
                            <b>Janny Doe</b>
                            <span class="fs-8 fw-semibold">AP001</span>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="tag-list">
                        <span class="tag tag-with-icon tag-gray">
                          <div class="tag-icon mr-2 pr-2"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                              <path d="M3 7l9 6l9 -6"></path>
                            </svg></div>jannydoe@gmail.com
                        </span>
                        <span class="tag tag-with-icon tag-gray">
                          <div class="tag-icon mr-2 pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-phone" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2"></path>
                            </svg>
                          </div>(+91) 8460133131
                        </span>
                      </div>
                    </td>
                    <td><span class="tag tag-primary">Employee</span></td>
                    <td><span class="tag tag-primary">Web</span></td>
                    <td><span class="tag tag-primary">Sr. Web Designer</span></td>
                    <td>
                      <div class="theme-date-list">
                        <div class="theme-date" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Create : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                        <div class="theme-date" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Update : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                      </div>
                    </td>
                    <td class="table-actions-wrapper">
                      <div class="table-actions">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                          </svg>
                        </a>
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 7l16 0"></path>
                            <path d="M10 11l0 6"></path>
                            <path d="M14 11l0 6"></path>
                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                          </svg>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require_once("include/inc-footer.php"); ?>
  </div>
  </div>
  <!--Sidebar-->
  <div id="filter-sidebar" class="theme-sidebar theme-sidebar-sm">
    <div class="theme-sidebar-card">
      <div class="theme-sidebar-header">
        <h5 class="theme-sidebar-title">Filter</h5>
        <div class="theme-sidebar-action">
          <span class="close-sidebar" close-sidebar>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 6l-12 12" />
              <path d="M6 6l12 12" />
            </svg>
          </span>
        </div>
      </div>
      <div class="theme-sidebar-detail">
        <form class="form" action="">
          <div class="theme-sidebar-content theme-scrollbar">
          </div>
          <div class="theme-sidebar-footer">
            <a class="btn btn-primary w-100" href="#">Submit</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="add-users-sidebar" class="theme-sidebar theme-sidebar-sm form-group-lg">
    <div class="theme-sidebar-card">
      <div class="theme-sidebar-header">
        <h5 class="theme-sidebar-title">Add User</h5>
        <div class="theme-sidebar-action">
          <span class="close-sidebar" close-sidebar>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-x">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M18 6l-12 12" />
              <path d="M6 6l12 12" />
            </svg>
          </span>
        </div>
      </div>
      <div class="theme-sidebar-detail">
        <form class="form" action="">
          <div class="theme-sidebar-content theme-scrollbar">
            <div class="columns is-multiline">
              <div class="column is-12 col-form">
                <div class="form-group">
                  <label class="floating-label">First Name*</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group">
                  <label class="floating-label">Last Name*</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group-combine">
                  <div class="columns is-gapless is-is-flex-wrap-nowrap">
                    <div class="column select-sm">
                      <div class="form-group select-country custom-select select-sm">
                        <label class="floating-label">Code*</label>
                        <select name="" class="form-control select">
                          <option value="">Code*</option>
                          <option selected value="+91">+91</option>
                        </select>
                      </div>
                    </div>
                    <div class="column">
                      <div class="form-group">
                        <input type="text" class="form-control">
                        <label class="floating-label">Phone</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="floating-label">Role</label>
                  <select name="" class="form-control select">
                    <option value="">Role</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="floating-label">Department</label>
                  <select name="" class="form-control select">
                    <option value="">Department</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="floating-label">Designation</label>
                  <select name="" class="form-control select">
                    <option value="">Designation</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="theme-sidebar-footer">
            <a class="btn btn-primary w-100" href="#">Submit</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Sidebar-->
  <?php require_once("include/inc-foot-scripts.php"); ?>
</body>

</html>