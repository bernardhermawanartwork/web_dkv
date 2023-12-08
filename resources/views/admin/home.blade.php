@extends('admin.layout.main')
@section('section')
<!-- Page Container START -->

<div class="page-container">
                
    <!-- Content Wrapper START -->
    <div class="main-content">
        <div class="page-header no-gutters">
            <div class="d-md-flex align-items-md-center justify-content-between">
                <div class="media m-v-10 align-items-center">
                    <div class="avatar avatar-image avatar-lg">
                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                    </div>
                    <div class="media-body m-l-15">
                        <h4 class="m-b-0">Welcome back, Nichols!</h4>
                        <span class="text-gray">Project Manager</span>
                    </div>
                </div>
                <div class="d-md-flex align-items-center d-none">
                    <div class="media align-items-center m-r-40 m-v-5">
                        <div class="font-size-27">
                            <i class="text-primary anticon anticon-profile"></i>
                        </div>
                        <div class="d-flex align-items-center m-l-10">
                            <h2 class="m-b-0 m-r-5">78</h2>
                            <span class="text-gray">Tasks</span>
                        </div>
                    </div>
                    <div class="media align-items-center m-r-40 m-v-5">
                        <div class="font-size-27">
                            <i class="text-success  anticon anticon-appstore"></i>
                        </div>
                        <div class="d-flex align-items-center m-l-10">
                            <h2 class="m-b-0 m-r-5">21</h2>
                            <span class="text-gray">Projects</span>
                        </div>
                    </div>
                    <div class="media align-items-center m-v-5">
                        <div class="font-size-27">
                            <i class="text-danger anticon anticon-team"></i>
                        </div>
                        <div class="d-flex align-items-center m-l-10">
                            <h2 class="m-b-0 m-r-5">39</h2>
                            <span class="text-gray">Members</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Project Completion </h5>
                            <div class="dropdown dropdown-animated scale-left">
                                <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                    <i class="anticon anticon-ellipsis"></i>
                                </a>
                                <div class="dropdown-menu">
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-printer"></i>
                                        <span class="m-l-10">Print</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-download"></i>
                                        <span class="m-l-10">Download</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-file-excel"></i>
                                        <span class="m-l-10">Export</span>
                                    </button>
                                    <button class="dropdown-item" type="button">
                                        <i class="anticon anticon-reload"></i>
                                        <span class="m-l-10">Refresh</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex justify-content-space m-t-50">
                            <div class="completion-chart p-r-10">
                                <canvas class="chart" id="completion-chart"></canvas>
                            </div>
                            <div class="calendar-card border-0">
                                <div data-provide="datepicker-inline"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Team Members</h5>
                            <div>
                                <a href="" class="btn btn-default btn-sm">View All</a> 
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="avatar-string m-l-5">
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Erin Gonzales">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Darryl Day">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Marshall Nichols">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Virgil Gonzales">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Nicole Wyne">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Riley Newman">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Pamela Wanda">
                                    <div class="avatar avatar-image team-member">
                                        <img src="assets/images/avatars/thumb-7.jpg" alt="">
                                    </div>
                                </a>
                                <a href="javascript:void(0);" data-toggle="tooltip" title="Add Member">
                                    <div class="avatar avatar-icon avatar-blue team-member">
                                        <i class="anticon anticon-plus font-size-22"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Upcoming Meeting</h5>
                            <div>
                                <a href="" class="btn btn-default btn-sm">View All</a> 
                            </div>
                        </div>
                        <div class="m-t-30">
                            <div class="d-flex m-b-20">
                                <div class="text-center">
                                    <div class="avatar avatar-text avatar-blue avatar-lg rounded">
                                        <span class="font-size-22">17</span>
                                    </div>
                                </div>
                                <div class="m-l-20">
                                    <h5 class="m-b-0">
                                        <a class="text-dark">UI Discussion</a>
                                    </h5>
                                    <p class="m-b-0">Execute core that as result.</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-20">
                                <div class="text-center">
                                    <div class="avatar avatar-text avatar-cyan avatar-lg rounded">
                                        <span class="font-size-22">21</span>
                                    </div>
                                </div>
                                <div class="m-l-20">
                                    <h5 class="m-b-0">
                                        <a class="text-dark">Project Schdule</a>
                                    </h5>
                                    <p class="m-b-0">Special cloth alert always.</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="text-center">
                                    <div class="avatar avatar-text avatar-gold avatar-lg rounded">
                                        <span class="font-size-22">25</span>
                                    </div>
                                </div>
                                <div class="m-l-20">
                                    <h5 class="m-b-0">
                                        <a class="text-dark">Design Discussion</a>
                                    </h5>
                                    <p class="m-b-0">Let us wax poetic about.</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Projects</h5>
                            <div>
                                <a href="" class="btn btn-default btn-sm">View All</a> 
                            </div>
                        </div>
                        <div class="table-responsive m-t-30">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Project</th>
                                        <th>Tasks</th>
                                        <th>Members</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded" style="min-width: 40px">
                                                    <img src="assets/images/others/thumb-1.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Mind Cog App</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>31</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-cyan font-size-12">Ready</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    <i class="anticon anticon-check-o text-success"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded" style="min-width: 40px">
                                                    <img src="assets/images/others/thumb-2.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Mill Real Estate</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>56</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-blue font-size-12">In Progress</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 76%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    76%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded" style="min-width: 40px">
                                                    <img src="assets/images/others/thumb-3.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Eastern Sack</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>21</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-blue font-size-12">In Progress</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar" role="progressbar" style="width: 87%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    87%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded" style="min-width: 40px">
                                                    <img src="assets/images/others/thumb-5.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Fortier Studio</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>68</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-blue font-size-12">In Progress</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar" role="progressbar" style="width: 68%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    68%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="avatar avatar-image rounded" style="min-width: 40px">
                                                    <img src="assets/images/others/thumb-6.jpg" alt="">
                                                </div>
                                                <div class="m-l-10">
                                                    <span>Indi Wheel Web</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span>165</span>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-red font-size-12">Behind</span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="progress progress-sm w-100 m-b-0">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 28%"></div>
                                                </div>
                                                <div class="m-l-10">
                                                    <i class="anticon anticon-close-o text-danger"></i>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Assigned tasks</h5>
                            <div>
                                <a href="" class="btn btn-default btn-sm">View All</a> 
                            </div>
                        </div>
                        <div class="table-responsive m-t-30">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Asignee</th>
                                        <th>Status</th>
                                        <th>Due Date</th>
                                        <th>Tasks</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="min-width: 40px">
                                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                </div>
                                                <span class="m-l-10">Erin Gonzales</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-gold font-size-12">Medium</span>
                                        </td>
                                        <td>24 Mar, 2019</td>
                                        <td>
                                            <h5 class="m-b-0">Define users and workflow</h5>
                                            <p class="m-b-0 font-size-13">A cheeseburger is more than sandwich</p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-edit"></i>
                                                        <span class="m-l-10">Edit</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Delete</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-check-square"></i>
                                                        <span class="m-l-10">Mark as Done</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="min-width: 40px">
                                                    <img src="assets/images/avatars/thumb-4.jpg" alt="">
                                                </div>
                                                <span class="m-l-10">Virgil Gonzales</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-gold font-size-12">Medium</span>
                                        </td>
                                        <td>27 Mar, 2019</td>
                                        <td>
                                            <h5 class="m-b-0">Change interface</h5>
                                            <p class="m-b-0 font-size-13">Efficiently unleash cross-media information</p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-edit"></i>
                                                        <span class="m-l-10">Edit</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Delete</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-check-square"></i>
                                                        <span class="m-l-10">Mark as Done</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="min-width: 40px">
                                                    <img src="assets/images/avatars/thumb-5.jpg" alt="">
                                                </div>
                                                <span class="m-l-10">Nicole Wyne</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-cyan font-size-12">Low</span>
                                        </td>
                                        <td>29 Mar, 2019</td>
                                        <td>
                                            <h5 class="m-b-0">Create databases</h5>
                                            <p class="m-b-0 font-size-13">Here's the story of a man named Brady</p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-edit"></i>
                                                        <span class="m-l-10">Edit</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Delete</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-check-square"></i>
                                                        <span class="m-l-10">Mark as Done</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="min-width: 40px">
                                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                                </div>
                                                <span class="m-l-10">Darryl Day</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-red font-size-12">High</span>
                                        </td>
                                        <td>2 Apr, 2019</td>
                                        <td>
                                            <h5 class="m-b-0">Verify connectivity</h5>
                                            <p class="m-b-0 font-size-13">Bugger bag egg's old boy willy jolly</p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-edit"></i>
                                                        <span class="m-l-10">Edit</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Delete</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-check-square"></i>
                                                        <span class="m-l-10">Mark as Done</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar avatar-image" style="min-width: 40px">
                                                    <img src="assets/images/avatars/thumb-6.jpg" alt="">
                                                </div>
                                                <span class="m-l-10">Riley Newman</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-gold font-size-12">Medium</span>
                                        </td>
                                        <td>7 Apr, 2019</td>
                                        <td>
                                            <h5 class="m-b-0">Prepare implementation</h5>
                                            <p class="m-b-0 font-size-13">Drop in axle roll-in rail slide</p>
                                        </td>
                                        <td>
                                            <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                <div class="dropdown-menu">
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-edit"></i>
                                                        <span class="m-l-10">Edit</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-delete"></i>
                                                        <span class="m-l-10">Delete</span>
                                                    </button>
                                                    <button class="dropdown-item" type="button">
                                                        <i class="anticon anticon-check-square"></i>
                                                        <span class="m-l-10">Mark as Done</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Activity</h5>
                            <div>
                                <a href="" class="btn btn-default btn-sm">View All</a> 
                            </div>
                        </div>
                        <div class="m-t-40">
                            <ul class="timeline">
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Virgil Gonzales</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> Prototype Design</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">10:44 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Marshall Nichols</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> Documentation</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">10:44 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-message font-size-22 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Marshall Nichols</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Commented  </span> 
                                                <span class="m-l-5"> 'That's not our work'</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">8:34 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-close-circle font-size-22 text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Pamela Wanda</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Removed  </span> 
                                                <span class="m-l-5"> a file</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">8:34 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-paper-clip font-size-22 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Lilian Stone</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Attached file   </span> 
                                                <span class="m-l-5"> Mockup Zip</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">8:34 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Marshall Nichols</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> UI Revamp</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">10:44 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-message font-size-22 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Riley Newman</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Commented </span> 
                                                <span class="m-l-5"> 'Hi, please done this before tommorow'</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">8:34 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Erin Gonzales</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> UI Revamp</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">10:44 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Pamela Wanda</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> Clean Up Workspace</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">11:25 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item">
                                    <div class="timeline-item-head">
                                        <div class="avatar avatar-icon bg-white">
                                            <i class="anticon anticon-check font-size-22 text-success"></i>
                                        </div>
                                    </div>
                                    <div class="timeline-item-content">
                                        <div class="m-l-10">
                                            <h5 class="m-b-5">Nicole Wyne</h5>
                                            <p class="m-b-0">
                                                <span class="font-weight-semibold">Complete task </span> 
                                                <span class="m-l-5"> Create Workspace</span>
                                            </p>
                                            <span class="text-muted font-size-13">
                                                <i class="anticon anticon-clock-circle"></i>
                                                <span class="m-l-5">8:25 PM</span>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Wrapper END -->

    <!-- Footer START -->
    <footer class="footer">
        <div class="footer-content">
            <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
            <span>
                <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                <a href="" class="text-gray">Privacy &amp; Policy</a>
            </span>
        </div>
    </footer>
    <!-- Footer END -->

</div>
<!-- Page Container END -->

<!-- Search Start-->
<div class="modal modal-left fade search" id="search-drawer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-between align-items-center">
                <h5 class="modal-title">Search</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body scrollable">
                <div class="input-affix">
                    <i class="prefix-icon anticon anticon-search"></i>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <div class="m-t-30">
                    <h5 class="m-b-20">Files</h5>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-cyan avatar-icon">
                            <i class="anticon anticon-file-excel"></i>
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                            <p class="m-b-0 text-muted font-size-13">by Finance</p>
                        </div>
                    </div>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-blue avatar-icon">
                            <i class="anticon anticon-file-word"></i>
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                            <p class="m-b-0 text-muted font-size-13">by Developers</p>
                        </div>
                    </div>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-purple avatar-icon">
                            <i class="anticon anticon-file-text"></i>
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                            <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                        </div>
                    </div>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-red avatar-icon">
                            <i class="anticon anticon-file-pdf"></i>
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                            <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                        </div>
                    </div>
                </div>
                <div class="m-t-30">
                    <h5 class="m-b-20">Members</h5>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-image">
                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                            <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                        </div>
                    </div>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-image">
                            <img src="assets/images/avatars/thumb-2.jpg" alt="">
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                            <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                        </div>
                    </div>
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-image">
                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                            <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                        </div>
                    </div>
                </div>   
                <div class="m-t-30">
                    <h5 class="m-b-20">News</h5> 
                    <div class="d-flex m-b-30">
                        <div class="avatar avatar-image">
                            <img src="assets/images/others/img-1.jpg" alt="">
                        </div>
                        <div class="m-l-15">
                            <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                            <p class="m-b-0 text-muted font-size-13">
                                <i class="anticon anticon-clock-circle"></i>
                                <span class="m-l-5">25 Nov 2018</span>
                            </p>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<!-- Search End-->

<!-- Quick View START -->
<div class="modal modal-right fade quick-view" id="quick-view">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-between align-items-center">
                <h5 class="modal-title">Theme Config</h5>
            </div>
            <div class="modal-body scrollable">
                <div class="m-b-30">
                    <h5 class="m-b-0">Header Color</h5>
                    <p>Config header background color</p>
                    <div class="theme-configurator d-flex m-t-10">
                        <div class="radio">
                            <input id="header-default" name="header-theme" type="radio" checked value="default">
                            <label for="header-default"></label>
                        </div>
                        <div class="radio">
                            <input id="header-primary" name="header-theme" type="radio" value="primary">
                            <label for="header-primary"></label>
                        </div>
                        <div class="radio">
                            <input id="header-success" name="header-theme" type="radio" value="success">
                            <label for="header-success"></label>
                        </div>
                        <div class="radio">
                            <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                            <label for="header-secondary"></label>
                        </div>
                        <div class="radio">
                            <input id="header-danger" name="header-theme" type="radio" value="danger">
                            <label for="header-danger"></label>
                        </div>
                    </div>
                </div>
                <hr>
                <div>
                    <h5 class="m-b-0">Side Nav Dark</h5>
                    <p>Change Side Nav to dark</p>
                    <div class="switch d-inline">
                        <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                        <label for="side-nav-theme-toogle"></label>
                    </div>
                </div>
                <hr>
                <div>
                    <h5 class="m-b-0">Folded Menu</h5>
                    <p>Toggle Folded Menu</p>
                    <div class="switch d-inline">
                        <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                        <label for="side-nav-fold-toogle"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>            
</div>
<!-- Quick View END -->
@endsection