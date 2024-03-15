document.addEventListener("DOMContentLoaded", function () {
    var calendarEl = document.getElementById("calendar");
    var calendar = new FullCalendar.Calendar(calendarEl, {
      initialView: "timeGridWeek",
      headerToolbar: {
        left: "title prev,next",
        right: "dayGridMonth,timeGridWeek,timeGridDay today",
      },
      titleFormat: {
        year: "numeric",
        month: "long",
      },
      views: {
        timeGridWeek: {
          dayHeaderFormat: { weekday: "short", day: "numeric" },
          allDaySlot: false,
        },
      },
      eventDidMount: function (info) {
        // 'info.el' is the DOM element for the event
        var eventEl = info.el;
        var eventTitle = info.event.title;
        var eventStart = info.event.startStr; // Start time in ISO format
        var eventEnd = info.event.endStr; // End time in ISO format
        // var eventCategory = info.event.extendedProps.category; // Replace with your event category
        var eventBorderColor = info.event.borderColor;
        var eventColor = info.event.backgroundColor;

        eventEl.closest(".fc-timegrid-event-harness").style.backgroundColor =
          eventColor;


        // Assuming eventStart and eventEnd are ISO date strings, e.g., "2023-09-20T10:00:00"
        const startTime = new Date(eventStart);
        const endTime = new Date(eventEnd);

        // Function to format a date as HH:mm (hours and minutes)
        function formatTime(date) {
          const hours = date.getHours().toString().padStart(2, "0");
          const minutes = date.getMinutes().toString().padStart(2, "0");
          return `${hours}:${minutes}`;
        }

        // Format start and end times
        const formattedStartTime = formatTime(startTime);
        const formattedEndTime = formatTime(endTime);

        // Create HTML content
        var htmlContent = `
        <div class="event-border"></div>
        <div class="event-details">

          <div class="event-time">
            <span>${formattedStartTime} - ${formattedEndTime}</span>
          </div>
          <div class="event-title">
            <strong>${eventTitle}</strong>
          </div>
        </div>


      `;

        // Set the innerHTML of the event element to display HTML content
        eventEl.innerHTML = htmlContent;

        eventEl.querySelector(".event-border").style.backgroundColor =
          eventBorderColor;
      },
      events: [
        {
          title: "Meeting 3",
          start: "2024-02-02T10:00:00", // Start date and time in ISO format
          end: "2024-02-02T12:00:00", // End date and time in ISO format
          backgroundColor: "rgba(105, 108, 255, 0.16) ",
          borderColor: "#1C315E",
        //   category: "Accounting",
        },
        {
          title: "Meeting 2",
          start: "2024-02-02T07:00:00",
          end: "2024-02-02T09:30:00",
          backgroundColor: "rgba(105, 108, 255, 0.16) ",
          borderColor: "#1C315E",
        //   category: "Finance",
        },

        {
          title: "Meeting 1",
          start: "2024-02-02T01:00:00",
          end: "2024-02-02T03:30:00",
          backgroundColor: "rgba(105, 108, 255, 0.16) ",
          borderColor: "#1C315E",
        //   category: "IT Support",
        },
        // Add more event objects as needed

        {
            title: "Meeting 3",
            start: "2024-01-31T10:00:00", // Start date and time in ISO format
            end: "2024-01-31T12:00:00", // End date and time in ISO format
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "Accounting",
          },
          {
            title: "Meeting 2",
            start: "2024-01-31T07:00:00",
            end: "2024-01-31T09:30:00",
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "Finance",
          },

          {
            title: "Meeting 1",
            start: "2024-01-31T01:00:00",
            end: "2024-01-31T03:30:00",
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "IT Support",
          },

          {
            title: "Meeting 3",
            start: "2024-02-01T10:00:00", // Start date and time in ISO format
            end: "2024-02-01T12:00:00", // End date and time in ISO format
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "Accounting",
          },
          {
            title: "Meeting 2",
            start: "2024-02-01T07:00:00",
            end: "2024-02-01T09:30:00",
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "Finance",
          },

          {
            title: "Meeting 1",
            start: "2024-02-01T01:00:00",
            end: "2024-02-01T03:30:00",
            backgroundColor: "rgba(105, 108, 255, 0.16) ",
            borderColor: "#1C315E",
          //   category: "IT Support",
          },

      ],
    });
    calendar.render();
  });
  // $('body').on('click','.event-title',function(){
  //  $(this).closest.$('.calendar-overlay').css('display','flex');
  // })

    // // Add click event handler to all .event-title elements
    // $('body').on('click','.event-title',function() {
    // // Find the closest .event-details parent element
    //     $('.event-title').closest('.calendar-overlay').css('display','flex');

    // });
