@extends('layouts.app')

@section('content')
        <!-- container -->
        <div class="custom-container">
          <div class="row g-6 mb-6">
            <div class="col-xl-3 col-md-6 col-12">
              <!-- card -->
              <div class="card card-lg bg-gradient-success">
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-8">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div class="fw-semibold">Total Projects</div>
                    </div>
                    <div class="text-success-emphasis">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-briefcase"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />
                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                        <path d="M12 12l0 .01" />
                        <path d="M3 13a20 20 0 0 0 18 0" />
                      </svg>
                    </div>
                  </div>
                  <!-- project number -->
                  <div class="lh-1 d-flex flex-column gap-3">
                    <div class="fs-1 fw-bold">6</div>
                    <p class="mb-0">
                      <span class="text-success-emphasis">2</span>
                      <span class="text-secondary">Completed</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
              <!-- card -->
              <div class="card card-lg bg-gradient-info">
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-8">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div>Task</div>
                    </div>
                    <div class="text-info-emphasis">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-list-check"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                        <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                        <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                        <path d="M11 6l9 0" />
                        <path d="M11 12l9 0" />
                        <path d="M11 18l9 0" />
                      </svg>
                    </div>
                  </div>
                  <!-- project number -->
                  <div class="lh-1 d-flex flex-column gap-3">
                    <div class="fs-1 fw-bold">132</div>
                    <p class="mb-0">
                      <span class="me-1 text-info-emphasis">28</span>
                      <span class="text-secondary">Completed</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
              <!-- card -->
              <div class="card card-lg bg-gradient-danger">
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-8">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div>Members</div>
                    </div>
                    <div class="text-danger-emphasis">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-users"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                      </svg>
                    </div>
                  </div>
                  <!-- project number -->
                  <div class="lh-1 d-flex flex-column gap-3">
                    <div class="fs-1 fw-bold">8</div>
                    <p class="mb-0">
                      <span class="me-1 text-danger-emphasis">2</span>
                      <span class="text-secondary">Completed</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-12">
              <!-- card -->
              <div class="card card-lg bg-gradient-warning">
                <!-- card body -->
                <div class="card-body d-flex flex-column gap-8">
                  <!-- heading -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <div>Productivity</div>
                    </div>
                    <div class="text-warning-emphasis">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="1.5"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-snowboarding"
                      >
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M15 3a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
                        <path d="M7 19l4 -2.5l-.5 -1.5" />
                        <path d="M16 21l-1 -6l-4.5 -3l3.5 -6" />
                        <path d="M7 9l1.5 -3h5.5l2 4l3 1" />
                        <path d="M3 17c.399 1.154 .899 1.805 1.5 1.951c6 1.464 10.772 2.262 13.5 2.927c1.333 .325 2.333 0 3 -.976" />
                      </svg>
                    </div>
                  </div>
                  <!-- project number -->
                  <div class="lh-1 d-flex flex-column gap-3">
                    <div class="fs-1 fw-bold">76%</div>
                    <p class="mb-0">
                      <span class="text-warning-emphasis me-1">26%</span>
                      <span class="text-secondary">Increased</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- row  -->
          <div class="row g-6 mb-6">
            <div class="col-xl-8 col-12">
              <!-- card  -->
              <div class="card card-lg mb-6">
                <!-- card header  -->
                <div class="card-header border-bottom-0">
                  <h5 class="mb-0">Active Projects</h5>
                </div>
                <!-- table -->
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 table-centered table-hover">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Progress</th>
                        <th>Status</th>
                        <th>Assigned</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div>
                            <div>Website Redesign</div>
                            <div class="small text-secondary">Jan 30, 2025</div>
                          </div>
                        </td>
                        <td>
                          <div class="me-3">65%</div>
                          <div class="w-50">
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge text-info-emphasis bg-info-subtle rounded-2"> On Track</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-11.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-2.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar in circle" src="./assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm avatar-info">
                              <span class="avatar-initials rounded-circle">+5</span>
                            </span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dots-vertical"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              </svg>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <div>Marketing Campaign</div>
                            <div class="small text-secondary">Deadline: Feb 10, 2025</div>
                          </div>
                        </td>
                        <td>
                          <div class="me-3">20%</div>
                          <div class="w-50">
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge text-danger-emphasis bg-danger-subtle rounded-2"> Delayed</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="avatar bootstrap 5" src="./assets/images/avatar/avatar-1.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar in circle" src="./assets/images/avatar/avatar-4.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm avatar-danger">
                              <span class="avatar-initials rounded-circle">+2</span>
                            </span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dots-vertical"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              </svg>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <div>Mobile App Development</div>
                            <div class="small text-secondary">Deadline: Mar 1, 2025</div>
                          </div>
                        </td>
                        <td>
                          <div class="me-3">45%</div>
                          <div class="w-50">
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge text-warning-emphasis bg-warning-subtle rounded-2"> At Risk</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm avatar-warning">
                              <span class="avatar-initials rounded-circle">+1</span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-5.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar in circle" src="./assets/images/avatar/avatar-6.jpg" class="rounded-circle" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dots-vertical"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              </svg>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <div>Customer Portal Upgrade</div>
                            <div class="small text-secondary">Deadline: Feb 15, 2025</div>
                          </div>
                        </td>
                        <td>
                          <div class="me-3">89%</div>
                          <div class="w-50">
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge text-info-emphasis bg-info-subtle rounded-2"> On Track</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm avatar-info">
                              <span class="avatar-initials rounded-circle">+1</span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-5.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar in circle" src="./assets/images/avatar/avatar-6.jpg" class="rounded-circle" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dots-vertical"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              </svg>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div>
                            <div>Product Launch</div>
                            <div class="small text-secondary">Deadline: Jan 25, 2025</div>
                          </div>
                        </td>
                        <td>
                          <div class="me-3">100%</div>
                          <div class="w-50">
                            <div class="progress" style="height: 5px">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </td>
                        <td>
                          <span class="badge text-primary-emphasis bg-primary-subtle rounded-2"> Completed</span>
                        </td>
                        <td>
                          <div class="avatar-group">
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-3.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm avatar-primary">
                              <span class="avatar-initials rounded-circle">+1</span>
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar" src="./assets/images/avatar/avatar-8.jpg" class="rounded-circle" />
                            </span>
                            <span class="avatar avatar-sm">
                              <img alt="bootstrap 5 avatar in circle" src="./assets/images/avatar/avatar-9.jpg" class="rounded-circle" />
                            </span>
                          </div>
                        </td>
                        <td>
                          <div class="dropdown dropstart">
                            <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dots-vertical"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                stroke="currentColor"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                                <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              </svg>
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                              <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- card footer -->
                <div class="card-footer border-dashed border-top text-center">
                  <a href="#!" class="btn btn-link">View All Projects</a>
                </div>
              </div>
              <!-- row -->
              <div class="row row-cols-xxl-2 row-cols-1">
                <div class="col">
                  <!-- card -->
                  <div class="card card-lg mb-6">
                    <!-- card body -->
                    <div class="card-body">
                      <div class="mb-4">
                        <h5 class="mb-0">Teams</h5>
                      </div>
                      <div class="d-flex flex-column">
                        <div class="border-bottom border-dashed d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-1.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">John Doe</div>
                              <div class="text-secondary">Project Manager</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 2 Assigned</div>
                        </div>
                        <div class="border-bottom border-dashed d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-14.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">Jane Smith</div>
                              <div class="text-secondary">Developer</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 2 Assigned</div>
                        </div>
                        <div class="border-bottom border-dashed d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-9.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">Emily Johnson</div>
                              <div class="text-secondary">Designer</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 3 Assigned</div>
                        </div>
                        <div class="border-bottom border-dashed d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-6.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">Jitu Chauhan</div>
                              <div class="text-secondary">Designer</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 8 Assigned</div>
                        </div>
                        <div class="border-bottom border-dashed d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-5.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">Anita Parmar</div>
                              <div class="text-secondary">Front End Developer</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 7 Assigned</div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end py-3">
                          <div class="d-flex align-items-center gap-3">
                            <img src="./assets/images/avatar/avatar-11.jpg" class="avatar avatar-md rounded-circle" alt="avatar" />
                            <div>
                              <div class="fw-semibold">Manasvi Suthar</div>
                              <div class="text-secondary">UI Developer</div>
                            </div>
                          </div>
                          <div class="text-secondary">Tasks: 3 Assigned</div>
                        </div>
                        <div class="mt-4">
                          <a href="#!" class="btn btn-white">View All Members</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <!-- card -->
                  <div class="card card-lg mb-6">
                    <!-- card body -->
                    <div class="card-body">
                      <div class="mb-4">
                        <h5 class="mb-0">Activity Log</h5>
                      </div>
                      <div class="d-flex flex-column gap-5 mb-6">
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>Design phase completed by Alice.</div>
                                <div class="text-secondary">Jan 20, 2025 10:30 AM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-warning"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>Initial client presentation delivered by Bob.</div>
                                <div class="text-secondary">Jan 19, 2025: 3:45 PM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>Resource allocation updated by Charlie.</div>
                                <div class="text-secondary">Jan 18, 2025: 3:45 PM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-danger"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>Risk assessment review completed by Dana.</div>
                                <div class="text-secondary">Jan 17, 2025: 3:45 PM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-primary"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>New milestone added by Eve.</div>
                                <div class="text-secondary">Jan 16, 2025: 3:45 PM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="timeline-vertical timeline-vertical-height">
                          <div class="timeline-item position-relative">
                            <div class="row g-0">
                              <div class="col">
                                <div>
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="12"
                                    height="12"
                                    viewBox="0 0 24 24"
                                    fill="currentColor"
                                    class="icon icon-tabler icons-tabler-filled icon-tabler-circle text-warning"
                                  >
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 3.34a10 10 0 1 1 -4.995 8.984l-.005 -.324l.005 -.324a10 10 0 0 1 4.995 -8.336z" />
                                  </svg>
                                </div>
                                <div class="timeline-bar border-start border-dashed"></div>
                              </div>
                              <div class="col-11">
                                <div>New milestone added by Eve.</div>
                                <div class="text-secondary">Jan 15, 2025: 3:45 PM</div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div>
                        <a href="#!" class="btn btn-white">View Full Log</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-lg">
                <!-- card body -->
                <div class="card-body">
                  <div class="mb-4">
                    <h5 class="mb-0">My Task</h5>
                  </div>
                  <div style="height: 320px" data-simplebar>
                    <div class="d-flex justify-content-between align-items-center border-bottom border-dashed py-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck1" />
                          <label class="form-check-label" for="taskCheck1">Design project logo</label>
                        </div>
                        <div>
                          <span class="badge text-info-emphasis bg-info-subtle"> High</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom border-dashed py-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck2" />
                          <label class="form-check-label" for="taskCheck2">Create project plan</label>
                        </div>
                        <div>
                          <span class="badge text-warning-emphasis bg-warning-subtle"> Medium</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom border-dashed py-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck3" />
                          <label class="form-check-label" for="taskCheck3">Update team assignments</label>
                        </div>
                        <div>
                          <span class="badge text-primary-emphasis bg-primary-subtle"> Low</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom border-dashed py-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck4" />
                          <label class="form-check-label" for="taskCheck4">Prepare project budget</label>
                        </div>
                        <div>
                          <span class="badge text-danger-emphasis bg-danger-subtle"> Critical</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom border-dashed py-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck5" />
                          <label class="form-check-label" for="taskCheck5">Dasher UI Figma Design</label>
                        </div>
                        <div>
                          <span class="badge text-primary-emphasis bg-primary-subtle"> Low</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-3 px-2">
                      <div class="d-flex align-items-center gap-3">
                        <div class="form-check mb-0">
                          <input class="form-check-input" type="checkbox" value="" id="taskCheck6" />
                          <label class="form-check-label" for="taskCheck6">Dasher UI Bootstrap Development</label>
                        </div>
                        <div>
                          <span class="badge text-primary-emphasis bg-primary-subtle"> Low</span>
                        </div>
                      </div>
                      <div>
                        <div class="dropdown dropstart">
                          <a class="btn btn-icon btn-ghost btn-sm rounded-circle" href="#!" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              class="icon icon-tabler icon-tabler-dots-vertical"
                              width="20"
                              height="20"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              fill="none"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                            >
                              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                              <path d="M12 12m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 19m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                              <path d="M12 5m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                            </svg>
                          </a>
                          <div class="dropdown-menu">
                            <a class="dropdown-item d-flex align-items-center" href="#!">Action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Another action</a>
                            <a class="dropdown-item d-flex align-items-center" href="#!">Something else here</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-12">
              <!-- card -->
              <div class="card card-lg mb-6">
                <!-- card body -->
                <div class="card-body">
                  <div class="mb-4">
                    <h5 class="mb-0">Task Progress</h5>
                  </div>
                  <div class="fs-1 fw-bold mb-3">64%</div>
                  <div class="d-flex align-items-center gap-1 w-100 mb-4">
                    <div class="w-25" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Completed">
                      <div class="progress mb-2" style="height: 3px">
                        <div class="progress-bar bg-info-light" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      24%
                    </div>
                    <div class="w-50" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="In Progress">
                      <div class="progress mb-2" style="height: 3px">
                        <div class="progress-bar bg-success-light" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      35%
                    </div>
                    <div class="w-75" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Up Coming">
                      <div class="progress mb-2" style="height: 3px">
                        <div class="progress-bar bg-danger-light" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      41%
                    </div>
                  </div>
                  <div class="bg-gray-100 p-3 rounded-4">
                    <!-- row -->
                    <div class="row g-3">
                      <div class="col-md-4 col-12">
                        <!-- card -->
                        <div class="card card-lg">
                          <!-- card body -->
                          <div class="card-body text-center p-3">
                            <div class="icon-shape icon-lg bg-info-subtle text-info-emphasis rounded-pill">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                            </div>
                            <div class="lh-1 mt-4">
                              <div class="fs-4 fw-bold mb-1">8</div>
                              <div class="text-secondary small">Completed</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <!-- card -->
                        <div class="card card-lg">
                          <!-- card body -->
                          <div class="card-body text-center p-3">
                            <div class="icon-shape icon-lg bg-success-subtle text-success-emphasis rounded-pill">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-clock"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                                <path d="M12 7v5l3 3" />
                              </svg>
                            </div>
                            <div class="lh-1 mt-4">
                              <div class="fs-4 fw-bold mb-1">12</div>
                              <div class="text-secondary small">In-Progress</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 col-12">
                        <!-- card -->
                        <div class="card card-lg">
                          <!-- card body -->
                          <div class="card-body text-center p-3">
                            <div class="icon-shape icon-lg bg-danger-subtle text-danger-emphasis rounded-pill">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="20"
                                height="20"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-circle-dashed-check"
                              >
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M8.56 3.69a9 9 0 0 0 -2.92 1.95" />
                                <path d="M3.69 8.56a9 9 0 0 0 -.69 3.44" />
                                <path d="M3.69 15.44a9 9 0 0 0 1.95 2.92" />
                                <path d="M8.56 20.31a9 9 0 0 0 3.44 .69" />
                                <path d="M15.44 20.31a9 9 0 0 0 2.92 -1.95" />
                                <path d="M20.31 15.44a9 9 0 0 0 .69 -3.44" />
                                <path d="M20.31 8.56a9 9 0 0 0 -1.95 -2.92" />
                                <path d="M15.44 3.69a9 9 0 0 0 -3.44 -.69" />
                                <path d="M9 12l2 2l4 -4" />
                              </svg>
                            </div>
                            <div class="lh-1 mt-4">
                              <div class="fs-4 fw-bold mb-1">14</div>
                              <div class="text-secondary small">Up Coming</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-lg mb-6" style="background: linear-gradient(97.05deg, #008fba 0%, #00a76f 100%)" data-bs-theme="dark">
                <!-- card body -->
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between">
                    <div>
                      <div class="fs-3 fw-bold text-white mb-3">
                        How AI assist will <br />
                        help you ?
                      </div>
                      <a href="#!" class="btn btn-dark">Start AI</a>
                    </div>
                    <div>
                      <img src="./assets/images/png/dasher-ai.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-lg mb-6">
                <!-- card body -->
                <div class="card-body">
                  <div class="mb-4">
                    <h5 class="mb-1">Project Budget</h5>
                    <span class="text-secondary">Budget Allocation Overview:</span>
                  </div>
                  <div class="fs-2 fw-bold mb-3">$50,000</div>
                  <div class="d-flex justify-content-between align-items-center gap-1 w-100 mb-2">
                    <div>Spent:</div>
                    <div>$35,000</div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center gap-1 w-100 mb-4">
                    <div>Remaining:</div>
                    <div>$15,000</div>
                  </div>
                  <div class="d-flex justify-content-between gap-3">
                    <a href="#!" class="btn btn-primary w-100">Add Budget</a>
                    <a href="#!" class="btn btn-white w-100">View Details</a>
                  </div>
                </div>
              </div>
              <!-- card -->
              <div class="card card-lg mb-6">
                <!-- card body -->
                <div class="card-body">
                  <div class="mb-4 position-relative py-2">
                    <div>
                      <h5 class="mb-1">Upcoming Meetings</h5>
                    </div>
                    <div class="swiper-navigation position-absolute top-50 end-10 me-4">
                      <div class="swiper-button-prev ms-n3"></div>
                      <div class="swiper-button-next ms-6"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div
                        class="swiper-container swiper"
                        id="swiper-1"
                        data-pagination-type=""
                        data-speed="900"
                        data-space-between="100"
                        data-pagination="false"
                        data-navigation="true"
                        data-autoplay="false"
                        data-autoplay-delay="2000"
                        data-breakpoints='{"480": {"slidesPerView": 1}, "768": {"slidesPerView": 1}, "1024": {"slidesPerView": 2}, "1200": {"slidesPerView": 1}}'
                      >
                        <div class="swiper-wrapper">
                          <div class="swiper-slide">
                            <div class="card border">
                              <div class="card-body">
                                <div>
                                  <h4>Project Kickoff</h4>
                                  <div class="d-flex align-items-center gap-3 text-secondary">
                                    <span>Jan 25, 2025</span>
                                    <span>10:00 AM</span>
                                  </div>
                                  <div class="d-flex align-items-center gap-2 text-secondary mt-4">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g clip-path="">
                                        <path
                                          d="M7.99984 16C12.4183 16 16 12.418 16 7.99984C16 3.58166 12.4183 0 7.99984 0C3.58135 0 0 3.58166 0 7.99984C0 12.418 3.58166 16 7.99984 16Z"
                                          fill="#2196F3"
                                        />
                                        <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M4.69456 10.2865H9.98557V6.40671C9.98557 5.82219 9.51189 5.34851 8.92737 5.34851H3.63635V9.22828C3.63635 9.8128 4.11003 10.2865 4.69456 10.2865ZM10.6907 8.87586L12.8071 10.2865V5.34851L10.691 6.75945L10.6907 8.87586Z"
                                          fill="white"
                                        />
                                      </g>
                                      <defs>
                                        <clipPath>
                                          <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                    <span>Zoom</span>
                                  </div>
                                  <div class="d-grid mt-4">
                                    <a href="#!" class="btn btn-primary">Join</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="card border">
                              <div class="card-body">
                                <div>
                                  <h4>Project Kickoff</h4>
                                  <div class="d-flex align-items-center gap-3 text-secondary">
                                    <span>Jan 25, 2025</span>
                                    <span>10:00 AM</span>
                                  </div>
                                  <div class="d-flex align-items-center gap-2 text-secondary mt-4">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g clip-path="">
                                        <path
                                          d="M7.99984 16C12.4183 16 16 12.418 16 7.99984C16 3.58166 12.4183 0 7.99984 0C3.58135 0 0 3.58166 0 7.99984C0 12.418 3.58166 16 7.99984 16Z"
                                          fill="#2196F3"
                                        />
                                        <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M4.69456 10.2865H9.98557V6.40671C9.98557 5.82219 9.51189 5.34851 8.92737 5.34851H3.63635V9.22828C3.63635 9.8128 4.11003 10.2865 4.69456 10.2865ZM10.6907 8.87586L12.8071 10.2865V5.34851L10.691 6.75945L10.6907 8.87586Z"
                                          fill="white"
                                        />
                                      </g>
                                      <defs>
                                        <clipPath>
                                          <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                    <span>Zoom</span>
                                  </div>
                                  <div class="d-grid mt-4">
                                    <a href="#!" class="btn btn-primary">Join</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="card border">
                              <div class="card-body">
                                <div>
                                  <h4>Project Kickoff</h4>
                                  <div class="d-flex align-items-center gap-3 text-secondary">
                                    <span>Jan 25, 2025</span>
                                    <span>10:00 AM</span>
                                  </div>
                                  <div class="d-flex align-items-center gap-2 text-secondary mt-4">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <g clip-path="">
                                        <path
                                          d="M7.99984 16C12.4183 16 16 12.418 16 7.99984C16 3.58166 12.4183 0 7.99984 0C3.58135 0 0 3.58166 0 7.99984C0 12.418 3.58166 16 7.99984 16Z"
                                          fill="#2196F3"
                                        />
                                        <path
                                          fill-rule="evenodd"
                                          clip-rule="evenodd"
                                          d="M4.69456 10.2865H9.98557V6.40671C9.98557 5.82219 9.51189 5.34851 8.92737 5.34851H3.63635V9.22828C3.63635 9.8128 4.11003 10.2865 4.69456 10.2865ZM10.6907 8.87586L12.8071 10.2865V5.34851L10.691 6.75945L10.6907 8.87586Z"
                                          fill="white"
                                        />
                                      </g>
                                      <defs>
                                        <clipPath>
                                          <rect width="16" height="16" fill="white" />
                                        </clipPath>
                                      </defs>
                                    </svg>
                                    <span>Zoom</span>
                                  </div>
                                  <div class="d-grid mt-4">
                                    <a href="#!" class="btn btn-primary">Join</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Add more slides as needed -->
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection
