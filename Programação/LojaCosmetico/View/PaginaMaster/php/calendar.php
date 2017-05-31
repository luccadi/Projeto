<?php
$page = 'calendar';
$title = 'Calendar';
$css = <<<EOT
<!--page level css -->
<link href="../vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
<link href="../css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
<!--page level styles ends-->
EOT;
require_once('header.php');
?>
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Calendar</h1>
        <ol class="breadcrumb">
            <li>
                <a href="index.php"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                    Home
                </a>
            </li>
            <li>Calendar</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box">
                    <div class="box-title">
                        <h3>
                            Draggable Events
                        </h3>
                        <div class="pull-right box-toolbar">
                            <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div id='external-events'>
                            <div class='external-event palette-warning'>Team Out</div>
                            <div class='external-event palette-primary'>
                                Product Seminar
                            </div>
                            <div class='external-event palette-danger'>
                                Client Meeting
                            </div>
                            <div class='external-event palette-info'>
                                Repeating Event
                            </div>
                            <div class='external-event palette-success'>
                                Anniversary Celebrations
                            </div>
                            <p class="well no-border no-radius">
                                <input type='checkbox' id='drop-remove' style="opacity:1 !important" />
                                <label for='drop-remove'>
                                    remove after drop
                                </label>
                            </p>
                        </div>
                    </div>
                    <div class="box-footer">
                        <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">
                            Create event
                        </a>
                    </div>
                </div>
                <!-- /.box --> </div>
            <div class="col-md-9">
                <div class="box">
                    <div class="box-body">
                        <div id="calendar"></div>
                    </div>
                </div>
                <!-- /.box --> </div>
            <!-- /.col --> </div>
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">
                            <i class="fa fa-plus"></i>
                            Create Event
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div class="input-group">
                            <input type="text" id="new-event" class="form-control" placeholder="Event">
                            <div class="input-group-btn">
                                <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                    Type
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" id="color-chooser">
                                    <li>
                                        <a class="palette-primary" href="#">Primary</a>
                                    </li>
                                    <li>
                                        <a class="palette-success" href="#">Success</a>
                                    </li>
                                    <li>
                                        <a class="palette-info" href="#">Info</a>
                                    </li>
                                    <li>
                                        <a class="palette-warning" href="#">warning</a>
                                    </li>
                                    <li>
                                        <a class="palette-danger" href="#">Danger</a>
                                    </li>
                                    <li>
                                        <a class="palette-default" href="#">Default</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- /btn-group --> </div>
                        <!-- /input-group --> </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger pull-right"  data-dismiss="modal">
                            Close
                            <i class="fa fa-times"></i>
                        </button>
                        <button type="button" class="btn btn-success pull-left" id="add-new-event" data-dismiss="modal">
                            <i class="fa fa-plus"></i>
                            Add
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>

<?php
require_once('footer.php');
?>
<!-- begining of page level js -->
<script src="../vendors/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
<script src="../vendors/fullcalendar/calendarcustom.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
     /* initialize the external events
                 -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });

            });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
                 -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                prev: "<span class='fa fa-caret-left'></span>",
                next: "<span class='fa fa-caret-right'></span>",
                today: 'today',
                month: 'month',
                week: 'week',
                day: 'day'
            },
            //Random events
            events: [{
                title: 'Team Out',
                start: new Date(y, m, 2),
                backgroundColor: "#F89A14"
            }, {
                title: 'Client Meeting',
                start: new Date(y, m, d - 2),
                end: new Date(y, m, d - 5),
                backgroundColor: "#418BCA"
            }, {
                title: 'Repeating Event',
                start: new Date(y, m, 6)
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, 12),
                backgroundColor: "#00bc8c"
            }, {
                title: 'Product Seminar',
                start: new Date(y, m, 16),
                backgroundColor: "#A9B6BC"
            }, {
                title: 'Anniversary Celebrations',
                start: new Date(y, m, 26),
                backgroundColor: "#F89A14"
            }, {
                title: 'Client Meeting',
                start: new Date(y, m, 10),
                backgroundColor: "#5bc0de"
            }],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.backgroundColor = $(this).css("background-color");
                copiedEventObject.borderColor = $(this).css("border-color");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
        });

        /* ADDING EVENTS */
        var currColor = "#418BCA"; //default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function(e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("background-color");
            //Add color effect to button
            colorChooser
                .css({
                    "background-color": currColor,
                    "border-color": currColor
                })
                .php($(this).text() + ' <span class="caret"></span>');
        });
        $("#add-new-event").click(function(e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
            if (val.length == 0) {
                return;
            }

            //Create event
            var event = $("<div />");
            event.css({
                "background-color": currColor,
                "border-color": currColor,
                "color": "#fff"
            }).addClass("external-event");
            event.php(val);
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $("#new-event").val("");
        });
    });
    </script>
<!-- end of page level js -->
</body>
</html>