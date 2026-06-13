function openNav() {
  document.getElementById("mySidenav").style.width = "260px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function escapeHtml(text) {
  var div = document.createElement("div");
  div.textContent = text == null ? "" : text;
  return div.innerHTML;
}

function examLink(url) {
  return url.replace(/\.php$/, ".html");
}

function renderExamNav(exams) {
  var html = exams.map(function (exam) {
    return '<li><a href="exams/' + examLink(exam.url) + '">' + escapeHtml(exam.course_name) + "</a></li>";
  }).join("");
  document.querySelectorAll(".exam-nav").forEach(function (el) {
    el.innerHTML = html;
  });
}

function renderExamButtons(exams) {
  var container = document.getElementById("home-exam-buttons");
  if (!container) return;
  container.innerHTML = exams.map(function (exam) {
    return (
      '<a href="exams/' + examLink(exam.url) + '">' +
      '<div class="btns">' + escapeHtml(exam.course_name) + "</div></a>"
    );
  }).join("");
}

fetch("web-data/home_page.json")
  .then(function (r) { return r.json(); })
  .then(function (data) {
    document.title = data.title + " | Quiz Platform";
    document.getElementById("home-heading").textContent = data.heading;
    document.getElementById("home-subheading").textContent = data.sub_heading1;
    renderExamNav(data.exams);
    renderExamButtons(data.exams);
  })
  .catch(function () {
    document.getElementById("home-heading").textContent = "Quiz Platform";
    document.getElementById("home-subheading").textContent = "Could not load exam data.";
  });
