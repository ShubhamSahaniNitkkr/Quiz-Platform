function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function escapeHtml(text) {
  var div = document.createElement('div');
  div.textContent = text == null ? '' : text;
  return div.innerHTML;
}

function examLink(url) {
  return url.replace(/\.php$/, '.html');
}

function renderExamNav(exams) {
  var html = exams.map(function (exam) {
    return '<li><a href="' + examLink(exam.url) + '">' + escapeHtml(exam.course_name) + '</a></li>';
  }).join('');
  document.querySelectorAll('.exam-nav').forEach(function (el) {
    el.innerHTML = html;
  });
}

function renderAptitudeCards(cards) {
  return cards.map(function (item) {
    return '<div class="card_body">' +
      '<img src="' + item.url + '" alt="">' +
      '<center><p class="sub_headings">' + escapeHtml(item.short_desc) + '</p></center>' +
      '</div>';
  }).join('');
}

function loadExamPage() {
  var jsonPath = document.body.getAttribute('data-exam-json');
  if (!jsonPath) return;

  fetch(jsonPath)
    .then(function (response) { return response.json(); })
    .then(function (data) {
      document.title = data.title + ' | Quiz';
      document.getElementById('exam-heading').innerHTML = escapeHtml(data.heading) + ' <b>' + escapeHtml(data.bold_heading) + '</b>';
      document.getElementById('exam-subheading-1').textContent = data.sub_heading1;
      document.getElementById('exam-subheading-2').textContent = data.sub_heading2;
      document.getElementById('exam-content-heading').textContent = data.content_heading;

      var mobilePic = document.getElementById('exam-mobile-pic');
      mobilePic.src = data.mobile_pic;
      document.getElementById('exam-mobile-pic-xs').src = data.mobile_pic;

      document.getElementById('exam-cards').innerHTML = renderAptitudeCards(data.aptitude || []);
      renderExamNav(data.exams || []);
    })
    .catch(function (err) {
      console.error('Failed to load exam data', err);
    });
}

document.addEventListener('DOMContentLoaded', loadExamPage);
