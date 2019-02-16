@extends('layouts.front')
@section('content')
 <div class="container">
            <div id="holder" class="row" ></div>
        </div>
        <input type="hidden" id="allevent" value="{{json_encode($events)}}">
        <script type="text/tmpl" id="tmpl">
            @{{
            var colCount = 37,
                monthsCount = 12,
                date = date || new Date(),
                month = date.getMonth(),
                year = date.getFullYear(),
                first = new Date(year, month, 1),
                last = new Date(year, month + 1, 0),
                startingDay = first.getDay(),
                thedate = new Date(year, month, 1 - startingDay),
                dayclass = lastmonthcss,
                today = new Date(),
                startDate = first,
                i, j, activeCell;

            }}



            <table class="calendar-table table table-condensed table-tight">
                <thead>
                    <tr class="c-weeks">
                        <th class="c-name"></th>

                        @{{ for (i = 0; i < colCount; i++) { }}

                            <th class="c-name @{{: daycss[i % 7]}} ">
                                @{{: days[i % 7] }}
                            </th>

                        @{{ } }}

                    </tr>
                </thead>

                <tbody>

                    @{{ thedate = new Date(today.getFullYear(), today.getMonth(), 1); }}
                    @{{ for (j = 0; j < monthsCount; j++) { }}
                    <tr>

                        @{{
                            activeCell = false;
                            offset = thedate.getDay();
                            currentMonth = thedate.getMonth();
                        }}

                        <td class="calendar-day minw">
                            <div>
                                @{{: shortMonths[currentMonth]}}</br>@{{:thedate.getFullYear()}}
                            </div>
                        </td>

                        @{{ for (i = 0; i < colCount; i++) { }}

                        @{{
                            isThisMonth = thedate.getMonth() == currentMonth;
                            isCorrectDayOfWeek = thedate.getDay() == i % 7;
                            activeCell = isCorrectDayOfWeek && isThisMonth;
                        }}

                        <td class="calendar-day @{{: activeCell ? thedate.toDateCssClass():'' }} @{{: activeCell ? daycss[i % 7]:'outsideDate' }} js-cal-option" data-date="@{{: activeCell ? thedate.toISOString():'' }}">
                            <div class="date">
                                @{{: activeCell ? thedate.getDate():'' }}
                                @{{
                                    if(activeCell) {
                                        thedate.setDate(thedate.getDate() + 1);
                                    }
                                }}
                            </div>
                        </td>
                        @{{ } }}
                    </tr>
                    @{{ } }}
                </tbody>
            </table>

        </script>

@endsection