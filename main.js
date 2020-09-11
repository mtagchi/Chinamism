jQuery(function () {
  const getDay = () => {
    let events = jQuery(".calendar-left");
    events.each((i, e) => {
      let event = jQuery(e);
      let dayHtml = event.find(".calendar-day");
      let date = new Date(event.find(".calendar-date .simcal-event-start-date").attr("content"));
      let day = date.getDay();
      let dayJp = ["日", "月", "火", "水", "木", "金", "土"][day];
      dayHtml.text(`(${dayJp})`);
    })
  }

  if (location.href.indexOf("schedule") > 0) {
    getDay();
  }
});
