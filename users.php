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
            <h1 class="fs-5 fw-600 lh-1">Users</h1>
            <ul class="breadcrumbs mt-1">
              <li>
                <a href="index.php">Dashboard</a>
              </li>
              <li class="active">Users</li>
            </ul>
          </div>
          <div class="is-flex is-align-items-center is-justify-content-end is-gap-3">
            <div class="form-group mb-0">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <div class="dropdown">
              <button class="btn btn-icon btn-outline-gray" type="button" data-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sort-ascending" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M4 6l7 0"></path>
                  <path d="M4 12l7 0"></path>
                  <path d="M4 18l9 0"></path>
                  <path d="M15 9l3 -3l3 3"></path>
                  <path d="M18 6l0 12"></path>
                </svg>
              </button>
              <div class="dropdown-menu pt-1 pb-1">
                <a class="dropdown-item" href="#">Sort By - A to Z</a>
                <a class="dropdown-item" href="#">Sort By - Z to A</a>
                <a class="dropdown-item" href="#">Created At First</a>
                <a class="dropdown-item" href="#">Created At Last</a>
              </div>
            </div>
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
                    <th class="th-with-dropdown active">Order
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">User
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Contact No
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Role
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Department
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Designation
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="th-with-dropdown">Date Range
                      <div class="table-filter">
                        <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-down">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M18 13l-6 6" />
                            <path d="M6 13l6 6" />
                          </svg>
                        </a>
                      </div>
                    </th>
                    <th class="text-center">Actions</th>
                  </tr>
                </thead>  
                <tbody id="handle-list-1">
                  <tr>
                    <td>
                      <div class="is-flex is-align-items-center is-gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-direction drag-handle cursor-pointer">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M9 10l3 -3l3 3" />
                          <path d="M9 14l3 3l3 -3" />
                        </svg>
                        1
                      </div>
                    </td>
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
                        <span class="tag tag-with-icon tag-gray">
                          <div class="tag-icon mr-2 pr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                              <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                              <path d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
                            </svg>
                          </div>(+91) 9876543210
                        </span>
                      </div>
                    </td>
                    <td><span class="tag tag-primary">Master HR</span></td>
                    <td><span class="tag tag-primary">Management</span></td>
                    <td><span class="tag tag-primary">Director</span></td>
                    <td>
                      <div class="theme-date-list">
                        <div class="theme-date" data-tooltip="Create : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                        <div class="theme-date" data-tooltip="Update : Fri, Feb 10, 2023 05:23 PM">
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
                        <a href="#" open-sidebar="edit-users-sidebar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                          </svg>
                        </a>
                        <a href="#" open-sidebar="view-users-sidebar">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                        </a>
                        <a href="#" open-sidebar="delete-sidebar">
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
                    <td>
                      <div class="is-flex is-align-items-center is-gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-direction drag-handle cursor-pointer">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M9 10l3 -3l3 3" />
                          <path d="M9 14l3 3l3 -3" />
                        </svg>
                        2
                      </div>
                    </td>
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
                        <div class="theme-date" data-tooltip="Create : Fri, Feb 10, 2023 05:23 PM">
                          <div class="theme-date-content">
                            <small>Jun</small>
                            <span>03</span>
                          </div>
                          <span class="theme-date-footer">2024</span>
                        </div>
                        <div class="theme-date" data-tooltip="Update : Fri, Feb 10, 2023 05:23 PM">
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
                        <a href="#" open-sidebar="edit-users-sidebar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4"></path>
                            <path d="M13.5 6.5l4 4"></path>
                          </svg>
                        </a>
                        <a href="#" open-sidebar="view-users-sidebar">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eye">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                        </a>
                        <a href="#" open-sidebar="delete-sidebar">
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
          <div class="card-footer is-align-items-center is-flex is-gap-3 is-justify-content-space-between px-5 pb-5">
            <span class="fs-7 gray-700">Showing 1 to 5 of 5 Entries</span>
            <ul class="pagination ml-auto">
              <li class="page-item">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M11 7l-5 5l5 5"></path>
                    <path d="M17 7l-5 5l5 5"></path>
                  </svg>
                </a>
              </li>
              <li class="page-item">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-left">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M15 6l-6 6l6 6"></path>
                  </svg>
                </a>
              </li>
              <li class="page-item active">
                <a href="#">1</a>
              </li>
              <li class="page-item">
                <a href="#">2</a>
              </li>
              <li class="page-item">
                <a href="#">3</a>
              </li>
              <li class="page-item">
                <a href="#">4</a>
              </li>
              <li class="page-item">
                <a href="#">5</a>
              </li>
              <li class="page-item">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevron-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 6l6 6l-6 6"></path>
                  </svg>
                </a>
              </li>
              <li class="page-item">
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-chevrons-right">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M7 7l5 5l-5 5"></path>
                    <path d="M13 7l5 5l-5 5"></path>
                  </svg>
                </a>
              </li>
            </ul>
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
            <div class="card">
              <div class="columns is-gapless">
                <div class="border-right column">
                  <div class="bg-gray-200 px-4 py-2">
                    <span class="fs-8 fw-500 gray-800">Select Time Range</span>
                  </div>
                  <div class="p-2">
                    <button type="button" class="dropdown-item m-0">Today</button>
                    <button type="button" class="dropdown-item m-0">Yesterday</button>
                    <button type="button" class="dropdown-item m-0">This Week</button>
                    <button type="button" class="dropdown-item m-0">Last Week</button>
                    <button type="button" class="dropdown-item m-0">Month to Date</button>
                    <button type="button" class="dropdown-item m-0">Last Month</button>
                    <button type="button" class="dropdown-item m-0">Year to Date</button>
                  </div>
                </div>
                <div class="column">
                  <div class="bg-gray-200 px-4 py-2">
                    <span class="fs-8 fw-500 gray-800">Select Data</span>
                  </div>
                  <div class="p-4">
                    <div class="form-group">
                      <label class="form-label">From Date</label>
                      <input type="text" class="form-control flatpickr-date flatpickr-input" placeholder="DD-MM-YYYY" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label class="form-label">To Date</label>
                      <input type="text" class="form-control flatpickr-date" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5">
              <a class="btn btn-primary w-100" href="#">Submit</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="add-users-sidebar" class="theme-sidebar theme-sidebar-sm">
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
                  <label class="form-label">First Name*</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group">
                  <label class="form-label">Last Name*</label>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="column is-12 col-form">
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
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="form-label">Role</label>
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
                  <label class="form-label">Department</label>
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
                  <label class="form-label">Designation</label>
                  <select name="" class="form-control select">
                    <option value="">Designation</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <a class="btn btn-primary w-100" href="#">Submit</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="edit-users-sidebar" class="theme-sidebar theme-sidebar-sm">
    <div class="theme-sidebar-card">
      <div class="theme-sidebar-header">
        <h5 class="theme-sidebar-title">Edit User</h5>
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
                  <label class="form-label">First Name*</label>
                  <input type="text" class="form-control" value="John">
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group">
                  <label class="form-label">Last Name*</label>
                  <input type="text" class="form-control" value="Doe">
                </div>
              </div>
              <div class="column is-12 col-form">
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
                        <input type="text" class="form-control" value="9876543210">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="form-label">Role</label>
                  <select name="" class="form-control select">
                    <option value="">Role</option>
                    <option value="Option 1" selected>Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="form-label">Department</label>
                  <select name="" class="form-control select">
                    <option value="">Department</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2" selected>Option 2</option>
                    <option value="Option 3">Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <div class="form-group custom-select">
                  <label class="form-label">Designation</label>
                  <select name="" class="form-control select">
                    <option value="">Designation</option>
                    <option value="Option 1">Option 1</option>
                    <option value="Option 2">Option 2</option>
                    <option value="Option 3" selected>Option 3</option>
                  </select>
                </div>
              </div>
              <div class="column is-12 col-form">
                <a class="btn btn-primary w-100" href="#">Submit</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div id="view-users-sidebar" class="theme-sidebar theme-sidebar-sm">
    <div class="theme-sidebar-card">
      <div class="theme-sidebar-header">
        <h5 class="theme-sidebar-title">View User</h5>
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
        <div class="theme-sidebar-content theme-scrollbar">
          <div class="view-item-wrapper">
            <div class="view-item">
              <span class="view-label">Name</span>
              <span class="view-value">John Doe</span>
            </div>
            <div class="view-item">
              <span class="view-label">Phone</span>
              <span class="view-value">+91 98765 43210</span>
            </div>
            <div class="view-item">
              <span class="view-label">Role</span>
              <span class="view-value">Master HR</span>
            </div>
            <div class="view-item">
              <span class="view-label">Department</span>
              <span class="view-value">Management</span>
            </div>
            <div class="view-item">
              <span class="view-label">Designation</span>
              <span class="view-value">Director</span>
            </div>
          </div>
          <div class="view-item-wrapper theme-radius border p-5">
            <div class="view-item">
              <span class="view-label">Name</span>
              <span class="view-value">John Doe</span>
            </div>
            <div class="view-item">
              <span class="view-label">Phone</span>
              <span class="view-value">+91 98765 43210</span>
            </div>
            <div class="view-item">
              <span class="view-label">Role</span>
              <span class="view-value">Master HR</span>
            </div>
            <div class="view-item">
              <span class="view-label">Department</span>
              <span class="view-value">Management</span>
            </div>
            <div class="view-item">
              <span class="view-label">Designation</span>
              <span class="view-value">Director</span>
            </div>
          </div>
          <div class="view-item-wrapper theme-radius bg-light border p-5">
            <div class="view-item">
              <span class="view-label">Name</span>
              <span class="view-value">John Doe</span>
            </div>
            <div class="view-item">
              <span class="view-label">Phone</span>
              <span class="view-value">+91 98765 43210</span>
            </div>
            <div class="view-item">
              <span class="view-label">Role</span>
              <span class="view-value">Master HR</span>
            </div>
            <div class="view-item">
              <span class="view-label">Department</span>
              <span class="view-value">Management</span>
            </div>
            <div class="view-item">
              <span class="view-label">Designation</span>
              <span class="view-value">Director</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="delete-sidebar" class="theme-sidebar theme-sidebar-sm">
    <div class="theme-sidebar-card">
      <div class="theme-sidebar-header">
        <h5 class="theme-sidebar-title">Delete</h5>
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
                  <label class="form-label">Type "DELETE" in Input Box*</label>
                  <input type="text" class="form-control" placeholder="DELETE">
                </div>
              </div>
              <div class="column is-12 col-form">
                <a class="btn btn-danger w-100" href="#">DELETE</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--End Sidebar-->
  <?php require_once("include/inc-foot-scripts.php"); ?>
</body>

</html>