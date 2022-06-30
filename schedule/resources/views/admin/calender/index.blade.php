@extends('layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="card card-calendar">
                    <div class="card-content">
                        <div id="fullCalendar" class="fc fc-unthemed fc-ltr">
                            <div class="fc-toolbar fc-header-toolbar">
                                <div class="fc-left"><h2>June 2022</h2></div>
                                <div class="fc-right">
                                    <div class="fc-button-group">
                                        <button type="button"
                                                class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                                                class="fc-icon fc-icon-left-single-arrow"></span></button>
                                        <button type="button" class="fc-next-button fc-button fc-state-default"><span
                                                class="fc-icon fc-icon-right-single-arrow"></span></button>
                                        <button type="button"
                                                class="fc-today-button fc-button fc-state-default fc-corner-right fc-state-disabled"
                                                disabled="">today
                                        </button>
                                    </div>
                                </div>
                                <div class="fc-center">
                                    <div class="fc-button-group">
                                        <button type="button"
                                                class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">
                                            month
                                        </button>
                                        <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">
                                            week
                                        </button>
                                        <button type="button"
                                                class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">
                                            day
                                        </button>
                                    </div>
                                </div>
                                <div class="fc-clear"></div>
                            </div>
                            <div class="fc-view-container" style="">
                                <div class="fc-view fc-month-view fc-basic-view" style="">
                                    <table>
                                        <thead class="fc-head">
                                        <tr>
                                            <td class="fc-head-container fc-widget-header">
                                                <div class="fc-row fc-widget-header"
                                                     style="border-right-width: 1px; margin-right: -0.671875px;">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th class="fc-day-header fc-widget-header fc-sun">
                                                                <span>Sun</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-mon">
                                                                <span>Mon</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-tue">
                                                                <span>Tue</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-wed">
                                                                <span>Wed</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-thu">
                                                                <span>Thu</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-fri">
                                                                <span>Fri</span></th>
                                                            <th class="fc-day-header fc-widget-header fc-sat">
                                                                <span>Sat</span></th>
                                                        </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </td>
                                        </tr>
                                        </thead>
                                        <tbody class="fc-body">
                                        <tr>
                                            <td class="fc-widget-content">
                                                <div class="fc-scroller fc-day-grid-container"
                                                     style="overflow: hidden scroll; height: 925.016px;">
                                                    <div class="fc-day-grid fc-unselectable">
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 154px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                            data-date="2022-05-29"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                            data-date="2022-05-30"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                            data-date="2022-05-31"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                            data-date="2022-06-01"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                            data-date="2022-06-02"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                            data-date="2022-06-03"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                            data-date="2022-06-04"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-other-month fc-past"
                                                                            data-date="2022-05-29"><span
                                                                                class="fc-day-number">29</span></td>
                                                                        <td class="fc-day-top fc-mon fc-other-month fc-past"
                                                                            data-date="2022-05-30"><span
                                                                                class="fc-day-number">30</span></td>
                                                                        <td class="fc-day-top fc-tue fc-other-month fc-past"
                                                                            data-date="2022-05-31"><span
                                                                                class="fc-day-number">31</span></td>
                                                                        <td class="fc-day-top fc-wed fc-past"
                                                                            data-date="2022-06-01"><span
                                                                                class="fc-day-number">1</span></td>
                                                                        <td class="fc-day-top fc-thu fc-past"
                                                                            data-date="2022-06-02"><span
                                                                                class="fc-day-number">2</span></td>
                                                                        <td class="fc-day-top fc-fri fc-past"
                                                                            data-date="2022-06-03"><span
                                                                                class="fc-day-number">3</span></td>
                                                                        <td class="fc-day-top fc-sat fc-past"
                                                                            data-date="2022-06-04"><span
                                                                                class="fc-day-number">4</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-default fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">All Day Event</span>
                                                                                </div>
                                                                            </a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 154px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                            data-date="2022-06-05"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                            data-date="2022-06-06"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                            data-date="2022-06-07"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                            data-date="2022-06-08"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                            data-date="2022-06-09"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                            data-date="2022-06-10"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                            data-date="2022-06-11"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past"
                                                                            data-date="2022-06-05"><span
                                                                                class="fc-day-number">5</span></td>
                                                                        <td class="fc-day-top fc-mon fc-past"
                                                                            data-date="2022-06-06"><span
                                                                                class="fc-day-number">6</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past"
                                                                            data-date="2022-06-07"><span
                                                                                class="fc-day-number">7</span></td>
                                                                        <td class="fc-day-top fc-wed fc-past"
                                                                            data-date="2022-06-08"><span
                                                                                class="fc-day-number">8</span></td>
                                                                        <td class="fc-day-top fc-thu fc-past"
                                                                            data-date="2022-06-09"><span
                                                                                class="fc-day-number">9</span></td>
                                                                        <td class="fc-day-top fc-fri fc-past"
                                                                            data-date="2022-06-10"><span
                                                                                class="fc-day-number">10</span></td>
                                                                        <td class="fc-day-top fc-sat fc-past"
                                                                            data-date="2022-06-11"><span
                                                                                class="fc-day-number">11</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 154px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                            data-date="2022-06-12"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                            data-date="2022-06-13"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                            data-date="2022-06-14"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                            data-date="2022-06-15"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                            data-date="2022-06-16"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                            data-date="2022-06-17"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                            data-date="2022-06-18"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past"
                                                                            data-date="2022-06-12"><span
                                                                                class="fc-day-number">12</span></td>
                                                                        <td class="fc-day-top fc-mon fc-past"
                                                                            data-date="2022-06-13"><span
                                                                                class="fc-day-number">13</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past"
                                                                            data-date="2022-06-14"><span
                                                                                class="fc-day-number">14</span></td>
                                                                        <td class="fc-day-top fc-wed fc-past"
                                                                            data-date="2022-06-15"><span
                                                                                class="fc-day-number">15</span></td>
                                                                        <td class="fc-day-top fc-thu fc-past"
                                                                            data-date="2022-06-16"><span
                                                                                class="fc-day-number">16</span></td>
                                                                        <td class="fc-day-top fc-fri fc-past"
                                                                            data-date="2022-06-17"><span
                                                                                class="fc-day-number">17</span></td>
                                                                        <td class="fc-day-top fc-sat fc-past"
                                                                            data-date="2022-06-18"><span
                                                                                class="fc-day-number">18</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 154px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                            data-date="2022-06-19"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                            data-date="2022-06-20"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                            data-date="2022-06-21"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past"
                                                                            data-date="2022-06-22"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past"
                                                                            data-date="2022-06-23"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                            data-date="2022-06-24"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                            data-date="2022-06-25"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past"
                                                                            data-date="2022-06-19"><span
                                                                                class="fc-day-number">19</span></td>
                                                                        <td class="fc-day-top fc-mon fc-past"
                                                                            data-date="2022-06-20"><span
                                                                                class="fc-day-number">20</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past"
                                                                            data-date="2022-06-21"><span
                                                                                class="fc-day-number">21</span></td>
                                                                        <td class="fc-day-top fc-wed fc-past"
                                                                            data-date="2022-06-22"><span
                                                                                class="fc-day-number">22</span></td>
                                                                        <td class="fc-day-top fc-thu fc-past"
                                                                            data-date="2022-06-23"><span
                                                                                class="fc-day-number">23</span></td>
                                                                        <td class="fc-day-top fc-fri fc-past"
                                                                            data-date="2022-06-24"><span
                                                                                class="fc-day-number">24</span></td>
                                                                        <td class="fc-day-top fc-sat fc-past"
                                                                            data-date="2022-06-25"><span
                                                                                class="fc-day-number">25</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td rowspan="2"></td>
                                                                        <td rowspan="2"></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-orange fc-draggable"
                                                                                href="http://www.creative-tim.com/">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">Click for Creative Tim</span>
                                                                                </div>
                                                                            </a></td>
                                                                        <td rowspan="2"></td>
                                                                        <td rowspan="2"></td>
                                                                        <td rowspan="2"></td>
                                                                        <td class="fc-event-container" rowspan="2"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-rose fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">6a</span> <span
                                                                                        class="fc-title">Repeating Event</span>
                                                                                </div>
                                                                            </a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-orange fc-draggable"
                                                                                href="http://www.creative-tim.com/">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">12a</span> <span
                                                                                        class="fc-title">Click for Google</span>
                                                                                </div>
                                                                            </a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 154px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                            data-date="2022-06-26"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past"
                                                                            data-date="2022-06-27"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past"
                                                                            data-date="2022-06-28"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-today fc-state-highlight"
                                                                            data-date="2022-06-29"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                            data-date="2022-06-30"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                            data-date="2022-07-01"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                            data-date="2022-07-02"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-past"
                                                                            data-date="2022-06-26"><span
                                                                                class="fc-day-number">26</span></td>
                                                                        <td class="fc-day-top fc-mon fc-past"
                                                                            data-date="2022-06-27"><span
                                                                                class="fc-day-number">27</span></td>
                                                                        <td class="fc-day-top fc-tue fc-past"
                                                                            data-date="2022-06-28"><span
                                                                                class="fc-day-number">28</span></td>
                                                                        <td class="fc-day-top fc-wed fc-today fc-state-highlight"
                                                                            data-date="2022-06-29"><span
                                                                                class="fc-day-number">29</span></td>
                                                                        <td class="fc-day-top fc-thu fc-future"
                                                                            data-date="2022-06-30"><span
                                                                                class="fc-day-number">30</span></td>
                                                                        <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                                            data-date="2022-07-01"><span
                                                                                class="fc-day-number">1</span></td>
                                                                        <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                            data-date="2022-07-02"><span
                                                                                class="fc-day-number">2</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-azure fc-draggable fc-resizable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-title">Md-pro Launch</span>
                                                                                </div>
                                                                                <div
                                                                                    class="fc-resizer fc-end-resizer"></div>
                                                                            </a></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-green fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">10:30a</span>
                                                                                    <span
                                                                                        class="fc-title">Meeting</span>
                                                                                </div>
                                                                            </a></td>
                                                                        <td></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-azure fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">7p</span> <span
                                                                                        class="fc-title">Birthday Party</span>
                                                                                </div>
                                                                            </a></td>
                                                                        <td></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-rose fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">6a</span> <span
                                                                                        class="fc-title">Repeating Event</span>
                                                                                </div>
                                                                            </a></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="fc-row fc-week fc-widget-content fc-rigid"
                                                             style="height: 155px;">
                                                            <div class="fc-bg">
                                                                <table>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                            data-date="2022-07-03"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                            data-date="2022-07-04"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                            data-date="2022-07-05"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                            data-date="2022-07-06"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                            data-date="2022-07-07"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                            data-date="2022-07-08"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                            data-date="2022-07-09"></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="fc-content-skeleton">
                                                                <table>
                                                                    <thead>
                                                                    <tr>
                                                                        <td class="fc-day-top fc-sun fc-other-month fc-future"
                                                                            data-date="2022-07-03"><span
                                                                                class="fc-day-number">3</span></td>
                                                                        <td class="fc-day-top fc-mon fc-other-month fc-future"
                                                                            data-date="2022-07-04"><span
                                                                                class="fc-day-number">4</span></td>
                                                                        <td class="fc-day-top fc-tue fc-other-month fc-future"
                                                                            data-date="2022-07-05"><span
                                                                                class="fc-day-number">5</span></td>
                                                                        <td class="fc-day-top fc-wed fc-other-month fc-future"
                                                                            data-date="2022-07-06"><span
                                                                                class="fc-day-number">6</span></td>
                                                                        <td class="fc-day-top fc-thu fc-other-month fc-future"
                                                                            data-date="2022-07-07"><span
                                                                                class="fc-day-number">7</span></td>
                                                                        <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                                            data-date="2022-07-08"><span
                                                                                class="fc-day-number">8</span></td>
                                                                        <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                            data-date="2022-07-09"><span
                                                                                class="fc-day-number">9</span></td>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class="fc-event-container"><a
                                                                                class="fc-day-grid-event fc-h-event fc-event fc-start fc-end event-red fc-draggable">
                                                                                <div class="fc-content"><span
                                                                                        class="fc-time">12p</span> <span
                                                                                        class="fc-title">Lunch</span>
                                                                                </div>
                                                                            </a></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection()
