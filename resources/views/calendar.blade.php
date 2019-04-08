@extends('layouts.master')

@section('content')

<div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Calendar</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="">
                                <div class="row">
                                    <div class="col-lg-3 border-right p-r-0">
                                        <div class="card-body border-bottom">
                                            <h4 class="card-title m-t-10">Drag &amp; Drop Event</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div id="calendar-events" class="">
                                                        <div class="calendar-events m-b-20 ui-draggable ui-draggable-handle" data-class="bg-info" style="position: relative;"><i class="fa fa-circle text-info m-r-10"></i>Event One</div>
                                                        <div class="calendar-events m-b-20 ui-draggable ui-draggable-handle" data-class="bg-success" style="position: relative;"><i class="fa fa-circle text-success m-r-10"></i> Event Two</div>
                                                        <div class="calendar-events m-b-20 ui-draggable ui-draggable-handle" data-class="bg-danger" style="position: relative;"><i class="fa fa-circle text-danger m-r-10"></i>Event Three</div>
                                                        <div class="calendar-events m-b-20 ui-draggable ui-draggable-handle" data-class="bg-warning" style="position: relative;"><i class="fa fa-circle text-warning m-r-10"></i>Event Four</div>
                                                    </div>
                                                    <!-- checkbox -->
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="drop-remove">
                                                        <label class="custom-control-label" for="drop-remove">Remove after drop</label>
                                                    </div>
                                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
                                                            <i class="ti-plus"></i> Add New Event
                                                        </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="card-body b-l calender-sidebar">
                                            <div id="calendar" class="fc fc-unthemed fc-ltr"><div class="fc-toolbar fc-header-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left" aria-label="prev"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right" aria-label="next"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button></div></div><div class="fc-center"><h2>April 2019</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table class=""><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header"><table class=""><thead><tr><th class="fc-day-header fc-widget-header fc-sun"><span>Sun</span></th><th class="fc-day-header fc-widget-header fc-mon"><span>Mon</span></th><th class="fc-day-header fc-widget-header fc-tue"><span>Tue</span></th><th class="fc-day-header fc-widget-header fc-wed"><span>Wed</span></th><th class="fc-day-header fc-widget-header fc-thu"><span>Thu</span></th><th class="fc-day-header fc-widget-header fc-fri"><span>Fri</span></th><th class="fc-day-header fc-widget-header fc-sat"><span>Sat</span></th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden; height: 532px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 88px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2019-03-31"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2019-04-01"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2019-04-02"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2019-04-03"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2019-04-04"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2019-04-05"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2019-04-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-past" data-date="2019-03-31"><span class="fc-day-number">31</span></td><td class="fc-day-top fc-mon fc-past" data-date="2019-04-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-tue fc-past" data-date="2019-04-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-wed fc-past" data-date="2019-04-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-thu fc-past" data-date="2019-04-04"><span class="fc-day-number">4</span></td><td class="fc-day-top fc-fri fc-past" data-date="2019-04-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-sat fc-past" data-date="2019-04-06"><span class="fc-day-number">6</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 88px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2019-04-07"></td><td class="fc-day fc-widget-content fc-mon fc-today " data-date="2019-04-08"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-09"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-10"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-11"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-12"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-13"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-past" data-date="2019-04-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-mon fc-today " data-date="2019-04-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-04-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-04-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-04-11"><span class="fc-day-number">11</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-04-12"><span class="fc-day-number">12</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-04-13"><span class="fc-day-number">13</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 88px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-14"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-15"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-16"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-17"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-18"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-19"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-20"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-04-14"><span class="fc-day-number">14</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-04-15"><span class="fc-day-number">15</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-04-16"><span class="fc-day-number">16</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-04-17"><span class="fc-day-number">17</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-04-18"><span class="fc-day-number">18</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-04-19"><span class="fc-day-number">19</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-04-20"><span class="fc-day-number">20</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 88px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-21"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-22"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-23"></td><td class="fc-day fc-widget-content fc-wed fc-future" data-date="2019-04-24"></td><td class="fc-day fc-widget-content fc-thu fc-future" data-date="2019-04-25"></td><td class="fc-day fc-widget-content fc-fri fc-future" data-date="2019-04-26"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2019-04-27"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-04-21"><span class="fc-day-number">21</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-04-22"><span class="fc-day-number">22</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-04-23"><span class="fc-day-number">23</span></td><td class="fc-day-top fc-wed fc-future" data-date="2019-04-24"><span class="fc-day-number">24</span></td><td class="fc-day-top fc-thu fc-future" data-date="2019-04-25"><span class="fc-day-number">25</span></td><td class="fc-day-top fc-fri fc-future" data-date="2019-04-26"><span class="fc-day-number">26</span></td><td class="fc-day-top fc-sat fc-future" data-date="2019-04-27"><span class="fc-day-number">27</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 88px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-future" data-date="2019-04-28"></td><td class="fc-day fc-widget-content fc-mon fc-future" data-date="2019-04-29"></td><td class="fc-day fc-widget-content fc-tue fc-future" data-date="2019-04-30"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-05-01"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-05-02"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-05-03"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-05-04"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-future" data-date="2019-04-28"><span class="fc-day-number">28</span></td><td class="fc-day-top fc-mon fc-future" data-date="2019-04-29"><span class="fc-day-number">29</span></td><td class="fc-day-top fc-tue fc-future" data-date="2019-04-30"><span class="fc-day-number">30</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-05-01"><span class="fc-day-number">1</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-05-02"><span class="fc-day-number">2</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-05-03"><span class="fc-day-number">3</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-05-04"><span class="fc-day-number">4</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content fc-rigid" style="height: 92px;"><div class="fc-bg"><table class=""><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2019-05-05"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2019-05-06"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2019-05-07"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2019-05-08"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2019-05-09"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2019-05-10"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2019-05-11"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-top fc-sun fc-other-month fc-future" data-date="2019-05-05"><span class="fc-day-number">5</span></td><td class="fc-day-top fc-mon fc-other-month fc-future" data-date="2019-05-06"><span class="fc-day-number">6</span></td><td class="fc-day-top fc-tue fc-other-month fc-future" data-date="2019-05-07"><span class="fc-day-number">7</span></td><td class="fc-day-top fc-wed fc-other-month fc-future" data-date="2019-05-08"><span class="fc-day-number">8</span></td><td class="fc-day-top fc-thu fc-other-month fc-future" data-date="2019-05-09"><span class="fc-day-number">9</span></td><td class="fc-day-top fc-fri fc-other-month fc-future" data-date="2019-05-10"><span class="fc-day-number">10</span></td><td class="fc-day-top fc-sat fc-other-month fc-future" data-date="2019-05-11"><span class="fc-day-number">11</span></td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-new-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add</strong> a category</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                                <option value="inverse">Inverse</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END MODAL -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>  








@endsection    