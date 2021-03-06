
<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<!--navbar-->  
@extends('layouts.master')
@section('navbar')

<!--/navbar--> 

<!--sidebar-->
@section('sidebar')
<!--/sidebar-->


<!--grid menu-->

<!--/grid menu-->

<!-- content -->
@section('content')
<div class="row">
    <!--Calendar-->
    <div class="col-md-7">
        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="calendar-container">
                    <div id="calendar"></div>
                    <!--AddEvent Dialog -->
                    <div class="modal fade" id="addNewEvent" aria-hidden="true" aria-labelledby="addNewEvent"
                         role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <form class="modal-content form-horizontal" action="#" method="post" role="form">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                    <h4 class="modal-title">New Event</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="newEname">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="newEname" name="newEname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="starts">Starts:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="starts" data-container="#addNewEvent"
                                                       data-plugin="datepicker">
                                                <span class="input-group-addon">
                                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="ends">Ends:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="ends" data-container="#addNewEvent"
                                                       data-plugin="datepicker">
                                                <span class="input-group-addon">
                                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="repeats">Repeats:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="repeats" name="repeats" data-plugin="TouchSpin"
                                                   data-min="0" data-max="10" value="0" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Color:</label>
                                        <div class="col-sm-10">
                                            <ul class="color-selector">
                                                <li class="bg-blue-600">
                                                    <input type="radio" checked name="eventColorChosen" id="eventColorChosen2">
                                                    <label for="eventColorChosen2"></label>
                                                </li>
                                                <li class="bg-green-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen3">
                                                    <label for="eventColorChosen3"></label>
                                                </li>
                                                <li class="bg-cyan-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen4">
                                                    <label for="eventColorChosen4"></label>
                                                </li>
                                                <li class="bg-orange-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen5">
                                                    <label for="eventColorChosen5"></label>
                                                </li>
                                                <li class="bg-red-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen6">
                                                    <label for="eventColorChosen6"></label>
                                                </li>
                                                <li class="bg-blue-grey-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen7">
                                                    <label for="eventColorChosen7"></label>
                                                </li>
                                                <li class="bg-purple-600">
                                                    <input type="radio" name="eventColorChosen" id="eventColorChosen8">
                                                    <label for="eventColorChosen8"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="people">People:</label>
                                        <div class="col-sm-10">
                                            <select id="eventPeople" multiple="multiple" data-plugin="jquery-selective"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-actions">
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">Add this event</button>
                                        <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End AddEvent Dialog -->
                    <!-- Edit Dialog -->
                    <div class="modal fade" id="editNewEvent" aria-hidden="true" aria-labelledby="editNewEvent"
                         role="dialog" tabindex="-1" data-show="false">
                        <div class="modal-dialog">
                            <form class="modal-content form-horizontal" action="#" method="post" role="form">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                    <h4 class="modal-title">Edit Event</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="editEname">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="editEname" name="editEname">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="editStarts">Starts:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="editStarts" name="editStarts" data-container="#editNewEvent"
                                                       data-plugin="datepicker">
                                                <span class="input-group-addon">
                                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="editEnds">Ends:</label>
                                        <div class="col-sm-10">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="editEnds" data-container="#editNewEvent"
                                                       data-plugin="datepicker">
                                                <span class="input-group-addon">
                                                    <i class="icon md-calendar" aria-hidden="true"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="editRepeats">Repeats:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="editRepeats" name="repeats" data-plugin="TouchSpin"
                                                   data-min="0" data-max="10" value="0" />
                                        </div>
                                    </div>
                                    <div class="form-group" id="editColor">
                                        <label class="control-label col-sm-2">Color:</label>
                                        <div class="col-sm-10">
                                            <ul class="color-selector">
                                                <li class="bg-blue-600">
                                                    <input type="radio" data-color="blue|600" name="colorChosen" id="editColorChosen2">
                                                    <label for="editColorChosen2"></label>
                                                </li>
                                                <li class="bg-green-600">
                                                    <input type="radio" data-color="green|600" name="colorChosen" id="editColorChosen3">
                                                    <label for="editColorChosen3"></label>
                                                </li>
                                                <li class="bg-cyan-600">
                                                    <input type="radio" data-color="cyan|600" name="colorChosen" id="editColorChosen4">
                                                    <label for="editColorChosen4"></label>
                                                </li>
                                                <li class="bg-orange-600">
                                                    <input type="radio" data-color="orange|600" name="colorChosen" id="editColorChosen5">
                                                    <label for="editColorChosen4"></label>
                                                </li>
                                                <li class="bg-red-600">
                                                    <input type="radio" data-color="red|600" name="colorChosen" id="editColorChosen6">
                                                    <label for="editColorChosen6"></label>
                                                </li>
                                                <li class="bg-blue-grey-600">
                                                    <input type="radio" data-color="blue-grey|600" name="colorChosen" id="editColorChosen7">
                                                    <label for="editColorChosen7"></label>
                                                </li>
                                                <li class="bg-purple-600">
                                                    <input type="radio" data-color="purple|600" name="colorChosen" id="editColorChosen8">
                                                    <label for="editColorChosen8"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="editPeople">People:</label>
                                        <div class="col-sm-10">
                                            <select id="editPeople" multiple="multiple" data-plugin="jquery-selective"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-actions">
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">Save</button>
                                        <button class="btn btn-danger" data-dismiss="modal" type="button">Delete</button>
                                        <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End EditEvent Dialog -->
                    <!--AddCalendar Dialog -->
                    <div class="modal fade" id="addNewCalendar" aria-hidden="true" aria-labelledby="addNewCalendar"
                         role="dialog" tabindex="-1">
                        <div class="modal-dialog">
                            <form class="modal-content form-horizontal" action="#" method="post" role="form">
                                <div class="modal-header">
                                    <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                                    <h4 class="modal-title">New Calendar</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="ename">Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="ename" name="ename">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">Color:</label>
                                        <div class="col-sm-10">
                                            <ul class="color-selector">
                                                <li class="bg-blue-600">
                                                    <input type="radio" checked name="colorChosen" id="colorChosen2">
                                                    <label for="colorChosen2"></label>
                                                </li>
                                                <li class="bg-green-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen3">
                                                    <label for="colorChosen3"></label>
                                                </li>
                                                <li class="bg-cyan-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen4">
                                                    <label for="colorChosen4"></label>
                                                </li>
                                                <li class="bg-orange-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen5">
                                                    <label for="colorChosen5"></label>
                                                </li>
                                                <li class="bg-red-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen6">
                                                    <label for="colorChosen6"></label>
                                                </li>
                                                <li class="bg-blue-grey-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen7">
                                                    <label for="colorChosen7"></label>
                                                </li>
                                                <li class="bg-purple-600">
                                                    <input type="radio" name="colorChosen" id="colorChosen8">
                                                    <label for="colorChosen8"></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label" for="people">People:</label>
                                        <div class="col-sm-10">
                                            <select id="people" multiple="multiple" data-plugin="jquery-selective"></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="form-actions">
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">Create</button>
                                        <a class="btn btn-sm btn-white btn-pure" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End AddCalendar Dialog -->
                </div>
            </div>
        </div>




    </div> <!--/Calendar-->
    <!--กล่อง เตือนความจำ-->
    <div class="col-md-5">
       <div class="widget widget-shadow">
            <div class="widget-content white bg-twitter padding-20 height-full">
              <h3 class="white margin-top-0">Memo</h3>
              <small>21 May, 2016 via mobile</small>
              <div class="margin-top-10">
                <i class="icon md-memory font-size-26"></i>
                <ul class="list-inline pull-right margin-top-15">
               <!--   <li>
                    <i class="icon md-favorite"></i> 598
                  </li>
                  <li>
                    <i class="icon md-thumb-up"></i> 96
                  </li> -->
                </ul>
              </div>
            </div>
        </div>
        
      
        
        <!--Mark down Editor
        <div class="panel-body">
              <form>
                
                
                  <div class="example" >
                      <textarea rows="8"  data-provide="markdown" data-iconlibrary="fa" data-savable="true"></textarea>
                </div>
              </form>
            </div>   -->
        
        <!--/Mark Down Editor-->

    </div> <!--.col-md-5-->
</div>
@endsection





